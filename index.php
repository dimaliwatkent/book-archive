<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Archive</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allan:wght@400;700&family=Nanum+Brush+Script&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="title-bar">
        <h1>Book Archive</h1>
    </nav>

    <main>
        <form action="php/insert_book.php" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title" required>
            <input type="text" name="author" placeholder="Author" required>
            <input type="text" name="category" placeholder="Category">
            <input type="date" name="publication_date" placeholder="Publication Date">
            <input type="text" name="publisher" placeholder="Publisher">
            <textarea name="description" placeholder="Description"></textarea>
            <input type="file" name="cover">
            <input type="submit" value="Add Book">
        </form>
        <div class="cards"> <!-- Display books -->
            <?php include 'php/display_book.php'; ?></div>
    </main>

    <script src="js/index.js"></script>
</body>

</html>