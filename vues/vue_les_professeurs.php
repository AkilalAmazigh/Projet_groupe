</br>
<h4> Liste des Professeurs </h4>

<form method="post" action="">
    Mot de recherche : 
    <input type="text" name="mot">
    <input type="submit" name="Rechercher" value="Rechercher">
</form>
<br />

<table class="table table-hover table-striped table-dark" border ="1" style="margin: 0 10px; width: 1000px">
    <tr>
        <td class="text-center align-midlle"> Id Professeur</td>
        <td class="text-center align-midlle"> Nom</td>
        <td class="text-center align-midlle"> Prénom</td>
        <td class="text-center align-midlle"> Email</td>
        <td class="text-center align-midlle"> Téléphone</td>
        <td class="text-center align-midlle"> Opérations</td>
    </tr>
    <?php 
         foreach ($lesProfesseurs as $unProfesseur) {
            echo "<tr>";
                echo "<td class='text-center align-midlle'>".$unProfesseur['idprofesseur']."</td>";
                echo "<td class='text-center align-midlle'>".$unProfesseur['nom']."</td>";
                echo "<td class='text-center align-midlle'>".$unProfesseur['prenom']."</td>";
                echo "<td class='text-center align-midlle'>".$unProfesseur['email']."</td>";
                echo "<td class='text-center align-midlle'>".$unProfesseur['tel']."</td>";
                echo "<td class='text-center align-midlle' style='width: 200px;'>";
                    // if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){

                        echo "<a href='index.php?page=1&action=sup&idprofesseur=".$unProfesseur['idprofesseur']."'>";
                        echo "<img src = 'images/delete.png' height = '30' width = '30'> ";
                        echo "</a>";
                        echo "<a href='index.php?page=1&action=edit&idprofesseur=".$unProfesseur['idprofesseur']."'>";
                        echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
                        echo "</a>";
                   // }

                    echo "<a href='index.php?page=1&action=matiere&idprofesseur=".$unProfesseur['idprofesseur']."'>";
                    echo "<img src = 'images/matiere.png' height = '30' width = '30' style='object-fit: cover;'> ";
                    echo "</a>";

                echo "</td>";
            echo "</tr>";
        }
    ?>
</table>