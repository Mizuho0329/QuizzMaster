# features/question.feature
# language: fr
Fonctionnalité: Question
  Afin de modifier/supprimer/ajouter une question
  En tant qu'utilisateur
  Je dois être capable de cliquer le bouton nommé "Modifier" ou "Supprimer" ou "Ajouter"


  Scénario: Modifier une question
    Etant donné que je vois une liste des questions dont un bouton "Modifier" pour chaque question
    Quand je clique sur le bouton nommé "Modifier" de la question que je veux modifier
    Et je modifie les champs
    Et je clique un bouton "OK"
    Alors je dois voir la liste des questions avec la question modifiée

  Scénario: Supprimer une question
    Etant donné que je vois une liste des questions dont un bouton "Supprimer" pour chaque question
    Quand je clique sur le bouton nommé "Supprimer" de la question que je veux supprimer
    Et je clique un bouton "OK"
    Alors je dois voir la liste des questions sans la question supprimée

  Scénario: Commencer à ajouter une question
    Etant donné que je vois une liste des questions et un bouton "Nouvelle question"
    Quand je clique sur le bouton nommé "Nouvelle question"
    Alors je dois voir la formulaire de la nouvelle question

  Scénario: Valider la nouvelle question
    Etant donné que je vois la formulaire de la nouvelle question
    Quand je remplis les champs "Question", "Bonne réponse", "Mauvaise réponse 1", "Mauvaise réponse 2", "Mauvaise réponse 3", "Indice", "Image", "Catégorie"
    Et je clique un bouton "Ajouter"
    Alors je dois voir la liste des questions dont la nouvelle question ajoutée

  Scénario: Retourner au Menu
    Etant donné que je vois un bouton nommé "Retour menu"
    Quand je clique sur le bouton nommé "Retour menu"
    Alors je dois voir la page "Menu"
