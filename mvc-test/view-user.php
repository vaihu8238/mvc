<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA-VIEW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container-fluid bg-dark text-light py-3">
    <header class="text-center">
        <h1 class="display-6">welcome view-page</h1>
    </header>
</div>

<section class="container my-2 bg-dark w-50 text-light p-2">
<form  class="row g-3 p-3" action="" method="post" enctype="multipart/form-data">


<div>
<img src="images/<?php echo $v_fetch->image;?>" height="150px" width="150px" style=" border-radius: 50%; object-fit: cover; 
          margin-bottom: 5px; " /><br><br>
<!-- <button name="btn"><a href="">UPDATE IMAGE</a></button><br><br> -->
</div>


<div class="col-md-5">
            <span>Id :</span>
            <input type="text" class="form-control" value="<?php echo $v_fetch->uid;?>">
</div>

    <div class="col-md-5">
            <span>Fname :</span>
            <input type="text"  class="form-control" value="<?php echo $v_fetch->fname;?>">
    </div>

    <div class="col-md-5">
            <span>Lname :</span>
            <input type="text"  class="form-control"  value="<?php echo $v_fetch->lname;?>">
    </div>

    <div class="col-md-5">
            <span>Email :</span>
            <input type="email"  class="form-control" value="<?php echo $v_fetch->email;?>">
        
    </div>

    <div class="col-md-5">
            <span>password :</span>
            <input type="password"  class="form-control" value="<?php echo $v_fetch->password;?>">
    </div>

    <div class="col-md-5">
            <span>confirm password:</span>
            <input type="password"  class="form-control" value="<?php echo $v_fetch->c_password;?>">
    </div>

    <div class="col-md-5">
            <span>gender :</span>
            <input type="text"  class="form-control" value="<?php echo $v_fetch->gender;?>">
    </div>
    
    <div class="col-md-5">
            <span>hobbies :</span>
            <input type="text"  class="form-control" value="<?php echo $v_fetch->hobbies;?>">
    </div>
    <br>
    <br>
    <!-- <div class="col-12"> -->
    <!-- <button><a href="index.php" class="btn btn-primary float-end">BACK</a></button> -->
    <!-- </div> -->
    <br><br>

   

    
 </section>                    
</form>
</body>
</html>