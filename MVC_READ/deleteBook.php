<?php
$id = 0;

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
}

require_once 'db.php';
require_once 'GenreModel.php';

$model = new GenreModel(MY_DSN, MY_USER, MY_PASS);

if (isset($_GET['id'])) {
    
    $delete= $model->deleteBook($id);

    header('Location: index.php');

}

?>