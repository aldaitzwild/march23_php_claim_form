# Formulaire de réclamation de Dunder Mifflin Inc.
![Logo Dunder Mifflin](images/logo_dunder.png)

Vous avez été engagé pour refondre le formulaire de contact du préstigieux distributeur de papier **Dunder Mifflin**.


## 1 - Retour au bureau
Tout d'abord, reprenez le travail où votre prédécesseur l'a laissé, en clonant ce repo.

Une fois cela fait, lancez le projet avec la commande : 

`php -S localhost:8000`

et ouvrez le formulaire (page `form.html`)


## 2 - Prise de contact
Comme vous pourrez le remarquer, le formulaire de réclamation ne permet ni de connaitre précisement le nom de la personne qui ouvre une réclamation, ni de récupérer son email pour lui répondre.

Votre première tâche sera donc d'ajouter au formulaire : 
1. un champ "Votre nom :" qui contiendra du texte et sera obligatoire
2. un champ "Votre email :" qui contiendra un email et sera obligatoire

Indice : *travaillez dans le **TODO 1** laissé par votre prédécésseur dans `form.html`*


## 3 - On récapitule
Nos clients nous ont également demandé de pouvoir accéder à un récapitulatif de leur réclamation aprés avoir valider le formulaire.

1. Faire en sorte que le formulaire redirige vers la page `result.php`.
2. La page `result.php` est déjà commencée. Faites en sorte que les données (nom de l'entreprise, nom et email du contact, message) provenant du formulaire s'affichent dans le cadre récapitulatif.

Indice n°1 : *Travaillez au niveau du **TODO 2** et remplacer les valeurs en dur par celles envoyées par le formulaire*

Indice n°2 : *Pensez à vous prémunir des attaques malicieuses en utilisant [htmlentities()](https://www.php.net/manual/fr/function.htmlentities.php)*


## 4 - Contrôle "Quabité"
Naturellement nous souhaitons prévenir des réclamations de mauvaise qualité et informer nos utilisateurs s'ils renseignent mal leurs demandes.

Les contrôles à appliquer sont : 
- Le nom de l'entreprise est obligatoire
- Le nom du contact est obligatoire
- L'email du contact est obligatoire
- L'email du contact est bien formaté comme un email
- Le message de la réclamation est obligatoire
- Le message de la réclamation doit faire plus de 30 caractères

Indice n°1 : *Travaillez au niveau du **TODO 3**. À cet endroit il s'agit de vérifier les données envoyées par le formulaire et d'alimenter le tableau `$errors` si des erreurs sont relevées.*

Indice n°2 : *N'hésitez pas à consulter la documentation des fonctions [isset()](https://www.php.net/manual/fr/function.isset.php) et [empty()](https://www.php.net/manual/fr/function.empty.php) qui peuvent vous aider.*


## 5 (Bonus) - Dundee awards 🏆
Afin de mieux répartir les réclamations entre les vendeurs nous allons demander aux utilisateurs de saisir leur contact commercial lors de leurs réclamations. Nous viendrons également afficher le portrait de leur contact dans le récapitulatif.

Pour cette tâche il faut donc : 
1. Ajouter une liste déroulante dans le formulaire qui affichera les noms : 
    - Andy Bernard
    - Dwight Schrute
    - Jim Halpert
    - Phyllis Lapin-Vance
    - Stanley Hudson
2. Contrôler qu'un nom ait bien été sélectionné et que sa valeur fasse bien partie d'un de ces 5 contacts.
3. Afficher dans la page `result.php` le portrait qui correspond au bon vendeur à la place de `placeholder.png` (vous trouverez les portraits de chaque vendeur dans le répertoire images au format `.webp`)

Indice n°1 : Une liste déroulante affiche des informations, mais la donnée envoyée au serveur peut-être différente si besoin. Ici les images que vous devez afficher sont formatées avec le prénom de l'employé, utiliser cette donnée en `value` du `select` devrait aider. 
Indice n°2 : Utilisez un tableau PHP pour faciliter la manipulation de cette liste de nom et sa validation .
