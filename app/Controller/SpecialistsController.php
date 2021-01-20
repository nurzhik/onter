<?php

class SpecialistsController extends AppController{
	public function admin_index(){
		
		$data = $this->Specialist->find('all', array(
			'order' => array('id' => 'desc')
		));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		
		if($this->request->is('post')){
			$this->Specialist->create();

		
			$data = $this->request->data['Specialist'];

		
			
			
			if($this->Specialist->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}
	public function admin_edit($id){
		
		if(is_null($id) || !(int)$id || !$this->Specialist->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Specialist->findById($id);
		
		if($this->request->is(array('post', 'put'))){
			$this->Specialist->id = $id;
			$data1 = $this->request->data['Specialist'];
			
		
			if($this->Specialist->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data'));
		}
	}

	public function admin_delete($id){
		if (!$this->Specialist->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Specialist->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		$this->Specialist->locale = Configure::read('Config.language');
		$title_for_layout = 'Новости';
		$order = array('Specialist.date DESC');
		$paginator = array();
		$paginator['per_page'] = 9;
		$paginator['current_page'] = isset($_GET['page']) ? $_GET['page'] : 1;
		$paginator['offset'] = ($paginator['current_page'] * $paginator['per_page']) - $paginator['per_page'];
		$paginator['link'] = (isset($_GET['cat'])) ? '?cat='.(int)$_GET['cat'].'&page=' : '?page=';
		$paginator['count'] = $this->Specialist->find('count') - 1;
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
		$data = $this->Specialist->find('all', array(
			'conditions' => array('Specialist.type ' => 'specialist'),
			'order' => array('Specialist.date DESC, Specialist.id DESC'),
			'offset' => $paginator['offset'],
			'limit' => $paginator['per_page'],
		));
		$this->set(compact('data', 'title_for_layout','paginator'));
	}
	

	public function view($id){
		$this->Specialist->locale = Configure::read('Config.language');
		$data = $this->Specialist->findById($id);
	
		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}

		$other_specialist = $this->Specialist->find('all', array(
			'conditions' => array(array('Specialist.type' => $data['Specialist']['type']),array('Specialist.id !=' => $id)),
			'order' => array('Specialist.date' => 'desc'),
			'limit' => 6,
		));
		$title_for_layout = $data['Specialist']['title'];
		$meta['keywords'] = $data['Specialist']['keywords'];
		$meta['description'] = $data['Specialist']['description'];

		$this->set(compact('data', 'title_for_layout', 'other_specialist', 'meta'));
	}

	
}