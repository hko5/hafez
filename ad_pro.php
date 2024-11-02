<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>freak shoes</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="freak_shoes.css" />
  </head>
  <body>
    <!-- start hader -->
    <div class="header">
      <header class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"
            ><img src="foto/Tan Black Simple Shoes Store Logo.png" alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="bi bi-list" style="color: white"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto">
              <a href="#"> <li>WOMEN</li></a>
              <a href="#"> <li>MEN</li></a>
              <a href="#"> <li>CONTACT</li></a>
              <hr style="color: white" />
              <a href="#"> <i class="bi bi-basket3"></i></a>
              <!--  -->
              <div
                class="container"
                style="
                  color: white;
                  margin-right: 70px;
                  position: relative;
                  top: 8px;
                "
              >
                <div class="dropdown">
                  <button
                    type="button"
                    class="btn dropdown-toggle"
                    data-bs-toggle="dropdown"
                  >
                    LOGIN
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <hr style="color: black" />
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
                </div>
              </div>
              <!--  -->
            </ul>
          </div>
        </div>
      </header>
      <div class="logo">
        <img src="foto/Newew.JPEG" alt="" />
      </div>
    </div>
    <!-- End header -->
    <!-- Starte card -->
    <div class="card">
      <h2 class="main-titl">Available Products</h2>
      <div class="container">
        <div class="row">
          <?php
          
          include('config.php');
          $sqls = mysqli_query($con , "SELECT * FROM admin");
          while($row = mysqli_fetch_array($sqls)){
          echo "
            <div class='col col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                <center>
                <img src='$row[img]' alt='' />
                <br>
                <br>
                <h2>$row[name]</h2>
                <p>$row[price]</p>
                <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                <a class='btn btn-primary' href='edit.php?id=$row[id]'>Edit</a>
                </center>
            </div>
          ";
          }
          ?>
        </div>
      </div>
    </div>
    <!-- End  card -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
