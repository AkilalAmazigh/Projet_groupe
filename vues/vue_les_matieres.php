</br>
<h4> Liste des Matières </h4>

<form method="post" action="">
    Mot de recherche : 
    <input type="text" name="mot">
    <input type="submit" name="Rechercher" value="Rechercher">
</form>
<br />

<table class="table table-hover table-striped table-dark" border ="1" style="margin: 0 10px; width: 1000px;">
    <tr>
        <td class="text-center align-midlle"> Id Matière</td>
        <td class="text-center align-midlle"> Nom Matière</td>
        <td class="text-center align-midlle"> Coefficient </td>
        <td class="text-center align-midlle"> Nombres d'heures</td>
        <td class="text-center align-midlle"> Id Classe</td>
        <td class="text-center align-midlle"> Id Professeur</td>
            <!-- <?php // if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
           // echo "<td class='text-center align-midlle'> Opérations</td>";
            // }
            ?>  --> <td class='text-center align-midlle'> Opérations</td>
    </tr>
    <?php 
        foreach ($lesMatieres as $uneMatiere) {
            echo "<tr>";
                echo "<td class='text-center align-middle'>".$uneMatiere['idmatiere']."</td>";
                echo "<td class='text-center align-middle'>".$uneMatiere['nomMatiere']."</td>";
                echo "<td class='text-center align-middle'>".$uneMatiere['coef']."</td>";
                echo "<td class='text-center align-middle'>".$uneMatiere['nbHeures']."</td>";
                echo "<td class='text-center align-middle'>".$uneMatiere['idclasse']."</td>";
                echo "<td class='text-center align-middle'>".$uneMatiere['idprofesseur']."</td>";
                //if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
                echo "<td class='text-center align-middle'>";
                    echo "<a href='index.php?page=4&action=sup&idmatiere=".$uneMatiere['idmatiere']."'>";
                    echo "<img src = 'images/delete.png' height = '30' width = '30'> ";
                    echo "</a>";
                    echo "<a href='index.php?page=4&action=edit&idmatiere=".$uneMatiere['idmatiere']."'>";
                    echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
                    echo "</a>";
                echo "</td>";
                //}
            echo "</tr>";
        }
    ?>
</table>