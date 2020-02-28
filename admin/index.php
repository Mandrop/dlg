<?php
session_start();
include('config.php');
include('pages.php');
include('users.php');
include('login.php');
include('messages.php');
include('products.php');
include('contact_information.php');
include('news.php');
/*
$sessionName = $_SESSION['admin'];

$sql = "SELECT * FROM admins WHERE admin_name = '$sessionName'";
$sqlQuery = $db->query($sql);

if($sqlQuery){
  $dbFetch = $sqlQuery->fetch_object();
  $_SESSION['theme'] = $dbFetch->admin_theme;
}else{
  echo "FAILSDKLFJASKDJLFKJLSA";
  echo "FAILSDKLFJASKDJLFKJLSA";
  echo "FAILSDKLFJASKDJLFKJLSA";
  echo "FAILSDKLFJASKDJLFKJLSA";
  echo "FAILSDKLFJASKDJLFKJLSA";
  echo "FAILSDKLFJASKDJLFKJLSA";
  echo "FAILSDKLFJASKDJLFKJLSA";
  echo "FAILSDKLFJASKDJLFKJLSA";
  echo "FAILSDKLFJASKDJLFKJLSA";
  echo "FAILSDKLFJASKDJLFKJLSA";
}
*/


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <!--<link rel="stylesheet" href="css/style.css">-->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:300,400,500&display=swap" rel="stylesheet">
    
    <?php
      $admin = $_SESSION["admin"];

      $sql = "SELECT * FROM admins WHERE admin_name = '$admin'";
      $sqlQuery = $db->query($sql);

      $theme = '';
      if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
        if(isset($dbFetch->admin_theme)){
          $theme = $dbFetch->admin_theme;

        }
        
        if($theme == 'light'){
          echo "<link rel='stylesheet' href='css/style.css'>";
        }else if($theme == 'dark'){
          echo "<link rel='stylesheet' href='css/dark.css'>";
        }else{
          echo "<link rel='stylesheet' href='css/style.css'>";
        }
        /*else{
          echo "No theme selected in database";
          echo "<link rel='stylesheet' href='style.css'>";
        }*/
      }

    ?>


    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>AdSys</title>
  </head>

