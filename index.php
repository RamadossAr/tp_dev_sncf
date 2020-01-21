<?php

include "param.php";

// C'est la meilleur façon d'exécuter une requête SQL
// Pour plus d'exemples, voir mysql_real_escape_string()
$query = "select * from trains, trajets, gares";

// Exécution de la requête
$result = mysqli_query($link, $query);

// Vérification du résultat
// Ceci montre la requête envoyée à MySQL ainsi que l'erreur. Utile pour déboguer.
if (!$result) {
    $message  = 'Requête invalide : ' . mysqli_error() . "\n";
    $message .= 'Requête complète : ' . $query;
    die($message);
}

// Utilisation du résultat
// Tenter d'affichager $result ne vous donnera pas d'informations contenues dans la ressource
// Une des fonctions MySQL de résultat doit être utilisée
// Voir aussi mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.

echo "
<style>

table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}

</style>";

echo "<table>
    <thead>
        <tr>
            <th colspan=\"5\">The table header</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> Id train </id>
            <td>depart </td>
            <td>arrive</td>
            <td>ville depart </td>
            <td>ville arrivee</td>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";

    echo "<td>".$row['Id_train']."</td>";
    echo "<td>".$row['heure_depart']."</td>";
    echo "<td>".$row['heure_arriver']."</td>";
    echo "<td>".$row['gare_depart']."</td>";
    echo "<td>".$row['gare_arriver']."</td>";

    echo "</tr>";

}


echo "</tbody>
</table>";

// Libération des ressources associées au jeu de résultats
// Ceci est effectué automatiquement à la fin du script
mysqli_free_result($result);
?>
