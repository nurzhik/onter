<div class="title admin_t">Редактирование пользователя</div>

<div class="model_info">
<?php 
echo $this->Form->create('User', array('type' => 'file'));
//echo $this->Form->input('img', array('label' => '', 'type' => 'file'));
echo $this->Form->input('username', array('label' => 'Логин'));
echo $this->Form->input('email', array('label' => 'Почта'));

?>
</div>
<?
echo $this->Form->end('Редактировать');
?>
<a href="/admin/users/pswedit/<?=$id?>">Изменить пароль</a>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>