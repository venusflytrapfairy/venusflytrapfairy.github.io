<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];

  $to = "anusha.asim@edu.regenteducation.ae";
  $subject = "Course Enquiry";
  $message = "Name: " . $name . "\n\nEmail: " . $email . "\n\nPhone: " . $phone . "\n\nCourse: " . $course;

  // Send email
  mail($to, $subject, $message);

  echo "Form submitted successfully. Thank you!";
}
?>

