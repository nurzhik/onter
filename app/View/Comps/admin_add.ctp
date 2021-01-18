<div class="content-up">
	<span class="content-up__heading">Добавление материала</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('Comp', array('type' => 'file'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('media', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('comments', array('label' => 'Комментарий:'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 // CKEDITOR.replace( 'editor' );
</script>
</div>