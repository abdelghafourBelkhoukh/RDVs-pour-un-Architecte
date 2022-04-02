<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/clients.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog clients object
  $clients = new clients($db);

  // Get raw clientsed data
  $data = json_decode(file_get_contents("php://input"));

  $clients->firstname = $data->firstname;
  $clients->lastname = $data->lastname;
  $clients->proff = $data->proff;
  $clients->age = $data->age;
  $clients->reff = $data->reff;

  // Create clients
  if($clients->create()) {
    echo json_encode(
      array('message' => 'client Created')
    );
  } else {
    echo json_encode(
      array('message' => 'client Not Created')
    );
  }

