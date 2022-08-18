<?php 


    function insert($table, $array){
        global $conn;


        $fields = implode("`, `", array_keys($array));
        $values = implode("', '", $array);
        $query = "INSERT INTO `$table` (`$fields`) VALUES ('$values');";
        
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result){
            return true;
        }else{
            return false;
        }
    }


    function select($table, $fields, $filters, $extra){
        global $conn;

        $query = "SELECT ";

        if($fields != null){
            foreach($fields as $value){
                $query .= "`$value`, ";
            }
            
            $query = substr($query,0,-2);
        }else{
            $query .= "* ";
        }

        $query .= "FROM `$table` ";

        
        if($filters != null){
            $query .= "WHERE";
            foreach($filters as $key => $value){
                $query .= "`$key` = `$value`AND ";
            }

            $query = substr($query,0,-4);
        }


        if($extra != null){
            $query .= "$extra";
        }


        $result = mysqli_query($conn , $query) or die(mysqli_error($conn));

		
		while($row = mysqli_fetch_assoc($result)) {
		    $data[] = $row;
		}

		return $data;
    }


    function update($table, $new, $filters){
        global $conn;

        $query = "UPDATE `$table` SET ";
    

        if($new != null){
            foreach($new as $key => $value){
                $query .= "`$key` = `$value`, ";
            }

            $query = substr($query,0,-2);
        }

        if($filters != null){
            $query .= " WHERE ";
            foreach($filters as $key => $value){
                $query .= "`$key` = `$value` AND ";
            }

            $query = substr($query,0,-4);
        }

        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result){
            return true;
        }else{
            return false;
        }


    }


    function delete($table, $filters){
        global $conn;

        $query = "DELETE FROM `$table` ";

        if($filters != null){
            foreach($filters as $key => $value){
                $query .= "`$key` = `$value` AND ";
            }

            $query = substr($query,0,-4);
        }

        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result){
            return true;
        }else{
            return false;
        }

    }





?>