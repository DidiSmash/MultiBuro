<html>
    <head>
        <title>MultiBuro</title>
        <meta charset="UTF-8">
        <link href="index.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        <?php
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Something posted
          
            if (isset($_POST['codeR'])) {
                $codeR = $_POST['codeR'];
            }
            if (isset($_POST['nameR'])) {
                $nameR = $_POST['nameR'];
            }
            if (isset($_POST['typeR'])) {
                $typeR = $_POST['typeR'];
            }
            if (isset($_POST['capaciteR'])) {
                $capaciteR = $_POST['capaciteR'];
            }
            if (isset($_POST['tarifJourR'])) {
                $tarifJourR = $_POST['tarifJourR'];
            }
          }

        ?>

        <h1>Formulaire <?php echo $nameR; ?></h1>

        <form action="checked.php" method="post">

            <!-- Conteneur du formulaire -->
            <div id="conteneur">
                <!-- Saisie du nom -->
                <div>
                    <label>Nom</label>
                    <input type="text" name="nom" value="<?php echo $nameR; ?>" disabled>
                </div>
                <!-- Saisie du prénom -->
                <div>
                    <label>Type</label>
                    <input type="text" name="type" value="<?php echo $typeR; ?>" disabled>
                </div>
                <!-- Saisie du Téléphone -->
                <div>
                    <label>Capacité</label>
                    <input type="text" name="capacite" value="<?php echo $capaciteR; ?>" disabled>
                </div>
                <!-- Saisie de l'Email -->
                <div>
                    <label>Tarif</label>
                    <input type="text" name="tarif" value="<?php echo $tarifJourR; ?>" disabled>
                </div>
                <!-- Validation -->
                <div>
                    <input type="hidden" name="labelle" value="<?php echo $resLabel; ?>">
                    <input type="submit" value="Reserver">
                </div>

            </div>

        </form>
        
    </body>
</html>


