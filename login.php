<?php 
//---session start

session_start();

        /*pages to be included required files*/
        include("connection.php");
        include("functions.php");
    

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
        //SOMETHING was posted
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(!empty($username) && !empty ($password) && !is_numeric($username))
        {

            //read from database
            $query = "SELECT * from users where username = '$username' limit 1";

            $result =  mysqli_query($con, $query);


            if($result)
			{        

                if($result && mysqli_num_rows($result) > 0)
                  {

                  $user_data = mysqli_fetch_assoc($result);
                  
                  //IF USERpassword is the same as the initial saved one
                  if($user_data['password'] === $password)
                  {

                     $_SESSION['user_id'] = $user_data['user_id'];
                    header("location: index.php");
                     die;
                  }
                }

      }
            
            echo "Wrong username or password!"; 
        }else
        {
            echo "Wrong username or password!";
        }
    
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Signin form</title>
    <!--BOOTSTRAP LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootsrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--CSS link-->
    <link href="css/signin.css" rel="stylesheet">
       <head>
        <body class="text-center">
            <main class="form-signin">
                <form method="post">
                    <em class="bi bi-calculator-fill fs-2 mb-4" fill="currentColor"></em></i>
                        <h1 class="h3 mb-3 fw-normal">Please signin</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="text" type="text" name="username" placeholder="username" autocomplete="off">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input id="text" type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                        <label for="floatingPassword">Password</label>
                    </div>
                        <a href="signup.php">Signin</a><br><br>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" id="button" type="submit" value="login">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; Maryanne Njuguna - 2021</p>
                </form>
        </main>


    </body>
</html>