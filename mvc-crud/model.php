<?php

class Model
{
    public $conn = "";

    function __construct()
    {
        $this->conn = new mysqli("localhost", "root","", "mvcdb");
    }

    function insert($table, $data)
    {
        $col_arr = array_keys($data);
        $col = implode(",", $col_arr);

        $val_arr = array_values($data);
        $val = implode("','", $val_arr);

        $query = "INSERT INTO $table ($col) VALUES ('$val')";

        $run = $this->conn->query($query);
    }

    function select($tbl)
    {
         $sel = "select * from $tbl";
         $res = $this->conn->query($sel);
         while($fetch = $res->fetch_object())
         {
            $arr[] = $fetch;
         }

      if(!empty($arr))
      {
        return $arr;
      }


    }

    function delete_where($tbl,$where)
    {
        $col_arr = array_keys($where);
        $val_arr = array_values($where);

         // delete from tableName where col = val  and cole=value

         $del =  "delete from $tbl where 1=1 ";
         $i=0;
         foreach($where as $d)
         {
            $del.="and $col_arr[$i] = '$val_arr[$i]'";
            $i++;
         }
         $run=$this->conn->query($del);
         return $run;

    }

    function select_where($tbl,$where)
    {
        $col_arr = array_keys($where);
        $val_arr = array_values($where);

        // "select col-name from tbl where col=val";
        $sel ="select * from $tbl where 1=1 ";
        $i=0;

        foreach($where as $w) 
        {
            $sel.= "and $col_arr[$i] = '$val_arr[$i]'";
            $i++;
        }
        $run =$this->conn->query($sel);

        return $run;


    }



}





?>