<?php
session_start();
include("connection.php"); // Подключаем базу данных

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$query = "UPDATE users SET lichess_username = NULL WHERE user_id = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $user_id);

if ($stmt->execute()) {
    $_SESSION['message'] = "Lichess account unlinked successfully.";
} else {
    $_SESSION['message'] = "Error unlinking account.";
}

$stmt->close();
header("Location: profile.php");
exit;
?>
