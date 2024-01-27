<?php

include "model.php";

class control extends Model
{
    function __construct()
    {
        Model::__construct();

        $ur = $_SERVER['PATH_INFO'];

        switch($ur)
        {
            case "/index":
                if (isset($_REQUEST['sub'])) 
                {
                    $fnm= $_POST['fn'];
                    $lnm= $_POST['ln'];
                    $eml= $_POST['em'];
                    $pass= $_POST['pwd'];
                    $cpass= $_POST['cpwd'];
                    $gen= $_POST['gender'];
                   
                    $ch= $_POST['chk'];
                    $chk="";
                    foreach($ch as $v)
                    {
                        $chk =$chk.$v . ",";
                    }
                    
    
                    $file = $_FILES["file"]["name"];
                    $temp_file = $_FILES["file"]["tmp_name"];
                    $location = "images/".$file;
                    move_uploaded_file($temp_file,$location);
                    
                    $data = array(
                        "fname" => $fnm,
                        "lname" => $lnm,
                        "email" => $eml,
                        "password" => $pass,
                        "c_password" => $cpass,
                        "gender" => $gen,
                        "hobbies" => $chk,
                        "image" => $file,
                    
                        
                    );

                    $ins = $this->insert("details",$data);
                    if($ins) 
                    {
                        echo "<script>
                                alert('Records inserted..!');
                            </script>";
                    }
                }
                    
                    include "index.php";
                    break;

                

            case "/manage-users":
                $user_arr = $this->select("details");
                include "manage-user.php";
                break; 


            case "/delete-users":
                if($_REQUEST['del_id'])
                {
                    $id=$_REQUEST['del_id'];

                    $where = array(
                       "uid"=>$id
                    );
                   $re = $this->delete_where("details",$where);
                   if($re)
                   {
                    echo " <script>

                    alert('Deleted...!');
                    window.location = '/mvc/mvc-test/manage-users';
                    
                    </script>";
                   }
               }
               break;


               case "/view-users":
                if($_REQUEST['v_id'])
                {
                    $id = $_REQUEST['v_id'];

                    $where = array(
                     "uid"=>$id
                    );
 
                   $run =  $this->select_where("details",$where);

                  $v_fetch = $run->fetch_object();
                  

                }
                include "view-user.php";
                break;


                case"/edit-users":
                if($_REQUEST['update_id'])
                {
                    $id = $_REQUEST['update_id'];

                    $where = array(
                     "uid"=>$id
                    );
 
                   $run =  $this->select_where("details",$where);

                  $fetch = $run->fetch_object();

                  if(isset($_REQUEST['sub']))
                  {
                      $fname = $_REQUEST['fn'];
                      $lname = $_REQUEST['ln'];
                      $email = $_REQUEST['em'];
                      $pass = $_REQUEST['pwd'];
                      $cpass = $_REQUEST['cpwd'];
                      $gender = $_REQUEST['gender'];

                      $ch = $_REQUEST['chk'];
                      $chk="";
                        foreach($ch as $v)
                        {
                            $chk =$chk.$v . ",";
                        }

                     $file = $_FILES["file"]["name"];
                     $temp_file = $_FILES["file"]["tmp_name"];
                     $path = "images/".$file;
                     move_uploaded_file($temp_file,$path);
                        
                     if($_FILES['file']['size'] > 0)
                     {
                      $data = array(
                          "fname"=>$fname,
                          "lname"=>$lname,
                          "email"=>$email,
                          "password"=>$pass,
                          "c_password"=>$cpass,
                          "gender"=>$gender,
                          "hobbies"=>$chk,
                          "image"=>$file,
                          
                      );
                    }else{
                        $data = array(
                            "fname"=>$fname,
                            "lname"=>$lname,
                            "email"=>$email,
                            "password"=>$pass,
                            "c_password"=>$cpass,
                            "gender"=>$gender,
                            "hobbies"=>$chk);
                    }
  
                     $res =  $this->update("details",$data,$where);
                     if($res)
                     {
                      echo "
                      
                      <script>
                      alert('data updated...!');
                      </script>
                      ";
                     }
                  }

                }
                    include "edit.php";
                    break;
        }
    }
}
$obj = new control();


?>