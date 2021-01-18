<div class="title admin_t">
		<h2>Добавление страницы</h2>
	</div>
<?php 

echo $this->Form->create('Page', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('img', array('label' => 'Картинка','type' => 'file' ));
echo $this->Form->input('description', array('label' => 'Описание', 'placeholder' => 'Описание '));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>