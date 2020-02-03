<?php
	session_start();
    include("includes/connection.php");

    //FUNGSI LOGIN
     if (isset($_POST['login'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $op=$_GET['op'];
        if (isset($_POST['']) or (isset($_POST['']))) {
            echo "anda harus login";
        }
         else if($op=="in")
        {   $cek=mysql_query("select * from tbl_users where user_username='$username' AND user_password='$password'");

            if(mysql_num_rows($cek)==1)
            {//jika sukses akan bernilai 1
                $c=mysql_fetch_array($cek);
                $_SESSION['user_username']=$c['user_username'];
                $_SESSION['level']=$c['level'];
                    if ($c['level']=="manager") 
                    {
                        //echo "sukses admin";
                        $_SESSION['username']=$username;
                        echo "<script>window.open('index.php','_self')</script>";
                      
                    }
                    elseif ($c['level']=="karyawan" ) 
                    {
                        //echo "sukses";
                        $_SESSION['username']=$username;
                        echo "<script>window.open('index_guru.php','_self')</script>";
                                
                    }
                    
                    
            }
            else
            {
                echo "<script>alert('Kombinasi username dan password anda salah !')</script>";
                 echo "<script>window.open('login.php','_self')</script>";
            }

        }
        else if($op=="out"){
            //echo "gagal login";
            unset($_SESSION['username']);
            unset($_SESSION['level']);
            header("location:index.php");
        }
        
    }
    

?> 

