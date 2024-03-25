<?php

function verifInfo($id) {
    $tableInfoClient = [
        $nom = 'nom',
        $prenom = 'prenom',
        $telephone = 'telephone',
        $email = 'email',
        $dateRes = 'dateRes',
        $labelle = 'labelle',
    ];

    foreach ($tableInfoClient as $value ) {
        if ($id == $value) {
            if(isset($_POST[$value])) {
                $value = $_POST[$value];
                return $value;
            }
        }
    };
}

function writeVerif() {
    $tableInfoClient = [
        $nom = 'nom',
        $prenom = 'prenom',
        $telephone = 'telephone',
        $email = 'email',
        $dateRes = 'dateRes',
        $labelle = 'labelle',
    ];

    $message = '';

    foreach ($tableInfoClient as $value ) {
        if(isset($_POST[$value])) {
            $value = $_POST[$value];
            $message .= "$value | ";
        }
    };

    $message .= "\n";

    return $message;
}

function createCSV($fileName) {
    $csvCli = fopen($fileName, "a");
    fwrite($csvCli, writeVerif());
    fclose($csvCli);
}


function displayInput($argv)
{
    $tmp = '';
    if(isset($argv['nodiv']) && $argv['nodiv'] !== true)
        $tmp .= '<div>';
    if(isset($argv['libelle']) === true)
        $tmp .= '<label>'.$argv['libelle'].'</label>';
    $tmp .= '<input';
    // [optionnel]Type
    if(isset($argv['type']) === true)
        $tmp .= ' type="'.$argv['type'].'"';
    else
        $tmp .= ' type="text"';
    // [optionnel]Name
    if(isset($argv['name']) === true)
        $tmp .= ' name="'.$argv['name'].'"';
    // [optionnel]Value
    if(isset($argv['value']) === true)
        $tmp .= ' value="'.$argv['value'].'"';
    else
        $tmp .= ' value=""';
    // [optionnel]Size
    if(isset($argv['size']) === true)
        $tmp .= ' size="'.$argv['size'].'"';
    // [optionnel]Readonly
    if(isset($argv['disabled']) && $argv['disabled'] === true)
        $tmp .= ' disabled';
    $tmp .= ' />';
    if(isset($argv['nodiv']) && $argv['nodiv'] !== true)
        $tmp .= '</div>';
    // Affichage
    echo $tmp;
}

/**
 * Procédure qui génère et affichage une liste déroulante
 * @param array $argv (libelle, name, list, value, disabled)
 */
function displaySelect($argv)
{
    $tmp = '<div>';
    if(isset($argv['libelle']) === true)
        $tmp .= '<label>'.$argv['libelle'].'</label>';
    $tmp .= '<select';
    // [optionnel]Name
    if(isset($argv['name']) === true)
        $tmp .= ' name="'.$argv['name'].'"';
    // [optionnel]Readonly
    if(isset($argv['disabled']) && $argv['disabled'] === true)
        $tmp .= ' disabled';
    $tmp .= ' />';
    // List
    foreach($argv['list'] as $key => $value)
    {
        $tmp .= '<option value="'.$key.'"';
        if(isset($argv['value']) === true && $argv['value'] == $key)
            $tmp .= 'selected="selected"';
        $tmp .= '>'.$value.'</option>';
    }
    $tmp .= '</select></div>';
    // Affichage
    echo $tmp;
}

/**
 * Procédure qui génère et affichage un bouton
 * @param array $argv (type, name, value, href, disabled, center)
 */
function displayButton($argv)
{
    // [optionnel]Type
    if(isset($argv['center']) === true)
        $tmp = '<div class="center">';
    else
        $tmp = '<div>';
    $tmp .= '<input';
    // [optionnel]Type
    if(isset($argv['type']) === true)
        $tmp .= ' type="'.$argv['type'].'"';
    else
        $tmp .= ' type="button"';
    // [optionnel]Name
    if(isset($argv['name']) === true)
        $tmp .= ' name="'.$argv['name'].'"';
    // [optionnel]Value
    if(isset($argv['value']) === true)
        $tmp .= ' value="'.$argv['value'].'"';
    else
        $tmp .= ' value="Valider"';
    // [optionnel]Href
    if(isset($argv['href']) === true)
        $tmp .= ' onclick="window.location.href=\''.$argv['href'].'\'"';
    // [optionnel]Disabled
    if(isset($argv['disabled']) && $argv['disabled'] === true)
        $tmp .= ' disabled';
    $tmp .= ' /></div>';
    // Affichage
    echo $tmp;
}

function getRes($date) {
    //Création de l'objet
    $connect = new PDO(SGBDR.':dbname='.BDD.';host='.HOST.';port='.PORT, LOGIN, PASSW);

    //preparation requête
    $stmt = $connect->prepare("SELECT codeR,libelleR,typeR,capaciteR,tarifJourR
    FROM ressource RS
    INNER JOIN reservation RV ON RS.codeR = RV.code_ressource
    WHERE date_reservation NOT LIKE('$date')");

    $allResMsg = "<table><thead><th>Id Ressource</th><th>Nom Ressource</th><th>type Ressource</th><th>capacité Ressource</th><th>Tarif à la Journée Ressource</th><th>Reserver</th></thead><tbody>";

    //association des variables
    //$stmt->bindParam(':date_code', $date, PDO::PARAM_STR, 11);

    //association des variables & Execution
    $stmt->execute();

    if($result = $stmt->fetchAll())
    {
        foreach($result as $ligne)
        {
            $allResMsg .= "<td>".$ligne['codeR'].'</td><td>'.$ligne['libelleR'].'</td><td>'.$ligne['typeR'].'</td><td>'.$ligne['capaciteR'].'</td><td>'.$ligne['tarifJourR'].'$</td><td>
            <form action="form.php" method="post">
                <input type="hidden" name="codeR" value="'.$ligne['codeR'].'">
                <input type="hidden" name="nameR" value="'.$ligne['libelleR'].'">
                <input type="hidden" name="typeR" value="'.$ligne['typeR'].'">
                <input type="hidden" name="capaciteR" value="'.$ligne['capaciteR'].'">
                <input type="hidden" name="tarifJourR" value="'.$ligne['tarifJourR'].'">
                <input type="submit" name="subButton" value="Reserver">
            </form></td><tr>';
        }
    }

    $allResMsg .= "</tbody></table>";
    return $allResMsg;
}

?>
