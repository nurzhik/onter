<?php

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel{
	// public $belongsTo = array(
	// 	'Category'=>array(
	// 		'className' => 'Category'
	// 	),
	// 	'City' => array(
	//            'className'  => 'City',
	//            // 'joinTable' => 'cities_categories',
	// //   //           // 'conditions' => array('Recipe.approved' => '1'),
	// //   //           // 'order'      => 'Recipe.created DESC'
	//         ),
	// );
	// public $hasMany = array(
	//         'Ad' => array(
	//             'className'  => 'Ad',
	//         ),
	//     );
	 // public $hasMany = array(
  //   'UsersField' => array(
  //       'className' => 'UsersField',
  //       'foreignKey' => 'user_id',
  //       )
  //   );
	public $validate = array(
		'img' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Ошибка загрузки картинки',
				'allowEmpty' => true
			),
			'mimeType' => array(
				'rule' => array('mimeType', array('image/jpg', 'image/jpeg', 'image/png', 'image/gif')),
				'message' => 'Ошибка загрузки картинки'
			),
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '2MB'),
				'message' => 'Максимальный размер картинки 2MB'
			),
			'customUploadImg' => array(
				'rule' => 'customUploadImg',
				'message' => 'Ошибка обработки обработки картинки'
			)
		),
		'doc' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Ошибка загрузки файла',
				'allowEmpty' => true
			),
			
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '4MB'),
				'message' => 'Максимальный размер документа 4MB'
			),
			'customUploadDoc' => array(
				'rule' => 'customUploadDoc',
				'message' => 'Ошибка обработки обработки документа'
			)
		),
		'username' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Введите логин'
	        ),
		
		'password' =>  array(
	        'length' => array(
	            'rule'      => array('between', 6, 40),
	            'message'   => 'Your password must be between 6 and 40 characters.',
	            'on'        => 'create',  // we only need this validation on create
	        ),
	    ),
	    'password_repeat' => array(
	        'compare' => array(
	            'rule'    => array('validate_passwords'),
	            'message' => 'Please confirm the password',
	        ),
	    ),
	);

	public function validate_passwords() { //password match check
	    return $this->data[$this->alias]['password'] === $this->data[$this->alias]['password_repeat'];
	}

	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $passwordHasher = new BlowfishPasswordHasher();
	        $this->data[$this->alias]['password'] = $passwordHasher->hash(
	            $this->data[$this->alias]['password']
	        );
	    }
	    return true;
	}
	public function beforeValidate($options = array()) {
	    if(!isset($this->data['User']['img']['name']) || empty($this->data['User']['img']['name'])){
	    	unset($this->data['User']['img']);
	    }
	    if(!isset($this->data['User']['doc']['name']) || empty($this->data['User']['doc']['name'])){
	    	unset($this->data['User']['doc']);
	    }
	    //unset($this->data['User']['img']);
	    return true;
	}
	public function customUploadImg($file = array()){
		if(!is_uploaded_file($file['img']['tmp_name'])){
			return false;
		}
		$ext = strtolower(preg_replace("#.+\.([a-z]+)$#", "$1", $file['img']['name']));
		$fileName = $this->genNameFile($ext);
		$path = WWW_ROOT . 'img/users/' . $fileName;
		$path_th = WWW_ROOT . 'img/users/thumbs/' . $fileName;
		if(!move_uploaded_file($file['img']['tmp_name'], $path)){
			return false;
		}
		$this->resizeImg($path, $path_th, 213, 250, $ext);
		$this->data[$this->alias]['img'] = $fileName;
		return true;
	}
	public function customUploadDoc($file = array()){
		if(!is_uploaded_file($file['doc']['tmp_name'])){
			return false;
		}
		$ext = strtolower(preg_replace("#.+\.([a-z]+)$#", "$1", $file['doc']['name']));
		$fileName = $this->genNameFileDoc($ext);
		$path = WWW_ROOT . 'files/users/' . $fileName;
		//$path_th = WWW_ROOT . 'files/events/thumbs/' . $fileName;
		if(!move_uploaded_file($file['doc']['tmp_name'], $path)){
			return false;
		}
		// $this->resizeImg($path, $path_th, 440, 400, $ext);
		$this->data[$this->alias]['doc'] = $fileName;
		return true;
	}
	public function genNameFile($ext){
		$name = md5(microtime()) . ".{$ext}";
		if(is_file(WWW_ROOT . 'img/users/' . $name)){
			$name = $this->genNameFile($ext);
		}
		return $name;
	}
	public function genNameFileDoc($ext){
		$name = md5(microtime()) . ".{$ext}";
		if(is_file(WWW_ROOT . 'files/users/' . $name)){
			$name = $this->genNameFileDoc($ext);
		}
		return $name;
	}
	public function resizeImg($target, $dest, $wmax = 647, $hmax = 647, $ext){
		/*
		$target - путь к оригинальному файлу
		$dest - путь сохранения обработанного файла
		$wmax - максимальная ширина
		$hmax - максимальная высота
		$ext - расширение файла
		*/
		list($w_orig, $h_orig) = getimagesize($target);
		$ratio = $w_orig / $h_orig; // =1 - квадрат, <1 - альбомная, >1 - книжная

		if(($wmax / $hmax) > $ratio){
			$wmax = $hmax * $ratio;
		}else{
			$hmax = $wmax / $ratio;
		}
		
		$img = "";
		// imagecreatefromjpeg | imagecreatefromgif | imagecreatefrompng
		switch($ext){
			case("gif"):
				$img = imagecreatefromgif($target);
				break;
			case("png"):
				$img = imagecreatefrompng($target);
				break;
			default:
				$img = imagecreatefromjpeg($target);    
		}
		$newImg = imagecreatetruecolor($wmax, $hmax); // создаем оболочку для новой картинки
		
		if($ext == "png"){
			imagesavealpha($newImg, true); // сохранение альфа канала
			$transPng = imagecolorallocatealpha($newImg,0,0,0,127); // добавляем прозрачность
			imagefill($newImg, 0, 0, $transPng); // заливка  
		}
		
		imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig, $h_orig); // копируем и ресайзим изображение
		switch($ext){
			case("gif"):
				imagegif($newImg, $dest);
				break;
			case("png"):
				imagepng($newImg, $dest);
				break;
			default:
				imagejpeg($newImg, $dest);    
		}
		imagedestroy($newImg);
	}

}