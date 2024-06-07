<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Blog</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="create_article.php">Create Article</a></li>
        </ul>
    </nav>
    <div class="container" id="blog">
        <h2>Blog Posts</h2>
        <?php
        $sql = "SELECT id, title, content, image_url, created_at FROM articles ORDER BY created_at DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='blog-post'>";
                echo "<h3>" . $row['title'] . "</h3>";
                if ($row['image_url']) {
                    echo "<img src='" . $row['image_url'] . "' alt='" . $row['title'] . "'>";
                }
                echo "<p>" . $row['content'] . "</p>";
                echo "<p><small>Posted on " . $row['created_at'] . "</small></p>";
                echo "</div>";
            }
        } else {
            echo "<p>No articles found</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
