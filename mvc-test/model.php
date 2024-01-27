<?php

class Model
{
    public $con = "";

    function __construct()
    {
        $this->con = new mysqli("localhost", "root","", "mvcdb");
    }

    function insert($table, $data)
    {
        $col_arr = array_keys($data);
        $col = implode(",", $col_arr);

        $val_arr = array_values($data);
        $val = implode("','", $val_arr);

        $query = "INSERT INTO $table ($col) VALUES ('$val')";

        $run = $this->con->query($query);
    }

    // select from tbl 

    function select($tbl)
    {
       $sele = "select * from $tbl";
       $res = $this->con->query($sele);
       while ($fetch=$res->fetch_object()) 
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


        // delete from tblname where col=val and col=val;

        $del ="delete from $tbl where 1=1 ";

        $i=0;
        foreach($where as $w)
        {
            $del.="and $col_arr[$i] = '$val_arr[$i]'";
            $i++;
        }
        $run=$this->con->query($del);
        return $run;

    }

    function view($tbl,$where)
    {
        $col_arr = array_keys($where);
        $val_arr = array_values($where);

        $sel ="select * from $tbl where 1=1 ";

        $i=0;
        foreach($where as $w)
    {
        $sel.="and $col_arr[$i] = '$val_arr[$i]'";
        $i++;
    }

    $run = $this->con->query($sel);
    return $run;
    
    }


    function select_where($tbl,$where)
    // select * from table where col=val
    // select * from tabel where col=val and col=val

    {
        $col_arr = array_keys($where);
        $val_arr = array_values($where);

        $sel ="select * from $tbl where 1=1 ";

        $i=0;

    foreach($where as $w)
    {
        $sel.="and $col_arr[$i] = '$val_arr[$i]'";
        $i++;
    }

    $run = $this->con->query($sel);
    return $run;

    }

    function update($tbl,$data,$where)
    {
        //update table set col=val,col=val where col=val

        $col_arr=array_keys($data);
		$val_arr=array_values($data);
        $upd = "update $tbl set";
        $count = count($data);
        $i=0;
        foreach($data as $d)
        {
            if($count==$i+1)
            {
                $upd.= " $col_arr[$i]='$val_arr[$i]'";
            }
            else
            {
                $upd.= " $col_arr[$i]='$val_arr[$i]',";
                $i++;
            }
        }

        $upd.="where 1=1";
		$wcol_arr=array_keys($where);	
		$wval_arr=array_values($where);
		$i=0;
		foreach($where as $c)
		{
			$upd.=" and $wcol_arr[$i]='$wval_arr[$i]'";
			$i++;
		}
		$run=$this->con->query($upd);  // query run by con
		return $run;
    }

}

?>