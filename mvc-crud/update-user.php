<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">


<img src="images/<?php echo  $fetch->file1;?>" alt="" height="100"><br>
<?php echo  $fetch->file1;?><br><br>
Name:<input type="text" name="nm" value="<?php echo  $fetch->name;?>"/><br><br>
File:<input type="file" name="file"/>

   
<br><br>
<input type="submit" name="submit" value="Update">
<a href="/mvc/mvc-crud/manage-users">View Records</a>

    
</body>
</html>