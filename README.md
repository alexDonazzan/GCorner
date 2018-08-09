#GCorner
Le projet consiste à créer une base de données
 en fonction d'une structure imposée.
Réaliser une page avec un moteur de recherche 
et un affichage du résultat.
Créer un Script de recherche documentaire sur des champs de la base.
##Installation du projet 
Ce projet a été réalisé à l'aide de Symfony 4 et Doctrine, 
il faut donc effectuer certaines commandes pour le faire fonctionner.
###Récupération du projet et installation
Tout d'abord, récupérer le projet via git à l'aide de git bash 
par exemple, dans le dossier prévu :

git init

git remote add origin git@github.com:alexDonazzan/GCorner.git

git pull

A ce moment, on a récupéré les sources dans le dossier 
ou l'on travail.

On lance ensuite les commandes :

composer install 

Il faut modifier le fichier .env pour que la ligne ou se trouve 
DATABASE_URL corresponde à la configuration du serveur.
 
 Puis, lancer la commande :
 
 php bin/console doctrine:database:create
 
 php bin/console doctrine:schema:create
 
  