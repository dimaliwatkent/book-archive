<?php
include 'db.php';

$result = $conn->query("SELECT * FROM books");
while ($row = $result->fetch_assoc()) {
  echo "<div class='bookWrap' data-id='{$row['id']}'>";
  echo "<h2 class='bookTitle'>{$row['title']}</h2>";
  echo "<p class='bookAuthor'>{$row['author']}</p>";
  // ... display other book attributes ...
  echo "</div>";
}
