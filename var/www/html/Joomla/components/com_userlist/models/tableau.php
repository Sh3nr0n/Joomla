<?php
/**
 * Created by PhpStorm.
 * User: Lukas Lepez
 * Date: 27/07/2018
 * Time: 09:15
 */

//Cela permet de sécurisé le point d'entrée au niveau de la plateforme Joomla
defined('_JEXEC') or die('Restricted access');

class UserListModelTableau extends JModelItem
{
    protected $message;

    //Methode pour récuperer la table user
    public function getUser()
    {
        // Permet la connexion à la bdd
        $db = JFactory::getDBO();

        // Requête sql
        $query = "SELECT * FROM #__users" ;

        // Réinitialise la requête en utilisant notre nouvel objet de requête.
        $db->setQuery($query);

        //Méthode permettant d'obtenir un tableau contenant l'ensemble des résultat ou chaque ligne est un object
        $user = $db->loadObjectList();

        return $user;
    }

    //Methode pour supprimer un utlisateur en fonction de son id
    public function delete($id)
    {
        // Permet la connexion à la bdd
        $db = JFactory::getDbo();

        // Crée un nouvel object query
        $query = $db->getQuery(true);

        $conditions = array(
            $db->quoteName('id') . ' = ' . $id,
        );

        $query->delete($db->quoteName('#__users'));
        $query->where($conditions);

        // Réinitialise la requête en utilisant notre nouvel objet de requête
        $db->setQuery($query);

        // Exécute la requête
        $db->execute();

    }
}