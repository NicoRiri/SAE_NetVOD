"# SAE_PHP_Retter_Bernardet_Lath_Capar" 
###Fonctionnalités de base :


##1. Identification/Authentification - Formulaire de login :
L’utilisateur se connecte à l’application en fournissant un identifiant (@mail) et un mot de passe.
Si l’authentification réussit, l’utilisateur accède à la plateforme et peut utiliser/gérer ses
informations et données personnelles : listes, profil etc...


##2. Inscription sur la plateforme :
Un visiteur peut s’inscrire sur la plateforme ; il fournit un identifiant (@mail) et un mot de passe
(double saisie) dont la qualité est contrôlée. Un fois inscrit, il peut se connecter en fournissant
son couple identifiant/mot de passe.


##3. Affichage du catalogue de séries :
Une fois connecté, la page d’accueil permet à l’utilisateur de demander l’affichage du catalogue
des séries disponibles. Le catalogue est affiché sous la forme d’une liste indiquant le titre de la
série, une image représentative.


##4. Affichage détaillé d’une série et de la liste de ses épisodes :
Lors d’un click sur une série dans la liste, la série est affichée en détail : titre, genre, public visé,
descriptif, année de sortie, date d’ajout sur la plateforme, nombre d’épisodes. La liste des
épisodes de la série est également affichée, avec pour chaque épisode : numéro, titre, durée,
image.


##5. Affichage/visionnage d’un épisode d’une série :
Lors d’un click sur un épisode dans la liste, affichage détaillé de l’épisode : image, titre, résumé,
durée.


##6. Ajout d’une série dans la liste de préférence d’un utilisateur :
Lorsqu’une série est affichée, possibilité de l’ajouter à la liste de préférence de l’utilisateur au
travers d’un bouton « ajouter à mes préférences ».


##7. Page d’accueil d’un utilisateur : afficher ses séries préférées
La page d’accueil d’un utilisateur affiche la liste des séries qu’il a ajouté dans ses préférences.
La liste est cliquable : on peut afficher le détail d’une série à partir de cette liste.
La page d’accueil est affichée automatiquement après le login, ou par click sur un bouton
« retour à l’accueil » depuis toutes les pages.


##8. Lors du visionnage d’un épisode, ajouter automatiquement la série à la liste « en
cours » de l’utilisateur
Lorsqu’un épisode est visionné, la série contenant l’épisode est automatiquement ajoutée à la
liste « en cours » de l’utilisateur ; Cette liste apparaît sur la page d’accueil de l’utilisateur, de
façon similaire à la liste de préférence.


##9. Lors du visionnage d’un épisode d’une série, noter et commenter la série
Lors du visionnage d’un épisode d’une série, l’utilisateur peut saisir une note (1 à 5) et un
commentaire. La note et le commentaire concerne la série complète. Il n’y a qu’une note et un
seul commentaire par utilisateur pour une série.


##10. Lors de l’affichage d’une série, indiquer sa note moyenne et donner accès aux
commentaires
Lors de l’affichage détaillé d’une série, la note moyenne obtenue par la série, calculée à partir
des notes attribuées par les utilisateurs, est affichée. Un lien permet d’accéder à l’affichage des
commentaires déposés par les utilisateurs ayant visionné la série.



###Fonctionnalités étendues :


##11. Activation de compte
Après inscription, un compte doit être activé pour être utilisable. Pour ce faire, une url contenant
un token unique, aléatoire et éphémère (courte durée d’utilisation) est générée. L’utilisateur doit
cliquer sur cette url pour activer son nouveau compte et pouvoir se connecter.
En principe, cette url est envoyée par mail ; pour simplifier le processus, elle est affichée sur la
page comme résultat de l’inscription.


##17. gestion du profil de l’utilisateur : ajouter des informations (nom, prénom, genre
préféré ...)
L’utilisateur peut renseigner des informations le concernant dans son profil : nom, prénom,
genre préféré etc...


##12. Recherche dans le catalogue par mots clés
Lors de l’affichage du catalogue, l’utilisateur peut saisir un ou plusieurs mots. Seules les séries
contenant ces mots dans le titre ou le descriptif sont affichées.

##13. Tri dans le catalogue
Lors de l’affichage du catalogue, possibilité de trier la liste affichée selon différents critères :
titre, date d’ajout sur la plateforme, nombre d’épisodes ...


##14. filtrage du catalogue par genre, par public
Lors de l’affichage du catalogue, filtrer le résultat selon le genre, ou selon le public.


##15. gestion de la liste de préférence : retrait
L’utilisateur peut supprimer des éléments de sa liste de préférence.


##16. Gestion de la liste « déjà visionnées »
Lorsque tous les épisodes d’une série ont été visualisés, la série est déplacée de la liste « en
cours » à la liste « déjà visionnées » ; Dans sa page d’accueil, l’utilisateur peut accéder à la
visualisation de cette liste.


##18. accès direct à l’épisode à visionner lorsque l’on visualise une série qui est dans la
liste « en cours »


##19. Tri dans le catalogue selon la note moyenne


##20. mot de passe oublié
Lorsqu’un utilisateur a oublié son mot de passe, il peut accéder à une fonctionnalité de création
d’un nouveau mot de passe. Pour cela, il fourni son identifiant (@mail) et une url contenant un
token unique, aléatoire et éphémère est générée. En cliquant sur cette url, l’utilisateur accès à
un formulaire lui permettant de saisir un nouveau mot de passe.
