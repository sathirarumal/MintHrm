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
 <h1 align="center">Update Employee</h1>
<div class="form" align="center">
<?php echo CHtml::beginForm(); ?>
 
    <?php echo CHtml::errorSummary($model); ?>
    
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'fisrt_name'); ?>
        <?php echo CHtml::activeTextField($model,'first_name') ?>
    </div>
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'last_name'); ?>
        <?php echo CHtml::activeTextField($model,'last_name') ?>
    </div>
    <div class="row">
        <?php echo CHtml::activeLabel($model,'email'); ?>
        <?php echo CHtml::activeTextField($model,'email') ?>
    </div>
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'phone_number'); ?>
        <?php echo CHtml::activeTextField($model,'phone_number') ?>
    </div>


    <div class="row submit">
        <?php echo CHtml::submitButton('Update'); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
    </body>
</html>
