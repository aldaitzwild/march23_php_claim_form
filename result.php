<?php
$errors = [];

$sellers = [
    'Andy Bernard' => 'andy.webp',
    'Dwight Schrute' => 'dwight.webp',
    'Jim Halpert' => 'jim.webp',
    'Phyllis Lapin-Vance' => 'phyllis.webp',
    'Stanley Hudson' => 'stanley.webp',
];

$data = array_map('trim', $_POST);

if(!isset($data['companyName']) || empty($data['companyName']))
    $errors[] = "Le nom de la compagnie est obligatoire";

if(!isset($data['contactName']) || empty($data['contactName']))
    $errors[] = "Le nom du contact est obligatoire";

if(!isset($data['contactEmail']) || empty($data['contactEmail']))
    $errors[] = "L'email du contact est obligatoire";

if(!isset($data['contactMessage']) || empty($data['contactMessage']))
    $errors[] = "Le message de réclamation est obligatoire";

if(filter_var($data['contactEmail'], FILTER_VALIDATE_EMAIL) === false)
    $errors[] = "L'email saisie est mal formaté";

if(strlen($data['contactMessage']) <= 30)
    $errors[] = "Le message doit faire plus que 30 caractères.";

if(!isset($sellers[$data['sellerName']]))
    $errors[] = "Vous n'avez pas sélectionné un vendeur de la liste.";

if (!empty($errors)) {
    require 'error.php';
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif - Réclamation</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Nous traitons votre retour.</h1>
        <img src="images/logo_dunder.png" alt="Logo Dunder Mifflin">
    </header>

    <main>
        <div class="summary">
            <!-- BONUS -->
            <p>
                <img src="images/<?php echo $sellers[$data['sellerName']] ?>" alt="">
                <span>Votre vendeur</span>
            </p>
            

            <ul>
                <li>Votre entreprise : <span><?php echo $data['companyName']; ?></span></li>
                <li>Votre nom : <span><?php echo $data['contactName']; ?></span></li>
                <li>Votre email : <span><?php echo $data['contactEmail']; ?></span></li>
                <li>Votre message :
                    <p><?php echo $data['contactMessage']; ?>
                    </p>
                </li>
            </ul>
        </div>
    </main>
</body>

</html>