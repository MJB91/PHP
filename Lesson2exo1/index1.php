<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <title>Lesson2 4 exos PHP</title>
</head>
<body>
  <?php
  $students = array("Abdou","Alfou","Val","Rezzak","Laurent","Badis","Léo","Mike","Marc","Aline","Amin","Jennifer");
  if ($i = 0; $i < count($students); $i++) {
    echo "<p>$students[$i]</p>";
  }
  ?>
<!--EXO 2 -->
  <?php
  $sales = array(
    "websites" => "20",
    "applications" => "2",
    "material" => "35"
);
echo "<h2>Sales</h2>";
echo "<ul>"

  foreach ($sales as $key => $value){
    echo "<li>$key : $value</li>";
  }
  echo "</ul>"; ?>

<!-- EXO 3 -->

<?php foreach ($_GET as $key => $value){
  echo "<p>$key : $value</p>";
}
echo "<p> . $GET['is'] . </p>";
?>


</body>
</html>
