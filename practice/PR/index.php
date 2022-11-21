<?php


 $servername  = '172.31.22.43';
 $username   =  "Kihyeon200476247";
 $password   = "Y_UZm8Ri87";
 $dbname   = "Kihyeon200476247";

 $mylink = new mysqli ($servername, $username, $password, $dbname);
if($mylink->connect_error){
  die("Connection Failed" . $conn->connect_error);
}

?>

// class Student
// {
//   var $title;
//   var $author;
//   var $gpa;

//   function __construct($aTitle, $aAuthor, $gpa)
//   {
//     // "this" talking about title, author , pages are decided by parameters double variables
//     $this->title = $aTitle;
//     $this->author = $aAuthor;
//     $this->gpa = $gpa;
//   }
//   // this it true or flase function
//   function hasHonors()
//   {
//     if ($this->gpa >= 3.5) {
//       return "true";
//     }
//     return "false";
//   }
// }

// $student1 = new Student("Harry Potter", "Ben Blanc", 2.8);
// $student2 = new Student("BITCH", "Hamster Bitch", 3.7);

// echo $student2->hasHonors();

// // $book1->title = "Haryy Potter  <br>";
// // $book1->author = "Ben Blanc  <br>"; 
// // $book1->pages = 400; 

// class Movie
// {
//   public $title;
//   private $rating;
//   // var and public it the same thing
// //__construct doesn't work with private variables 
//   function __construct($title, $rating)
//   {
//     $this->title = $title;
//     $this->setRating($rating);
//   }
//   // you can access to the private variable 
//   function getRating()
//   {
//     return $this->rating;
//   }

//   function setRating($rating)
//   {
//     if($rating == "G"||$rating == "PG"||$rating == "PG-13"||
//     $rating == "R"||$rating == "NR")
//     {
//       $this -> rating = $rating;

//     }else{
//       $this -> rating ="NR";
//     }
//   }
// }

// $avengers = new Movie("Avengers", "Hamster bitch");


// // G, PG, PG-13 , R , NR
    
// echo $avengers->getRating();






// echo $book2->title;
// echo $book1->author;
// echo $book2->pages;


class Chef{
  function makeChiken(){
    echo "The chef makes chicken <br>";
  }
  function makeSalad(){
    echo "The chef makes salad <br>";
  }
  function makeSpecialDish(){
    echo "The chef makes bbq ribs <br>";
  }

} 

class ItalianChef extends Chef {

  function makePasta(){
    echo "The chef makes pasta";
  }
  function makeSpecialDish(){
    echo "THe chef makes chicken parm";
  }
}

$chef = new Chef();
$chef->makeSpecialDish();

$ItalianChef = new ItalianChef();
$ItalianChef->makeSpecialDish();
?>


</body>

</html>