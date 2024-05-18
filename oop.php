<?php
class Book {

   // Private properties
   private $title;
   private $availableCopies;

   // Constructor to initialize properties
   public function __construct($title, $availableCopies) {
       $this->title = $title;
       $this->availableCopies = $availableCopies;
   }

    // Get Book Title
    public function getTitle() {
        return $this->title;
    }

    // Get Available Copy
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Borrow Book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    // Return Book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Get Member Name
    public function getName() {
        return $this->name;
    }

    // Borrow A Book
    public function borrowBook($book) {
        $book->borrowBook();
    }

    // Return Borrowed Book
    public function returnBook($book) {
        $book->returnBook();
    }
}

// Usage

// Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print Available Copies with their names
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
