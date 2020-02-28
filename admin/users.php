<?php
function users($db){

    $sql = "SELECT * FROM users";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        echo "<div class='text-center'><h1>User List</h1></div>";
        echo "
        <table class='table table-striped'>
        <thead>
        <tr>
            <th scope='col'>User #id</th>
            <th scope='col'>Email</th>
            <th scope='col'>Password</th>
            <th scope='col'>Update</th>
            <th scope='col'>Delete</th>
        </tr>
        </thead>
        <tbody>
        ";
    }else{
        echo "Error, couldn't run query!";
    }

    while($dbFetch = $sqlQuery->fetch_object()){
        echo "
            <tr>
                <td>$dbFetch->user_id</td>
                <td>$dbFetch->user_email</td>
                <td>$dbFetch->user_password</td>
                <td><a href='?page=update_user&id=$dbFetch->user_id'>Update</a></td>
                <td><a class='text-danger' href='?page=delete_user&id=$dbFetch->user_id'>Delete</a></td>
            </tr>
            ";
    }

    echo "
        <tr class='bg-light'>
            <td><a class='text-success' href='?page=create_user'>Create new user</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        </tbody>
        </table>
        ";
}
function update_user($db){
    $id = $_GET['id'];

    // HENT DATA
    $sql = "SELECT * FROM users WHERE user_id = '$id' ";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }

    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formEmail'])){
            echo "Email field is empty";
        }
        if(empty($_POST['formPassword'])){
            echo "Password field is empty";
        }

        if(!empty($_POST['formEmail']) && !empty($_POST['formPassword'])){

            $varEmail = $_POST['formEmail'];
            $varPassword = $_POST['formPassword'];

            $sql = "UPDATE users SET
                user_email = '$varEmail',
                user_password = '$varPassword'
                WHERE user_id = '$id';
                ";

            if($db->query($sql)){
                echo "User updated succesfully! Redirecting you in 3 seconds.";
                header( "refresh:3;url=?page=users" );
            }else{
                echo "Error. User couldn't update! Redirecting you in 3 seconds ";
                header( "refresh:3;url=?page=users" );
            }
    }
}

    echo "
    <h1 class='text-center'>Update User</h1>
    <form method='post'>
        <input type='text' name='formEmail' value='$dbFetch->user_email'</input><br>
        <input type='text' name='formPassword' value='$dbFetch->user_password'</input><br>
        <input type='submit' name='formSubmit'>
    </form>
    <a href='?page=users'>Go back</a>
    ";
}

function delete_user($db){
    $id = $_GET['id'];

    $sql = "SELECT * FROM users where user_id=$id";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }

    if(isset($_POST['formSubmit'])){
        $sql = "DELETE FROM users Where user_id=$id";
        $sqlQuery = $db->query($sql);
        if($sqlQuery){
            echo "User deleted! Redirecting you in 3 seconds.";
            header( "refresh:3;url=?page=users" );
        }else{
            echo "Error. Couldnt delete user!";
            header( "refresh:3;url=?page=users" );
        }
    }

    echo "
    <h1>Are your sure you want to delete user: " . $dbFetch->user_email . " ?</h1>
    <form method='post'>
        <input type='submit' name='formSubmit'>
    </form>
    <a href='?page=users'>Go back</a>
    ";
}

function create_user($db){

    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formEmail'])){
            echo "Email field is empty";
        }
        if(empty($_POST['formPassword'])){
            echo "Content field is empty";
        }

        /*if(!empty($_POST['formEmail']) && !empty($_POST['formPassword'])){
            $varEmail = $_POST['formEmail'];
            $varPassword = $_POST['formPassword'];

            $sql = "INSERT INTO users SET
                user_email = '$varEmail',
                user_password = '$varPassword'
                ";

            if($db->query($sql)){
                echo "User Created succesfully! Redirecting you in 3 seconds.";
                header( "refresh:3;url=?page=users" );
            }else{
                echo "Error. Couldn't create user. Redirecting you in 3 seconds.";
                header( "refresh:3;url=?page=users" );
            }
        }*/     

        if(!empty($_POST['formEmail']) && !empty($_POST['formPassword'])){
            $varEmail = $_POST['formEmail'];
            $varPassword = $_POST['formPassword'];

            $sql = "INSERT INTO users SET
                user_email = '$varEmail',
                user_password = '$varPassword'
                ";

            if($db->query($sql)){
                echo "User Created succesfully! Redirecting you in 3 seconds.";
                header( "refresh:3;url=?page=users" );
            }else{
                echo "Error. Couldn't create user. Redirecting you in 3 seconds.";
                header( "refresh:3;url=?page=users" );
            }
        }
        
        


        
    }


    echo "
    <h1 class='text-center'>Create User</h1>
    <form method='post'>
        <input type='text' name='formEmail' placeholder='Email'></input><br>
        <input type='password' name='formPassword' placeholder='Password'></input><br>
        <input type='submit' name='formSubmit'>
    </form>
    <a href='?page=users'>Go back</a>
    ";
}

