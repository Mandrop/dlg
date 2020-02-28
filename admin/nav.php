<?php

  if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true){

    echo "
    <nav class='navbar navbar-expand-lg navbar-dark  fixed-top'>
    <a class='navbar-brand' href='index.php'>Ad<i>Sys</i></a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
      <ul class='nav navbar-nav'>
    ";

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
    echo "</ul>";
    // Display logout and user name
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

    echo "</div>";
    echo "</nav>";
    




  }


  ?>