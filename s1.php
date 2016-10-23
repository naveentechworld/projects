<?php
  // JSON string
  $someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  print_r($someArray);        // Dump all data of the Array
  echo $someArray[0]["name"]; // Access Array data

  // Convert JSON string to Object
  $someObject = json_decode($someJSON);
  print_r($someObject);      // Dump all data of the Object
  echo $someObject[0]->name; // Access Object data
  
  // Loop through Array
 // Replace ... with your PHP Array
  foreach ($someArray as $key => $value) {
    echo $value["name"] . ", " . $value["gender"] . "<br>";
  }

  // Loop through Object
   // Replace ... with your PHP Object
  foreach($someObject as $key => $value) {
    echo $value->name . ", " . $value->gender . "<br>";
  }
?>