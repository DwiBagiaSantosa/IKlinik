<?php
/* @var $this TindakanPasienController */
/* @var $model TindakanPasien */

$this->breadcrumbs=array(
	'Tindakan Pasiens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TindakanPasien', 'url'=>array('index')),
	array('label'=>'Create TindakanPasien', 'url'=>array('create')),
	array('label'=>'Update TindakanPasien', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TindakanPasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TindakanPasien', 'url'=>array('admin')),
);
?>

<h1>View TindakanPasien #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pendaftaran_id',
		'tindakan_id',
	),
)); ?>
