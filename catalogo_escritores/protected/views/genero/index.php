<?php
/* @var $this GeneroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Generos',
);

$this->menu=array(
	array('label'=>'+Registrar género', 'url'=>array('create')),
);
?>

<h2>Géneros registrados <span class="glyphicon glyphicon-list-alt"</span></h2>
<table class="table table-striped">
	<thead>
		<th>Nombre</th>
	</thead>
<?php foreach($generos as $data){?>
 <tr>
 	<td><?php echo $data['nombreGenero']?></td>
 	<td><?php echo CHtml::link(CHtml::encode('Opciones'), array('view', 'id'=>$data['id_genero'])); ?></td>
 </tr>
<?php }  ?>

 </table>
