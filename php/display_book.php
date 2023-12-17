<?php
include 'db.php';

$result = $conn->query("SELECT * FROM books");
while ($row = $result->fetch_assoc()) {
  echo "<div class='card'>";
  echo "<img src='uploads/{$row['cover']}' alt=' '>";
  echo "<div class='card-content'>";
  echo "<h2>{$row['title']}</h2>";
  echo "<h3>{$row['author']}</h3>";
  echo "<p>{$row['description']}</p>";
  echo "<a href='#' class='button'>{$row['category']}</a>";
  echo "</div>";
  echo "</div>";
}

// Close the connection
mysqli_close($conn);
