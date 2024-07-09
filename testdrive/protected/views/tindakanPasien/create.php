<?php
/* @var $this TindakanPasienController */
/* @var $model TindakanPasien */

$this->breadcrumbs=array(
	'Tindakan Pasiens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TindakanPasien', 'url'=>array('index')),
	array('label'=>'Manage TindakanPasien', 'url'=>array('admin')),
);
?>

<h1>Create TindakanPasien</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>