<?php
  include __DIR__ . "/db.php";
  include __DIR__ . "/includes/variable.php";
  header("Content-type: application/json");
  $genreArray=[];
  if($genrs!=null){
    foreach ($libraryDisk["response"] as $disk) {
      if($disk["genre"]==$genrs) {
         $genreArray[]=$disk;
      }
    
    }
  } else {
    foreach ($libraryDisk["response"] as $disk) {
         $genreArray[]=$disk;
      }
  }
      
      
    echo json_encode($genreArray);
 
 
 ?>