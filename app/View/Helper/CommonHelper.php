<?php 
App::uses('AppHelper', 'View/Helper');
class CommonHelper extends AppHelper {

	public function get_day($date){
		$date = explode("-", $date);
		return $date[2];
	}
	public function beauty_date($date){
		$date = explode("-", $date);
		switch ($date[1]) {
			case 1: $date[1] = __('январь'); break;
			case 2: $date[1] = __('февраль'); break;
			case 3: $date[1] = __('март'); break;
			case 4:	$date[1] = __('апрель'); break;
			case 5: $date[1] = __('май'); break;
			case 6: $date[1] = __('июнь'); break;
			case 7: $date[1] = __('июль'); break;
			case 8: $date[1] = __('август'); break;
			case 9: $date[1] = __('сентябрь'); break; 
			case 10: $date[1] = __('октябрь'); break;
			case 11: $date[1] = __('ноябрь'); break;
			case 12: $date[1] = __('декабрь'); break;
			default: break;
		}
		return  $date[1] ;
	}

	public function regionname($value){
		switch ($value) {
		    case 'akmola':
		        echo __('Акмолинская область');
		        break;
		    case 'aktobe':
		        echo  __('Актюбинская область');
		        break;
	         case 'almaty':
		        echo __('Алматинская область');
		        break;
	         case 'atiray':
		        echo __('Атырауская область');
		        break;
	          case 'vko':
		        echo __('Восточно-Казахстанская  область');
		        break;
	         case 'zhambyl':
		        echo __('Жамбылская область');
		        break;
	         case 'zko':
		        echo __('Западно-Казахстанская область');
		        break;
	         case 'karaganda':
		        echo __('Карагандинская область');
		        break;
	         case 'kostanai':
		        echo __('Костанайская область');
		        break;
	         case 'kyzylorda':
		        echo __('Кызылординская область');
		        break;
	         case 'mangistay':
		        echo __('Мангистауская область');
		        break;
	         case 'pavlodar':
		        echo __('Павлодарская область');
		        break;
	         case 'sko':
		        echo __('Северо-Казахстанская область');
		        break;
	         case 'turkestan':
		        echo __('Туркестанская область');
		        break;
		        case 'nursultan':
		        echo __('Нур-Султан');
		        break;
		        case 'almaty_city':
		        echo __('Алматы');
		        break;
		        case 'shymkent':
		        echo __('Шымкент');
		        break;
		}
	}
	public function get_month_and_year($date){
		$date = explode("-", $date);
		
		return $date[1] .", ". $date[0];
	}

	public function get_element($id) {
    	App::import("Model", "Comp");  
		$model = new Comp();
		$model->locale = Configure::read('Config.language');
		$data = $model->findById($id);
		// debug($data);
		if($data){
			if($data['Comp']['body']){
				return $data['Comp']['body'];
			}else{
				return $data[0]['Comp__i18n_body'];
			}
			
		}else{
			$model->locale = 'ru';
			$data = $model->findById($id);
			if($data['Comp']['body']){
				return $data['Comp']['body'];
			}else{
				return $data[0]['Comp__i18n_body'];
			}
		}
		
    }

    public function get_anketa($user_id,$name) {
    	// debug($user_id);die;
    	App::import("Model", "UsersField");  
		$model = new UsersField();
		// $model->locale = Configure::read('Config.language');
		$data = $model->find('first', array(
			'conditions' => array('UsersField.user_id' => $user_id, 'UsersField.name' => $name)
		));			
		//debug($data);die;
		if($data){
			
				return $data['UsersField']['value'];
			
			
		}else{
			
				return '';
			
		}
		
    }


    public function get_month($date){
		$date = explode("-", $date);
		switch ($date[1]) {
			case 1: $date[1] = __('янв'); break;
			case 2: $date[1] = __('фев'); break;
			case 3: $date[1] = __('мар'); break;
			case 4:	$date[1] = __('апр'); break;
			case 5: $date[1] = __('май'); break;
			case 6: $date[1] = __('июн'); break;
			case 7: $date[1] = __('июл'); break;
			case 8: $date[1] = __('авг'); break;
			case 9: $date[1] = __('сен'); break; 
			case 10: $date[1] = __('окт'); break;
			case 11: $date[1] = __('ноя'); break;
			case 12: $date[1] = __('дек'); break;
			default: break;
		}
		return $date[2] . " " . $date[1] ." ". $date[0];
	}
	

}

