<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Buat Article Baru</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <form action="submit_article.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
