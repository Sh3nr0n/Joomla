<?php
/**
 * Created by PhpStorm.
 * User: Lukas Lepez
 * Date: 26/07/2018
 * Time: 16:25
 */

//Cela permet de sécurisé le point d'entrée au niveau de la plateforme Joomla
defined('_JEXEC') or die('Restricted access');

class UserListViewTableau extends JViewLegacy
{

    function display($tpl = null)
    {

        //Appelle la méthode User dans le model Tableau
        $this->user = $this->get('User');

        parent::display($tpl);
    }
}