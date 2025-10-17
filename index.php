<?php

$traits = json_decode(file_get_contents("data/traits.json"), true);
// $aspirations = json_decode(file_get_contents("data/aspirations.json"), true);
$aspirations = json_decode(file_get_contents("data/crudeasp.json"), true);
$careers = json_decode(file_get_contents("data/careers.json"), true);
$skills = json_decode(file_get_contents("data/skills.json"), true);

$careers = $careers["careers"];
$aspirations = $aspirations["adult_aspirations"];
$adultTraits = $traits["adult"];
$skills = $skills["skills"]["general"];


// print_r($traits);

// echo($traits["adult"]);

// $elderTraits = $traits.elder;

$adultTraits = $traits["adult"];

// echo ($adultTraits);

// $toddlerTraits = $traits.toddler;

// $infantTraits = $traits.infant;

echo "<h1>Traits</h1>";

echo "<p>";

foreach ($adultTraits as $trait) {
    echo "<span class='blob'> $trait </span>";
}

echo "</p>";


echo "<h1>Aspirations</h1>";

echo "<p>";

foreach ($aspirations as $aspiration) {
    echo "<span class='blob'> $aspiration </span>";
}

echo "</p>";

echo "<h1>Careers</h1>";

echo "<p>";

// print($careers["careers"]);

foreach ($careers as $career) {
    echo "<span class='blob'> $career[name] </span>";
}

echo "</p>";

echo "<h1>Skills</h1>";

echo "<p>";

foreach ($skills as $skill) {
    echo "<span class='blob'> $skill </span>";
}

echo "</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/site.css">
</head>
<body>
    
</body>
</html>
