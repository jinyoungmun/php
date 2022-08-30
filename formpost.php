<?php
    if($_POST['id']== 'server'){
        if($_POST['pw']== '1234'){
            echo "Login succeed";
        }
        else{
            echo "password wrong";
        }
    }
    else
    {
        echo "ID wrong";
    }
?>