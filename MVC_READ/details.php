<?php
$id = 0;

if (isset($_POST['bookId'], $_POST['title'], $_POST['author'], $_POST['publisher'], $_POST['isbn'])) {
    
    $bookId = $_POST['bookId'];
    
    $title = $_POST['title'];
    
    $author = $_POST['author'];
    
    $publisher = $_POST['publisher'];
    
    $isbn = $_POST['isbn'];

    
} else if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
}

require_once 'db.php';
require_once 'GenreModel.php';
require_once 'BookView.php';

$model = new GenreModel(MY_DSN, MY_USER, MY_PASS);
$view = new BookView();

if (isset($_POST['bookId']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['publisher']) && isset($_POST['isbn'])) {
    
    $id = $bookId;
    $status = $model->updateBook($bookId, $title, $author, $publisher, $isbn);
    
}


$rows = $model->getBook($id);

$view->showHeader('My Library | Book Details Page');
$view->showDetails($rows);
$view->showFooter();

?>