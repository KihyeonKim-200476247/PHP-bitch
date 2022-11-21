<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Capturing Data & Control Structures</title>
  <meta name="description" content="">
  <meta name="robots" content="noindex, nofollow">
  <!-- add fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
  <!-- add Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- add our custom CSS -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./img/php-logo.png" alt="PHP logo">
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
              <li class="nav-item"><a class="nav-link" href="#variables">Variables</a></li>
              <li class="nav-item"><a class="nav-link" href="#structures">Control Structures</a></li>
              <li class="nav-item"><a class="nav-link" href="#capture">Capture the Data!</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="row masthead">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1>Capturing Data & Control Structures</h1>
      </div>
    </section>
    <section class="row" id="variables">
      <div class="col">
        <h2>Working with Variables</h2>
        <p>Before we can start capturing the data we need to look at what we will need to use to store the captured data!</p>
        <!-- PHP starts -->

        <?php

        $txt = "<p><Hellow World></p>";
        $number = 10;
        echo $txt;
        echo "<p>$number</p>";
        $a = 673;
        $b = 1000;
        $c = 436.47;
        $abc = $a * $b + $c;
        echo "<p>$abc</p>";

        ?>

      </div>
    </section>
    <section class="row" id="structures">
      <div class="col">
        <h3 class="col-12">Control Structures</h3>
        <!-- PHP starts -->

        <?php
        echo "<h4>The if statement<h4>";
        $a = 50;
        $b = 51;
        if ($a < $b) {
          echo "<p>$a is less than $b</p>";
        }
        $c = 80;
        $d = 82;
        if ($c > $b) {
          echo "<p>$c is greater than $b</p>";
        } else {
          echo "<p>$c is less than $d</p>";
        }
        echo "<h4>The else if</h4>";
        $e = 100;
        $f = 100;
        if ($f > $e) {
          echo "<p>$f is greater than $e</p>";
        } elseif ($f ==  $e) {
          echo "<p>$f is equal to $e</p>";
        } else {
          echo "<p>$f is less than $e</p>";
        }
        echo "<h4>The swit<4h>";
        switch ($i) {
          case 0;
            echo "<p>i equals 0 </p>";
          case 1;
            echo "<p>i equals 1 </p>";
        }

        echo "<4>While Loop</4>";
        $i = 1;
        while ($i <= 10) {
          echo "<p>$i</p>";
          $i++;
        }


        $num = 1;
        do {
          echo "<p>Number = $num</p>";
          $num++;
        } while ($num > 0 && $num < 11);
        for ($f1 = 1;; $f1++) {
          if ($f1 > 10) {
            break;
          }
        }
        $age = array("Ricky" => "35", "Bobby" => "52", "Joe" => "43");
        foreach ($age as $x => $val) {
          echo "<p> $x = $val</p>";
        }



        ?>

      </div>
    </section>
    <section class="row" id="capture">
      <h3 class="col-12">Capture the Data</h3>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <!-- PHP starts -->
        <?php
        $fname = " ";
        $lname = " ";
        $email = " ";
        $pword = " ";
        $fnameErr = " ";
        $lnameErr = " ";
        $emailErr = " ";
        $pwordErr = " ";
        //fnam
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST[fname])) {
            $fnameErr = "First name required";
          } else {
            $fname = form_input($_POST["fname"]);
          }
          //lname
          if (empty($_POST[lname])) {
            $lnameErr = "Last name required";
          } else {
            $lname = form_input($_POST["lname"]);
          }
          //email
          if (empty($_POST[email])) {
            $emailErr = "email name required";
          } else {
            $email = form_input($_POST["email"]);
          }
          //password
          if (empty($_POST[pword])) {
            $pwordErr = "pass required";
          } else {
            $pword = form_input($_POST["pword"]);
          }
        }

        function form_input($data)
        {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        <!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script. The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms. -->
        <form actopm="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
          <input class="form-control" type="text" name="fname" placeholder="First Name" required>
          <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
          <input class="form-control" type="email" name="email" placeholder="Email" required>
          <input class="form-control" type="password" name="pword" placeholder="Password" required>
          <input class="btn btn-primary" type="submit" name="submit" value="Submit" required>

        </form>

      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <h4>The form data </h4>
        <p>First name: <?php echo $fname; ?></p>
        <p>Last name: <?php echo $lname; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Password: <?php echo $pword; ?></p>

      </div>
    </section>
  </main>
  <footer></footer>
</body>

</html>