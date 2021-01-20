<?php 

class SearchController extends AppController{
	public $uses = array('Page', 'Symptom', 'User', 'Album', 'Video', 'Audio');
	public $components = array('Paginator');
	public function index(){
		if(isset($this->request->query['symptom']) && !empty($this->request->query['symptom'])){
			$q = $this->request->query['symptom'];
			// $this->News->locale = 'kz';
			

			
			$symptoms = $this->Symptom->query("SELECT * FROM specialists_symptoms WHERE symptom_id IN ($q)");
			foreach($symptoms as $item){
				$specialists[] = $item['specialists_symptoms']['specialist_id'];
			}
			$specialists = array_unique($specialists);
			$specialists = implode($specialists , ',');

			$q_doctors = $this->Symptom->query("SELECT * FROM specialists_users WHERE specialist_id  IN ($specialists)");
			foreach($q_doctors as $item){
				$doctors_array[] = $item['specialists_users']['user_id'];
			}
			$doctors_array = array_unique($doctors_array);
			// $doctors = $this->User->find('all', array(
			// 	'conditions' => array('User.id' => $doctors_array)
			// ));
			$this->Paginator->settings = array(
				'conditions' => array('User.id' => $doctors_array),
				'limit' => 1,
				
			);
			$q = $this->Paginator->paginate('User');	
			
		

		}else{
			
			$this->Paginator->settings = array(
				'conditions' => array('User.role' => 'doctor'),
				'limit' => 4,
			);
			$q = $this->Paginator->paginate('User');

			
		}

		
		$title_for_layout = __('Поиск');
		$this->set(compact('res', 'title_for_layout', 'q', 'res_count'));
	}

	protected function _unique($array){
		if(is_array($array)){
			foreach ($array as $item) {
				$list[] = $item['i18n']['foreign_key'].$item['i18n']['model'];
			}
			return $list;
		}else{
			return 'Ошибка';
		}
	}
}