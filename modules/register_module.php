<?php
session_start();

if(isset($_SESSION['username']))
{
    header('location:../index.php');
    exit();
}

else
{
    if (isset($_POST['reg'])) {
        require '../includes/dbh.php';
        
    
        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $pass1 = $_POST['password1'];
        $pass2 = $_POST['password2'];
        $userid = $_POST['uname'];
        $imgUrl="https://avatars.dicebear.com/v2/avataaars/.svg".$fullname.".svg?options[mood][]=happy";
        
    
        
        $hashedPass= md5($pass1);
        
    
    
        //check for empty fields 
    
    
        if (empty($fullname)  || empty($email) || empty($pass1) || empty($pass2) || empty($userid)) {
            header('location:index.php?error=Empty Fields!Try Again!');
                exit();
        }
        
        
        else if ($pass1 !== $pass2) {
            header('location:index.php?error=Password not matched!Try Again!');
            exit();
        }
    
        else
        {
            //check already registred username in database
            $sql = "SELECT userid FROM users WHERE userid=? or email=?";
    
            $stmt = mysqli_stmt_init($conn);
    
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                echo "statement Error";
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt,"ss",$userid,$email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
    
                if ($resultCheck > 0) {
                    header('location:index.php?error=Username and email Already taken!');
                exit();
                }
                else
                {
    
                    $sql = "INSERT INTO users(fname,userid,email,upass,avatar)VALUES(?,?,?,?,?);";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        echo 'statement error2!';
                        exit();
                    }
                    else
                    {
                          mysqli_stmt_bind_param($stmt,"sssss",$fullname,$userid,$email,$hashedPass,$imgUrl);
                          mysqli_stmt_execute($stmt);
                          header('location:index.php?success=Account Created Now Login');
                          exit();
                          //move_uploaded_file($fileTempName,$directory);
                          
                    }
    
    
                }
            }
        }
    
        
    
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }


}
?>