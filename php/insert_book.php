<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $author = $_POST["author"];
  $category = $_POST["category"];
  $publication_date = $_POST["publication_date"] ? $_POST["publication_date"] : '0001-01-01';
  $publisher = $_POST["publisher"];
  $description = $_POST["description"];

  // Handle the uploaded file
  $cover = $_FILES["cover"];
  $cover_name = $cover["name"];
  $cover_tmp_name = $cover["tmp_name"];

  // Move the uploaded file to a directory
  move_uploaded_file($cover_tmp_name, "../uploads/$cover_name");

  $sql = "INSERT INTO books (title, author, category, publication_date, publisher, description, cover) VALUES ('$title', '$author', '$category', '$publication_date', '$publisher', '$description', '$cover_name')";
  $conn->query($sql);
  // Redirect to index.php
  header("Location: ../index.php");
  exit();
  // Close the connection
  mysqli_close($conn);
}
