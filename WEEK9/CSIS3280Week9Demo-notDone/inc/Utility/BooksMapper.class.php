<?php

class BooksMapper {

    //Place to store the PDO Agent
    private static $db;

    static function initialize(string $className)   {
        
        self::$db = new PDOAgent($className);

    }

    // mysql> DESC books;
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
        $sqlInsert = "INSERT INTO books (ISBN, Author, Title, Price) VALUES (:isbn, :author, :title, :price)";

        self::$db->query($sqlInsert);

        self::$db->bind(':isbn', $newBook->getISBN());
        self::$db->bind(':author', $newBook->getAuthor());
        self::$db->bind(':title', $newBook->getTitle());
        self::$db->bind(':price', $newBook->getPrice());

        self::$db->execute();

        return self::$db->lastInsertedId();

    }

    static function getBooks() : Array {
        
        $selectAll = "SELECT * FROM books;";

        self::$db->query($selectAll);
        self::$db->execute();
        return self::$db->resultSet();
    }

}

?>