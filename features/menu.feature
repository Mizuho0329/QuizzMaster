# features/menu.feature
# language: fr
Fonctionnalité: Menu
  Afin d'utiliser cette application
  En tant qu'utilisateur
  Je dois être capable de cliquer un bouton dans le menu


  Scénario: Commencer quizz
    Etant donné que je vois un bouton du menu nommé "Démarrer quizz"
    Et je vois un bouton du menu nommé "Option"
    Et je vois un bouton du menu nommé "Editer les questions"
    Quand je clique sur le bouton nommé "Démarrer quizz"
    Alors je dois voir la page : "Nouvelle partie"

  Scénario: Modifier les options
    Etant donné que je vois un bouton du menu nommé "Démarrer quizz"
    Et je vois un bouton du menu nommé "Option"
    Et je vois un bouton du menu nommé "Editer les questions"
    Quand je clique sur le bouton nommé "Option"
    Alors je dois voir la page : "Option"

  Scénario: Editer les questions
    Etant donné que je vois un bouton du menu nommé "Démarrer quizz"
    Et je vois un bouton du menu nommé "Option"
    Et je vois un bouton du menu nommé "Editer les questions"
    Quand je clique sur le bouton nommé "Editer les questions"
    Alors je dois voir la page : "Editer les questions"
