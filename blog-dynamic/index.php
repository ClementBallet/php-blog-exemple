<!doctype html>
<html lang="fr">

<?php
// On peut inclure nos fichiers externes avec include (voir aussi include_once)
// https://www.php.net/manual/fr/function.include.php
// https://www.php.net/manual/fr/function.include-once.php
include 'template-parts/head.html';
?>

<body>
<?php
// On peut inclure aussi nos fichiers externes avec require (voir aussi require_once)
// https://www.php.net/manual/fr/function.require.php
// https://www.php.net/manual/fr/function.require-once.php
require 'template-parts/header.html';
require 'template-parts/main.php';
require 'template-parts/footer.html';

/**
 * Quelle est la différence entre include et require ?
 * La différence principale réside dans le renvoie d'erreur si le fichier demandé ne peut pas être récupéré :
 * - include ne bloquera pas l'execution de la page et renverra une erreur de type E_WARNING
 * - require bloquera l'execution de la page et renverra une erreur de type E_COMPILE_ERROR
 */
?>
</body>

</html>
