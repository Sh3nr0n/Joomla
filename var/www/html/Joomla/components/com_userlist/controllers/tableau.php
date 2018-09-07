<?php
/**
 * Created by PhpStorm.
 * User: Lukas Lepez
 * Date: 27/07/2018
 * Time: 11:22
 */

//Cela permet de sécurisé le point d'entrée au niveau de la plateforme Joomla
defined('_JEXEC') or die('Restricted access');

class UserListControllerTableau extends JControllerForm
{

    public function delete()
    {
        // On récupére la value de l'input name='id'
        $id = $this->input->get('id', 0, 'INT');

        // On crée une variable contenant la classe Tableau
        $modelTableau = $this->getModel('Tableau');

        // On lance la méthode delete
        $modelTableau->delete($id);

        header('Location: index.php/tableau-de-bord');
        exit();
    }
}