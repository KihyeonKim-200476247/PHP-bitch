<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD With PDO</title>
        <meta name="description" content="This week we will be building a CREATE and READ CRUD system with PDO">
        <meta name="robots" content="noindex, nofollow">
        <!--  Add our Google fonts  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <!--  Add our Bootstrap  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
        <!--  Add our custom CSS  -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="./img/php-logo.png" alt="header logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#add-record">Add</a></li>
                            <li class="nav-item"><a class="nav-link" href="#view-record">View</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section class="masthead">
                <div>
                    <h1>Create & Read with PDO</h1>
                </div>
            </section>
            <section class="add-record" id="add-record">
                <div>
                    <h2>Go Ahead Add Something</h2>
                    <a href="add.php">Add</a>
                </div>
            </section>
            <section class="view-records" id="view-record">
                <h3>User List</h3>
                <!-- add code here -->
            </section>
        </main>
        <footer>
            <h5>End of Page</h5>
        </footer>
    </body>
</html>