

-- Description --

Créer vos fichier pdf sécurisez par un mot passe que vous aurez définir.


-- Utilisation --

Installation des dépendances 

  composer install

Pour créer un pdf utilisé la fonction 'create_pdf' du plugin

create_pdf($html, $filename, $password)

<b>$html</b> est une chaine de caractère et est requis;

<b>$filename</b> est une chaine de caractère et est requis;

<b>$password</b> est une chaine de caractère de 8 caractère minimum et est requis

Si le pdf est créée avec succès la fonction renvoie un array contenant:
<b>path</b> le chemin absolu menant vers le fichier;
<b>filename</b> le nom du fichier suis de son extension;

Si l'operation à échoué la fonction renvoie false 

Les fichiers pdf créée son stocker dans le dossier output du plugin


-- Exemple --


$html = ```"<h1 style='color: red;'>Hello World</h1>"```;</br>
$pass = "password";</br>
$filename = "test";</br>

$result = create_pdf($html, $filename, $pass);


