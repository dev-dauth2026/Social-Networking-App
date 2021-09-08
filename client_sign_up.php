<?php
include('server.php')
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="container-fluid ">
        <!-- navbar starts  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand font-weight-bold" href="#">Innovation</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="client_sign_up.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <!-- navbar ends  -->
        <!-- carousel starts  -->
        <div id="carouselExampleSlidesOnly" class="carousel slide bg-secondary carousel_div" style="height: 30vh;" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <section >
            <div class="main_div d-flex  flex-column col-5 mx-auto mb-5 py-5" >
                <h1>Sign Up</h1>
                <form name="frmClientSignUp" onsubmit="return check()" method="POST" action="client_sign_up.php">
                <!-- <?php include ('errors.php') ?> -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="clientUsername">
                    </div>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="clientFirstName">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="clientLastName">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">DOB</label>
                        <input type="text" class="form-control" id="dob" name="clientDOB">
                    </div>
                    <div class="mb-3">
                        <label id="clientemail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="clientemail" name="clientEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="mobile_number" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile_number" name="clientMobileNumber">
                    </div>
                    <div class="mb-3">
                        <label for="clientpsw" class="form-label">Password</label><span id="messages" style="color:red"> </span>
                        <input type="password" class="form-control" id="clientpsw" name="clientpsw">
                    </div>
                    <div class="mb-3">
                        <label for="clientpsw-repeat" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="clientpsw-repeat" name="clientpsw-repeat" onchange="check()">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button onclick="myFunction()" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="signup">Submit</button>
                </form>
            </div>
        </section>
        <br>
        <section>
            <div class="footer  d-flex bg-secondary justify-content-center align-items-center  w-100">
                <p class="text-align-center text-light">Copyright ©️ 2021 allright reserverd </p>
            </div>
        </section>

    </div>
    <script>
        // signup cancle function
        function myFunction() {
            window.open("home.php");
        }

        // password matching validation check 
        function check() {
            password1 = document.getElementById("clientpsw").value;
            password2 = document.getElementById("clientpsw-repeat").value;
            if (password1 != password2) {
                document.getElementById('clientpsw-repeat').style.color = 'red';
                document.getElementById("messages").innerHTML = "   ** Please, Enter same password.";
                return false;
            }
        }
    </script>

    <!-- carousel ends  -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>