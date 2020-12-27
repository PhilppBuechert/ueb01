<!doctype html>
<html lang="en">
<head>
	<?php include('headData.php'); ?>
    <title>Aufgabenplanner: Todos</title>
</head>
<body>

    <?php
        include ('header.php');
        echo dynamicHeader("Todos");
    ?>


    <div class="container-fluid">
        <div class="row">

            <?php include('sidebar.php') ?>

            <div class="col main">
                <div class="row">


                    <?php
                        $todoArray = array("todo nummer 1", "todo nummer 1");
                        $erledigtArray = array("erledigt nummer 1", "erledigt nummer 1");
                        $verschobenArray = array("verschoben nummer 1", "verschoben nummer 1");

                        include ('card.php');
                        createCard("ToDo", $todoArray);
                        createCard("Erledigt", $erledigtArray);
                        createCard("Verschoben", $verschobenArray);
                    ?>


                </div>
            </div>

        </div>
    </div>


</body>
</html>