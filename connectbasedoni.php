<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
try{
    $connexion = new PDO("mysql: host=$servername; dbname=chevo",$username,$password);

    $sql = 'select * from cheval';

    $requete = $connexion -> query($sql);
    $data = $requete->fetchall(PDO::FETCH_ASSOC);
    echo '<table border><td>numCheval</td><td>nomCheval</td><td>numTatouage</td><td>couleurCheval</td><td>numChevalPere</td><td>numChevalMere</td><td>numPersEleveur</td><td>nomRace</td>';
    for($i = 0;$i<count($data);$i++){
        echo '
                <tr>
                    <td>'.$data[$i]["numCheval"].'</td>
                    <td>'.$data[$i]["nomCheval"].'</td>
                    <td>'.$data[$i]["numTatouage"].'</td>
                    <td>'.$data[$i]["couleurCheval"].'</td>
                    <td>'.$data[$i]["numChevalPere"].'</td>
                    <td>'.$data[$i]["numChevalMere"].'</td>
                    <td>'.$data[$i]["numPersEleveur"].'</td>
                    <td>'.$data[$i]["nomRace"].'</td>
                </tr>
            ';
    }
echo '</table>';
}
catch(PDOException $e){
    die("imposible connect to database");
}
    // $sql = 'INSERT INTO etudiant Values(1,"Mouaad","Yacine","2005/10/20","Nassim","Marrakech","Bac+1")';

    // $connexion -> query($sql);
?>

</body>
</html>