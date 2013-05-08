<form action="?" method="POST">
<?php

foreach($rows as $num => $row) {
    echo '<input type="hidden" name="userId" id="userId" maxlength="20" size="20" value="'.$row['title'].'"/><br />';
    
    echo "<h3>".$row['title']."</h3><br>";
    
    echo "<b>Author: </b>".$row['author']."<br>";
    
    echo "<b>Publisher: </b>".$row['publisher']."<br>";

    
    echo "<b>Isbn: </b>".$row['isbn']."<br>";

    
}


echo "<h3>Update Information</h3>";

foreach($rows as $num => $row) {
    echo '<input type="hidden" name="bookId" id="bookId" maxlength="20" size="20" value="'.$row['bookId'].'"/><br />';
    
    echo '<label for="title">Title: </label>';
    
    echo '<input type="text" name="title" id="title" maxlength="50" size="50" value="'.$row['title'].'"/><br />';
    
    echo '<label for="author">Author: </label>';
    
    echo '<input type="text" name="author" id="author" maxlength="20" size="50" value="'.$row['author'].'"/><br />';
    
    echo '<label for="publisher">Publisher: </label>';
    
    echo '<input type="text" name="publisher" id="publisher" maxlength="20" size="50" value="'.$row['publisher'].'"/><br />';
    
    echo '<label for="isbn">Isbn: </label>';

    echo '<input type="text" name="isbn" id="isbn" maxlength="20" size="50" value="'.$row['isbn'].'"/><br />';

}

echo '<br><br>';

echo '<a href="deleteBook.php?id='.$row['bookId'].'">Delete Book</a>';

?>

<br/><br/>

<input type="submit" value="Update" />

<br/><br/>

<a href='index.php'>Back</a>
</form>