<?php
 $file = "inv/U3891.pdf";
  header('Content-type: application/pdf');
  header("Content-Disposition: attachment; filename=".$file);
  /*header("Content-Disposition: attachment; filename=".$file);*/
  header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
  header('Cache-Control: no-store, no-cache, must-revalidate');
  header('Cache-Control: pre-check=0, post-check=0, max-age=0');
  header('Pragma: anytextexeptno-cache', true);
  header('Cache-control: private');
  header('Expires: 0');



 
  readfile($file); 
?>