<?php

$server="localhost";
$username="root";
$password="";
$dbname="assignment";

$conn = new mysqli($server,$username,$password,$dbname);

// if($conn)
// {
//     echo"connected!!";
// }

if(isset($_POST['submit']))
{
   $name = $_POST['nm'];
  // echo"<br>$name";
   $email = $_POST['em'];
   //echo"<br>$email";

$sql=  "insert into users(uname,uemail) values('$name','$email')";
$conn->query($sql);

}



?>

<html>

<head>
<title>DATA CONNECTION FORM :</title>
</head>

<body>
<form method="post" >   

    <table border="1" cellspacing="5px">
        <tr>
            <td>NAME:</td>
            <td> <input type="text" name="nm" id="un"> </td>
        </tr>

        <tr>
            <td>EMAIL:</td>
            <td> <input type="text" name="em" id="ue"> </td>
        </tr>

        <tr>
            <td> <input type="submit" name="submit" value="submit" onclick="return validate()"> </td>
        </tr>
    </table>
</form>
<script>

   nm = document.getElementById('un');
   em = document.getElementById('ue');
//    console.log(res);
//    console.log(res.value)

   function validate()
   {
        if(nm.value == "")
        {
            alert("name is required....!!");
            return false;
        }

        if(em.value == "")
        {
            alert("email is required....!!");
            return false;
        }

   }


</script>

</body>
</html>