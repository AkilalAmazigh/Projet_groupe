<h4>Insertion d'un Professeur</h4>

<form method="post" action="">
    <table class="table table-hover" border="0">
        <tr>
            <td class="align-middle text-center">Nom Professeur :</td>
            <td>
                <input type="text" name="nom" value="<?php if($leProfesseur != null) echo $leProfesseur['nom']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Prénom Professeur :</td>
            <td>
                <input type="text" name="prenom" value="<?php if($leProfesseur != null) echo $leProfesseur['prenom']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Email Professeur :</td>
            <td>
                <input type="text" name="email" value="<?php if($leProfesseur != null) echo $leProfesseur['email']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Mot de passe Professeur :</td>
            <td>
                <input type="text" name="mdp" value="<?php if($leProfesseur != null) echo $leProfesseur['mdp']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Téléphone Professeur :</td>
            <td>
                <input type="text" name="tel" value="<?php if($leProfesseur != null) echo $leProfesseur['tel']; ?>">
            </td>
        </tr>
        <?php 
            if ($leProfesseur != null) echo "<input type='hidden' name='idprofesseur' value = '".$leProfesseur['idprofesseur']."' >";
        ?>
        <tr>
            <td class="align-middle text-center">
                <input type="reset" name="Annuler" value="Annuler">
            </td>
                <td class="align-middle text-center">
              <input type="submit"    <?php
                if ($leProfesseur != null) {
                    echo 'name = "Modifier" value = "Modifier"';
                } else {
                    echo 'name = "Valider" value = "Valider"';
                } 
                ?> >
            </td>
        </tr>
    </table>
</form>