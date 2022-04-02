<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/randez.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate randez object
  $randez = new randez($db);

  // randez read query
  $result = $randez->read();
  
  // Get row count
  $num = $result->rowCount();

  // Check if any randez
  if($num > 0) {
        // Cat array
        $cat_arr = array();
        $cat_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
          extract($row);

          $cat_item = array(
            'id' => $id,
            // 'name' => $name
          );

          // Push to "data"
          array_push($cat_arr['data'], $cat_item);
        }

        // Turn to JSON & output
        echo json_encode($cat_arr);

  } else {
        // No randez
        echo json_encode(
          array('message' => 'No randez Found')
        );
  }
