<?php

class BooksMapper {

    //Place to store the PDO Agent
    private static $db;

    static function initialize(string $className)   {
        self::$db = new PDOAgent($className);
    }

//     +--------+------------+------+-----+---------+-------+
// | Field  | Type       | Null | Key | Default | Extra |
// +--------+------------+------+-----+---------+-------+
// | ISBN   | char(13)   | NO   | PRI | NULL    |       |
// | Author | char(50)   | YES  |     | NULL    |       |
// | Title  | char(100)  | YES  |     | NULL    |       |
// | Price  | float(4,2) | YES  |     | NULL    |       |
// +--------+------------+------+-----+---------+-------+

    //static function createBook(Book $newBook) : int 
    // return lastInsered id
    static function createBook (Book $newBook) {
    
    }
   

    // return array of books 
    static function getBooks() {
       $selectAll = "select * from books";
       try{
           self::$db->query($selectAll);
           self::$db->execute();
       } catch(Exception $e){
           echo $e->getMessage();
       }
       return self::$db->resultSet();
    }

    // return boolean
    static function deleteBook(string $isbn) {
      $deleteQuery = "select * from books where isbn = :isbn";
      try{
          self::$db->query($deleteQuery);
          self::$db->bind(':isbn', $isbn);
          self::$db->execute();
      }catch(Exception $e){
        echo $e->getMessage();
    }
        return true;
    }

    // return single result
    static function getBook(string $isbn)    {
     
    }

    static function updateBook(Book $updateBook){
      
    }

}

?>