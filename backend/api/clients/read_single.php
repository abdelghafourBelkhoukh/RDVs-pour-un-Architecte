<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/clients.php';

  
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog clients object
  $clients = new clients($db);

  // Get ID
  $clients->$id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get clients
  $clients->read_single();

 
  // Create array
  $clients_arr = array(
        'id' => $id,
        'firstname' => $firstname,
        'lastname' => html_entity_decode($lastname),
        'proff' => $proff,
        'age' => $age,
        'reff' => $reff,
        'CRN' => $CRN,
        'RDV' => $RDV
  );

  // Make JSON
  print_r(json_encode($clients_arr));