<?php
App::uses('CakeEmail', 'Network/Email');

class PagesController extends AppController {

	public $uses = array('Page','News','Symptom');
	public function admin_welcome(){
		
	}
	public function admin_index(){
		$this->Page->locale = array('en', 'kz');
		$this->Page->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Page->find('all');

		$title_for_layout = 'Pages';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function index($page_alias = null){
		$this->Page->locale = Configure::read('Config.language');
		$this->Faq->locale = Configure::read('Config.language');
		$this->Doc->locale = Configure::read('Config.language');
		$this->Team->locale = Configure::read('Config.language');
		if(is_null($page_alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		$faqs = $this->Faq->find('all', array(
			'order' => array('Faq.id' => 'desc')
		));
		$slides = $this->Slide->find('all', array(
			'order' => array('Slide.id' => 'desc')
		));
		$docs = $this->Doc->find('all', array(
			'order' => array('Doc.id' => 'desc')
		));
		$teams = $this->Team->find('all', array(
			'order' => array('Team.id' => 'desc')
		));
		$page = $this->Page->findByAlias($page_alias);
		if(!$page){
			throw new NotFoundException("Такой страницы нету");
		}
		
		$title_for_layout = $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];
		$this->set(compact('page_alias', 'page', 'title_for_layout', 'meta','faqs','docs','slides','teams'));
	}

	
	public function home(){
			
		$this->News->locale = Configure::read('Config.language');
		$news = $this->News->find('all');
		$symptoms = $this->Symptom->find('all', array(
			'limit' => 6,
		));
	
		$title_for_layout ='Главная';
		$this->set(compact('title_for_layout' ,'symptoms','news'));
	}
	public function about(){
			
		$this->Page->locale = Configure::read('Config.language');
		$this->Team->locale = Configure::read('Config.language');
		$this->Doc->locale = Configure::read('Config.language');
		$this->Vacancy->locale = Configure::read('Config.language');
		$page = $this->Page->findById(20);
		$directors = $this->Team->find('all', array(
			'conditions' => array('Team.type_id ' => 1),
			'order' => array('Team.sort_order' => 'desc'),
		));
		$leadership = $this->Team->find('all', array(
			'conditions' => array('Team.type_id ' => 2),
			'order' => array('Team.sort_order' => 'desc'),
		));
		$reports = $this->Doc->find('all', array(
			'conditions' => array('Doc.type_id ' => 1),
			'order' => array('Doc.id' => 'desc'),
		));
		$information = $this->Doc->find('all', array(
			'conditions' => array('Doc.type_id ' => 2),
			'order' => array('Doc.id' => 'desc'),
		));
		$plan = $this->Doc->find('all', array(
			'conditions' => array('Doc.type_id ' => 3),
			'order' => array('Doc.id' => 'desc'),
		));
		$vacancy = $this->Vacancy->find('all', array(
			'order' => array('Vacancy.id' => 'desc'),
		));
		$title_for_layout ='О нас';
		$this->set(compact('title_for_layout' ,'page','directors','leadership','projects','branches','partners','reports','information','plan','vacancy'));
	}

	public function registration_page(){
			
		
		
		$title_for_layout ='Регистраиця';
		$this->set(compact('title_for_layout' ,'page','infographics','videos','npas','branches','partners','reports','information','plan','vacancy'));
	}

	public function contacts(){
		
		$title_for_layout = 'Контакты';
		$slides = $this->Slide->find('all');
		$partners = $this->Partner->find('all');
		
		$data = $this->Setting->findById(1);
		// $meta['keywords'] = $page['Page']['keywords'];
		// $meta['description'] = $page['Page']['description'];
		$this->set(compact('title_for_layout', 'meta','slides','new','featured','partners','data'));
	}
	
	
	public function admin_add(){

		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Page->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Page->locale = 'en';
		}else{
			$this->Page->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->Page->create();
			//Создаем alias

			$slug = Inflector::slug(mb_strtolower($this->request->data['Page']['title']), '-');
			$data[] = $this->request->data['Page'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);
			
			if(!$data['img']['name']){
			 	unset($data['img']);
			}
			//Проверка на уникальность alias	
			$check_alias = $this->Page->findByAlias($data['alias']);
			if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");

			if($this->Page->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Page->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Page->locale = 'en';
		}else{
			$this->Page->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->Page->exists($id)){
			throw new NotFoundException('Not found...');
		}
		$data = $this->Page->findById($id);
		if(!$id){
			throw new NotFoundException('Not found...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Page->id = $id;
			$data1 = $this->request->data['Page'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Page->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Editing material';
			$this->set(compact('id', 'data', 'title_for_layout'));
		}
	}

	public function contactus(){

		if( !empty($this->request->data) ){
			$email = new CakeEmail('smtp');
			$email->from(array('info@uxui.kz' => 'Usability Lab'))
			->to('info@uxui.kz')
			->subject('New letter');
			$message = 'Name: '. $this->request->data['Page']['name'] . ' Телефон: '. $this->request->data['Page']['phone'];
			if( $email->send($message) ){
				$this->Session->setFlash('Письмо успешно отправлено', 'default', array(), 'good');
				//unset($message);
				// return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка!', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
		}
	}
	public function callback(){
		if($this->request->is(array('post', 'put'))){
			$data = $this->request->data;
				// debug(1234);
				// die;
			// $email = new CakeEmail('smtp');
			// $email->from(array('st-kotel.kz@yandex.ru' => 'realklimat.kz'))
			// // ->to('nurzhananuarbek@mail.ru')
			// ->to('nurzhananuarbek@mail.ru')
			// ->subject('realklimat.kz');
			
			// $message = "<p>Заявка</p>";
			// if(isset($_POST['name']) && !empty($_POST['name'])){
			// 	$message .= "<p>ФИО: " . $_POST['name'] . "</p>";
			// }
			// if(isset($_POST['phone']) && !empty($_POST['phone'])){
			// 	$message .= "<p>Телефон: " . $_POST['phone'] . "</p>";
			// }
			// if(isset($_POST['email']) && !empty($_POST['email'])){
			// 	$message .= "<p>Почта: " . $_POST['email'] . "</p>";
			// }
		
			// if(isset($_POST['body']) && !empty($_POST['body'])){
			// 	$message .= "<p>Текст: " . $_POST['body'] . "</p>";
			// }
		
			// // debug($message);die;
			// $email->viewVars(array('content' => $message));
			// $email->template('welcome','default');
			// $email->emailFormat('html');
			$query = "INSERT INTO callbacks (name, phone,email,body) VALUES('".$data['name']."','".$data['phone']."','".$data['email']."','".$data['body']."')";
			$this->Callback->query($query);
			$this->bitrix($data['name'], $data['phone'],$data['email'],$data['body']);
			$this->Session->setFlash('Спасибо за заявку', 'default', array(), 'good');
					return $this->redirect("/");
			// if($email->send($message) ){
			// 		$this->Session->setFlash('Спасибо за заявку', 'default', array(), 'good');
			// 		// $_SESSION['Message']['test'] = '123';
			// 		return $this->redirect("/?status=1");
			// }else{
			// 	$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
				
			// }
		}
	}

	
}
