<?php

class CompsController extends AppController{

	public $components = array('Paginator');

	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }


	public function admin_index(){
		
		$data = $this->Comp->find('all', array(
			'order' => array('Comp.id' => 'desc')
			));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		
		if($this->request->is('post')){
			$this->Comp->create();
			$data = $this->request->data['Comp'];

			if(!$data['media']['name']){
			 	unset($data['media']);
			}
			if($this->Comp->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Добавление материала';
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Comp->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		

		$data = $this->Comp->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Comp->id = $id;
			$data1 = $this->request->data['Comp'];

			$data1['id'] = $id;
			
			if(!$data1['media']['name']){
			 	unset($data1['media']);
			}
			if($this->Comp->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
				
				
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if($this->request->is('post')){
			$this->request->data = $data1;
			$data = $data1;
		}else{
			$this->Comp->locale = $this->request->query;
			$data = $this->request->data = $this->Comp->read(null, $id);
		}

		$this->set(compact('id', 'data'));

	}

	public function admin_delete($id){
		if (!$this->Comp->exists($id)) {
			throw new NotFoundException('Такой статьи нет');
		}
		if($this->Comp->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}
	
}