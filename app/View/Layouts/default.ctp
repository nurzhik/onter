<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/css/admin/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="/css/admin/ionicons.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="/css/admin/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/css/admin/adminlte.min.css">
	<link rel="stylesheet" href="/js/admin/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<?php
		echo $this->Html->meta('icon');
		if(isset($login) && !empty($login)){
			// echo $this->Html->css(array('cake.generic'));
		}

		echo $this->Html->script(array('ckeditor/ckeditor', 'admin/admin_script', 'admin/jquery.imgareaselect'));
		echo $this->fetch('meta');
	?>
</head>
<?php if(isset($login) && !empty($login)): ?>
	<body class="hold-transition sidebar-mini layout-fixed">
	    <!-- Site wrapper -->
	    <div class="wrapper">
	      <!-- Navbar -->
	      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
	        <!-- Left navbar links -->
	        <ul class="navbar-nav">
	          <li class="nav-item">
	            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
	          </li>
	          <li class="nav-item d-none d-sm-inline-block">
	            <a href="/" class="nav-link">Перейти на сайт</a>
	          </li>
	         
	        </ul>

	       
	        
	      </nav>
	      <!-- /.navbar -->

	      <!-- Main Sidebar Container -->
	    <aside class="main-sidebar sidebar-dark-primary elevation-4" >
       
        <a href="/" class="brand-link">
          <img src="/img/admin_img/admin_logo.svg"
               alt="AdminLTE Logo"
               class="brand-image "
              >
   
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="/img/admin_img/technical-support.svg" class="img-circle " alt="User Image">
            </div>
            <div class="info">
              <div class="d-block" style="color:#fff"><?php echo $adminname['User']['username']?></div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="/admin/settings" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                   Главная страница
                  </p>
                </a>
              </li>  
            	<li class="nav-item">
                <a href="/admin/maps" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                   Карта
                  </p>
                </a>
              </li>  
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    О компании
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/admin/pages" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> О компании </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/teams" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>РУКОВОДСТВО </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/docs" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Документы</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/shapes" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Формы </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/vacancies" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ВАКАНСИИ </p>
                    </a>
                  </li>
                  
                  
                </ul>
              </li>
              
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Переход из КСК в ОСИ
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/admin/pages" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> СОЗДАНИЕ ОСИ/ПТ</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/infographics" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ИНФОГРАФИКИ </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/videos" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Видео</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/npas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>НПА </p>
                    </a>
                  </li>
                 
                  
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="/admin/projects" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Проекты
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/news" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Новости 
                  </p>
                </a>
              </li>
            
            
              <li class="nav-item">
                <a href="/admin/branches" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Дочерние организации
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/pages" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Страницы
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/partners" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Партнеры
                  </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="/admin/slides" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                     Слайды 
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Нормативно-правовая база
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/admin/npabases" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Категории</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/npadocs" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Документы </p>
                    </a>
                  </li>
                 
                 
                  
                  
                </ul>
              </li>
              <li class="nav-item">
                  <a href="/users/logout" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                       Выход
                    </p>
                  </a>
                </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

	      <!-- Content Wrapper. Contains page content -->
	      <div class="content-wrapper">
	        <!-- Content Header (Page header) -->
	        <!-- Main content -->
	        <section class="content">
	            <?php echo $this->Session->flash('good'); ?>
      				<?php echo $this->Session->flash('bad'); ?>
      				<?php echo $this->fetch('content'); ?>
	        </section>
	        <!-- /.content -->
	      </div>
	      <!-- /.content-wrapper -->

	      <footer class="main-footer">
	       
	        <strong>Разработка сайтов в   <a href="https://astanacreative.kz/">AstanaCreative.kz</a>.</strong> 
	      </footer>

	    </div>
	    <!-- ./wrapper -->

	    <!-- jQuery -->
	    <script src="/js/admin/jquery/jquery.min.js"></script>
	    <!-- Bootstrap 4 -->
	    <script src="/js/admin/bootstrap/js/bootstrap.bundle.min.js"></script>
	    <!-- overlayScrollbars -->
	    <script src="/js/admin/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	    <!-- AdminLTE App -->
	    <script src="/js/admin/adminlte.min.js"></script>
	    <script src="/js/admin/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	    <!-- AdminLTE for demo purposes -->
	    <script src="/js/admin/inputmask/min/jquery.inputmask.bundle.min.js"></script>
		<!-- date-range-picker -->
		<script src="/js/admin/moment/moment-with-locales.min.js"></script>
		<script src="/js/admin/daterangepicker/daterangepicker.js"></script>
		<script src="/js/admin/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	    <script src="/js/admin/demo.js"></script>
	    <script type="text/javascript">
			$(document).ready(function () {
			  bsCustomFileInput.init();
			});
			$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
		    //Datemask2 mm/dd/yyyy
		    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
		    //Money Euro
		    $('[data-mask]').inputmask()

		    //Date range picker
		   $('#reservationdate').datetimepicker({
        format: 'YYYY-MM-DD',
    locale: 'ru'

    });
		</script>
	</body>

<?php else: ?>
	
	<div class="login-page">
		<div class="form">
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
<?php endif ?>

</html>
