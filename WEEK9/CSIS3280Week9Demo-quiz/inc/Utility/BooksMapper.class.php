<?php

class BooksMapper {

    //Place to store the PDO Agent
    private static $db;

    static function initialize(string $className)   {
        
        self::$db = new PDOAgent($className);

    }

    // +--------+------------+------+-----+---------+-------+
    // | Field  | Type       | Null | Key | Default | Extra |
    // +--------+------------+------+-----+---------+-------+
    // | ISBN   | char(13)   | NO   | PRI | NULL    |       |
    // | Author | char(50)   | YES  |     | NULL    |       |
    // | Title  | char(100)  | YES  |     | NULL    |       |
    // | Price  | float(4,2) | YES  |     | NULL    |       |
    // +--------+------------+------+-----+---------+-------+
    // 4 rows in set (0.03 sec)
    

    static function createBook(Book $newBook) : int   {
    // insert into tableName(fieldName) values ( :varName) 
        $sqlInsert = "INSERT INTO books (ISBN, Author, Title, Price) VALUES (:isbn, :author, :title, :price)";
        self::$db->query($sqlInsert);
        self::$db->bind(":isbn", $newBook->getISBN());
        self::$db->bind(":author", $newBook->getISBN());
        self::$db->bind(":title", $newBook->getISBN());
        self::$db->bind(":price", $newBook->getISBN());
        self::$db->execute();
        return self::$db->lastInsertId();
    }

    static function getBooks() : Array {
        $selectAll = "select * from books";
        self::$db->query($selectAll);
        return self::$db->resultSet();
    }

    static function deleteBook(string $isbn) : bool {
        $deleteSQLQuery = "DELETE FROM Books WHERE ISBN = :bookid;";
        self::$db->query($deleteSQLQuery);
        self::$db->bind(":bookid", $isbn);
        try{
            self::$db->execute();
        } catch(Execption $e){
            return false;
        }
        
        return true;
   
    }

}

?>