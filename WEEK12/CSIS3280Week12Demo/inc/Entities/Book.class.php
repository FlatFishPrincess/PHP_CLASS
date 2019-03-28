
<?php

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

class Book  {

    private $ISBN;
    private $Author;
    private $Title;
    private $Price;


    //Getters
    function getISBN() : string     {
        return $this->ISBN;
    }

    function getAuthor() : string   {
        return $this->Author;
    }

    function getTitle() : string {
        return $this->Title;
    }

    function getPrice() : float {
        return $this->Price;
    }

    //Setters
    function setPrice(float $newPrice)  {
        $this->Price = $newPrice;
    }

    function setISBN(string $newISBN)   {
        $this->ISBN = $newISBN;
    }

    function setTitle(string $newTitle) {
        $this->Title = $newTitle;
    }

    function setAuthor(string $newAuthor)   {
        $this->Author = $newAuthor;
    }

    //function addition serialize
    function jsonSerialize()    {

        // $vars = get_object_vars($this);
        // return $vars;

        //Make a standard class
        $obj = new StdClass;
        $obj->ISBN = $this->getISBN();
        $obj->Title = $this->getTitle();
        $obj->Author = $this->getAuthor();
        $obj->Price = $this->getPrice();

        //Return the standard class
        return $obj;
    }
}

?>