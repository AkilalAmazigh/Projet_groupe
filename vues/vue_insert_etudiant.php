<h4>Insertion d'un étudiant</h4>

<form method="post" action="">
    <table class="table table-hover" border="0">
        <tr>
            <td class="align-middle text-center">Nom Etudiant :</td>
            <td>
                <input type="text" name="nom" value="<?php if($lEtudiant != null) echo $lEtudiant['nom']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Prénom Etudiant :</td>
            <td>
                <input type="text" name="prenom" value="<?php if($lEtudiant != null) echo $lEtudiant['prenom']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Adresse Etudiant :</td>
            <td>
                <input type="text" name="adresse" value="<?php if($lEtudiant != null) echo $lEtudiant['adresse']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Email Etudiant :</td>
            <td>
                <input type="text" name="email" value="<?php if($lEtudiant != null) echo $lEtudiant['email']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Mot de passe Etudiant :</td>
            <td>
                <input type="text" name="mdp" value="<?php if($lEtudiant != null) echo $lEtudiant['mdp']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Téléphone Etudiant :</td>
            <td>
                <input type="password" name="tel" value="<?php if($lEtudiant != null) echo $lEtudiant['tel']; ?>">
            </td>
        </tr>
        <?php 
            if ($lEtudiant != null) echo "<input type='hidden' name='idetudiant' value = '".$lEtudiant['idetudiant']."' >";
        ?>
        <tr>
            <td class="align-middle text-center">
                <input type="reset" name="Annuler" value="Annuler">
            </td>
            <td class="align-middle text-center">
                <input type="submit"    <?php
                if ($lEtudiant != null) {
                    echo 'name = "Modifier" value = "Modifier"';
                } else {
                    echo 'name = "Valider" value = "Valider"';
                }
                ?> >
            </td>
        </tr>
    </table>
</form>