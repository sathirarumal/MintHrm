<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of employeeController
 *
 * @author sathi
 */
class employeeController extends CController {
    //put your code here
   
    
    
public function actionMain() {
        $this->render('index');
    }
    

    
    
    
    
public function actionAdd() {
    
    $model=new Employee;
    $msg="insert employee details";
    
    if(isset($_POST['Employee'])){
        
        $model->attributes=$_POST['Employee'];
        
	if($model->save()){
         return $this->refresh();   
        }
	
        else{
            $this->render('add',array(
                    'model'=>$model,'msg'=>$msg,
           ));            
        }        
        
    }else{
    $this->render('add',array(
                    'model'=>$model,'msg'=>$msg,
           )); 
    }
    }
    

    
    
    
    
    
    
    
 public function actionEdit() {
    
    $dataProvider = new CActiveDataProvider('Employee');
    
   
		$this->render('edit',array(
			'dp'=>$dataProvider,
		));
      
    }
    
 public function actionView($id)
	{
               $model=$this->loadModel((int)$id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Employee']))
		{
			$model->attributes=$_POST['Employee'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->employeeID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

    

        
        
        

        
public function actionDelete() {
        
 $dataProvider = new CActiveDataProvider('Employee');
    
   
		$this->render('delete',array(
			'dp'=>$dataProvider,
		));
        
    }
    
public function actionDel($id) {
    
    
    $this->loadModel((int)$id)->delete();
    
    $this->redirect('index.php?r=employee/delete');
 

        
    }    
          
    
    
    

    
    
    
public function loadModel($id)
	{
		$model= Employee::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
    
}
