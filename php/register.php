<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $branch = mysqli_real_escape_string($conn, trim($_POST['branch']));
    $teamtitle = mysqli_real_escape_string($conn, trim($_POST['team']));
    $p1 = mysqli_real_escape_string($conn, trim($_POST['p1']));
    $p2 = mysqli_real_escape_string($conn, trim($_POST['p2']));
    $p3 = mysqli_real_escape_string($conn, trim($_POST['p3']));
    $p4 = mysqli_real_escape_string($conn, trim($_POST['p4']));
    $p5 = mysqli_real_escape_string($conn, trim($_POST['p5']));
    $number = mysqli_real_escape_string($conn, trim($_POST['number']));
    $game =$_GET['value'] === "1" ? "FreeFire" : "Bgmi";

    $query = "INSERT INTO teams (name, branch, teamtitle, player1, player2, player3, player4, player5, number, game) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param($stmt, 'ssssssssss', $name, $branch, $teamtitle, $p1, $p2, $p3, $p4, $p5, $number, $game);

        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = "You are now registered,we'll contact you soon";
            session_regenerate_id(true);
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = "Error executing query: " . mysqli_stmt_error($stmt);
            header('Location: ../index.php');
        }

        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Error preparing statement: " . mysqli_error($conn);
    }

    header('Location: ../index.php');
    exit();
}

mysqli_close($conn);
?>
