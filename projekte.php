<!doctype html>
<html lang="en">
<head>
	<?php include('headData.php'); ?>
    <title>Aufgabenplanner: Projekte</title>
</head>
<body>

    <?php
        include ('header.php');
        echo dynamicHeader("Projekte");
    ?>

<div class="container-fluid">
    <div class="row">

        <?php include('sidebar.php') ?>

        <div class="col-8 main">
            <div class="row select-project mb-3">
                <div class="col">

                    <h3>Projekt Auswählen:</h3>
                    <div class="input-group">
                        <select class="custom-select" aria-label="Example select with button addon">
                            <option selected>Bitte Auswählen</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="row select-buttons mb-3">
                <div class="col">

                    <button type="button" class="btn btn-primary mr-3">Auswählen</button>
                    <button type="button" class="btn btn-primary mr-3">Bearbeiten</button>
                    <button type="button" class="btn btn-danger mr-3">Löschen</button>

                </div>
            </div>

            <div class="row create">
                <div class="col">

                    <h3>Projekt bearbeiten/erstellen:</h3>
                    <form>
                        <div class="form-group">
                            <label for="projekt">Projekt</label>
                            <input name="projekt" type="text" id="projekt" class="form-control" placeholder="Projekt" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="beschreibung">Projektbeschreibung</label>
                            <textarea class="form-control" id="beschreibung" placeholder="Beschreibung"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

            </div>

        </div>

    </div>
</div>


</body>
</html>