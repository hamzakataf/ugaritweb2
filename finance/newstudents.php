<?php include('../dbconfig.php');
session_start();

$st2=1;
$st3=0;
$st1_2=1;
$user="USER";
$student_1=$database->prepare("SELECT * FROM student WHERE status2=:st2 AND status3=:st3 AND status1_2=:status1_2 AND ROLE=:USER");
$student_1->bindParam("st2",$st2);
$student_1->bindParam("st3",$st3);
$student_1->bindParam("status1_2",$st1_2);
$student_1->bindParam("USER",$user);
$student_1->execute();
$students=$student_1->fetchAll();

// if(isset($_SESSION['user'])){
//     if($_SESSION['user']->ROLE=="FINANCE"){

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
    <title>الطلبات الحديثة</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="arabicfont">
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                <a href="index.php">المالية</a>
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
                    <a href="auth.php" class="sidebar-link">
                    <i class="lni lni-write"></i>     
                    
                    <span>الطلبات الموافق عليها</span>          

                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../login.php" class="sidebar-link">
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
                        <h3 class="fw-bold fs-4 mb-3">الطلبات الحديثة التي تتطلب موافقة</h3>
                        <div class="row">
                            <div class="col-12 shadow rounded" >
                                <table class="table table-striped shadow rounded">
                                    <thead class="table-success ">
                                        <tr class="highlight">
                                            <th scope="col">id</th>
                                            <th scope="col">الاسم الأول</th>
                                            <th scope="col">الشهرة</th>
                                            <th scope="col">اسم الأب</th>
                                            <th scope="col">اسم الأم</th>
                                            <th scope="col">الجنس</th>
                                            <th scope="col">بلد الإقامة الحالي</th>
                                            <th scope="col">رقم ولي الأمر</th>
                                            <th scope="col">الصف</th>
                                            <th scope="col">ملاحظات الإدارة</th>
                                            <th scope="col">العملة</th>
                                            <th scope="col">الحالة</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php foreach($students as $student) { ?> 
                                            <th class="table-primary" scope="row"><?php echo  $student['ID']; ?></th>
                                            <td class="table-primary"><?php echo $student['FIRSTNAME']; ?></td>
                                            <td class="table-primary"><?php echo $student['LASTNAME']; ?></td>
                                            <td class="table-primary"><?php echo $student['FATHERNAME']; ?></td>
                                            <td class="table-primary"><?php echo $student['MOTHERNAME']; ?></td>
                                            <td class="table-primary"><?php if($student['GENDER']==1){echo "ذكر";} else if($student['GENDER']==2){echo "انثى";} ?></td>
                                            <td class="table-primary"><?php echo $student['CONTRYNOW']; ?></td>
                                            <td class="table-primary"><?php echo $student['NUMBERDAD']; ?></td>
                                            <td class="table-primary"><?php 
                                            if($student['CLASS']==1){echo "الأول";} 
                                            else if($student['CLASS']==2){echo "الثاني";} 
                                            else if($student['CLASS']==3){echo "الثالث";} 
                                            else if($student['CLASS']==4){echo "الرابع";} 
                                            else if($student['CLASS']==5){echo "الخامس";} 
                                            else if($student['CLASS']==6){echo "السادس";} 
                                            else if($student['CLASS']==7){echo "السابع";} 
                                            else if($student['CLASS']==8){echo "الثامن";} 
                                            else if($student['CLASS']==9){echo "التاسع";} 
                                            else if($student['CLASS']==10){echo "العاشر";} 
                                            else if($student['CLASS']==11){echo "الحادي عشر";} 
                                            else if($student['CLASS']==12){echo "الثاني عشر";} 
                                            else if($student['CLASS']==13){echo "ب 1";} 
                                            else if($student['CLASS']==14){echo "ب 2";} 
                                            else if($student['CLASS']==15){echo "ب 3";} 
                                            else if($student['CLASS']==16){echo "ب 4";} 
                                            ?></td>
                                            <td class="table-primary"><?php echo $student['MANGMENTNOTE']; ?></td> 
                                            <td class="table-primary"><?php 
                                            if($student['CONTRYNOW']=="syria"){echo "ليرة سورية";} 
                                            else if($student['CONTRYNOW']=="kuwait"){echo "دينار كويتي";} 
                                            else if($student['CONTRYNOW']=="saudi_arabia"){echo "ريال سعودي";} 
                                            else if($student['CONTRYNOW']=="united_arab_emirates"){echo "درهم اماراتي";} 
                                            else if($student['CONTRYNOW']=="lebanon"){echo "دولار امريكي";} 
                                            else if($student['CONTRYNOW']=="iraq"){echo "دولار امريكي";} 
                                            else if($student['CONTRYNOW']=="jordan"){echo "دولار امريكي";} 
                                            else {echo "دولار امريكي";}

                                            ?></td>

                                            <td class="table-primary "> 
                                            <?php echo '<form action="update.php" method="get">
                                                        <input type="hidden" name="sd1" value="' . $student['ID'] . '">
                                                        <input type="hidden" name="u_p" value="' . $_SESSION['FINANCE']->FIRSTNAME . '">
                                                        <input type="hidden" name="s1" value="1">
                                                        <input class="form-control border-input text-center mb-2" type="text" placeholder="مبلغ الدفع" name="payst">
                                                        <input class="form-control border-input text-center" type="text" placeholder="كود الطالب" name="codest">
                                                        <input class="btn btn-primary" type="submit" value="قبول">
                                                        </form>'; ?>
                                        </tr><?php } 
                                        
                                        ?>
                                        
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