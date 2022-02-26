<?php

// Traitement en rapport avec la table "Admin".

namespace App\Controller;

use App\Model\AdminModel;

// Controller de la classe Actualites
class ControllerAdmin
{
    private $model;

    public function __construct()
    {
        $this->model = new AdminModel();
    }

    // Connexion à l'espace Admin à travers le formulaire.
    public function login_admin() {
        // Conditions d'exécution du formulaire de connexion
        if(isset($_POST["send"])) {
            if (!(empty($_POST['mail']) && empty($_POST['mdp']))) {
                $mail = htmlspecialchars($_POST['mail']);
                $mdp = htmlspecialchars(hash('sha256', $_POST['mdp']));

                // Vérification de l'existence des identifiants de connexion.
                if ($this->model->findLogin($mail, $mdp)['verifLogin'] == 1) {
                    // Puis connexion.
                    $login_admin=$this->model->getLogin($mail, $mdp);

                    // Variables de la session.
                    $_SESSION['id_admin'] = $login_admin->id;
                    $_SESSION['prenom_admin'] = $login_admin->prenom;
                    $_SESSION['nom_admin'] = $login_admin->nom;

                    // Redirection de l'utilisateur vers index.php quand la connexion est effectuée.
                    header('location: index');
                } else {
                    $informations_incorrectes = "Identifiant ou mot de passe incorrect.";
                }
            }
        }
        else {}
        require ('../App/View/getLoginAdmin.php');
    }



}