DESCRIPTION & OBJECTIF DU PROJET :

Délivrer une application web locale permettant de générer un QR Code Wi-Fi (format WPA2) en renseignant le nom du réseau et son mot de passe.


PREREQUIS & CONTENU DU PROJET :

Cette application fonctionne en PHP, il aurait été plus simple pour l'utilisateur d'avoir une application HTML/JS car il n'aurait pas eu besoin de manipuler d'outils.
Cependant, comme évoqué lors de notre entretien vendredi dernier (23/10) et profitant de la liberté laissée sur le choix du langage, j'ai choisi d'utiliser PHP afin de mettre en pratique mes apprentissages récents sur ce langage.

Voici les prérequis :
	- PHP version 7 ou + installé sur la machine de l'utilisateur
	- Connexion Internet (l'application utilise une API publique qrserver.com
	pour générer le QR Code)

Cette application contient deux fichiers php et un fichier css, le fichier index.php contient le formulaire de la page d'accueil (contenant les champs de saisie du nom du réseau + mot de passe).
Le fichier connexion.php contient quant à lui le traitement des données écrites dans ces champs pour afficher un QR Code convenable.


LANCEMENT (WINDOWS) :

	- Ouvrir un terminal dans le dossier du projet
	- Executer la commande de lancement d'un serveur web : php -S localhost:8000
	- Ouvrir un navigateur et se rendre sur http://localhost:8000
