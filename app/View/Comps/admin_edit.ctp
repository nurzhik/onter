<div class="content-up">
	<span class="content-up__heading">Редактирование материала</span>
</div>
<div class="add-part">
<?php
echo $this->Form->create('Comp', array('type' => 'file'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'ru'){
	echo $this->Form->input('comments', array('label' => 'Комментарий:'));
	echo $this->Form->input('media', array('label' => 'Изображение:', 'type' => 'file'));
}
?>
<div class="edit_bot">
	<div class="bot_r">
	<?
	echo $this->Form->input('id');
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
<script type="text/javascript">
	 // CKEDITOR.replace( 'editor' );
</script>
</div>