function create_admin($db){
    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formEmail'])){
            echo "Email field is empty ";
        }
        if(empty($_POST['formPassword'])){
            echo "Password field is empty";
        }

        if(!empty($_POST['formEmail']) && !empty($_POST['formPassword'])){

            if(filter_var($_POST['formEmail'], FILTER_VALIDATE_EMAIL)){

                if($_POST['formPassword'] == $_POST['formRepeatPassword']){

                $varEmail = $_POST['formEmail'];
                $varPassword = password_hash($_POST['formPassword'], PASSWORD_DEFAULT);

                $sql = "INSERT INTO admins SET
                    admin_name = '$varEmail',
                    admin_password = '$varPassword'
                    ";
                }else{
                    echo "New password and repeat password does not match";
                }
        
            }else{
                echo "Not a valid Email";
            }

            if($db->query($sql)){
                echo "Admin Created succesfully! Redirecting you in 3 seconds.";
                header( "refresh:3;url=?page=users" );
            }
        }

    }


    echo "
    <h1 class='text-center'>Create Admin</h1>
    <form method='post'>
        <input type='text' name='formEmail' placeholder='Email'></input><br>
        <input type='password' name='formPassword' placeholder='Password'></input><br>
        <input type='password' name='formRepeatPassword' placeholder='Repeat Password'></input><br>
        <input type='submit' name='formSubmit'>
    </form>
    <a href='?page=users'>Go back</a>
    ";

}

function update_admin($db){
    $id = $_GET['id'];

    // HENT DATA
    $sql = "SELECT * FROM admins WHERE admin_id = '$id' ";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }

    if(isset($_POST['formSubmit'])){

        if(empty($_POST['formEmail'])){
            echo "Email field is empty";
        }
        if(empty($_POST['formPassword'])){
            echo "Password field is empty";
        }

        if(password_verify($_POST['formCurrentPassword'], $dbFetch->admin_password)){
        
        if(!empty($_POST['formEmail']) && !empty($_POST['formPassword'])){
            if(filter_var($_POST['formEmail'], FILTER_VALIDATE_EMAIL)){

                if($_POST['formPassword'] == $_POST['formRepeatPassword']){

            $varEmail = $_POST['formEmail'];
            $varPassword = password_hash($_POST['formPassword'], PASSWORD_DEFAULT);

            $sql = "UPDATE admins SET
                admin_name = '$varEmail',
                admin_password = '$varPassword'
                WHERE admin_id = '$id';
                ";

                }else{
                    echo "New password and repeat password does not match";
                }
        
            }else{
                echo "Not a valid Email";
            }
            if($db->query($sql)){
                echo "Admin updated succesfully! Redirecting you in 3 seconds.";
                header( "refresh:3;url=?page=users" );
            }
        }

    }else{
        echo "Please enter current password";
    }
}

    echo "
    <h1 class='text-center'>Update Admin</h1>
    <form method='post'>
        <input type='text' name='formEmail' value='$dbFetch->admin_name'</input><br>
        <input type='text' name='formCurrentPassword' placeholder='Current password'></input><br>
        <input type='password' name='formPassword' placeholder='New password'></input><br>
        <input type='password' name='formRepeatPassword' placeholder='Repeat New Password'></input><br>
        <input type='submit' name='formSubmit'>
    </form>
    <a href='?page=users'>Go back</a>
    ";
}




function login($db){
    
    $page = $_GET['page'];

    if($page == 'login'){
        // Do nothing
    }else{
        header('Location: ?page=login');
        exit();
    }

    $error = '';

    if(isset($_POST['formSubmit'])){
        $formName = $_POST['formName'];
        $formPassword = $_POST['formPassword'];

        $sql = "SELECT * FROM admins WHERE admin_name='$formName'";
        $sqlQuery = $db->query($sql);
        
       

        if(mysqli_num_rows($sqlQuery) > 0){
            $dbFetch = $sqlQuery->fetch_object();
            if(password_verify($_POST['formPassword'], $dbFetch->admin_password)){
                header('Location: index.php');
                $_SESSION["logged_in"] = true; 
                $_SESSION["admin"] = $dbFetch->admin_name; 
            }else{
                $error = 'Forkert brugernavn eller kodeord';
            }
        }else{
            $error = 'Forkert brugernavn eller kodeord';
                echo $db->error;
        }
    }

    echo "
    
        <div class='login-page'>
        <div class='form rounded'>
        <form class='login-form' method='post'>

        <!-- BUTIKSNAVN -->
        <div class='login-logo-dlg rounded-circle border-3 border-white d-flex justify-content-center align-items-center mx-auto'>
            <p>DEN LILLE <br>GÅRDBUTIK</p>
        </div>
        <!-- BUTIKSNAVN END-->
        
            
            <input type='text' name='formName' placeholder='username'/>
            
            <input type='password' name='formPassword' placeholder='password'/>
            
            <span class='error'>
        ";
        echo $error;
        echo"    
            </span>

            <input  type='submit' class='login-submit rounded' name='formSubmit' value='login'/>
                
            </form>
            </div>
        </div>
        
        ";







}

function logout(){
    session_destroy();
    header('Location: ?page=login');
}

function start_page($db){
    echo "Start page";
    /*header('Location: ?page=users');
    exit();*/
}
?>