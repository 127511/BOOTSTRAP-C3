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
              <li class="nav-item active">
                <a class="nav-link" href="connect.php">Connect <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="comments.php">Comments</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <br><br><br>
      <div class="container mt-5">
        <div class="row">
          <div class="col">
            <h2>SIGN UP FOR THE NEWSLETTER</h2>
                <div id="alertSucces" class="alert alert-success collapse" role="alert">
                  <strong>Succes!</strong>
                  You successfully signed up for the newsletter.
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                </div>
                <div id="alertError" class="alert alert-danger collapse" role="alert">
                  <strong>Error!</strong>
                  Make sure you fill in all required fields with the correct information..
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                </div>
                <form method="post" action="">
                  <div class="row mb-2">
                    <div class="col hoverItem" id="hover1">
                      <input type="text" class="form-control toValidate0" placeholder="First name">
                    </div>
                    <div class="col hoverItem" id="hover2">
                      <input type="text" class="form-control toValidate1" placeholder="Last name">
                    </div>
                  </div>
                      <div class="collapse" id="collapse1">
                          <div class="card card-body">
                            Example: John
                          </div>
                      </div>
                      <div class="collapse" id="collapse2">
                          <div class="card card-body">
                            Example: Doe
                          </div>
                      </div>
                  <div class="row mb-2">
                    <div class="col hoverItem" id="hover3">
                      <input type="text" class="form-control toValidate2" placeholder="Email Address">
                    </div>
                  </div>
                      <div class="collapse" id="collapse3">
                          <div class="card card-body">
                            Example: email@example.com
                          </div>
                      </div>
                  <div class="row mb-2">
                    <div class="col hoverItem" id="hover4">
                      <input type="text" class="form-control toValidate3" placeholder="Address Line 1">
                    </div>
                  </div>
                      <div class="collapse" id="collapse4">
                          <div class="card card-body">
                            Example: 123 Main Street Room 22
                          </div>
                      </div>
                  <div class="row mb-2">
                    <div class="col hoverItem" id="hover5">
                      <input type="text" class="form-control toValidate6" placeholder="Address Line 2">
                    </div>
                  </div>
                      <div class="collapse" id="collapse5">
                          <div class="card card-body">
                            Example: University Dorm
                          </div>
                      </div>
                  <div class="row mb-2">
                    <div class="col hoverItem" id="hover6">
                      <input type="text" class="form-control toValidate4" placeholder="Zip Code">
                    </div>
                    <div class="col hoverItem" id="hover7">
                      <input type="text" class="form-control toValidate5" placeholder="Country">
                    </div>
                  </div>
                      <div class="collapse" id="collapse6">
                          <div class="card card-body">
                            Example: 0000AA
                          </div>
                      </div>
                      <div class="collapse" id="collapse7">
                          <div class="card card-body">
                            Example: The Netherlands
                          </div>
                      </div>
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-danger mb-2" id="formSubmit" style="width: 100%;" data-toggle="modal" data-target="#exampleModal">Submit</button>

                    </div>
                  </div>
                  </form>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to sign up for the newsletter and the entered data is correct?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                          <button type="button" id="validateForm" class="btn btn-danger" data-dismiss="modal">Yes, Sign me up</button>
                        </div>
                      </div>
                    </div>
                  </div>


          </div>
          <div class="col">
            <h2>FOLLOW US ON SOCIAL MEDIA</h2>
            <div class="row ml-1">
              <a href="https://facebook.com/ufc" class="m-3">
                <img src="images/logo-facebook.png" width="100vw">
              </a>
              <a href="https://twitter.com/ufc" class="m-3">
                <img src="images/logo-twitter.png" width="100vw">
              </a>
              <a href="https://instagram.com/ufc" class="m-3">
                <img src="images/logo-instagram.png" width="100vw">
              </a>
            </div>
            <div class="row ml-1">
              <a href="https://twitch.tv/ufc" class="m-3">
                <img src="images/logo-twitch.png" width="100vw">
              </a>
              <a href="https://youtube.com/ufc" class="m-3">
                <img src="images/logo-youtube.png" width="100vw">
              </a>
            </div>
          </div>
        </div>
      </div>

        <br><br><br>
        <footer class="footer">
          <div class="container">
            <span class=text-muted>Copyright © 2001-2020 UFC All Rights Reserved</span>
          </div>
        </footer>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="scripts/collapse.js" charset="utf-8"></script>
    <script src="scripts/alerts.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
