<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - MASTER';
$this->breadcrumbs=array(
	'MASTER',
);
?>
<h1>MASTER CRUD</h1>

<?php echo CHtml::link('CRUD Wilayah', array('wilayah/index')); ?><br>
<?php echo CHtml::link('CRUD User', array('user/index')); ?><br>
<?php echo CHtml::link('CRUD Pegawai', array('pegawai/index')); ?><br>
<?php echo CHtml::link('CRUD Tindakan', array('tindakan/index')); ?><br>
<?php echo CHtml::link('CRUD Obat', array('obat/index')); ?><br>