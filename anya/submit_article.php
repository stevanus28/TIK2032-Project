<?php
include 'db.php';

$title = $_POST['title'];
$content = $_POST['content'];
$image_url = '';

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image_path = 'uploads/' . basename($_FILES['image']['name']);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
        $image_url = $image_path;
    } else {
        echo "Failed to upload image.";
    }
}

$sql = "INSERT INTO articles (title, content, image_url) VALUES ('$title', '$content', '$image_url')";

if ($conn->query($sql) === TRUE) {
    echo "New article created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: blog.php');
?>