<!-- Change background on login screen -->
  <body
    <?php
    if(isset($_GET['page'])){
      $page = $_GET['page'];
    }else{
      $page = "";
    }
    if($page == 'login'){
      echo "class='login-bg'";
    }
    ?>
  >
    

  <!-- Bootstrap Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
  <a class="navbar-brand" href="index.php">Ad<i>Sys</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav">
      <?php
        if(isset($_GET['page'])){
          $page = $_GET['page'];
        }else{
          $page = "";
        }

        $sql = "SELECT * FROM admin_pages";
        $sqlQuery = $db->query($sql);

        if($sqlQuery){
          while($dbFetch = $sqlQuery->fetch_object()){
            if($dbFetch->page_slug == $page){
              echo "
              <li class='nav-item active'>
                  <a class='nav-link' href='$dbFetch->page_link'>$dbFetch->page_title 
                  <span class='sr-only'>(current)</span></a>
                </li>
            ";
            }else{
              echo "
                <li class='nav-item'>
                    <a class='nav-link' href='$dbFetch->page_link'>$dbFetch->page_title  
                </a></li>
            ";
            }
          } 
        }
      ?>
    </ul>
    <!-- Display logout and user name-->
    <?php 
    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true){
      echo "
      <a href='?page=logout' class='nav-link ml-auto' id='white'>Log ud</a>
      ";
      /*
      echo "<div class='dropdown'";
      echo "<a class='nav-link btn btn-secondary dropdown-toggle' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" . $_SESSION['admin'] . "</a>";
      echo "
        <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
        <a class='dropdown-item' href='#'>Action</a>
        <a class='dropdown-item' href='#'>Another action</a>
        <a class='dropdown-item' href='#'>Something else here</a>
      </div>
        ";
      echo "</div>";
      */
      echo "<div class='dropdown' id='test'>
      <a class='btn btn-secondary dropdown-toggle' id='admin-name' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>". 
        $_SESSION['admin'] .
      " </a>";




      echo "
      <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>

        <a class='dropdown-item' href='#'>
        
        <div class='custom-control custom-switch'>
        ";
        $admin = $_SESSION["admin"];
        $sql = "SELECT * FROM admins WHERE admin_name = '$admin'";
        $sqlQuery = $db->query($sql);
      
        if($sqlQuery){
          $dbFetch = $sqlQuery->fetch_object();
          if($dbFetch->admin_theme == 'light'){
            echo "
            <input type='checkbox' name='themeSwitch' class='custom-control-input' id='customSwitches'>
            ";
          }else if($dbFetch->admin_theme == 'dark'){
            echo "
              <input checked type='checkbox' name='themeSwitch' class='custom-control-input' id='customSwitches'>
            ";
          }
        }
        if(isset($_POST['themeSubmit'])){
          $admin = $_SESSION["admin"];
          $sql = "SELECT * FROM admins WHERE admin_name = '$admin'";
          $sqlQuery = $db->query($sql);
        
          if($sqlQuery){
            $dbFetch = $sqlQuery->fetch_object();
            if($dbFetch->admin_theme == 'light'){
              $sql = "UPDATE admins SET 
                admin_theme = 'dark'
                WHERE admin_id ='$dbFetch->admin_id'
              ";
              $sqlQuery = $db->query($sql);
              if($sqlQuery){
                header("Refresh:0");
              }
            }else if($dbFetch->admin_theme = 'dark'){
              $sql = "UPDATE admins SET 
                admin_theme = 'light'
                WHERE admin_id ='$dbFetch->admin_id'
              ";
              $sqlQuery = $db->query($sql);
              if($sqlQuery){
        
                header("Refresh:0");
        
              }
            }
          }
        
        }
        echo "
        
        <label class='custom-control-label' for='customSwitches'>Night Mode</label>
        </div>
        
        </a>

        <a class='dropdown-item' href='#'>
        
        <form method='post'>
        <input type='submit' name='themeSubmit' value='Skift tema'/>
      </form>
        
        
        </a>
        <!--<a class='dropdown-item' href='#'>Something else here</a>-->
      </div>
    </div>";
    }
    ?>
  </div>
</nav>

<!-- Main site content goes here -->
<main>
  
<?php /*
if(isset($_POST['themeSubmit'])){
  $admin = $_SESSION["admin"];
  $sql = "SELECT * FROM admins WHERE admin_name = '$admin'";
  $sqlQuery = $db->query($sql);

  if($sqlQuery){
    $dbFetch = $sqlQuery->fetch_object();
    if($dbFetch->admin_theme == 'light'){
      $sql = "UPDATE admins SET 
        admin_theme = 'dark'
        WHERE admin_id ='$dbFetch->admin_id'
      ";
      $sqlQuery = $db->query($sql);
      if($sqlQuery){
        header("Refresh:0");
      }
    }else if($dbFetch->admin_theme = 'dark'){
      $sql = "UPDATE admins SET 
        admin_theme = 'light'
        WHERE admin_id ='$dbFetch->admin_id'
      ";
      $sqlQuery = $db->query($sql);
      if($sqlQuery){

        header("Refresh:0");

      }
    }
  }

}


echo "<form method='post'>
        <input type='submit' name='themeSubmit' value='change theme'/>
      </form>


";*/


?>

<div class="container main">
<?php 
if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true){

  if(isset($_GET['page'])){

    if(function_exists($page)){

      call_user_func($page, $db);
    }
  }else{
    echo "<h1 class='text-center'>Værktøjer</h1>";

  }
}else{
  login($db);
}
?>  
</div>
</main>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="http://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="script.js"></script>
    <script src="login.js" type="text/javascript"></script>
  </body>
</html>