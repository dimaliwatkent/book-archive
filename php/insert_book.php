<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $author = $_POST["author"];
  $category = $_POST["category"];
  $publication_date = $_POST["publication_date"];
  $publisher = $_POST["publisher"];
  $description = $_POST["description"];

  $sql = "INSERT INTO books (title, author, category, publication_date, publisher, description) VALUES ('$title', '$author', '$category', '$publication_date', '$publisher', '$description')";
  $conn->query($sql);
  // Redirect to index.php
  header("Location: ../index.php");
  exit();
  // Close the connection
  mysqli_close($conn);
}
