<?php include('../dbconfig.php');
session_start();

$st1_2=0;
$user="USER";
$examst=1;
$student_1=$database->prepare("SELECT * FROM student WHERE status1_2=:st1_2 AND EXAMSTATUS=:exam AND ROLE=:USER ");
$student_1->bindParam("st1_2",$st1_2);
$student_1->bindParam("exam",$examst);
$student_1->bindParam("USER",$user);

$student_1->execute();
$students=$student_1->fetchAll();

// if(isset($_SESSION['user'])){
//     if($_SESSION['user']->ROLE=="SEC"){

//     }else{
//         header('location:../login.php');

    
//     }
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
                    <a href="index.php"><?php echo ($_SESSION['sec']->FIRSTNAME); ?></a>
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
                
                </li>
                
            </ul>
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
                                            <th scope="col">تاريخ الميلاد</th>
                                            <th scope="col">الجنس</th>
                                            <th scope="col">هل درس الطالب مسبقاً</th>
                                            <th scope="col">الدولة التي درس فيها</th>
                                            <th scope="col">اخر صف حصل على شهادته</th>
                                            <th scope="col">بلد الإقامة الحالي</th>
                                            <th scope="col">رقم ولي الأمر</th>
                                            <th scope="col">الحالة</th>

                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr>
                                        <?php 
                                        foreach($students as $student) { ?> 
                                            
                                            <th class="table-primary" scope="row"><?php echo  $student['ID']; ?></th>
                                            <td class="table-primary"><?php echo $student['FIRSTNAME']; ?></td>
                                            <td class="table-primary"><?php echo $student['LASTNAME']; ?></td>
                                            <td class="table-primary"><?php echo $student['FATHERNAME']; ?></td>
                                            <td class="table-primary"><?php echo $student['MOTHERNAME']; ?></td>
                                            <td class="table-primary"><?php echo $student['BIRTHDAY']; ?></td>
                                            <td class="table-primary"><?php if($student['GENDER']==1){echo "ذكر";} else if($student['GENDER']==2){echo "انثى";} ?></td>
                                            <td class="table-primary"><?php if($student['IFSTUDIED']==1){echo "نعم";} else if($student['IFSTUDIED']==2){echo "لا";} ?></td>
                                            <td class="table-primary"><?php echo $student['CONTRYSTUDY']; ?></td>
                                            <td class="table-primary"><?php echo $student['LASTCERT']; ?></td>
                                            <td class="table-primary"><?php echo $student['CONTRYNOW']; ?></td>
                                            <td class="table-primary"><?php                        
                                                    if($student["CONTRYNOW"]=="syria") {echo "963";}
                                                    else if ($student["CONTRYNOW"]=="kuwait") {echo "965";}
                                                    else if ($student["CONTRYNOW"]=="saudi_arabia") {echo "966";}
                                                    else if ($student["CONTRYNOW"]=="lebanon") {echo "961";}
                                                    else if ($student["CONTRYNOW"]=="jordan") {echo "962";}
                                                    else if ($student["CONTRYNOW"]=="iraq") {echo "964";}
                                                    else if ($student["CONTRYNOW"]=="yamen") {echo "967";}
                                                    else if ($student["CONTRYNOW"]=="libya") {echo "218";}
                                                    else if ($student["CONTRYNOW"]=="morocco") {echo "212";}
                                                    else if ($student["CONTRYNOW"]=="oman") {echo "968";}
                                                    else if ($student["CONTRYNOW"]=="qatar") {echo "974";}
                                                    else if ($student["CONTRYNOW"]=="egypt") {echo "20";}
                                                    else if ($student["CONTRYNOW"]=="france") {echo "33";}
                                                    else if ($student["CONTRYNOW"]=="uk") {echo "44";}
                                                    else if ($student["CONTRYNOW"]=="italy") {echo "39";}
                                                    else if ($student["CONTRYNOW"]=="spain") {echo "34";} 
                                                    echo $student['NUMBERDAD']; ?></td>
                                            <td class="table-primary "> 
                                            <?php 
                                                    echo '<form action="updateexam.php" method="get">
                                                    <input type="hidden" name="sd1" value="'. $student['ID'] . '">
                                                    <input type="hidden" name="s1" value="1">
                                                    <select class="form-select border-input arabicfont" name="class" id="" required>
                                                    <option selected >تحديد الصف</option> 
                                                    <option value="1">الأول</option>
                                                    <option value="2">الثاني</option>
                                                    <option value="3">الثالث</option>
                                                    <option value="4">الرابع</option>
                                                    <option value="5">الخامس</option>
                                                    <option value="6">السادس</option>
                                                    <option value="7">السابع</option>
                                                    <option value="8">الثامن</option>
                                                    <option value="9">التاسع</option>
                                                    <option value="10">العاشر</option>
                                                    <option value="11">الحادي عشر</option>
                                                    <option value="12">الثاني عشر</option>
                                                    <option value="13">ب 1</option>
                                                    <option value="14">ب 2</option>
                                                    <option value="15">ب 3</option>
                                                    <option value="16">ب 4</option>
                                                    </select> 
                                                    <a href="https://api.whatsapp.com/send?phone=';              
                                                    if($student["CONTRYNOW"]=="syria") {echo "963";}
                                                    else if ($student["CONTRYNOW"]=="kuwait") {echo "965";}
                                                    else if ($student["CONTRYNOW"]=="saudi_arabia") {echo "966";}
                                                    else if ($student["CONTRYNOW"]=="lebanon") {echo "961";}
                                                    else if ($student["CONTRYNOW"]=="jordan") {echo "962";}
                                                    else if ($student["CONTRYNOW"]=="iraq") {echo "964";}
                                                    else if ($student["CONTRYNOW"]=="yamen") {echo "967";}
                                                    else if ($student["CONTRYNOW"]=="libya") {echo "218";}
                                                    else if ($student["CONTRYNOW"]=="morocco") {echo "212";}
                                                    else if ($student["CONTRYNOW"]=="oman") {echo "968";}
                                                    else if ($student["CONTRYNOW"]=="qatar") {echo "974";}
                                                    else if ($student["CONTRYNOW"]=="egypt") {echo "20";}
                                                    else if ($student["CONTRYNOW"]=="france") {echo "33";}
                                                    else if ($student["CONTRYNOW"]=="uk") {echo "44";}
                                                    else if ($student["CONTRYNOW"]=="italy") {echo "39";}
                                                    else if ($student["CONTRYNOW"]=="spain") {echo "34";}
                                                    echo $student['NUMBERDAD'].'&text=';
                                                    echo ("الطالب ".$student['FIRSTNAME']." ".$student['LASTNAME']." يرجى الدخول إلى الامتحان التالي www.google.com"). '&source=&data=" target="_blank">ارسال رسالة</a>
                                                    <input class="form-control border-input text-center" type="text" placeholder="علامة الطالب" name="grade">
                                                    <input class="btn btn-primary" type="submit" value="تأكيد">
                                                    </form>'; 
                                                    ?>

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