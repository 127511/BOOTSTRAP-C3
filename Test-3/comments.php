<?php
include("database/db_create.php");
include("database/db_create_table.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "c3_commentdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/home.css">
    <title>UFC | Home</title>
  </head>
  <body>
    <div class="container fixed-top mt-2">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" height="30" alt="" loading="lazy">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.html">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rankings.html">Rankings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="connect.php">Connect</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="comments.php">Comments <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>

        <div class="container">
          <div class="row">
            <div class="col">
              <p class="h1 text-center">Comment Section</p>
            </div>
          </div>
          <br>
            <div class="row">
              <div class="col border border-1">
                <form method="post">
                  <h5 class="m-2">Add a comment</h5>
                  <input type="text" name="username" class="form-control m-2" placeholder="Name" required>
                  <textarea class="form-control m-2" name="comment" id="exampleFormControlTextarea1" rows="5" required></textarea>
                  <button type="submit" name="submit" class="btn btn-danger m-2" id="formSubmit" style="width: 100%;">Submit</button>
                </form>
              </div>
            </div>
            <br>
            <?php
              $conn = new mysqli($servername, $username, $password, $dbname);

              if (isset($_POST["submit"])) {
                $form_date = date("Y-m-10");

                $sql = "INSERT INTO comments (id, username, comment, date)
                  VALUES ('', '".$_POST["username"]."','".$_POST["comment"]."','".$form_date."')";

                if ($conn->query($sql) === TRUE) {
                  $conn->close();
                } else {

                }
              }

             ?>
            <div class="row">
              <span style="display: block; width: 100%; height: .3vh; background-color: red;"></span>
            </div>
            <br>

            <?php
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT id, username, comment, date FROM comments ORDER BY date DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {


                  echo "
                  <div class=\"row\">
                      <div class=\"col\">
                          <div class=\"card card-white post\">
                              <div class=\"post-heading\">
                                  <div class=\"float-left image m-2\">
                                      <img src=\"https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png\" class=\"img-circle avatar\" alt=\"user profile image\" style=\"height: 80px; padding: 5px;\">
                                  </div>
                                  <div class=\"float-left meta\">
                                      <div class=\"title h5 m-2\">
                                          <a href=\"#\"><b> " . $row["username"] . "</b></a>
                                          made a post.
                                      </div>
                                      <h6 class=\"text-muted time m-2\">" . $row["date"] . "</h6>
                                  </div>
                              </div>
                              <div class=\"post-description\">
                                  <p class=\"m-2\">" . $row["comment"] . "</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <br>
                  ";
                }
                } else {

                }
                $conn->close();
             ?>


        </div>


        <br><br><br>
        <footer class="footer">
          <div class="container">
            <span class=text-muted>Copyright © 2001-2020 UFC All Rights Reserved</span>
          </div>
        </footer>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
