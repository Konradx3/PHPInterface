<?php
require_once ('Cat.php');
require_once ('Eagle.php');
require_once ('Whale.php');

use Day\Cat;
use Day\Eagle;
use Day\Whale;

$choice = $_POST['animal'];
$animal = "";
if ($choice === "Cat")
{
    $animal = new Cat();
}
elseif ($choice === "Whale")
{
    $animal = new Whale();
}
elseif ($choice === "Eagle")
{
    $animal = new Eagle();
}
else
{
    echo "Do not cheat :) choice one from list";
    echo "</br>";
    echo "<a href='index.php'>Back </a> to list";
    die();
}


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Animal Interface</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">
<table class="table table-hover table-dark text-center">
    <thead>
    <tr>
        <th scope="col">Animal</th>
        <th scope="col">Height</th>
        <th scope="col">Weight</th>
        <th scope="col">Limbs</th>
        <th scope="col">Make Sound</th>
        <th scope="col">Move Ability</th>
        <th scope="col">Skin</th>
        <th scope="col">What Eat</th>
        <th scope="col">Tail</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><?php echo $choice ?></th>
        <td><?php echo $animal->height(); ?></td>
        <td><?php echo $animal->weight(); ?></td>
        <td><?php echo $animal->limbs(); ?></td>
        <td><?php echo $animal->makeSound(); ?></td>
        <td><?php
            foreach ($animal->moveAbility() as $item) {
                echo $item . ", ";
            }
            ?></td>
        <td><?php echo $animal->skin(); ?></td>
        <td><?php echo $animal->whatEat(); ?></td>
        <td><?php echo $animal->tail(); ?></td>
    </tr>
    </tbody>
    </tbody>
</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>