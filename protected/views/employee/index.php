<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main1.css">
        <title></title>
    </head>
    <body>
       
        <div id="mainmenu1">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Add employee', 'url'=>array('/employee/add')),
				array('label'=>'Update employee', 'url'=>array('/employee/edit')),
				array('label'=>'Delete employee', 'url'=>array('/employee/delete')),
				
			),
		)); ?>
	</div>
        
    </body>
</html>
