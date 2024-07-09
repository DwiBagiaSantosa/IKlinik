<?php
/* @var $this TindakanPasienController */
/* @var $model TindakanPasien */

$this->breadcrumbs=array(
	'Tindakan Pasiens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TindakanPasien', 'url'=>array('index')),
	array('label'=>'Create TindakanPasien', 'url'=>array('create')),
	array('label'=>'View TindakanPasien', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TindakanPasien', 'url'=>array('admin')),
);
?>

<h1>Update TindakanPasien <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>