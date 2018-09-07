<?php
/**
 * Created by PhpStorm.
 * User: Lukas Lepez
 * Date: 26/07/2018
 * Time: 16:26
 */

//Cela permet de sécurisé le point d'entrée au niveau de la plateforme Joomla
defined('_JEXEC') or die('Restricted access');

$users = $this->user;

?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Pseudonyme</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($users as $id => $user) { ?>

        <tr>
            <form>
                <th scope="row"><?php echo $user->id ?></th>
                <td><?php echo $user->name ?></td>
                <td><?php echo $user->username ?></td>
                <td><?php echo $user->email ?></td>
                <td><input type="submit" value="Supprimer"></td>
                <input type="hidden" name="id" value="<?php echo $user->id ?>" />
                <input type="hidden" name="task" value="tableau.delete" />
            </form>
        </tr>

    <?php } ?>

    </tbody>
</table>