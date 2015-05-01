<?php
/* @var $this EscritorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Escritores'=>array('index'),
	'Libros por escritor',
);

$this->menu=array(
	array('label'=>'+Registrar libro', 'url'=>array('libro/create')),
);
?>

<h2>Lista de libros de: <?php echo $model->nombre; ?><?php echo "&nbsp;"?><?php echo $model->apellido_paterno; ?><?php echo "&nbsp;"?><?php echo $model->apellido_materno; ?></h2>
<?php $idgenero=0;?>
<?php foreach($libros as $data){?>
<?php if ($data['id_genero']>$idgenero) {?>	
<table class="table table-striped">
	<thead>
<h3><?php echo $data['nombreGenero'] ?></h3>
		<th>Titulo</th>
		<th>No. de páginas</th>
	</thead>
 <?php $idgenero=$data['id_genero']; }  ?>
 <table class="table table-striped">
 	<thead>
 <th>           </th>
 <th>           </th>
 <tr> 	
 </thead>
 	<td><?php echo $data['titulo']?></td>
 	<td><?php echo $data['noPaginas']?></td>
	<td><?php echo CHtml::link(CHtml::encode('Opciones'), array('libro/view', 'id'=>$data['id_libro'])); ?></td>
 </tr>


 </table>
 <?php }?>