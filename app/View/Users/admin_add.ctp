<div class="title admin_t">Добавление пользователя</div>

<div class="model_info">
<?php 
echo $this->Form->create('User', array('type' => 'file'));
//echo $this->Form->input('img', array('label' => '', 'type' => 'file'));
echo $this->Form->input('username', array('label' => 'Логин'));
echo $this->Form->input('password', array('label' => 'Пароль:'));
echo $this->Form->input('password_repeat', array('label' => 'Повторите пароль:'));?>
<div class="input select">
	<label for="UserCityId">Город:</label>
	<select name="data[User][city_id]" id="UserCityId">
		<option value="0">-</option>
		<?php foreach($city_list as $k => $v):?>
			<option value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>
<div class="input select">
	<label for="UserCategoryId">Категория:</label>
	<select name="data[User][category_id]" id="UserCategoryId">
		<option value="0">-</option>
		<?php foreach($category_list as $k => $v):?>
			<option value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>
<?php
//echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type'=>'file'));
echo $this->Form->input('title', array('label' => 'Название компании:'));
echo $this->Form->input('meta_title', array('label' => 'Мета title:'));
echo $this->Form->input('h1', array('label' => 'h1:'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
echo $this->Form->input('description', array('label' => 'Мета описание:'));
echo $this->Form->input('phone', array('label' => 'Телефон:'));
echo $this->Form->input('address', array('label' => 'Адрес:'));
echo $this->Form->input('map', array('label' => 'Карта:'));
echo $this->Form->input('email', array('label' => 'e-mail:'));
echo $this->Form->input('vk', array('label' => 'vk:'));
echo $this->Form->input('instagram', array('label' => 'instagram:'));
echo $this->Form->input('about', array('label' => 'О компании:'));
echo $this->Form->input('conditions', array('label' => 'Условия:'));


?>
</div>
<?
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>