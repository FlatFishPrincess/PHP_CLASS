<?php 
    class Book {
        private $ISBN;
        private $Author;
        private $Title;
        private $Price;

        // Getters
        function getISBN() : string {
            return $this->$ISBN;
        }
        function getAuthor() : string {
            return $this->$Author;
        }
        function getTitle() : string {
            return $this->$Title;
        }
        function getPrice() : float {
            return $this->$Price;
        }

        // Setters
        function setPrice(float $newPrice){
            $this->Price = $newPrice;
        }
        function setTitle(string $newTitle){
            $this->Title = $newTitle;
        }
        function setISBN(string $newISBN){
            $this->ISBN = $newISBN;
        }

        function setAuthor(string $newAuthor){
            $this->Author = $newAuthor;
        }
    }
?>