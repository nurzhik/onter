<?php

class SymptomsController extends AppController{
	public $uses = array('Symptom', 'Specialist');
	public function admin_index(){
		
		$data = $this->Symptom->find('all', array(
			'order' => array('id' => 'desc')
		));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		$specialists = $this->Specialist->find('all');
		if($this->request->is('post')){
			$this->Symptom->create();

			$data = $this->request->data['Symptom'];
			
			if($this->Symptom->save($data)){
				$id = $this->Symptom->getLastInsertId();

				$specialists = $this->request->data['specialists'];
				if(isset($specialists)){
					for($i=0;$i<=count($specialists)-1;$i++){
						$specialists_insert = "INSERT INTO `specialists_symptoms` (specialist_id,symptom_id) VALUES(".$specialists[$i].",".$id.") ";
						$sql = $this->Symptom->query($specialists_insert);
					}
				}

				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$this->set(compact('id', 'specialists'));
	}
	public function admin_edit($id){
		
		if(is_null($id) || !(int)$id || !$this->Symptom->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Symptom->findById($id);
		$specialists = $this->Specialist->find('all');
		if($this->request->is(array('post', 'put'))){
			$this->Symptom->id = $id;
			$data1 = $this->request->data['Symptom'];

				if(isset($this->request->data['specialists'])){
					$specialists = $this->request->data['specialists'];
					$this->Symptom->query("DELETE FROM `specialists_symptoms` WHERE `symptom_id`=$id");
					for($i=0;$i<=count($specialists)-1;$i++){
						$specialists_insert = "INSERT INTO `specialists_symptoms` (specialist_id,symptom_id) VALUES(".$specialists[$i].",".$id.") ";
						$sql = $this->Symptom->query($specialists_insert);
					}
				}

		
			if($this->Symptom->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data','specialists'));
		}
	}

	public function admin_delete($id){
		if (!$this->Symptom->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Symptom->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		$this->Symptom->locale = Configure::read('Config.language');
		$title_for_layout = 'Новости';
		$order = array('Symptom.date DESC');
		$paginator = array();
		$paginator['per_page'] = 9;
		$paginator['current_page'] = isset($_GET['page']) ? $_GET['page'] : 1;
		$paginator['offset'] = ($paginator['current_page'] * $paginator['per_page']) - $paginator['per_page'];
		$paginator['link'] = (isset($_GET['cat'])) ? '?cat='.(int)$_GET['cat'].'&page=' : '?page=';
		$paginator['count'] = $this->Symptom->find('count') - 1;
		$paginator['count_pages'] = ceil($paginator['count'] / $paginator['per_page']);
		$paginator['start'] = '';
		$paginator['end'] = '';
		$paginator['prev'] = '';
		$paginator['next'] = '';


		if($paginator['current_page'] != 1 && $paginator['current_page'] != 2) {
			$paginator['start'] = 1;
		}
		if($paginator['current_page'] != 1 ) {
			$paginator['prev'] = $paginator['current_page'] - 1;
		}
		if($paginator['current_page'] != $paginator['count_pages'] ) {
			$paginator['next'] = $paginator['current_page'] + 1;
		}
		if($paginator['current_page'] != $paginator['count_pages'] && $paginator['current_page'] != $paginator['count_pages']-1) {
			$paginator['end'] = $paginator['count_pages'];
		}
		$data = $this->Symptom->find('all', array(
			'conditions' => array('Symptom.type ' => 'symptom'),
			'order' => array('Symptom.date DESC, Symptom.id DESC'),
			'offset' => $paginator['offset'],
			'limit' => $paginator['per_page'],
		));
		$this->set(compact('data', 'title_for_layout','paginator'));
	}
	

	public function view($id){
		$this->Symptom->locale = Configure::read('Config.language');
		$data = $this->Symptom->findById($id);
	
		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}

		$other_symptom = $this->Symptom->find('all', array(
			'conditions' => array(array('Symptom.type' => $data['Symptom']['type']),array('Symptom.id !=' => $id)),
			'order' => array('Symptom.date' => 'desc'),
			'limit' => 6,
		));
		$title_for_layout = $data['Symptom']['title'];
		$meta['keywords'] = $data['Symptom']['keywords'];
		$meta['description'] = $data['Symptom']['description'];

		$this->set(compact('data', 'title_for_layout', 'other_symptom', 'meta'));
	}

	
}