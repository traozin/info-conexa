<?php
require('../blog/protected/vendor/tcdent/php-restclient/restclient.php');

class ComentarioController extends Controller
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

    //create a new comment
    public function actionCreate()
    {
        $idPost = (int) (isset($_POST['idPost']) ? $_POST['idPost'] : die('ERROR: missing ID.'));

        $api = $this->getApi();

        $result = $api->get('/posts/' . $idPost);
        $data = json_decode($result->response);

        $author = isset($_POST['author']) ? $_POST['author'] : null;
        $comment = isset($_POST['comment']) ? $_POST['comment'] : null;

        $newComment = [
            'author' => $author,
            'body' => $comment
        ];

        $data->comments[] = $newComment;

        $result = $api->put('/posts/' . $idPost, json_encode($data));
        $this->redirect('index.php?r=post/view&id=' . $idPost);
    }
}