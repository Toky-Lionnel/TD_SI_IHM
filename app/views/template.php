<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= constant('BASE_URL')?>public/assets/css/template.css">
    <link rel="stylesheet" href="<?= constant('BASE_URL')?>public/assets/css/login.css">
</head>
<body>

    <div class="page">
        <div class="header">
            <p> TD SI IHM ETU003107 - ETU003140</p>
            <nav>
                <ul>
                    <li> <a href="<?= constant('BASE_URL')?>"> Home </a> </li>
                    <li> <a href=""> Changer Caisse </a> </li>
                </ul>
            </nav>
        </div>

        
        <div class="section"> 
                 
        </div>

        <?php if (isset($contenu)) { 
            echo $contenu; } ?>


        <div class="footer">
            <p> Copyright TD SI IHM Mars  2025 </p>
        </div>
    </div>
    
</body>
</html>