<html>
    <head>
        <title>MultiBuro</title>
        <meta charset="UTF-8">
        <link href="index.css" rel="stylesheet" type="text/css" media="screen">
        <?php include 'function.inc.php'; ?>
        <?php include_once 'db.inc.php'; ?>
    </head>
    <body>
        <h1>Reservations</h1>
        <?php 
        

        if(isset($_POST['dateRes']))
        {
            $date = $_POST['dateRes'];
            $tmp = getRes($date);
        } else {
            $date = date("Y-m-d");
        }
        ?>
        <p>reservation pour le :</p>
        <form action="reservations.php" method="post">
            <?php
            
            // Date
            $argv = array();
            $argv['name'] = 'dateRes';
            $argv['libelle'] = 'date de reservation :';
            $argv['type'] = 'date';
            $argv['value'] = $date;
            $argv['nodiv'] = true;
            displayInput($argv);

            // Validation
            $argv = array();
            $argv['value'] = 'Rechercher';
            $argv['type'] = 'submit';
            $argv['nodiv'] = true;
            $argv['bot'] = true;
            displayButton($argv);

            ?>
        </form>
        
        <?php
        if(isset($_POST['dateRes']))
        {
            echo $tmp;
        }
        ?>
    </body>
</html>


