<?php
    include('nav.html');
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/styleform.css">
    
    <title>Ugarit Virtual School||Register</title>

</head>
<body>
    <div class="contanier ">  
            <h2 class="fs-3 text-center arabicfont text-black mb-5" style="margin-top: 30px;" >التسجيل الالكتروني في مدرسة أوغاريت الافتراضية</h2>
            <form action="insertdata.php" method="POST">

            <div class="row g-4">
                <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont">
                    <div class="input-group mb-3">
                <span class="input-group-text arabicfont" id="basic-addon1">الاسم الأول</span>
                <input type="text" class="form-control border-input" name="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            </div>

            <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont">
            <div class="input-group mb-3">
                <span class="input-group-text arabicfont" id="basic-addon1 ">الاسم الأخير</span>
                <input type="text" class="form-control border-input" name="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            </div>

            <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont">
            <div class="input-group mb-3">
                <span class="input-group-text arabicfont" id="basic-addon1">اسم الأب</span>
                <input type="text" class="form-control border-input" name="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            </div>

                <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont">
                <div class="input-group mb-3">
                <span class="input-group-text arabicfont" id="basic-addon1">اسم الأم</span>
                <input type="text" class="form-control border-input" name="" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                </div>
                
                <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont ">
                    <div class="input-group mb-3">
                        <span class="input-group-text arabicfont" id="basic-addon1">تاريخ الميلاد</span>
                        <input type="date" class="form-control border-input" name="" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class=" col-lg-4 col-md-3 col-sm-1">
                <div class="input-group mb-3">
                            <label class="input-group-text arabicfont" for="inputGroupSelect01">الجنس</label>
                            <select class="form-select arabicfont" name="" id="inputGroupSelect01">
                                <option selected>لم يتم الاختيار</option>
                                <option value="1">ذكر</option>
                                <option value="2">أنثى</option>
                            </select>
                            </div>
                </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1">
                                <div class="input-group mb-3">
                                    <label class="input-group-text arabicfont " for="studied">هل درس الطالب مسبقاً</label>
                                    <select class="form-select border-input arabicfont" name="" id="studied">
                                        <option selected >لم يتم الاختيار</option>
                                        <option value="1">نعم</option>
                                        <option value="2">لا</option>
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class=" col-lg-4 col-md-3 col-sm-1 " id="schoolQuestion" style="display:none">
                                <div class="input-group mb-3">
                                    <span class="input-group-text arabicfont" id="basic-addon1 ">الدولة التي درس  فيها الطالب</span>
                                    <input type="text" class="form-control border-input arabicfont" name="" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 " id="lastcertficate" style="display:none">
                                <div class="input-group mb-3">
                                    <span class="input-group-text arabicfont" id="basic-addon1">اخر صف دراسي حصل على شهادته</span>
                                    <input type="text" class="form-control border-input arabicfont" name="" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                    <span class="input-group-text arabicfont" id="basic-addon1 ">بلد الإقامة الحالي</span>
                                    <input type="text" class="form-control border-input arabicfont" name="" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                    <span class="input-group-text arabicfont" id="basic-addon1 ">رقم ولي الطالب مع رمز النداء</span>
                                    <input type="tel" class="form-control border-input arabicfont" name="" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                    <span class="input-group-text arabicfont" id="basic-addon1 ">صورة جواز السفر للطالب</span>
                                    <input type="file" class="form-control border-input arabicfont" name="" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                    <span class="input-group-text arabicfont" id="basic-addon1 ">صورة جواز السفر للأب</span>
                                    <input type="file" class="form-control border-input arabicfont" name="" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                    <span class="input-group-text arabicfont" id="basic-addon1 ">صورة جواز السفر للأم</span>
                                    <input type="file" class="form-control border-input arabicfont" name="" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-lg-12 col-6 col-sm-2">

                                <button type="submit" class="btn btn-primary">إرسال</button>
                            </div>
                </div>
    







        </div>
            
    </form>






<?php
        include('footer.html');
?>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>