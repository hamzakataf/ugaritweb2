<?php
include('dbconfig.php');
include('nav.html');

if (isset($_POST['username']) && isset($_POST['pass'])) {
     $passuser=sha1($_POST['pass']);
    $login= $database->prepare("SELECT * FROM STUDENT WHERE NUMBERDAD = :numberdad AND PASSWORD = :password");
    if(isset($_POST['username'])===($login->bindParam("numberdad",$_POST['username']))&&(isset($_POST['pass']))===($login->bindParam("password",$passuser)))
    {
    $login->execute();
    $user=$login->fetchObject();
    if($user->ROLE==="USER"){
    header('location:student/index.php');
    session_start();
    $_SESSION['user']=$user;
    exit();

    }else if($user->ROLE==="MANGER"){
        $_SESSION['MANGER']=$user;
        header('location:mangment/index.php');
        
        exit();
    }else if($user->ROLE==="SEC"){
        session_start();
        $_SESSION['sec']=$user;
        header('location:secritaria/index.php');
        exit();
    }else if($user->ROLE==="FINANCE"){
        $_SESSION['FIN']=$user;
        header('location:FINANCE/index.php');
        exit();
    }
    }else{
    
    // $login->bindParam("numberdad",$_POST['username']);
    // $login->bindParam("password",$_POST['pass']);


    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
</head>
<body>
    
    <div class="container arabicfont shadow border-input">
    <form action="" method="POST">
            <div class=" ">
                <!-- <label class="form-label" for="formfile">رقم الموبايل او اسم المستخدم</label> -->
                <input class="form-control border-input mb-3 mt-1 text-center"placeholder="رقم الموبايل أو اسم المستخدم" type="text" name="username">
                <input class="form-control border-input text-center" placeholder="كلمة المرور" type="password" name="pass">
                <button class="btn btn-primary border-input btn-md  mt-2 "  type="submit">تسجيل الدخول</button>
            </div>
            
        </div>
    </form>
</body>
</html>

<?php
include('footer.html');
?>