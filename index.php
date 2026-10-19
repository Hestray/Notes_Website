<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aster Notes</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="client/css/global.css">
    <link rel="stylesheet" href="client/css/subjects.css">
</head>

<body>
    <?php
        require "server/Database.php";
        $config = require "config.php";

        $db = new Database($config['database']);
    ?>

    <header>
        <?php require "client/views/partials/header.html" ?>
    </header>

    <main>
        <?
        // #example code for how to handle notes index display
        // if ($this-page.startswith("/notes/")) {
        //     require "/index-folder-nav";
        //     require "/index-in-page";
        // }
        ?>
        <?php require "client/views/subject-cards.php" ?>
    </main>

    <footer>
        <?php require "client/views/partials/footer.html" ?>
    </footer>
</body>

</html>