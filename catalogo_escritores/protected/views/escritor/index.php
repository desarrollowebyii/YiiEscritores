<?php
/* @var $this EscritorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Escritores',
);

$this->menu=array(
	array('label'=>'+Registrar escritor', 'url'=>array('create')),
);
?>

<h2>Escritores registrados <span class="glyphicon glyphicon-list-alt"</span></h2>
<table class="table table-striped">
	<thead>
		<th>Nombre</th>
		<th>Edad</th>
		<th>Número de libros</th>
	</thead>
<?php foreach($escritores as $data){?>
 <tr>
 	<td><?php echo CHtml::link(CHtml::encode($data['nombre']), array('escritor/FiltraLibros', 'id'=>$data['id_escritor']));?><?php echo "&nbsp;"?><?php echo CHtml::link(CHtml::encode($data['apellido_paterno']), array('escritor/FiltraLibros', 'id'=>$data['id_escritor']));?><?php echo "&nbsp;"?><?php echo CHtml::link(CHtml::encode($data['apellido_materno']), array('escritor/FiltraLibros', 'id'=>$data['id_escritor']));?></td> 	
 	<td><?php echo $data['edad']?></td>
 	<td><?php echo $data['numero_libros']?></td>
 	<td><?php echo CHtml::link(CHtml::encode("Opciones"), array('view', 'id'=>$data['id_escritor'])); ?></td>
 </tr>
<?php }  ?>

 </table>


