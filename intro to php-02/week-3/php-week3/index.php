<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validation with PHP</title>
    <meta name="description" content="This week we will look at validation with PHP.">
    <meta name="robots" content="noindex, nofollow">
    <!-- add fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <!-- add Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <!-- add our custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./img/php-logo.png" alt="Header Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Welcome</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Form</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="masthead row">
        <div class="col-12">
          <h1>Learning Form Validation</h1>
          <h2>With PHP</h2>
        </div>
      </section>
      <section class="form-container">
        <!-- Add our PHP here to process the form! -->
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
          $fname    = trim($_POST['fname']); 
          $lname    = trim($_POST['lname']);
          $email    = trim($_POST['email']); 
          $phonenum = trim($_POST['phonenum']);
          $pword    = trim($_POST['pword']);
          $special  = trim($_POST['special']);
          // now the radio button 
          $answer = ($_POST['answer']);
          //checkbox
          $movieResults = " ";
          $movieName = $_POST['movies']; 

          foreach($movieName as $movieValue) {
            $movieResults .= $movieValue;
          }
          $error = "";
          if(empty($fname)) {
            $error = "Please enter a first name";
          }else if(empty($lname)) {
            $error = "Please enter a last name";
        }else if(empty($email)) {
          $error = "Please enter an email";
        }
        // the preg_match_function searches the string for a attern, returning true if the pattern exsits, and false otherwise
          else if(!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email)){
              $error = "the email is not the correct format";
            } else if(empty($phonenum)){
              $error = "Please enter a phone number";
            } else if (!is_numeric($phonenum)){
              $error = "The phone number can only be numbers";
            } else if (strlen($phonenum) != 10){
              $error = "Phone number must be 10 numbers";
            }else if(empty($pword)){
              $error = "Please enter a Password";
            }else if (strlen($pword) < 8){
              $error  ="Please must be greater than 8 characters";
            }else if (empty($answer)){
              $error = "Is it yes or no";
            }else if(empty($movieResults)){
              $error ="Why do you hate movies?";
            }else{
              ?>
              <script>alert('GOOD Work!!!!!');</script>
              <?php
            }
          }
        ?>


        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
          <p><input type="text" name="fname" placeholder="Firstname"></p>
          <p><input type="text" name="lname" placeholder="Lastname"></p> 
          <p><input type="text" name="email" placeholder="Your Email"></p> 
          <p><input type="tel" name="phonenum" placeholder="Phone Number"></p>
          <p><input type="password" name="pword" placeholder="Password"></p>
          <p>Yes or No?</p>
          <input type="radio" id="yes" name="answer" value="Yes">
            <label for="yes">Yes</label>
            <input type="radio" id="no" name="answer" value="No">
            <label for="no">No</label>
            <br>
            <p>Pick a movie:</p>
            <input type="checkbox" id="movie1" name="movies[]" value=" Plup Fiction ">
              <label for ="movie1">Pulp Fiction</label>
            <input type="checkbox" id="movie2" name="movies[]" value=" Star Wars A New Hope ">
              <labe for="movie2">Star Wars A New Hope</labe>
            <input type="checkbox" id="movie3" name="movies[]" value=" The Princess Bride ">
              <label for ="movie3">The Princess Bridde</label>  
            <br>
            <textarea name="special" placeholder="Please leave a message"></textarea>
            <br>
            <input class="btn btn-primary submit" type="submit" value="Submit">
            <input class="btn btn-dark reset" type="reset" value="Reset">
            <p><?php echo $error; ?></p>
        </form>
      </section>
      <section class="results">

        <h3>Here is our results!!</h3>
        <p>Name: <?php echo "$fname $lname"; ?></p>
        <p>Email: <?php echo "$email "; ?></p>
        <p>Phone Number: <?php echo "$phonenum "; ?></p>
        <p>Password: <?php echo "$pword "; ?></p>
        <p>Yes or No: <?php echo "$answer "; ?></p>
        <p>Movies: <?php echo "$movieResults "; ?></p>
        <p>Message: <?php echo "$special "; ?></p>
       
      </section>
    </main>
    <footer>
      <h5>End of Page</h5>
    </footer>
  </body>
</html>