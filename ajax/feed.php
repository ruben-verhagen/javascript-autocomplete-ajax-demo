<?PHP

$q = $_GET['q'];   // use this variable to query the dataset

$dataset =  array(
  array(
    "id" => "232524357",
    "name" => "Brickell (community in Brickell)",
    "type" => "community"
  ),
  array(
    "id" => "773682551945",
    "name" => "Brickell Avenue (street in Brickell)",
    "type" => "community"
  ),
  array(
    "id" => "2210038375",
    "name" => "Icon Brickell (condo in Brickell)",
    "type" => "condo"
  ),
  array(
    "id" => "9292467663",
    "name" => "Brickell Bay Drive (street in Brickell Key)",
    "type" => "street"
  ),
  array(
    "id" => "5603738436343",
    "name" => "Brickell House (condo in Brickell)",
    "type" => "condo"
  ),
  array(
    "id" => "1926374698",
    "name" => "Brickell Key Drive (street in Brickell Key)",
    "type" => "street"
  ),
  array(
    "id" => "1926374698",
    "name" => "Brix Way (street in Brickell Key)",
    "type" => "street"
  ),
  array(
    "id" => "4930012398270",
    "name" => "Brickell On The River (condo in Brickell)",
    "type" => "condo"
  ),
  array(
    "id" => "49273629993",
    "name" => "500 Brickell (condo)",
    "type" => "condo"
  )
);

$results = [];
foreach ($dataset as $property) {
  if (strpos(strtolower($property['name']), strtolower($q)) !== false)
    $results[] = $property;
}

header('Content-Type: application/json');
echo json_encode($results);
