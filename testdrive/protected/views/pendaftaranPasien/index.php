<?php
/* @var $this PendaftaranPasienController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pendaftaran Pasiens',
);

$this->menu=array(
	array('label'=>'Create PendaftaranPasien', 'url'=>array('create')),
	array('label'=>'Manage PendaftaranPasien', 'url'=>array('admin')),
);
?>

<h1>Pendaftaran Pasiens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
