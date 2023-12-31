<?php

class SiteController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$api = Yii::app()->ApiComponent->getApi();

		$result = $api->get('/posts');
		$data = json_decode($result->response);
		$this->render('index', [
			'data' => $data
		]);
	}

	// Uncomment the following methods and override them if needed
	/*
			 public function filters()
			 {
				 // return the filter configuration for this controller, e.g.:
				 return array(
					 'inlineFilterName',
					 array(
						 'class'=>'path.to.FilterClass',
						 'propertyName'=>'propertyValue',
					 ),
				 );
			 }

			 public function actions()
			 {
				 // return external action classes, e.g.:
				 return array(
					 'action1'=>'path.to.ActionClass',
					 'action2'=>array(
						 'class'=>'path.to.AnotherActionClass',
						 'propertyName'=>'propertyValue',
					 ),
				 );
			 }
			 */
}