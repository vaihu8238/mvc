<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<table border="1" style="padding: 10px; ">

<tr>
    <th>User Data</th>
   
</tr>

<?php

if(!empty($user_arr))
{
    foreach($user_arr as $user)
    {
        //  echo $user->user_image;

?>
<tr>
    <td><?php  echo $user->uid;?></td>
    <td><?php  echo $user->name;?></td>
    <td><?php  echo $user->file;?></td>
    <td><img src="images/<?php echo $user->file?>" alt="" height="100px"></td>


    <td>
        <a  href="/mvc/mvc-crud/update-users?update_id=<?php echo $user->uid; ?>">
        <i class="fa fa-pencil-square  fa-2x" aria-hidden="true"></i>
        </a>
    </td>
        
    <td>
        <a  href="/mvc/mvc-crud/delete-users?del_id=<?php echo $user->uid; ?>">
        <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
        </a>
    </td>
        
    
</tr>


<?php } } ?>



 
</table>
</body>
</html>