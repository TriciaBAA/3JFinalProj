<?php
include 'create_tables.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("You need to be logged in to book an appointment.");
}

$user_id = $_SESSION['user_id'];
$service_id = $_POST['service'];
$therapist = $_POST['therapist'];
$appointment_date = $_POST['date'];
$appointment_time = $_POST['time'];
$payment_method = $_POST['payment'];
$promo_code = $_POST['promoCode'];

$sql = "INSERT INTO appointments (user_id, service_id, therapist, appointment_date, appointment_time, payment_method, promo_code) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('iisssss', $user_id, $service_id, $therapist, $appointment_date, $appointment_time, $payment_method, $promo_code);

if ($stmt->execute()) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
