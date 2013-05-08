<?php
     
class GenreModel {
    
    private $db;
    
    public function __construct($dsn, $user, $pass) {
        
        try {
            
            $this->db = new \PDO($dsn, $user, $pass);
        }
        
        catch (\PDOException $e) {
            
            var_dumb($e);
        }
    
    }//__construct
    
    /**
     * @return array Records from the database, as an array of arrays
     */
    
    
    public function getBooks() {
        
        $statement = $this->db->prepare("
                                       
                SELECT bookId, title, author, publisher, isbn, genreId
                FROM book
                ORDER BY title
                ");
        
                try {
                    if ($statement->execute()) {
                        
                        $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                        return $rows;
                    }//if execute
                }
                
                catch (\PDOException $e) {
                    
                    echo "Couldn't query the database.";
                    var_dump($e);
                    
                }
                return array();
    }
    
    public function getBook($bookId) {
        
        $statement = $this->db->prepare("
                                       
                SELECT bookId, title, author, publisher, isbn, genreId
                FROM book
                WHERE bookId = :bookId

                ");
        
                try {
                    if ($statement->execute(array(':bookId'=>$bookId))) {
                        
                        $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                        return $rows;
                    }//if execute
                }
                
                catch (\PDOException $e) {
                    
                    echo "Couldn't query the database.";
                    var_dump($e);
                    
                }
                return array();
    }
    
    public function getUserByNamePass($name, $pass) {
        
        $stmt = $this->db->prepare("
        
        SELECT user_id AS id, user_name AS name, user_fullname AS fullname
        FROM users
        WHERE (user_name = :name)
          AND (user_password = MD5(CONCAT(user_salt,:pass)))
                                   
        ");
        
        if ($stmt->execute(array(':name' => $name, ':pass' => $pass))) {
            
            $rows = $stmt->fetchALL(\PDO::FETCH_ASSOC);
            
            if (count($rows) === 1){
            
                return $rows[0];
            }
        }
        
        return FALSE;
    }
    
    public function getUser($userId) {
        
        $statement = $this->db->prepare("
                                       
                SELECT user_id, user_name, user_fullname
                FROM users
                WHERE user_id = :userId

                ");
        
                try {
                    if ($statement->execute(array(':userId'=>$userId))) {
                        
                        $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                        return $rows;
                    }//if execute
                }
                
                catch (\PDOException $e) {
                    
                    echo "Couldn't query the database.";
                    var_dump($e);
                    
                }
                return array();
    }
    
    public function updateUser($id, $username, $name) {
        
        $statement = $this->db->prepare("
                                       
                UPDATE users SET
                    user_name = :username,
                    user_fullname = :name
                 WHERE user_id = :id   

                ");
        
        try {
                    if ($statement->execute(array(':id'=>$id, ':username'=>$username, ':name'=> $name))) {
                        
                        $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                        return $rows;
                    }//if execute
                }
                
                catch (\PDOException $e) {
                    
                    echo "Couldn't query the database.";
                    var_dump($e);
                    
                }
                return array();
    }
    
    public function deleteUser($id) {
        
        $statement = $this->db->prepare("
                                       
                DELETE FROM users
                WHERE user_id = :id   

                ");
        
        try {
                    if ($statement->execute(array(':id'=>$id))) {
                        
                        $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                        return $rows;
                    }//if execute
                }
                
                catch (\PDOException $e) {
                    
                    echo "Couldn't query the database.";
                    var_dump($e);
                    
                }
                return array();
    }
    
    public function updateBook($id, $title, $author, $publisher, $isbn) {
        
        $statement = $this->db->prepare("
                                       
                UPDATE book SET
                    title = :title,
                    author = :author,
                    publisher = :publisher,
                    isbn = :isbn
                 WHERE bookId = :id   

                ");
        
        try {
                    if ($statement->execute(array(':id'=>$id, ':title'=>$title, ':author'=>$author, ':publisher'=> $publisher, ':isbn'=> $isbn))) {
                        
                        $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                        return $rows;
                    }//if execute
                }
                
                catch (\PDOException $e) {
                    
                    echo "Couldn't query the database.";
                    var_dump($e);
                    
                }
                return array();
    }
    
    
    public function deleteBook($id) {
        
        $statement = $this->db->prepare("
                                       
                DELETE FROM book
                WHERE bookId = :id   

                ");
        
        try {
                    if ($statement->execute(array(':id'=>$id))) {
                        
                        $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                        return $rows;
                    }//if execute
                }
                
                catch (\PDOException $e) {
                    
                    echo "Couldn't query the database.";
                    var_dump($e);
                    
                }
                return array();
    }
    
    
    public function addBook($id, $title, $author, $publisher, $isbn) {
        
        $statement = $this->db->prepare("
                                       
                INSERT INTO book (`bookId`, `title`, `author`, `publisher`, `isbn`) 

                VALUES (:id, :title, :author, :publisher, :isbn)  

                ");
        
        try {
                    if ($statement->execute(array(':id'=>$id, ':title'=>$title, ':author'=>$author, ':publisher'=> $publisher, ':isbn'=> $isbn))) {
                        
                        $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                        return $rows;
                    }//if execute
                }
                
                catch (\PDOException $e) {
                    
                    echo "Couldn't query the database.";
                    var_dump($e);
                    
                }
                return array();
    }
}

?>