<?php 

class Comp extends AppModel{
	public $actsAs = array(
		'Translate' => array(
			'body'
		)
	);
	public $validate = array(
		'body' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите текст'
		),
		'media' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Ошибка загрузки файла',
				'allowEmpty' => true
			),
			// 'mimeType' => array(
			// 	'rule' => array('mimeType', array('image/jpg', 'image/jpeg', 'image/png', 'image/gif')),
			// 	'message' => 'Ошибка загрузки картинки'
			// ),
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '2MB'),
				'message' => 'Максимальный размер файла 2MB'
			),
			'customUploadImg' => array(
				'rule' => 'customUploadImg',
				'message' => 'Ошибка обработки  файла'
			)
		)
	);
	public function customUploadImg($file = array()){
		if(!is_uploaded_file($file['media']['tmp_name'])){
			return false;
		}
		$ext = strtolower(preg_replace("#.+\.([a-z]+)$#", "$1", $file['media']['name']));
		$fileName = $this->genNameFile($ext);
		$path = WWW_ROOT . 'files/comps/' . $fileName;
		
		if(!move_uploaded_file($file['media']['tmp_name'], $path)){
			return false;
		}
		
		$this->data[$this->alias]['media'] = $fileName;
		return true;
	}

	public function genNameFile($ext){
		$name = md5(microtime()) . ".{$ext}";
		if(is_file(WWW_ROOT . 'files/comps/' . $name)){
			$name = $this->genNameFile($ext);
		}
		return $name;
	}
	

}