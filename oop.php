<?php
class Book {
 // TODO: Add properties as Private
 private $title, $availableCopies;
 
 public function __construct($title, $availableCopies) {
     // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
     }


// TODO: Add getTitle method
public function getTitle(){
    return $this->title;
}
 // TODO: Add getAvailableCopies method
 public function getAvailableCopies(){
    return $this->availableCopies;
 }



 // TODO: Add borrowBook method
     public function borrowBook(){
        $this->availableCopies-=1;
     }
 



 // TODO: Add returnBook method
     public function returnBook(){
        $this->availableCopies+=1;
     }
}


class Member {
 // TODO: Add properties as Private
private $name;


 public function __construct($name) {
      // TODO: Initialize properties
      $this->name = $name;
     }



 // TODO: Add getName method
 public function getName(){
    return $this->name;
 }
 
 // TODO: Add borrowBook method
 public function borrowBook($book){
    $book->borrowBook();
 }



 // TODO: Add returnBook method
 public function returnBook($book){
    $book->returnBook();
 }
 
}



// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


// TODO: Create 2 books with the following properties
//Book 1 - Name: The Great Gatsby, Available Copies: 5.
$book1 = new Book("The Great Gatsby",5);
//Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
$book2 = new Book("To Kill a Mockingbird",3);





// TODO: Create 2 members with the following properties
//Member 1 - Name: John Doe
$member1 = new Member("John Doe");
//Member 2 - Name: Jane Smith
$member2 = new Member("Jane Smith");



// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);


// TODO: Print Available Copies with their names:
echo "Book Name: ".$book1->getTitle().", Available Copy: ".$book1->getAvailableCopies().PHP_EOL;
echo "Book Name: ".$book2->getTitle().", Available Copy:  ".$book2->getAvailableCopies().PHP_EOL;


?>