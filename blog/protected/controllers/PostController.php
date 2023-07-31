<?php
class PostController extends Controller
{
	public function actionNovo()
	{
		$this->render('newPost');
	}
	public function actionView()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$api = Yii::app()->ApiComponent->getApi();

		$result = $api->get('/posts/' . $id);
		$data = json_decode($result->response);
		$this->render('index', [
			'data' => $data
		]);
	}

	public function actionListPosts()
	{
		$api = Yii::app()->ApiComponent->getApi();

		$result = $api->get('/posts');
		$data = json_decode($result->response);
		$this->render('listPosts', [
			'data' => $data
		]);
	}

	public function actionCreate()
	{
		$api = Yii::app()->ApiComponent->getApi();

		$title = isset($_POST['title']) ? $_POST['title'] : null;
		$author = isset($_POST['author']) ? $_POST['author'] : null;
		$category = isset($_POST['category']) ? $_POST['category'] : null;
		$body = isset($_POST['body']) ? $_POST['body'] : null;

		$newPost = [
			'title' => $title,
			'author' => $author,
			'category' => $category,
			'body' => $body
		];

		$api->post('/posts', json_encode($newPost));
		$this->redirect('index.php?r=post/listPosts');
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