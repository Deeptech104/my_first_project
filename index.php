<?php
$file ="readme.txt";
if (file_exists($file)) {
  echo readfile($file);
  copy($file, "newfile.txt");

}
else
  {
    echo "file not found";
  }
?>
