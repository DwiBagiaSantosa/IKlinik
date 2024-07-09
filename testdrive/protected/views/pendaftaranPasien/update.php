<?php
/* @var $this PendaftaranPasienController */
/* @var $model PendaftaranPasien */

$this->breadcrumbs=array(
	'Pendaftaran Pasiens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PendaftaranPasien', 'url'=>array('index')),
	array('label'=>'Create PendaftaranPasien', 'url'=>array('create')),
	array('label'=>'View PendaftaranPasien', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PendaftaranPasien', 'url'=>array('admin')),
);
?>

<h1>Update PendaftaranPasien <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>