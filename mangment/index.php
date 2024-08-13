<?php include('../dbconfig.php');
session_start();
$st2=0;
$user="USER";
$student_1=$database->prepare("SELECT * FROM student WHERE status2=:st1 AND ROLE=:USER ");
$student_1->bindParam("st1",$st1);
$student_1->bindParam("USER",$user);
$student_1->execute();
$students=$student_1->fetchAll();

// if(isset($_SESSION['user'])){
//     if($_SESSION['user']->ROLE=="MANGER"){

//     }else{}
// }else{
//     header('location:../login.php');
//     die("");
// }
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الإدارة العليا</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="arabicfont">
    <div class="wrapper">
        <aside id="sidebar" class="arabicfont">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo arabicfont">
                    <a href="#">الإدارة العليا</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger" dir="rtl"><?php echo count($students);  ?></span>
                    <a href="newstudents.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>الطلبات الغير موافق عليها</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="newstudents.php" class="sidebar-link">
                    <i class="lni lni-write"></i>     
        
                    <span>الطلبات الموافق عليها</span>
                    </a>
                </li>
                    </ul>
                </li>
                
                </li>

            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span><?php echo "تسجيل الخروج"?></span>
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
                        <h3 class="fw-bold fs-4 mb-3">نظام الطلبات الالكتروني</h3>
                        <div class="row">
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0">
                                    <div class="card-body py-4 text-center shadow -lg p-3 mb-5 bg-body rounded">
                                        <h5 class="mb-2 fw-bold">
                                            عدد الطلبات الجديدة
                                        </h5>
                                        <p class="mb-2 fw-bold text-danger">
                                        <?php echo count($students);  ?>
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                            </span>
                                            <span class=" fw-bold">
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card  border-0">
                                    <div class="card-body py-4 text-center shadow -lg p-3 mb-5 bg-body rounded">
                                        <h5 class="mb-2 fw-bold">
                                            عدد الطلبات المقبولة
                                        </h5>
                                        <p class="mb-2 fw-bold text-success">
                                            4
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                                
                                            </span>
                                            <span class="fw-bold">
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">

                                <div class="card  border-0">
                                    <div class="card-body py-4 text-center shadow -lg p-3 mb-5 bg-body rounded">
                                        <h5 class="mb-2 fw-bold">
                                        الطلاب الواجب أن يتقدموا لامتحان تحديد الصف 
                                        </h5>
                                        <p class="mb-2 fw-bold text-success">
                                            4
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                                
                                                </span>
                                                <span class="fw-bold">
                                                    
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h3 class="fw-bold fs-4 my-3">
                        </h3>
                        <div class="row">
                            <div class="col-12">
                                 <table class="table table-striped">
                                    <!-- <thead>
                                        <tr class="highlight">
                                            <th scope="col">id</th>
                                            <th scope="col">الاسم الأول</th>
                                            <th scope="col">الشهرة</th>
                                            <th scope="col">اسم الأب</th>
                                            <th scope="col">اسم الأم</th>
                                            <th scope="col">تاريخ الميلاد</th>
                                            <th scope="col">هل درس الطالب مسبقاً</th>
                                            <th scope="col">الدولة التي درس فيها</th>
                                            <th scope="col">اخر صف حصل على شهادته</th>
                                            <th scope="col">بلد الإقامة الحالي</th>
                                            <th scope="col">رقم ولي الأمر</th>
                                            <th scope="col">جواز السفر للطالب</th>
                                            <th scope="col">جواز السفر للأب</th>
                                            <th scope="col">جواز السفر للأم</th>
                                        </tr>
                                    </thead> -->
                                    <tbody>
                                        <tr>                      
                                        
                                    </tbody> 
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>