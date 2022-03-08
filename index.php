<?php
session_start();

if(isset($_SESSION['username'])){

    echo ' Well Done ' . $_SESSION['username'].'<br>';
    echo ' <a href="logout.php?logout">logout</a>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Know your Batter Cost</title>
    <!--BOOTSTRAP LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootsrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--CSS link-->
    <link href="css/signin.css" rel="stylesheet">
</head>
<body>
      
  
  <div class="container py-3">
    <header>
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <a class="me-3 py-2 text-dark text-decoration-none" href="logout.php">Logout</a>
        </nav>
      </div>
    </header>

    <div class="container">


        <h3 class="display-4 fw-5 text-center">You only need Egg and Water For your Sponge Cake</h3>
        <p class="lead mb-4 text-center">
            Sponge Premixes - Super soft & moist - perfect for layered cakes.Produced to accomodate different types of fillings not only 
            for your standard forest cakes, but also to allow endeless creative possiblities of layer combinations. 
            <blockquote class="blockquote text-center">Just add egg and water. 250g of mix makes 500g of batter that</blockquote>
        </p>
            <form class="p-4 p-md-5 border rounded-3 row-cols-4 bg-light">                
              <div class="form-floating mb-3 form-check form-check-inline col-md-3">
                <input type="text" class="form-control" id="Premix" placeholder="Premix (250g Standard Recipe">
                <label for="floatingInput"></label>
              </div>
              <div class="form-floating mb-3 form-check form-check-inline col-md-3">
                <input type="text" class="form-control" id="premixcpk" placeholder="Cost per Kg">
                <label for="floatingPassword"></label>
              </div>
                         
              <div class="form-floating mb-3 form-check form-check-inline col-md-2">
              <button class="w-100 btn btn-lg btn-primary" id="button" type="submit">Sum</button>
              </div>

              <div class="form-floating mb-3 form-check form-check-inline col-md-3">
                <input type="text" class="form-control" id="premixrc" placeholder="Recipe cost">
                <label for="floatingPassword"></label>
              </div>
              <hr>
          <!--egg cost-->
              <div class="form-floating mb-3 form-check form-check-inline col-md-3">
                <input type="text" class="form-control" id="eggs" placeholder="eggs">
                <label for="floatingInput"></label>
              </div>
              <div class="form-floating mb-3 form-check form-check-inline col-md-3">
                <input type="text" class="form-control" id="eggscpk" placeholder="Cost per Kg">
                <label for="floatingPassword"></label>
              </div>
              <div class="form-floating mb-3 form-check form-check-inline col-md-2">
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sum</button>
              </div>
              <div class="form-floating mb-3 form-check form-check-inline col-md-3">
                <input type="text" class="form-control" id="eggsrc" placeholder="Recipe cost">
                <label for="floatingPassword"></label>
              </div>

            </form>
          </div>
        </div>
      </div>
      
    
    <script src="js/index.js"></script>
</body>
</html>

