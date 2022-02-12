<?php
          
    if(!empty($_POST['username']) AND !empty($_POST['passwords']))
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=tp_connexion;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
        // On récupere le pass et le id du client de la db
        $req = $bdd->prepare('SELECT id_users, passwords FROM users WHERE username = :username');
        $req->execute(array('username'=>$_POST['username']));

        $donnees = $req->fetch();

        $isPasswordCorrect = password_verify($_POST['passwords'], $donnees['passwords']);
        if(!$donnees)
        {
            echo 'Mauvais identifiant';
        }
        else
        {
            if($isPasswordCorrect)
        {
            session_start();
            $_SESSION['id_users'] = $donnees['id_users'];
            $_SESSION['username'] = $_POST['username'];
            include "principal.php";
        }
        else{
                echo 'Mauvais identifiant';
            }
        }
    }
    
?>