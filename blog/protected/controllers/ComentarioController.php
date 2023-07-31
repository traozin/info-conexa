<?php

class ComentarioController extends Controller
{
    //create a new comment
    public function actionCreate()
    {
        $idPost = (int) (isset($_POST['idPost']) ? $_POST['idPost'] : die('ERROR: missing ID.'));

        $api = Yii::app()->ApiComponent->getApi();

        $result = $api->get('/posts/' . $idPost);
        $data = json_decode($result->response);

        $author = isset($_POST['author']) ? $_POST['author'] : null;
        $comment = isset($_POST['comment']) ? $_POST['comment'] : null;

        $newComment = [
            'author' => $author,
            'body' => $comment
        ];

        $data->comments[] = $newComment;

        $api->put('/posts/' . $idPost, json_encode($data));
        $this->redirect('index.php?r=post/view&id=' . $idPost);
    }
}