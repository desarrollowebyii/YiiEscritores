<?php
/* @var $this LibroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Libros',
);

$this->menu=array(
	array('label'=>'+Registrar libro', 'url'=>array('create')),
);
?>

<h2>Libros registrados</h2>
<table class="table table-striped">
	<thead>
		<th>Titulo</th>
		<th>Número de páginas</th>
		<th>Autor/Escritor</th>
	</thead>
<?php foreach($libros as $data){?>
 <tr>
 	<td><?php echo $data['titulo']?></td> 	
 	<td><?php echo $data['noPaginas']?></td>
 	<td><?php echo $data['nombre']?><?php echo "&nbsp;"?><?php echo $data['apellido_paterno']?><?php echo "&nbsp;"?><?php echo $data['apellido_materno']?></td>
 	<td><?php echo CHtml::link(CHtml::encode("Opciones"), array('libro/view', 'id'=>$data['id_libro'])); ?></td>
 </tr>
<?php }  ?>

 </table>
