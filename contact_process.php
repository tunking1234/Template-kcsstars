<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "tunking1407@com"; // Thay thế bằng email của bạn
  $subject_email = "Tin nhắn từ form liên hệ"; // Tiêu đề email
  $body = "Tên: " . $name . "\nEmail: " . $email . "\nChủ đề: " . $subject . "\nNội dung:\n" . $message;
  $headers = "From: " . $email; // Người gửi

  if (mail($to, $subject_email, $body, $headers)) {
    echo "<script>alert('Cảm ơn bạn đã gửi tin nhắn!'); window.location.href='index.html';</script>"; // Thay 'index.html' bằng trang bạn muốn chuyển hướng sau khi gửi.
  } else {
    echo "<script>alert('Có lỗi xảy ra khi gửi tin nhắn. Vui lòng thử lại!'); window.location.href='contact.html';</script>"; // Thay 'contact.html' bằng trang liên hệ của bạn
  }
}
if (mail($to, $subject_email, $body, $headers)) {
  echo "<script>
      alert('Cảm ơn bạn đã gửi tin nhắn!');
      window.location.href='contact.html'; // Hoặc có thể dùng window.location.reload(); để tải lại trang
      // Xóa các trường trong form
      document.getElementById('name').value = '';
      document.getElementById('email').value = '';
      document.getElementById('subject').value = '';
      document.getElementById('message').value = '';
  </script>";
} else {
  // ... (code xử lý lỗi)
}
?>

