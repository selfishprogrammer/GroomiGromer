<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&family=Satisfy&display=swap" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light  shadow-sm " style="background-color:#1E88E5">
  <a class="navbar-brand" href="#" style="color:white; font-family: 'Satisfy', cursive;"><b><i>Groomi Gromer</i></b></a>

  <ul class="navbar-nav ml-auto">
    <?php
    session_start();

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {




    ?>





      <div class="btn-group">
        <a class="btn btn btn-sm" href="../Login/logout_user" style="color:white; font-family: 'Satisfy', cursive; background-color:#1E88E5; font-size:20px;" type="button">
          Rahul
        </a>

      </div>

    <?php

    } else {
    ?>

      <li class="nav-item">
        <a href="../Login/login_user" class="nav-link" style="color:white; font-family: 'Satisfy', cursive;">Login/Signup</a>
      </li>

    <?php
    }

    ?>
  </ul>
  </div>
</nav>