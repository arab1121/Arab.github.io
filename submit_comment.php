<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = trim($_POST['comment'] ?? '');

    if (!empty($comment)) {
        // هنا يمكنك حفظ التعليق في قاعدة بيانات أو ملف إذا أردت

        // عرض رسالة شكر
        echo "<h2>Thank you for your comment!</h2>";
        echo "<p>Your comment: " . htmlspecialchars($comment) . "</p>";
        echo '<p><a href="index.html">Back to Home</a></p>';
    } else {
        echo "<p>Please write a comment before submitting.</p>";
    }
} else {
    // في حال فتح الصفحة مباشرة بدون POST
    header("Location: index.html");
    exit();
}
?>
