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
    
    <title>Ugarit Virtual School || Register</title>

</head>
<body>
    <style>
        .radius-left{
            border-bottom-left-radius: 13em !important;
                border-top-right-radius: 17em;
                border-bottom-right-radius: 9em;
        }
    </style>
      
    <div class="contanier " lang="ar" dir="rtl">  
        
            <h2 class="fs-3 text-center arabicfont text-black mb-5" style="margin-top: 30px;" >التسجيل الالكتروني في مدرسة أوغاريت الافتراضية</h2>
            <div class="toast align-items-center text-bg-primary border-0   mb-3" role="alert" aria-live="assertive" aria-atomic="true" id="close" style="opacity:1;border-bottom-left-radius: 140px;">
                <div class="d-flex">
                    <div class="toast-body arabicfont text-danger">
                        يرجى حفظ رقم الموبايل وكلمة المرور من أجل تسجيل الدخول مجدداً
                    </div>
                    <button type="button" class="btn-close btn-close-black me-2 m-auto" data-bs-dismiss="toast"  onclick="close()" aria-label="Close"></button>
                </div>
            </div>
            <div class="toast align-items-center text-bg-primary border-0 border-input mb-3" role="alert" aria-live="assertive" aria-atomic="true" id="close2" style="opacity:1;border-bottom-left-radius: 140px;">
                <div class="d-flex">
                    <div class="toast-body arabicfont text-danger">
                        يتم سداد الأقساط بالكويت نقداً أو دفع الكتروني أما بقية الدول حوالة 
                    </div>
                    <button type="button" class="btn-close btn-close-black me-2 m-auto" data-bs-dismiss="toast"  onclick="close2()" aria-label="Close"></button>
                </div>
            </div> 
            <form action="insertst.php" method="POST" enctype="multipart/form-data">

            <div class="row g-4">
                <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont">
                    <div class="input-group mb-3">
                <span class=" arabicfont border-input" id="basic-addon1">الاسم الأول <span class="text-danger">*</span></span>
                <input type="text" class="form-control border-input radius-left" name="firstname" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            </div>

            <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont">
            <div class="input-group mb-3">
                <span class="arabicfont" id="basic-addon1 ">الشهرة<span class="text-danger">*</span> </span>
                <input type="text" class="form-control border-input radius-left" name="lastname" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            </div>

            <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont">
            <div class="input-group mb-3">
                <span class=" arabicfont" id="basic-addon1">اسم الأب <span class="text-danger">*</span></span>
                <input type="text" class="form-control border-input radius-left" name="fathername" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            </div>

                <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont">
                <div class="input-group mb-3">
                <span class=" arabicfont" id="basic-addon1">اسم الأم <span class="text-danger">*</span></span>
                <input type="text" class="form-control border-input radius-left" name="mothername" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                </div>
                
                <div class=" col-lg-4 col-md-3 col-sm-1 arabicfont ">
                    <div class="input-group mb-3">
                        <span class=" arabicfont" id="basic-addon1">تاريخ الميلاد <span class="text-danger">*</span></span>
                        <input type="date" class="form-control border-input radius-left" name="birthday" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-3 col-sm-1">
                <div class="input-group mb-3">
                            <label class="arabicfont" for="inputGroupSelect01">الجنس <span class="text-danger">*</span></label>
                            <select class="form-select arabicfont border-input radius-left" name="gender" id="inputGroupSelect01" required>
                                <option selected>لم يتم الاختيار</option>
                                <option value="1">ذكر</option>
                                <option value="2">أنثى</option>
                            </select>
                            </div>
                </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1">
                                <div class="input-group mb-3">
                                    <label class=" arabicfont " for="studied">هل درس الطالب مسبقاً <span class="text-danger">*</span></label>
                                    <select class="form-select border-input arabicfont radius-left" name="ifstudied" id="studied">
                                        <option selected required>لم يتم الاختيار</option>
                                        <option value="1">نعم</option>
                                        <option value="2">لا</option>
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class=" col-lg-4 col-md-3 col-sm-1 " id="schoolQuestion" style="display:none">
                                <div class="input-group mb-3">
                                    <span class=" arabicfont" id="basic-addon1 ">الدولة التي درس  فيها الطالب <span class="text-danger">*</span></span>
                                    <input type="text" class="form-control border-input arabicfont radius-left" name="contrystudy" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 " id="lastcertficate" style="display:none">
                                <div class="input-group mb-3">
                                    <span class=" arabicfont" id="basic-addon1">اخر صف دراسي حصل على شهادته <span class="text-danger">*</span></span>
                                    <input type="text" class="form-control border-input arabicfont radius-left" name="lastcert" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                    <span class=" arabicfont" id="basic-addon1 ">بلد الإقامة الحالي <span class="text-danger">*</span></span>
                                    <select class="form-select arabicfont border-input radius-left" name="contrynow">
                                    <option value="">اختر البلد</option>
                                    <optgroup label="الشرق الأوسط">
                                        <option value="syria">سورية</option>
                                        <option value="kuwait">الكويت</option>
                                        <option value="saudi_arabia">المملكة العربية السعودية</option>
                                        <option value="united_arab_emirates">الإمارات العربية المتحدة</option>
                                        <option value="lebanon">لبنان</option>
                                        <option value="iraq">العراق</option>
                                        <option value="jordan">الأردن</option>
                                        <option value="libya">ليبيا</option>
                                        <option value="mauritania">موريتانيا</option>
                                        <option value="morocco">المغرب</option>
                                        <option value="oman">عمان</option>
                                        <option value="palestine">فلسطين</option>
                                        <option value="qatar">قطر</option>
                                        <option value="somalia">الصومال</option>
                                        <option value="sudan">السودان</option>
                                        <option value="tunisia">تونس</option>
                                        <option value="yemen">اليمن</option>
                                        <option value="egypt">مصر</option>
                                    </optgroup>
                                    <optgroup label="أوروبا">
                                        <option value="france">فرنسا</option>
                                        <option value="germany">ألمانيا</option>
                                        <option value="italy">إيطاليا</option>
                                        <option value="spain">إسبانيا</option>
                                        <option value="uk">المملكة المتحدة</option>
                                    </optgroup>
                                    <optgroup label="أمريكا">
                                        <option value="usa">الولايات المتحدة الأمريكية</option>
                                        <option value="canada">كندا</option>
                                    </optgroup>
                                </select>
                                
                            </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                    <span class=" arabicfont" id="basic-addon1 ">رقم ولي الطالب مع رمز النداء <span class="text-danger">*</span></span>
                                    <input type="tel" class="form-control border-input arabicfont radius-left" name="numberdad" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                    <span class=" arabicfont" id="basic-addon1 "> كلمة المرور <span class="text-danger">*</span></span>
                                    <input type="password" class="form-control border-input arabicfont radius-left" name="password" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                    <span class="arabicfont" id="basic-addon1">
                                    <select class="form-select border-input arabicfont radius-left" name="" id="studied" required style="border: none;">
                                        <option selected >وثيقة الطالب</option>
                                        <option value="1">جواز السفر</option>
                                        <option value="2">هوية شخصية</option>               
                                        <option value="3">إخراج قيد مدني</option>
                                        <option value="4"> دفتر العائلة صفحة الطالب</option>
                                    </select>

                                    </span>
                                    <input type="file" class="form-control border-input arabicfont radius-left" name="passport_s" aria-label="Username" aria-describedby="basic-addon1" required >
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                <select class="form-select border-input arabicfont radius-left" name="" id="studied" required style="border: none;">
                                        <option selected >وثيقة الأب</option>
                                        <option value="1">جواز السفر</option>
                                        <option value="2">هوية شخصية</option>               
                                        <option value="3"> دفتر العائلة صفحة الأب</option>
                                    </select>                                   
                                     <input type="file" class="form-control border-input arabicfont radius-left" name="passport_f" aria-label="Username" aria-describedby="basic-addon1" required >
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-3 col-sm-1 ">
                                <div class="input-group mb-3">
                                <select class="form-select border-input arabicfont radius-left" name="" id="studied" required style="border: none;">
                                        <option selected >وثيقة الأم</option>
                                        <option value="1">جواز السفر</option>
                                        <option value="2">هوية شخصية</option>               
                                        <option value="3">إخراج قيد مدني</option>
                                        <option value="4"> دفتر العائلة صفحة الأم</option>
                                    </select>
                                <input type="file" class="form-control border-input arabicfont radius-left" name="passport_m" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-6 col-sm-2">

                                <button type="submit" class="btn btn-primary" name="upload" id="notid">إرسال</button>
                                <button type="reset" class="btn btn-primary" name="reset" id="">حذف البيانات</button>


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