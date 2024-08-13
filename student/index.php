<?php
include('../dbconfig.php');

session_start();
$id_user=$_SESSION['user']->ID;
$sta=$database->prepare("SELECT * FROM student WHERE ID=:id_user");
$sta->bindParam("id_user",$id_user);
$sta->execute();
$data=$sta->fetchObject();
$_SESSION['data']=$data;

// if(isset($_SESSION['user'])){
//     if($_SESSION['user']->ROLE=="USER"){

//     }else{
//         header('location:../login.php');

//         // die("");
//     }
// }else{
//     header('location:../login.php');

// }
?>



<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب الطالب</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>

<body class="arabicfont">
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#"><?php echo( $_SESSION['user']->FIRSTNAME ." ". $_SESSION['user']->LASTNAME);?></a>
                </div>
                
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="profile.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>حساب الطالب</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>الإشعارات</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>تسجيل الخروج</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">

                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="account.png" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <?php
                        echo '<h3 class="fw-bold fs-4 mb-3 alert alert-primary text-center" role="alert">'."أهلا " . $_SESSION['user']->FIRSTNAME ." ". $_SESSION['user']->LASTNAME .'</h3>';
                        
                        ?>
                        <div class="row">
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0">
                                    <div class="card-body py-4 text-center shadow -lg p-3 mb-5 bg-body rounded">
                                        <h5 class="mb-3 fw-bold ">
                                            حالة الطلب
                                        </h5>
                                        <div class="mb-0">
                                                <?php 
                                                $stat1=$_SESSION['data']->status1;
                                                $stat2=$_SESSION['data']->status2;
                                                $stat3=$_SESSION['data']->status3;
                                                $stat1_2=$_SESSION['data']->status1_2;
                                                $statall=$stat1+$stat2+$stat3;
                                                if(($statall===1)||($statall===2)){
                                                    echo'<span class="badge text-success me-2 alert alert-primary" role="alert">قيد المعالجة</span>';
                                                    
                                                }else if($statall===3) {
                                                    echo'<span class="badge text-success me-2 alert alert-primary" role="alert">تم قبوله بنجاح</span>';
                                                }else{
                                                    echo'<span class="badge text-success me-2 alert alert-primary" role="alert">قيد المعالجة</span>';
                                                }
                                                
                                                ?>
                                            
                                            <span class=" fw-bold">
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card  border-0">
                                    <div class="card-body py-4 text-center shadow -lg p-3 mb-5 bg-body rounded">
                                        <h5 class="mb-3 fw-bold">
                                            قيمة الدفع المطلوبة
                                        </h5>
                                        
                                        <div class="mb-0"> <?php if($statall===3){
                                                echo ('<h5 class="badge text-success me-2 alert alert-danger" role="alert" style="font-size:100%">')?>
                                                <?php if(!$_SESSION['user']->PAYSTATUS=="")

                                                {echo $_SESSION['user']->PAYSTATUS ;}
                                                echo('</h5>');
                                            }else{echo('<h5 class="badge text-success me-2 alert alert-danger" role="alert" style="font-size:100%">'."الطلب قيد المعالجة"."</h5>");}
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0">
                                    <div class="card-body py-4 text-center shadow -lg p-3 mb-5 bg-body rounded">
                                        <h5 class="mb-3 fw-bold">
                                            يوجد امتحان قبول
                                        </h5>
                                        
                                        <div class="mb-0"><?php if(($statall===3)&&($_SESSION['user']->EXAMSTATUS===1))
                                        { echo('<h5 class="badge text-success me-2 alert alert-danger" role="alert" style="font-size:100%">نعم</h5>');                                            
                                            
                                            echo('</h5>');
                                        }
                                        else if(($statall===3)&&($_SESSION['user']->EXAMSTATUS===2))
                                        { echo('<h5 class="badge text-success me-2 alert alert-danger" role="alert" style="font-size:100%">لا</h5>');}
                                        else{echo('<h5 class="badge text-success me-2 alert alert-danger" role="alert" style="font-size:100%">الطلب قيد المعالجة</h5>');}
                                        ?>
                                        
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 ">
                                <div class="card border-0">
                                    <div class="card-body py-4 text-center shadow -lg p-3 mb-5 bg-body rounded">
                                        <h5 class="mb-3 fw-bold">
                                            علامة امتحان القبول
                                        </h5>
                                        
                                        <div class="mb-0"><?php if(($statall===3)&&(isset( $_SESSION['user']->GRADE)))
                                        {
                                            echo('<h5 class="badge text-success me-2 alert alert-danger" role="alert" style="font-size:100%">'.$_SESSION['user']->GRADE);
                                            
                                            
                                            echo('</h5>');
                                        }
                                        else{echo('<h5 class="badge text-success me-2 alert alert-danger" role="alert" style="font-size:100%">الطلب قيد المعالجة</h5>');}
                                        ?>
                                        
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </h3>
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href=" #">
                                <strong></strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                        
                        
                        </di v>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>