<?php

    $userid = $_POST['Userid'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost","root","","employ");

    if($conn){
        $sql = "SELECT * FROM dtlemp";
        $result = mysqli_query($conn,$sql);

        $flag = FALSE;
        while($row = mysqli_fetch_assoc($result)){
            if($row['User id'] == $userid){
                $flag = TRUE;
                if($row['password'] == $password){
                    echo "Login Successfully";
                    break;
                }
                else{
                    echo "Incorrect Password";
                    break;
                }
            }
            if(!$flag){
                echo "User Not Found";
            }
        }
    }
    else{
        echo "Cannot Connected Successfully";
    }
?>