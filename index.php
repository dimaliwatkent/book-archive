<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Archive</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<form action="php/insert_book.php" method="post">
      <input type="text" name="title" placeholder="Title" required>
      <input type="text" name="author" placeholder="Author" required>
      <input type="text" name="category" placeholder="Category">
      <input type="date" name="publication_date" placeholder="Publication Date">
      <input type="text" name="publisher" placeholder="Publisher">
      <textarea name="description" placeholder="Description"></textarea>
      <input type="submit" value="Add Book">
  </form>
   
    <script src="js/index.js"></script>
</body> 
</html>