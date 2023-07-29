<?php
require('../blog/protected/vendor/tcdent/php-restclient/restclient.php');

class PostController extends Controller
{
	private function getApi()
	{
		$api = new RestClient([
			'base_url' => 'https://my-json-server.typicode.com/traozin/db-conexa',
			'headers' => [
				'Accept' => 'application/json',
				'Content-Type' => 'application/json'
			]
		]);
		return $api;
	}

	public function actionIndex()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$api = $this->getApi();

		$result = $api->get('/posts/' . $id);
		$data = json_decode($result->response);
		$this->render('index', [
			'data' => $data
		]);
	}

	public function actionListPosts()
	{
		$api = $this->getApi();

		$result = $api->get('/posts');
		$data = json_decode($result->response);
		$this->render('listPosts', [
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