<!DOCTYPE html>

 
<head>
    <title></title>
</head>
 
<body>
    <?php
    $notes = ["Infographie" => "15", "Algo" => "18", "Projet" => "14", "Bases de données" => "14", "Communication" => "13"];
    $i = 1;
 
    foreach ($notes as $key => $value) {
        echo "note " . $i . " (" . $key . ") : " . $value . "<br/>";
        $i++;
    }
 
    echo "<table>  
    <tr>
    <th> N° de la note </th>
    <th> Ressource </th>
    <th> Note </th>
    </tr>";
    $i = 1;
    foreach ($notes as $matiere => $note)
     {
        echo "
    <tr> 
    <td> $i </td> <td> $matiere </td> <td> $note </td> 
    </tr>
                ";
                $i++;
    }

    echo "</table>";
    ?>
</body>
 
</html>