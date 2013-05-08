<?php

echo '<div id= "books">';

echo "<h2>Titles</h2>";

echo '<div id= "titles">';

foreach ($rows as $num => $row) {
        
echo "<div id='link'><a href='details.php?id=".$row['bookId']."'>".$row['title']."</a></div><br><br>";
        

}
echo "</div>";

echo '<div id= "addBook">';

echo '<form action="?" method="POST">';

echo '<input type="hidden" name="bookId" id="bookId" maxlength="20" size="20" value="null"/><br />';
    
echo '<label for="title">Title: </label>';

echo '<input type="text" name="title" id="title" maxlength="50" size="40" /><br />';

echo '<label for="author">Author: </label>';

echo '<input type="text" name="author" id="author" maxlength="20" size="40" /><br />';

echo '<label for="publisher">Publisher: </label>';

echo '<input type="text" name="publisher" id="publisher" maxlength="20" size="40" /><br />';

echo '<label for="isbn">Isbn: </label>';

echo '<input type="text" name="isbn" id="isbn" maxlength="20" size="40" /><br />';

echo '<br/><br/>';

echo '<input type="submit" value="Add Title" />';

echo '<br/><br/>';

echo '</form>';

echo "</div>";

echo "</div>";

?>