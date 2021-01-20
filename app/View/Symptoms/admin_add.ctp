


<?php 
echo $this->Form->create('Symptom', array('type' => 'file'));
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Добавление</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Данные</h3>

          <div class="card-tools">
           <a href="/admin/symptoms" type="button" class="btn btn-tool">
              <i class="fas fa-arrow-left"></i>
            </a>
          </div>
        </div>
        <div class="card-body">
    			
    			<div class="form-group">
    				<label for="inputName">Название ru</label>
    				<input type="text" id="inputName" class="form-control" required="required" name="data[Symptom][title_ru]"  >
    			</div>
          <div class="form-group">
            <label for="inputNameKZ">Название kz</label>
            <input type="text" id="inputNameKZ" class="form-control" required="required" name="data[Symptom][title_kz]"  >
          </div>
          <div class="form-group">
            <label for="inputNameKZ">Специальности</label>
            <?php foreach ($specialists as $key => $item): ?>
                  <div class="checkbox">
                    <label for="<?=$key?>">
                      <input type="checkbox" id="<?=$key?>" name="specialists[]" value="<?= $item['Specialist']['id']?>">
                      <?= $item['Specialist']['title_ru']?>
                    <label>
                  </div>
            <?php endforeach ?>
          </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    
  </div>
  <div class="row">
    <div class="col-12">
     <!--  <a href="#" class="btn btn-secondary">Cancel</a> -->
     <?
	echo $this->Form->button('Добавить', array('class' => 'btn btn-success float-right'));
	?>
     
    </div>
  </div>
</section>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor2' );
</script>