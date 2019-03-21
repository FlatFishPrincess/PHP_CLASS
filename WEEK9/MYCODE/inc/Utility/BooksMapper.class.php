<?php 
    class BooksMapper{

        // Place to store the PDO Agent
        private static $db;

        public static function initialize(string $className){
            self::$db = new PDOAgent($className);
        }

        public static function createBook(Book $newBook){
            $sqlInsert = "insert into books (ISBN, Author, Title, Price) 
                            values (:isbn, :author, :title. :price)";
            self::$db->query($sqlInsert);
            self::$db->bind(':isbn', $newBook->getISBN());
            self::$db->bind(':author', $newBook->getAuthor());
            self::$db->bind(':title', $newBook->getTitle());
            self::$db->bind(':price', $newBook->getPrice());

            self::$db->execute();
            return self::$db->lastInsertedId();
        }

        public static function getbooks() : Array{
            $selectAll = "select * from books";
            self::$db->query($selectAll);
            self::$db->execute();
            return self::$db->resultSet();
        }
    }
    

    // +--------+------------+------+-----+---------+-------+
    // | Field  | Type       | Null | Key | Default | Extra |
    // +--------+------------+------+-----+---------+-------+
    // | ISBN   | char(13)   | NO   | PRI | NULL    |       |
    // | Author | char(50)   | YES  |     | NULL    |       |
    // | Title  | char(100)  | YES  |     | NULL    |       |
    // | Price  | float(4,2) | YES  |     | NULL    |       |
    // +--------+------------+------+-----+---------+-------+
?>