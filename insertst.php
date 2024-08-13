<?php
if (isset($_POST['submit'])) {
        // إرسال إشعار إلى صفحة seritaria/index.php
        $url = 'secritaria/index.php'; // استبدل بالعنوان الفعلي للصفحة
        $data = array('message' => 'تم تسجيل طالب جديد'); // رسالة الإشعار

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result !== false) {
            echo "<script type=\"text/javascript\">";
            echo "alert('تم التسجيل بنجاح!');";
            echo "</script>";
        } else {
            echo "<script type=\"text/javascript\">";
            echo "alert('حدث خطأ أثناء إرسال الإشعار. الرجاء المحاولة مرة أخرى.');";
            echo "</script>"; }
        }

?>


<?php
include('dbconfig.php');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$ifstudied=$_POST['ifstudied'];
$contrystudy=$_POST['contrystudy'];
$lastcert=$_POST['lastcert'];
$contrynow=$_POST['contrynow'];
$numberdad=$_POST['numberdad'];

$password=sha1( $_POST['password']);
$role="USER";
if(isset($_POST['upload']))
{

    $passp_s_n=$_FILES['passport_s']["name"];
    $passp_s_t=$_FILES['passport_s']["type"];
    $passport_s= file_get_contents( $_FILES["passport_s"]["tmp_name"]);
    // move_uploaded_file($passport_s,$target.$passport_s_n);

    $passp_f_n=$_FILES['passport_f']["name"];
    $passp_f_t=$_FILES['passport_f']["type"];
    $passport_f= file_get_contents( $_FILES['passport_f']["tmp_name"]);
    // move_uploaded_file($passport_f,$target.$passport_f_n);
    // copy($passport_s,$target);

    
    $passp_m_n=$_FILES['passport_m']["name"];
    $passp_m_t=$_FILES['passport_m']["type"];
    $passport_m=file_get_contents( $_FILES['passport_m']["tmp_name"]);
    // move_uploaded_file($passport_m,$target.$passport_m_n);
    // copy($passport_s,$target );

    



$stmat = $database->prepare('INSERT INTO student (FIRSTNAME,LASTNAME,FATHERNAME,MOTHERNAME,BIRTHDAY,GENDER,IFSTUDIED,CONTRYSTUDY,LASTCERT,CONTRYNOW,NUMBERDAD,PASSPORT_S,PASSPORT_S_N,PASSPORT_S_T,PASSPORT_F,PASSPORT_F_N,PASSPORT_F_T,PASSPORT_M,PASSPORT_M_N,PASSPORT_M_T,PASSWORD,ROLE) 
VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmat->execute([$firstname,$lastname,$fathername,$mothername,$birthday,$gender,$ifstudied,$contrystudy,$lastcert,$contrynow,$numberdad,$passport_s,$passp_s_n,$passp_s_t,$passport_f,$passp_f_n,$passp_f_t,$passport_m,$passp_m_n,$passp_m_t,$password,'USER']);
$resultinsert=$stmat->rowCount();
if($resultinsert>0){
    header('Location:login.php');
    exit();
}
}

?>
