<?php
/* @var $this PendaftaranPasienController */
/* @var $model PendaftaranPasien */

$this->breadcrumbs=array(
	'Pendaftaran Pasiens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PendaftaranPasien', 'url'=>array('index')),
	array('label'=>'Manage PendaftaranPasien', 'url'=>array('admin')),
);
?>

<h1>Create PendaftaranPasien</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>