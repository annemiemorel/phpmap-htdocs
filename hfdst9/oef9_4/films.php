<?php
//films.php
require_once 'FilmLijst.php';

$filmlijst = new FilmLijst();
if (isset($_GET["action"]) && $_GET["action"] == "new") {
    $filmlijst->createFilm($_POST["titel"], $_POST["duurtijd"]);
}
if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $filmlijst->deleteFilm($_GET["id"]);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Films</title>
    </head>
    <body>
        <h1>Alle films</h1>

        <?php
        $tab = $filmlijst->getLijst();
        ?>
        <ul>
            <?php
            foreach ($tab as $film) {
                ?>
                <li>
                    <a href="filmBewerken.php?id=<?php print($film->getId());?>">
			<?php print($film->getTitel());?>
                    </a>
                    (<?php print($film->getDuurtijd()); ?> min)
                    <a href="films.php?action=delete&id=<?php print($film->getId()); ?>">
                        <img src="img/delete.png" />
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>

        <h1>Film toevoegen</h1>

        <form action="films.php?action=new" method="post">
            Titel : <input type="text" name="titel" /><br /><br />
            Duurtijd : <input type="text" name="duurtijd" /> minuten<br />

            <input type="submit" value="Toevoegen" />
        </form>

    </body>
</html>
