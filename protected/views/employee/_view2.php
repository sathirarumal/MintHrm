

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employeeID), array('del', 'id'=>$data->employeeID)); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('phone_numer')); ?>:</b>
	<?php echo CHtml::encode($data->phone_number); ?>
	<br />

	

</div>