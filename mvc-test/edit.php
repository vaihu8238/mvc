<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   
<div class="container-fluid bg-dark text-light py-3">
    <header class="text-center">
        <h1 class="display-6">welcome edit-page</h1>
    </header>
</div>

<section class="container my-2 bg-dark w-50 text-light p-2">
<form class="row g-3 p-3" method="POST"  enctype="multipart/form-data">

<!-- <div><img src="images/<?php echo $fetch->image;?>" height="150px" width="150px" style=" border-radius: 50%; object-fit: cover; 
          margin-bottom: 5px; " /><br><br></div> -->

<div class="col-md-6">
    <label for="fnm" class="form-label">Fname</label>
    <input type="text" class="form-control" name="fn" value="<?php echo $fetch->fname;?>">
  </div>
  <div class="col-md-6">
    <label for="lnm" class="form-label">Lname</label>
    <input type="text" class="form-control"name="ln" value="<?php echo $fetch->lname;?>">
  </div>
  <div class="col-md-12">
    <label for="em" class="form-label">Email</label>
    <input type="email" class="form-control" name="em" value="<?php echo $fetch->email;?>">
  </div>
  <div class="col-md-6">
    <label for="pass" class="form-label">Password</label>
    <input type="text" class="form-control" name="pwd" value="<?php echo $fetch->password;?>">
  </div>
  <div class="col-6">
    <label for="cpass" class="form-label">confirm-password</label>
    <input type="text" class="form-control" name="cpwd" value="<?php echo $fetch->c_password;?>">
  </div><br>

  Select Gender:
  
  <?php
            $gender= $fetch->gender;
            echo $gender;
            if($gender=='male')
            {      
  ?>
 <div class="form-check">      
    <input class="form-check-input" type="radio" name="gender" value="male" checked>
  <label class="form-check-label">male
  </label>
 </div>
 <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="female" >
  <label class="form-check-label">female
  </label>         
</div>

<?php  } 
else 
{ ?>
  <div class="form-check">      
    <input class="form-check-input" type="radio" name="gender" value="male">
  <label class="form-check-label" for="m">
    male
  </label>
 </div>
 <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="female" checked>
  <label class="form-check-label" for="f">
    female
  </label>         
</div>
<?php } ?>

<br>

hobbies:      

<?php
        
        $chk= $fetch->hobbies;
        // echo $chk;
        $t = explode(',',$chk);
        //  print_r($t);

        if(in_array("music",$t))
        {

       
        ?>
 <div class="form-check form-check-inline">

      <label class="form-check-label">
        <input type="checkbox" class="form-check-input"  name="chk[]" value="workout">workout
      </label>
    </div>
    <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" checked name="chk[]" value="music">music
      </label>
    </div>
    <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="chk[]" value="dance">dance
      </label>
    </div>

    <?php }
    if (in_array("workout",$t)) { ?>

<div class="form-check form-check-inline">

<label class="form-check-label">
  <input type="checkbox" class="form-check-input"  checked name="chk[]" value="workout">workout
</label>
</div>
<div class="form-check form-check-inline">
<label class="form-check-label">
  <input type="checkbox" class="form-check-input"  name="chk[]" value="music">music
</label>
</div>
<div class="form-check form-check-inline">
<label class="form-check-label">
  <input type="checkbox" class="form-check-input" name="chk[]" value="dance">dance
</label>
</div> 

<?php 
    }
   
    if (in_array("dance",$t)) { ?>

<div class="form-check form-check-inline">

<label class="form-check-label">
  <input type="checkbox" class="form-check-input"  name="chk[]" value="workout">workout
</label>
</div>
<div class="form-check form-check-inline">
<label class="form-check-label">
  <input type="checkbox" class="form-check-input"  name="chk[]" value="music">music
</label>
</div>
<div class="form-check form-check-inline">
<label class="form-check-label">
  <input type="checkbox" class="form-check-input" checked name="chk[]" value="dance">dance
</label>
</div> 

<?php 
    }
    ?>



  

 <br><br><br>
<div class="mb-3">
  <label for="file" class="form-label">Select file:</label>
  <input class="form-control" type="file" name="file">
</div>

<br><br><br>
  <div class="col-12">
    <button type="submit" name="sub" class="btn btn-primary">UPDATE</button>
    <a href="/mvc/mvc-test/manage-users" class="btn btn-primary float-end">BACK</a>
  </div><br>
  
   
</form>