<?php
$username = "admin";
$password = "123456";
$usernamein = "";
$passwordin = "";
if (isset($_POST['submit'])) {
    $usernamein = $_POST['username'];
    $passwordin = $_POST['password'];
    if($username === $usernamein && $password === $passwordin ){
        echo"<script>";
        echo "alert('ยินดีต้อนรับเข้าสู่ระบบ')";
        echo "</script>";
        header('Location: /page/test/');
    }else{
        echo"<script>";
        echo "alert('รหัสผ่านของคุณไม่ถูกต้อง')";
        // echo "alert('กรุณากรอกใหม่อีกครั้ง')";
        echo "</script>";
    }
   
}
