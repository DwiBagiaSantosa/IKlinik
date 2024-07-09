<?php
/* @var $this TindakanPasienController */
/* @var $data TindakanPasien */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendaftaran_id')); ?>:</b>
	<?php echo CHtml::encode($data->pendaftaran_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindakan_id')); ?>:</b>
	<?php echo CHtml::encode($data->tindakan_id); ?>
	<br />


</div>