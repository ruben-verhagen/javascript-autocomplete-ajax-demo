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
  ),
  array(
    "id" => "8638640563143",
    "name" => "Carbonell Brickell Key (condo in Brickell)",
    "type" => "condo"
  ),
  array(
    "id" => "7842279356592",
    "name" => "BRI37849592 (condo in Brickell)",
    "type" => "listing"
  ),
  array(
    "id" => "45747373133",
    "name" => "Courts Brickell Key (condo in Brickell Key)",
    "type" => "condo"
  ),
  array(
    "id" => "743639398734",
    "name" => "The Plaza On Brickell (complex in Brickell)",
    "type" => "complex"
  ),
  array(
    "id" => "29383839211",
    "name" => "Il Villaggio (condo in South Beach)",
    "type" => "condo"
  ),
  array(
    "id" => "3248101227",
    "name" => "Il Pellicano (condo in Coconut Grove)",
    "type" => "condo"
  ),
  array(
    "id" => "7923233390179",
    "name" => "A328364900 (house in Coral Gables",
    "type" => "listing"
  ),
  array(
    "id" => "4732900836",
    "name" => "A3283679 (office space in Wynwood)",
    "type" => "listing"
  ),
  array(
    "id" => "595937736639923253",
    "name" => "Village Gables (in Gables On The Bay)",
    "type" => "complex"
  ),
  array(
    "id" => "33297460",
    "name" => "Icon West (in Doral)",
    "type" => "condo"
  ),
  array(
    "id" => "739347363876232093",
    "name" => "A74836400434455436 (house in Pinecrest Hollow)",
    "type" => "listing"
  ),  
);

$results = [];
foreach ($dataset as $property) {
  if (strpos(strtolower($property['name']), strtolower($q)) !== false)
    $results[] = $property;
}

header('Content-Type: application/json');
echo json_encode($results);
