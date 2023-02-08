<?php
    include "server.php";
    if(isset($_POST["name"])){
        $sql = "SELECT * FROM emp where name='".$_POST["name"]."' and skills= '".$_POST["skills"]."'";
        //echo $sql;
        $result = $conn->query($sql);
        $res = array();
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "<br>Name: " . $row["name"]. " - Skills: " . $row["skills"]. "<br>";
            array_push($res,$row["name"],$row["skills"]);
        }
        } else {
        echo "0 results";
        }
        $new_arr = array();
        $med = "{";
        for ($x = 0; $x < sizeof($res); $x+=1){
            if($x%2==1){
                $med .= "Name => ".$res[$x].", ";
            }
            if($x%2==0){
                $med = "Skills => ".$res[$x].", ";
            }
            array_push($new_arr,$med);
        }
        $med .="}";
        echo $med;
        //var_dump($new_arr);
        $conn->close();
    }
    else{
        echo "Empty query!";
    }
?>