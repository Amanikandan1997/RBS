<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "manikandanarunachalam913@gmail.com";
    $headers = "From: $Email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>
                alert('Mail sent successfully');
                window.location.href = 'contact.php';
              </script>";
    } else {
        echo "<script>
                alert('Mail not sent');
                window.location.href = 'contact.php'; 
              </script>";
    }
}
?>
