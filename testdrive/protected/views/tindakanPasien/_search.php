<?php
/* @var $this TindakanPasienController */
/* @var $model TindakanPasien */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendaftaran_id'); ?>
		<?php echo $form->textField($model,'pendaftaran_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindakan_id'); ?>
		<?php echo $form->textField($model,'tindakan_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->