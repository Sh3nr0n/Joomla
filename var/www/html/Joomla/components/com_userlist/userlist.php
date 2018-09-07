<?php
/**
 * Created by PhpStorm.
 * User: Lukas Lepez
 * Date: 26/07/2018
 * Time: 14:05
 */

//Cela permet de sécurisé le point d'entrée au niveau de la plateforme Joomla
defined('_JEXEC') or die('Restricted access');

// JControllerLegacy est une classe de Joomla.
// Pour que notre site puisse utiliser les contrôleurs, nous devons étendre cette classe dans notre composant.
// La méthode statique getInstance de la classe JControllerLegacy va permettre la création d'un contrôleur.
// Dans le code ci-dessus, il va instancier un objet de contrôleur pour une classe nommée UserListController
$controller = JControllerLegacy::getInstance('UserList');

$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
