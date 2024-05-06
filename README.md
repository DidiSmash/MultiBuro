
# MultiBuro

## Introduction

Réalisation d’une solution Back Office, Front Office et d’une base de donnée

MULTIBURO est une entreprise nouvellement créée (13 mois d’ancienneté), spécialisée dans la location de bureaux de coworking à Lyon. La société a été fondée par cinq entrepreneurs passionnés d'informatique, qui ont décidé de mettre leur expertise en commun pour créer une entreprise dynamique et innovante.

Face à l’augmentation des réservations et les perspectives d’augmentation de l’activité pour les 5 années à venir, le système de réservation par tableur est devenu totalement inadapté. La société souhaite se doter d’une solution logicielle permettant de gérer la réservation des espaces de travail mis à disposition des clients (locataires).

## Objectif

Réaliser une solution logicielle permettant de gérer la réservation des espaces de travail mis à disposition des clients (locataires).

### Spécifications techniques :

**Back-Office :**
Application de bureau de type Windows Forms codée en C#

**Front-Office :**
Application web hébergée sur un serveur Apache et codée en PHP / HTML / CSS

**Base de donnée :**
Les données du back-office et du front-office sont stockées dans une base MySQL

### Back-Office
L'application back-office est destinée aux responsables de Multiburo.
Une fois identifiés, il leur sera possible de gérer (créer, modifier,
supprimer) les différents espaces de travail proposés à la réservation.

● L'application back-office sera une application de bureau de type Windows Forms.

● L'application back-office sera codée en C#.

● L'application back-office utilisera une architecture en couches (Accès aux données, Métier, Présentation).

● L'application back-office devra être reliée à la base de données MySQL

**Login :**

● Se connecter avec son adresse email et un mot de passe (haché en Sha256).

● Redirection vers l'espace de gestion des ressources.

**Gestion des ressources :**

● Consulter la liste des ressources. 

● Créer une ressource 

● Modifier une ressource. 

● Supprimer une ressource.

### Front-Office

L'application front-office est destinée aux clients de la société Multiburo.
Une fois identifiés, il leur sera possible de réserver un espace de travail pour une journée.Cette réservation pourra à terme, s'accompagner d'options comme la réservation d'un ordinateur portable ou encore d'une place de parking.

● L'application front-office sera codée en PHP / HTML / CSS / JS (optionnel).

● L'application front-office sera hébergée sur un serveur Web de type WAMP (local) ou LAMP 
(VM).

● L'application front-office devra être reliée à la base de données MySQL.

**Accueil :**

● Se connecter avec son adresse email et un mot de passe (haché en Sha256).

● Ouvrir une session PHP pour stocker l'id et les informations pertinentes de l'utilisateur.

● Redirection vers la page de réservation d'espace de travail.

**Réservation :**

● Choisir une journée pour la réservation.

● Contrôler que pour cette journée l'utilisateur dispose d'un abonnement actif.

● Afficher le nombre de places disponible pour chaque type d'espace de travail, pour la journée choisie.

● Choisir un espace de travail disponible.

● Enregistrer la réservation.

**Options :**

● Modifier la gestion des réservations pour y intégrer les options (Ordinateur portable et Place de parking).

● Contrôler que l'utilisateur dispose d'un abonnement actif comprenant ses options.

● Enregistrer la réservation avec des options

### Base de donnée

La base de données est destinée à accueillir les données regroupées des applications Back Office et Front-Office.

● La base de données sera pensée et présentée sous la forme d'un Diagramme de Classe UML 
avant d'être transposée en Schéma Relationnel puis en base de données Physique sur le SGBDR MySQL.

● La base de données devra répondre aux exigences de cyber sécurités utilisant des logins 
nominatifs avec des droits restreints pour les utilisateurs et les applications qui auront la possibilité de s'y connecter.

● La base de données sera hébergée sur un serveur Web de type WAMP (local) ou LAMP (VM).

**Conception :**

● Création du Diagramme de Classe UML.

● Transposition en Schéma Relationnel.

● Création du Script SQL de création de la base de données et de ses tables.

**Sécurisation :**

● Création d'un utilisateur nominatif pour le programmeur de la base.

● Création d'un utilisateur pour l'application Back-Office avec des droits limités au stricte nécessaire.

● Création d'un utilisateur pour l'application Front-Office avec des droits limités au stricte nécessaire.

## Réalisation

### Sprint 0

### Sprint 1

### Sprint 2

## Autheurs

- [@DidiSmash](https://github.com/DidiSmash)
- [@Piwiplus](https://github.com/Piwiplus)

