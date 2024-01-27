<!-- <?php

include "model.php";

class control extends Model
{
    function __construct()
    {
        Model::__construct(); // Use parent::__construct() to call the constructor of the parent class.

        $url = $_SERVER['PATH_INFO'];

        switch($url) 
        {
            case "/index":
                if (isset($_REQUEST['sub'])) 
                {
                    $name = $_REQUEST['nm'];
                    $file = $_FILES['file']['name'];
                    $path = "images/". $file;
                    $temp_file = $_FILES['file']['tmp_name'];
                    move_uploaded_file($temp_file, $path);

                    $data = array(
                        "name" => $name,
                        "file1" => $file
                    );

                    $ins = $this->insert("users",$data);
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
                $user_arr = $this->select("users");
                include "manage-user.php";
                break; 



                     
            case "/update-users":
                if($_REQUEST['update_id'])
                {
                    $id=$_REQUEST['update_id'];

                    $where = array(
                       "uid"=>$id 
                    );

                    $res=$this->select_where("users",$where);

                  $fetch=  $res->fetch_object();
                //  echo $fetch->file;

                //  exit;
                if(isset($_REQUEST['submit']))
                {
                    $name=$_REQUEST['nm'];
                    $file=$_FILES['file']['name'];
                    $temp_file = $_FILES['file']['tmp_name'];
                    $path ="images/".$file;

                    move_uploaded_file($temp_file,$path);

                    // echo $file;exit;
                    
            
                    if($_FILES['file']['size'] > 0)
                    {

                        
                        
                        $data = array(
                            "user_name"=>$name,
                            "user_image"=>$file
                        );
    
                    }

                    else
                    {
                        $data = array(
                            "user_name"=>$name
                           
                        );
    
                    }

                        // print_r($data);
                        // exit;

                   $r =  $this->update("users",$data,$where);
                        // print_r ($r);
                  
                }

                }
                include "update-user.php";
                break;




            case"/delete-users":
                if($_REQUEST['del_id'])
                {
                    $id=$_REQUEST['del_id'];

                    $where = array(
                        "uid" => $id
                    );

                    $res = $this->delete_where("users",$where);
                    if($res)
                    {
                     echo " <script>

                     alert('Deleted...!');
                     window.location = '/mvc/mvc-crud/manage-users';
                     
                     </script>";
                    }
                }
                break;
        }
    }
}
$obj = new control();

?> -->
