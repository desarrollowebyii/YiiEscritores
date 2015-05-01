<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/favicon.png">
  </head>
  <body>

<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Mi Catálogo WEB</a>

      <div class="nav-collapse collapse pull-right">
        
        <?php $this->widget('zii.widgets.CMenu',array(
      'htmlOptions'=>array('class'=>"nav"),
      'items'=>array(
        array('label'=>'Escritores', 'url'=>array('/escritor/index')),
        array('label'=>'Libros', 'url'=>array('/libro/index')),
        array('label'=>'Géneros', 'url'=>array('/genero/index')),
        //array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
        //array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    )); ?>

      </div><!--/.nav-collapse -->

    </div>
  </div>
</div>
<div class="container">
  <div class="row-fluid">
    <div class="span12">
<?php if(isset($this->breadcrumbs) and $this->breadcrumbs!==array()):?>
    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
      'htmlOptions'=>array("style"=>"margin: 15px 0"),
      'links'=>$this->breadcrumbs,
    )); ?><!-- breadcrumbs -->
  <?php endif?>
<?php echo $content;?>
</div>
</div>
</div>
  
<footer class="footer bg-ft clearfix pd4">
    <div class="container">
        <!--footer container-->
        <div class="row-fluid">
            <div class="span3">
                <section>
                    <h4><span>Contáctame</span></h4>
                    <p>Jorge Hernández Moreno<br>
                        Puebla, México<br>
                        <strong>Móvil:</strong> <a href="tel:123456789" class="tele">(222)8156436</a><br>
                        <span class="overflow"><strong>email:</strong> <a href="mailto:jorgehm77@hotmail.com">jorgehm77@hotmail.com</a></span> </p>
                </section>
                <!--close section-->

                <section>
                    <h4><span>Redes Sociales</span></h4>
                    <div class="social">
                      <a href="https://www.linkedin.com/profile/view?id=201703537"><i class="icon-linkedin linkedin"></i></a>
                    </div>
                </section>
                <!--close section-->
            </div>
            <!-- close .span3 -->

           
</footer>


 <section class="footer-credits">
    <div class="container">
        <ul class="clearfix">
            <li>© 2015 Jorge Hernández Moreno. Todos los derechos reservados.</li>
        </ul>
    </div>
    <!--close footer-credits container-->
</section>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
