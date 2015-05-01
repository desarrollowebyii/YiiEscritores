<?php

class EscritorController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	
public $layout='//layouts/column2';
	/**
	 * @return array action filters
	 */
	// public function filters()
	// {
	// 	return array(
	// 		'accessControl', // perform access control for CRUD operations
	// 		'postOnly + delete', // we only allow deletion via POST request
	// 	);
	// }

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	// public function accessRules()
	// {
	// 	return array(
	// 		array('allow',  // allow all users to perform 'index' and 'view' actions
	// 			'actions'=>array('index','view'),
	// 			'users'=>array('*'),
	// 		),
	// 		array('allow', // allow authenticated user to perform 'create' and 'update' actions
	// 			'actions'=>array('create','update'),
	// 			'users'=>array('@'),
	// 		),
	// 		array('allow', // allow admin user to perform 'admin' and 'delete' actions
	// 			'actions'=>array('admin','delete'),
	// 			'users'=>array('admin'),
	// 		),
	// 		array('deny',  // deny all users
	// 			'users'=>array('*'),
	// 		),
	// 	);
	// }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Escritor;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Escritor']))
		{
			$model->attributes=$_POST['Escritor'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_escritor));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Escritor']))
		{
			$model->attributes=$_POST['Escritor'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_escritor));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		
       try{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}
	catch (CDbException $e) {
                        
                        Yii::app()->user->setFlash('error', "Existen libros asociados a este escritor, debe primero eliminarlos para posteriormente eliminar el escritor.");
                                
                        $this->redirect(array('index'));
                        
}
}
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		
		$sql = "SELECT e.id_escritor,e.nombre, e.apellido_paterno, e.apellido_materno, e.edad, count(l.id_libro) as numero_libros FROM escritor e LEFT JOIN libro l on l.id_escritor=e.id_escritor GROUP BY e.id_escritor";
	    $escritores = Yii::app()->db->createCommand($sql)->queryAll();
        $this->render('index',array('escritores'=>$escritores));

        
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Escritor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Escritor']))
			$model->attributes=$_GET['Escritor'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionFiltraLibros($id)
	{
		$escritor=$id;
		$sql = "SELECT l.id_libro,l.titulo, l.noPaginas, g.id_genero, g.nombreGenero FROM libro as l, genero as g WHERE l.id_genero=g.id_genero and id_escritor=$escritor ORDER BY id_genero ASC, nombreGenero ASC, titulo ASC";
	    $libros = Yii::app()->db->createCommand($sql)->queryAll($id);
        $this->render('libroEscritor',array('libros'=>$libros,'model'=>$this->loadModel($id)));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Escritor the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Escritor::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Escritor $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='escritor-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
