# Projet de Gestion de Flotte GSB


Ce projet a pour but de gérer les véhicules des commerciaux
et de pouvoir les envoyer chez des Techniciens pour qu'ils puissent réparer la voiture concernée. Ce projet a été réalisé par Bouliol Thibault, Thomas Solier, Axel Renault, Jordan Teulande et Robin Gimenez pour l'entreprise GSB (entreprise fictive visant à avoir un support pour nos missions).

## Gestion des rôles

Les rôles sont répartis de la manière suivante :

- Toute personne de l'entreprise est un salarié
- Il peut ensuite obtenir un rôle grâce à l'administrateur
- L'Administrateur a tous les droits sur la plateforme
- Les Commerciaux peuvent voir les véhicules ainsi que leur état

## Relation avec la Base de données

La base de données est accessible depuis les classes métier de notre projet. Nous utilisons le modèle MVC pour notre projet, permettant d'avoir une clarté de code ainsi qu'une potentielle évolution la plus rapide possible.

## Le routeur

Toutes les requêtes que nous effectuons passent par le routeur, en gérant les routes et en envoyant vers le controleur spécifique qui lui-même renvoie à une vue. Il est le coeur de notre site.
Pour le moment, nos requêtes sont gérées avec des balises (if) mais plus tard nous optimiserons cette classe pour qu'elle soit plus simple à faire évoluer.
