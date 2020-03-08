<?php
session_start();

if(isset($_SESSION['username']))
{
    header('location:../index.php');
    exit();
}

else
{
    if (isset($_POST['login'])) {
        require '../includes/dbh.php';
    
        $mailid = $_POST['userid'];
        $pass = $_POST['password'];
        $hashedPass=md5($pass);
        
    
        //check for empty fields
    
        if (empty($mailid) ||  empty($pass)) {
            header('location:index.php?error=Empty Fields! Try Again!');
            exit();
        }
        else
        {
            $sql = "SELECT * FROM users WHERE userid = ?  AND upass= ?;";
    
            $stmt = mysqli_stmt_init($conn);
    
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                echo 'statement error!';
                exit();
            }
    
            else
            {
                mysqli_stmt_bind_param($stmt,"ss",$mailid,$hashedPass);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
    
                if ($resultCheck > 0) {
    
                    session_start();
                    $_SESSION['username']=$mailid;
                    
                    header('location:../index.php?login=success');
    
                    
                }
                else
                {
    
                    header('location:index.php?error=Wrong Cerdidentials!Try Again');
                    exit();
                    
    
                }
            }
    
        }
    
    
    }


}


    ?>