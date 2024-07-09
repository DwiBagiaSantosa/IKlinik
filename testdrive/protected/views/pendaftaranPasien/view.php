<?php
/* @var $this PendaftaranPasienController */
/* @var $model PendaftaranPasien */

$this->breadcrumbs=array(
	'Pendaftaran Pasiens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PendaftaranPasien', 'url'=>array('index')),
	array('label'=>'Create PendaftaranPasien', 'url'=>array('create')),
	array('label'=>'Update PendaftaranPasien', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PendaftaranPasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PendaftaranPasien', 'url'=>array('admin')),
);
?>

<h1>View PendaftaranPasien #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pasien_id',
		'tanggal',
	),
)); ?>
