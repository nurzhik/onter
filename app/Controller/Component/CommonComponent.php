<?php 

App::uses('Component', 'Controller');

class CommonComponent extends Component {

	public function test(){
		return "Hello";
	}

	public function regionname($value){
        debug($value);die;
        switch ($value) {
		    case 0:
		        echo "i равно 0";
		        break;
		    case 1:
		        echo "i равно 1";
		        break;
		    case 2:
		        echo "i равно 2";
		        break;
		}
    }
}