<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
      
<h4  style="padding-top: 2%; padding-right: 2%; padding-left: 2%;"> VIEW RECORDS
<a href="/mvc/mvc-test/index" class="btn btn-primary float-end">Add new</a>
</h4><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Password</th>
            <th>confirm_pwd</th>
            <th>Gender</th>
            <th>HObbies</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>

<tbody>
<tr>
<?php
if(!empty($user_arr))
{
    foreach($user_arr as $user)
    {
        // echo $user->fname;
?>

<tr>
    <td><?php echo $user->uid?></td>
    <td><?php echo $user->fname?></td>
    <td><?php echo $user->lname?></td>
    <td><?php echo $user->email?></td>
    <td><?php echo $user->password?></td>
    <td><?php echo $user->c_password?></td>
    <td><?php echo $user->gender?></td>
    <td><?php echo $user->hobbies?></td>
    <!-- <td><?php echo $user->image?></td> -->

    <td><img src="images/<?php echo $user->image?>" alt="" height="100px"></td>

    <td>
        <a  href="/mvc/mvc-test/edit-users?update_id=<?php echo $user->uid; ?>">
        <i class="fa fa-pencil-square  fa-2x" aria-hidden="true"></i></a>
    
        
    
        <a  href="/mvc/mvc-test/delete-users?del_id=<?php echo $user->uid; ?>">
        <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
        </a>
    

    
        <a  href="/mvc/mvc-test/view-users?v_id=<?php echo $user->uid; ?>">
        <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
        </a>
    </td>

</tr>

<?php } }?>
</tr> 
</tbody>       
</table>
   

</body>
</html>