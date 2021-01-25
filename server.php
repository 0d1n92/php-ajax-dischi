<?php
  include __DIR__ . "/db.php";
  header("Content-type: application/json");
  $genr="Pop";
  if($genr!=null){
  foreach ($libraryDisk["response"] as $disk) {
    if($disk["genre"]=="Pop") {
      echo json_encode($libraryDisk["response"]);
    }
  }} else {
   echo json_encode($libraryDisk);
  }
 
 
 ?>