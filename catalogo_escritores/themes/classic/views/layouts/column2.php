<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<?php
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'nav nav-pills'),
				));
				?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
	<?php             
        $flashMessages = Yii::app()->user->getFlashes();
        if ($flashMessages) {   
                foreach($flashMessages as $key => $message) {
                        // echo '<div class="flash-' . $key . '" style="color:red; text-align:center">' . $message . "</div>\n";
                                
                        echo "<script language='JavaScript'>
                                        alert('".$message."');
                                        </script>";
                        
                }
        }
                ?>
	<?php $this->endContent(); ?>