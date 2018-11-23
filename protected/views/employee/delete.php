<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Employee Delete</h1>
        <h3>If you want Delete click the EmployeeID</h3>
<div class="delete">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dp,
	'itemView'=>'_view2',
)); ?>
</div>
       
    </body>
</html>
