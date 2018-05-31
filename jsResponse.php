<?php
    $conn = mysqli_connect('localhost','root','','registration') or die("Database connect false!"); // connect database

    $user_name = $_POST['txt_username'];

    if(isset($_POST['isLogin'])){
        $obj_query = mysqli_query("SELECT * FROM users WHERE user_name LIKE $user_name AND user_password LIKE $txt_password LIMIT 1");
        $row = mysqli_fetch_row($conn,$obj_query);

        if($row == 0)
        {
            echo 'PASSWORD: FAIL';
            exit();
        }
        else
        {
            echo "SUCCESS";
            exit();
        }
    }

?>