<table class="table table-striped table-hover" border="4" style="box-shadow: 10px 5px 5px black; border-color: black; margin: 0 10px; width: 1000px;">
    <tr>
        <td class="font-weight-bold text-center align-midlle"> Id Classe</td>
        <td class="font-weight-bold text-center align-midlle"> Nom Classe</td>
        <td class="font-weight-bold text-center align-midlle"> Salle</td>
        <td class="font-weight-bold text-center align-midlle"> Diplôme</td>
        <td class="font-weight-bold text-center align-midlle"> Nombre Etudiants</td>
    </tr>
    <?php 
        foreach ($lesClasses as $uneClasse) {
            echo "<tr>";
                echo "<td class='font-weight-bold text-center align-middle'>".$uneClasse['idclasse']."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$uneClasse['nomClasse']."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$uneClasse['salle']."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$uneClasse['diplome']."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$uneClasse['nbEtudiants']."</td>";
            echo "</tr>";
        }
    ?>
</table>