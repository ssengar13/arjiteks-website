<?php
include_once "connect.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['add_blog'])) {
    $heading1 = $_POST['heading1'];
    $img = $_FILES["img"]["name"];
    $para1 = $_POST['para1'];
    $bullets = $_POST['bullets'];
    $conclusion = $_POST['conclusion'];
    $type = $_POST['type'];

    $tagsArray = isset($_POST['tags']) ? (array) $_POST['tags'] : [];
    $tagsString = implode(',', $tagsArray);

    $created_by = $_POST['created_by'];

    $query = "INSERT INTO blogs (`heading1`, `img`, `para1`, `bullets`, `conclusion`, `type`, `tags`, `created_by`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssssss", $heading1, $img, $para1, $bullets, $conclusion, $type, $tagsString, $created_by);

        if (mysqli_stmt_execute($stmt)) {
            move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/" . $_FILES["img"]["name"]);
            echo "Details Inserted Successfully";
            header("Location: ../dash.php");
        } else {
            echo "Could not execute statement: " . mysqli_stmt_error($stmt);
            header("Location: ../dash.php");
        }

        mysqli_stmt_close($stmt);
        header("Location: ../dash.php");
    } else {
        echo "Could not prepare statement: " . mysqli_error($conn);
        header("Location: ../dash.php");
    }
}


if (isset($_POST['edit_blog'])) {
    $id = $_POST['id'];
    $heading1 = $_POST['heading1'];
    $para1 = $_POST['para1'];
    $bullets = $_POST['bullets'];
    $conclusion = $_POST['conclusion'];
    $type = $_POST['type'];
    $tags = $_POST['tags'];
    $created_by = $_POST['created_by'];

    $img = '';

    if (isset($_FILES["img"]["tmp_name"]) && !empty($_FILES["img"]["tmp_name"])) {
        $img = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/" . $img);
    }

    $query1 = "UPDATE blogs SET heading1 = ?, img = ?, para1 = ?, bullets = ?, conclusion = ?, type = ?, tags = ?, created_by = ? WHERE id = ?";

    $stmt = mysqli_prepare($conn, $query1);

    if (!$stmt) {
        die("Preparation failed: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'ssssssssi', $heading1, $img, $para1, $bullets, $conclusion, $type, $tags, $created_by, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "Blog details updated successfully.";
        header("Location: ../dash.php");
    } else {
        echo "Failed to update blog details: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}



if (isset($_POST['delete_modal'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM blogs WHERE id = $id";
    echo $sql;

    if ($conn->query($sql) === TRUE) {
        echo "Row deleted successfully!";
        header("location:../dash.php");
    } else {
        echo "Error deleting row: " . $conn->error;
    }
}

$conn->close();
