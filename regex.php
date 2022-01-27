<?php

$myfile = fopen("./test.txt", "r") or die("Unable to open file!");
$content = fread($myfile,filesize("./test.txt"));

$pregx = '/\[[^\]]+\]/';

preg_match_all($pregx, $content, $results);



foreach ($results as $key => $value) {
  foreach ($value as $isi) {

	  echo "<P>" . $isi . "</p>";
  }
}

fclose($myfile);


?>

