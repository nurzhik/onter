<?php
App::uses('CakeEmail', 'Network/Email');
class UsersController extends AppController{

	public $uses = array('User', 'Basket');

	public function beforeFilter(){
		parent::beforeFilter();
		// $this->layout = 'index';
	 	$this->Auth->allow('cabinet');
	 }
	public function admin_index(){
		
		
		$data = $this->User->find('all', array(
			'order' => array('id' => 'desc')
		));
		$this->set(compact('data'));
	}

	public function admin_login(){
		if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Session->setFlash('Неверный логин или пароль.', 'default', array(), 'bad');
	    }
	}

	public function admin_logout(){

		return $this->redirect($this->Auth->logout());
	}
	
	public function forgetpwd($number = null){
		$email = new CakeEmail('smtp');
		if(isset($number) && !empty($number)){
			$user = $this->User->find('first', array(
				'conditions' => array('User.forgetpwd' => $number),
				'recursive' => -1
			));
			
			$user = $user['User'];
			$username = $user['username'];
			unset($user['password']);
			$rand = rand(100000, 999999);

			$email->from(array('info@aritmology.kz' => 'aritmology.kz'))
			->to($username)
			->subject('Сброс пароля');
			$message = "<p>Ваш новый пароль: " . $rand . "</p>";
			$email->viewVars(array('content' => $message));
			$email->template('welcome','default');
			$email->emailFormat('html');

			$user['password'] = $rand;
			
			// if(empty($user['img']['name']) || !$user['img']['name']){
			// 	unset($user['img']);
			// }
			// $data = array('password' => $rand);
			// debug($user);
			// die;
			if($this->User->save($user) && $email->send($message)){
				$this->Session->setFlash('Новый пароль отправлен Вам на почту', 'default', array(), 'good');
				// debug($data);
				// return $this->redirect("/users/cabinet");
				return $this->redirect("/users/login");
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
			// debug($user);

		}

		if($this->request->is(array('post', 'put'))){
			$username = $this->request->data['User']['username'];
			$q = $this->User->find('first', array(
				'conditions' => array('User.username' => $username)
			));
			if(empty($q)){
				$this->Session->setFlash('Данная почта не зарегистрирована', 'default', array(), 'bad');
				return $this->redirect('/users/forgetpwd');
			}else{
				$username = $q['User']['username'];
				
				$forgetpwd = rand(100000, 999999);
				
				// if(empty($q['img']['name']) || !$q['img']['name']){
				// 	unset($q['img']);
				// }
				// $this->data['User']['id'] = $q['User']['id'];
				// $this->data['User']['forgetpwd'] = $forgetpwd;
				// $this->User->save($this->data['User']);
		         $update = $this->User->query("UPDATE users SET forgetpwd='{$forgetpwd}' WHERE username='{$username}'");


		  //       $email->from(array('info@aritmology.kz' => 'Восстановление пароля'))
				// ->to($username)
				// ->subject('Новые письмо с сайта');
				// $message = 'Для восстановления пароля перейдите по ссылке: https://qoiandy.kz/users/forgetpwd/'. $forgetpwd;

				$email->from(array('info@aritmology.kz' => 'aritmology.kz'))
				->to($username)
				->subject('Восстановление пароля');
				$message = "<p>Для восстановления пароля перейдите по ссылке: <a href='https://aritmology.kz/users/forgetpwd/".$forgetpwd ."'>https://aritmology.kz/users/forgetpwd</a></p>";
				$email->viewVars(array('content' => $message));
				$email->template('welcome','default');
				$email->emailFormat('html');

				if($email->send($message)){
					$this->Session->setFlash('На указанный E-mail отправлено письмо', 'default', array(), 'good');
					// debug($data);
					
				}else{
					$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
				}
		        // $update = $this->User->query("UPDATE users SET password='{$hash}' WHERE username='{$email}'");
		      
			}
			
			
		}
		$this->set(compact('q'));
	}
	
	public function login(){
		if($this->Auth->user()){
			$lang = $this->Auth->locale = Configure::read('Config.language');
			if($this->Auth->user('role') == 'user'){
				return $this->redirect('/'.$lang.'/users/cabinet');
			}elseif($this->Auth->user('role') == 'doctor') {
				return $this->redirect('/'.$lang.'/users/doccabinet');
			}else{
				return $this->redirect('/admin');

			}
		}
		if($this->request->is('post')){
			$lang = $this->Auth->locale = Configure::read('Config.language');
			if($this->Auth->login()){
				if($this->Auth->user('role') == 'user'){
				return $this->redirect('/'.$lang.'/users/cabinet');
			}elseif($this->Auth->user('role') == 'doctor') {
				return $this->redirect('/'.$lang.'/users/doccabinet');
			}
				
			}else{
				$this->Session->setFlash('Ошибка авторизации', 'default', array(), 'bad');
			}
		}
	}

	public function edit($id){
		// if(is_null($id) || !(int)$id || !$this->User->exists($id)){
		// 	throw new NotFoundException('Такой страницы нет...');
		// }
		if(!$this->Auth->user()){
			return $this->redirect($this->Auth->redirectUrl());
		}
		$id = $this->Auth->user();
		$data = $this->User->findById($id['id']);
		// if(!$id){
		// 	throw new NotFoundException('Такой страницы нет...');
		// }
		if($this->request->is(array('post', 'put'))){
			$this->User->id = $id;
			$data1 = $this->request->data['User'];
			unset($data1['password']);
			unset($data1['password_repeat']);
			
			if($this->User->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
			$this->set(compact('id', 'data'));
		
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
		}
	}

	public function logout(){
		return $this->redirect($this->Auth->logout());
	}

	public function activation($number = null){
		$this->autoRender = false;
		$lang = $this->Auth->locale = Configure::read('Config.language');
		debug($lang);
		if(isset($number) && !empty($number)){
			$user = $this->User->find('first', array(
				'conditions' => array('User.forgetpwd' => $number),
				'recursive' => -1
			));
			debug($user);
		//	update
			if($number == $user['User']['forgetpwd']){
				$update = $this->User->query("UPDATE users SET active='activate' WHERE forgetpwd='{$number}'");
				$this->Session->setFlash('Вы успешно активировали аккаунт', 'default', array(), 'good');
				sleep(2);
				debug($update);die;
				return $this->redirect("/users/cabinet");
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
				debug('Error 1');die;
				return $this->redirect("/users/login");
			}
			// redirect
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			debug('Error');die;
			return $this->redirect("/".$lang."/users/login");
		}
	}

	public function docregistration(){
		// $emailActivation = new CakeEmail('smtp');
		// if($this->Auth->user()){
		// 	return $this->redirect('/users/cabinet');
		// }

		if($this->request->is('post')){

			$this->User->create();
			$data = $this->request->data['User'];
			$data2 = $this->request->data['UserFields'];
			
			$username = $data['username'];
			$check_username = $this->User->find('first', array(
				'conditions' => array('User.username' => $username)
			));
			if(isset($data['img']['name']) && !$data['img']['name']){
			 	unset($data['img']);
			}
			if(isset($data['doc']['name']) && !$data['doc']['name']){
			 	unset($data['doc']);
			}

			// $username = $data['active'][''];
			$rand = rand(100000, 999999);
			$data['forgetpwd']= $rand;
			$data['active'] = 'deactivate';
			$data['role'] = 'doctor';
 			// $emailActivation->from(array('info@aritmology.kz' => 'aritmology.kz'))
				// ->to($username)
				// ->subject('Активация E-mail адреса');
				// $messageACtivation = "<p>Для активации  перейдите по ссылке: <a href='https://aritmology.kz/users/activation/".$rand."'>https://aritmology.kz/users/activation</a></p>";
				// $emailActivation->viewVars(array('content' => $messageACtivation));
				// $emailActivation->template('welcome','default');
				// $emailActivation->emailFormat('html');
			//&& $emailActivation->send($messageACtivation)

			if(empty($check_username)){
				// && $email->send($message
				// debug($data);
				
				if($this->User->save($data)){
					$user_id = $this->User->getLastInsertID();
				
					foreach($data2 as $key => $v){
					
						// $name = $data['name'];
						// $value = $data['value'];
						
						$this->User->query("INSERT INTO users_fields (user_id,name,value) VALUES($user_id,'". $key ."','". $v ."')");
						//Обновление данных нижний код
						// $selectVar = "SELECT * FROM `users_fields`  WHERE `user_id` = $user_id AND `name`  LIKE '". $key ."'";
						
						// $select = $this->User->query($selectVar);
						// if($select){
						// 	// $this->User->query("UPDATE  users_fields SET `name`  = '". $key ."' , `value` = '". $v . "' WHERE `users_fields`.`user_id` = $user_id  ");
						// 	$eee = "UPDATE  `users_fields` SET `value` = '". $v . "' WHERE `users_fields`.`user_id` = $user_id AND `users_fields`.`name` = '". $key ."' ";
						// 	$this->User->query($eee);
						// 	// debug('123');
						// }else{
							
						// }
					}
					$this->Session->setFlash('Вы успешно зарегистрировались! Подтвердите почту, письмо отправлено Вам на почту', 'default', array(), 'good');
					// debug($data);
					//return $this->redirect("/users/cabinet");
				}else{
					$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
				}
			}else{
				$this->Session->setFlash('Данный E-mail уже зарегистрирован.', 'default', array(), 'bad');
				//return $this->redirect($this->referer());
			}
		}
		$title_for_layout = __('Регистрация');
		$this->set(compact('title_for_layout'));
	}
	public function registration(){
		

		if($this->request->is('post')){

			$this->User->create();
			$data = $this->request->data['User'];
			
			
			$username = $data['username'];
			$check_username = $this->User->find('first', array(
				'conditions' => array('User.username' => $username)
			));
			if(isset($data['img']['name']) && !$data['img']['name']){
			 	unset($data['img']);
			}
			

			// $username = $data['active'][''];
			$rand = rand(100000, 999999);
			$data['forgetpwd']= $rand;
			$data['active'] = 'deactivate';
 			// $emailActivation->from(array('info@aritmology.kz' => 'aritmology.kz'))
				// ->to($username)
				// ->subject('Активация E-mail адреса');
				// $messageACtivation = "<p>Для активации  перейдите по ссылке: <a href='https://aritmology.kz/users/activation/".$rand."'>https://aritmology.kz/users/activation</a></p>";
				// $emailActivation->viewVars(array('content' => $messageACtivation));
				// $emailActivation->template('welcome','default');
				// $emailActivation->emailFormat('html');
			//&& $emailActivation->send($messageACtivation)

			if(empty($check_username)){
				// && $email->send($message
				
				if($this->User->save($data)){
					
					$this->Session->setFlash('Вы успешно зарегистрировались! Подтвердите почту, письмо отправлено Вам на почту', 'default', array(), 'good');
					// debug($data);
					$this->Auth->logout();
					//return $this->redirect("/users/cabinet");
				}else{
					$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
				}
			}else{
				$this->Session->setFlash('Данный E-mail уже зарегистрирован.', 'default', array(), 'bad');
				//return $this->redirect($this->referer());
			}
		}
		$title_for_layout = __('Регистрация');
		$this->set(compact('title_for_layout'));
	}
	public function admin_add(){
		if($this->request->is('post')){
			// debug($this->request->data);
			$this->User->create();
			$data = $this->request->data['User'];
			$username = $data['username'];
			$check_username = $this->User->find('first', array(
				'conditions' => array('User.username' => $username)
			));
			//debug($data);
			if(empty($check_username)){
				if($this->User->save($data)){
					$this->Session->setFlash('Ползователь удачно добавлен.', 'default', array(), 'good');
					// debug($data);
					return $this->redirect("/admin/users");
				}else{
					$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
					$this->redirect('/admin/users/add');
				}
			}else{
				$this->Session->setFlash('Данный E-mail уже зарегистрирован.', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
			
		}
		$title_for_layout = 'Добавление пользователя';
		//$category_list = $this->User->Category->find('list');
		
		
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->User->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->User->findById($id);
		$user_id = $id;
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->User->id = $id;
			$data1 = $this->request->data['User'];
			unset($data1['password']);
			unset($data1['password_repeat']);
			
			if(empty($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			$data2 = $this->request->data;
			
			if($this->User->save($data1) ){

				foreach($data2 as $key => $v){
					//debug($key);die;
					// $name = $data['name'];
					// $value = $data['value'];
					$selectVar = "SELECT * FROM `users_fields`  WHERE `user_id` = $user_id AND `name`  LIKE '". $key ."'";
					//debug($selectVar);
					$select = $this->User->query($selectVar);
					
					if($select){
						// $this->User->query("UPDATE  users_fields SET `name`  = '". $key ."' , `value` = '". $v . "' WHERE `users_fields`.`user_id` = $user_id  ");
						$eee = "UPDATE  `users_fields` SET `value` = '". $v . "' WHERE `users_fields`.`user_id` = $user_id AND `users_fields`.`name` = '". $key ."' ";
						$this->User->query($eee);
						
						
					}
				}
				$this->Session->setFlash('Операция выполнена успешно!', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$this->set(compact('id', 'data', 'category_list','user_id', 'city_list', 'title_for_layout'));
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Редактирование';
			//$category_list = $this->User->Category->find('list');
			
		}
	}

	public function admin_user($id){
		if(is_null($id) || !(int)$id || !$this->User->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->User->findById($id);
		$user_id = $id;
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->User->id = $id;
			$data1 = $this->request->data['User'];
			unset($data1['password']);
			unset($data1['password_repeat']);
			
			if(empty($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			$data2 = $this->request->data;
			
			if($this->User->save($data1) ){

				foreach($data2 as $key => $v){
					//debug($key);die;
					// $name = $data['name'];
					// $value = $data['value'];
					$selectVar = "SELECT * FROM `users_fields`  WHERE `user_id` = $user_id AND `name`  LIKE '". $key ."'";
					//debug($selectVar);
					$select = $this->User->query($selectVar);
					
					if($select){
						// $this->User->query("UPDATE  users_fields SET `name`  = '". $key ."' , `value` = '". $v . "' WHERE `users_fields`.`user_id` = $user_id  ");
						$eee = "UPDATE  `users_fields` SET `value` = '". $v . "' WHERE `users_fields`.`user_id` = $user_id AND `users_fields`.`name` = '". $key ."' ";
						$this->User->query($eee);
						
						
					}
				}
				$this->Session->setFlash('Операция выполнена успешно!', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$this->set(compact('id', 'data', 'category_list','user_id', 'city_list', 'title_for_layout'));
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Редактирование';
			//$category_list = $this->User->Category->find('list');
			
		}
	}

	public function admin_pswedit($id){
		if(is_null($id) || !(int)$id || !$this->User->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->User->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->User->id = $id;
			$data1 = $this->request->data['User'];
			if(empty($data1['password']) || !$data1['password']){
				unset($data1['password']);
			}
			if(empty($data1['password_repeat']) || !$data1['password_repeat']){
				unset($data1['password_repeat']);
			}
			
			if(empty($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->User->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Редактирование пароля';
			//$category_list = $this->User->Category->find('list');
			
			// debug($category_list);
			$this->set(compact('id', 'data',  'city_list', 'title_for_layout'));
		}
	}
	
	public function isActive() {

	}

	public function cabinet(){

		if(!$this->Auth->user() ){
			$lang = $this->Auth->locale = Configure::read('Config.language');
			return $this->redirect('/'.$lang.'/users/login');
		}
		
		$data = $this->Auth->user();
		$id = $data['id'];
		$user_id = $data['id'];
		$data = $this->User->find('first', array(
			'conditions' => array('User.id' => $id),
			'recursive' => -1));
		

		// if( $data['User']['active'] == 'deactivate'){
		// 	$this->Session->setFlash('Активируйте свой логин на почте!!!', 'default', array(), 'good');
			// return $this->redirect('/'.$lang.'/users/cabinet');
		// }

		
		if($this->request->is(array('post', 'put'))){
			$this->User->id = $id;
			$data1 = $this->request->data['User'];
			if(empty($data1['password']) || !$data1['password']){
				unset($data1['password']);
				unset($data1['password_repeat']);
			}
			if(empty($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			if($this->User->save($data1) ){

				$this->Session->setFlash('Операция выполнена успешно!', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Личный кабинет';
			$this->set(compact('id', 'data', 'user_id','title_for_layout', 'member_type'));
		}


	}
	public function doccabinet(){

		if(!$this->Auth->user() ){
			$lang = $this->Auth->locale = Configure::read('Config.language');
			return $this->redirect('/'.$lang.'/users/login');
		}
		
		$data = $this->Auth->user();
		$id = $data['id'];
		$user_id = $data['id'];
		$data = $this->User->find('first', array(
			'conditions' => array('User.id' => $id),
			'recursive' => -1));
		

		// if( $data['User']['active'] == 'deactivate'){
		// 	$this->Session->setFlash('Активируйте свой логин на почте!!!', 'default', array(), 'good');
			// return $this->redirect('/'.$lang.'/users/cabinet');
		// }

		
		if($this->request->is(array('post', 'put'))){
			$this->User->id = $id;
			$data1 = $this->request->data['User'];
			if(empty($data1['password']) || !$data1['password']){
				unset($data1['password']);
				unset($data1['password_repeat']);
			}
			if(empty($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			if($this->User->save($data1) ){

				$this->Session->setFlash('Операция выполнена успешно!', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Личный кабинет';
			$this->set(compact('id', 'data', 'user_id','title_for_layout', 'member_type'));
		}


	}
	public function editdoccabinet(){

		if(!$this->Auth->user() ){
			$lang = $this->Auth->locale = Configure::read('Config.language');
			return $this->redirect('/'.$lang.'/users/login');
		}
		
		$data = $this->Auth->user();
		$id = $data['id'];
		$user_id = $data['id'];
		$data = $this->User->find('first', array(
			'conditions' => array('User.id' => $id),
			'recursive' => -1));
		

		// if( $data['User']['active'] == 'deactivate'){
		// 	$this->Session->setFlash('Активируйте свой логин на почте!!!', 'default', array(), 'good');
			// return $this->redirect('/'.$lang.'/users/cabinet');
		// }

		
		if($this->request->is(array('post', 'put'))){
			$this->User->id = $id;
			$data1 = $this->request->data['User'];
			if(empty($data1['password']) || !$data1['password']){
				unset($data1['password']);
				unset($data1['password_repeat']);
			}
			if(empty($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			$data2 = $this->request->data;
			if($this->User->save($data1) ){
				foreach($data2 as $key => $v){
					// $name = $data['name'];
					// $value = $data['value'];
					$selectVar = "SELECT * FROM `users_fields`  WHERE `user_id` = $user_id AND `name`  LIKE '". $key ."'";
					//debug($selectVar);
					$select = $this->User->query($selectVar);
					
					if($select){
						// $this->User->query("UPDATE  users_fields SET `name`  = '". $key ."' , `value` = '". $v . "' WHERE `users_fields`.`user_id` = $user_id  ");
						$eee = "UPDATE  `users_fields` SET `value` = '". $v . "' WHERE `users_fields`.`user_id` = $user_id AND `users_fields`.`name` = '". $key ."' ";
						$this->User->query($eee);
						
						
					}
				}
				$this->Session->setFlash('Операция выполнена успешно!', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Личный кабинет';
			$this->set(compact('id', 'data', 'user_id','title_for_layout', 'member_type'));
		}


	}
	public function anketa(){
		if(!$this->Auth->user() ){
			$lang = $this->Auth->locale = Configure::read('Config.language');
			return $this->redirect('/'.$lang.'/users/login');
		}
		
			$data_user = $this->Auth->user();
			$user_id = $data_user['id'];

		if($this->request->is('post')){
			//$this->User->create();
			$data = $this->request->data;
			//debug($data);die;

			
			
			//$this->set(compact('title_for_layout', 'news',  'paginator'));
			
		}

		// $data_ifno = $this->User->query("SELECT  *  FROM users_fields WHERE user_id = $user_id ");
		// debug($data_ifno);
		$this->set(compact('user_id', 'title_for_layout'));
	}

	public function catalog(){
		if(!$this->Auth->user()){
			return $this->redirect('/users/login');
		}

		$data = $this->Auth->user();
		$id = $data['id'];
		// $data = $this->User->find('first', array(
		// 	'conditions' => array('User.id' => $id),
		// 'recursive' => -1));
		$products = $this->User->Product->find('all', array(
			'conditions' => array('Product.user_id' => $id),
			'recursive'=>-1
			));
		// debug($id);
		$title_for_layout = 'Каталог';
		$this->set(compact('products', 'title_for_layout', 'data'));
	}

	public function test_email(){
		$this->autoRender = false;
		$emailActivation = new CakeEmail('smtp');
		
		    #$emailActivation->from(array('info@aritmology.kz' => 'Регистрация'))
			$emailActivation->from(array('info@aritmology.kz' => 'aritmology.kz'))
			// ->to('orb.effect@mail.ru')
			->to('nuraly.smagulov@yandex.kz')
			// ->to('info@aritmology.kz')
			->subject('Активация E-mail адреса');
		$messageACtivation = "<p>Для активации  перейдите по ссылке: <a href='https://aritmology.kz/users/activation/1234'>https://aritmology.kz/users/activation1</a></p>";
		$emailActivation->viewVars(array('content' => $messageACtivation));
		$emailActivation->template('welcome','default');
		$emailActivation->emailFormat('html');
		if($emailActivation->send($messageACtivation)){
			debug('OK');
		}else{
			debug('ERROR');
		}

	}

	public function send_activation_email(){
		$this->autoRender = false;
		$data = $this->Auth->user();
		$id = $data['id'];

		$emailActivation = new CakeEmail('smtp');
		

			
		// debug($data);die;
		$username = $data['username'];
		$check_username = $this->User->find('first', array(
			'conditions' => array('User.username' => $username)
		));
	
		$rand = rand(100000, 999999);
		$update = $this->User->query("UPDATE users SET forgetpwd='{$rand}' WHERE username='{$username}'");

		// $data['forgetpwd']= $rand;
		
		$emailActivation->from(array('info@aritmology.kz' => 'aritmology.kz'))
		->to($username)
		->subject('Активация почты');
		$messageACtivation = "<p>Для активации перейдите по ссылке: <a href='https://aritmology.kz/users/activation/".$rand."'>https://aritmology.kz/users/activation</a></p>";
		$emailActivation->viewVars(array('content' => $messageACtivation));
		$emailActivation->template('welcome','default');
		$emailActivation->emailFormat('html');

		if( $emailActivation->send($messageACtivation)){
			// $this->Session->setFlash('Письмо успешно отправлено на вашу почту', 'default', array(), 'good');
			echo 'Письмо успешно отправлено на вашу почту, активируйте его';
			echo "<br>";
			echo "<a href='/users/cabinet'>Перейти на сайт</a>";
			
			// return $this->redirect('/');
		}else{
			$this->Session->setFlash('Ошибка при активации.', 'default', array(), 'bad');
			// return $this->redirect($this->referer());
		}
		
		$title_for_layout = __('Активация');
		$this->set(compact('title_for_layout'));
	}

}