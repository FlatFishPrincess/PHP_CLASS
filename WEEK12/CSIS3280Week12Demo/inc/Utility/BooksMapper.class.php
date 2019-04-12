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
        $selectSql = "insert into Books values(:isbn, :author, :title, :price)";
        // bind book
        self::$db->query($selectSql);
        try{
            self::$db->bind(":isbn", $newBook->getISBN());
            self::$db->bind(":author", $newBook->getAuthor());
            self::$db->bind(":title", $newBook->getTitle());
            self::$db->bind(":price", $newBook->getPrice());
            self::$db->execute();
        } catch(Exception $e){
            var_dump($e->getMessage());
        }
        return self::$db->lastInsertId();
    }
   

    // return array of books 
    static function getBooks() {
        $selectQuery = "select * from books";
        self::$db->query($selectQuery);
        self::$db->execute();
        return self::$db->resultSet();
    }

    // return boolean
    static function deleteBook(string $isbn) {
       $deleteQuery = "delete from books where isbn = :isbn";
       try{
            self::$db->query($deleteQuery);
            self::$db->bind(":isbn",$isbn);
            self::$db->execute();
       } catch(Exception $e){
           // Validation::getPDOErros($e->getMessage());
            var_dump($e->getMessage());
            return false;
       }
       return true;
    }

    // return single result
    static function getBook(string $isbn)    {
        $selectQuery = "select * from books where isbn = :isbn";
        try{
            self::$db->query($selectQuery);
             self::$db->bind(":isbn",$isbn);
             self::$db->execute();
        } catch(Exception $e){
           //   Validation::getPDOErros($e->getMessage());
             var_dump($e->getMessage());
             return;
        }
        return  self::$db->singleResult();;
    }

    static function updateBook(Book $updateBook){
        $updateQuery = "update books set title=:title, author=:author, price=:price where isbn=:isbn";
        try{
            self::$db->query($updateQuery);
            self::$db->bind(":isbn", $updateBook->getISBN());
            self::$db->bind(":author", $updateBook->getAuthor());
            self::$db->bind(":title", $updateBook->getTitle());
            self::$db->bind(":price", $updateBook->getPrice());
            self::$db->execute();
        } catch(Exception $e){
            var_dump($e->getMessage());
            return;
        }
        return true;
    }

}

?>