<!doctype html>
<html lang="en">
<head>
	<?php include('headData.php'); ?>
    <title>Aufgabenplanner: Aufgaben</title>
</head>
<body>

    <?php
        include ('header.php');
        echo dynamicHeader("Aufgaben");
    ?>

<div class="container-fluid">
    <div class="row">

        <?php include('sidebar.php'); include ('table.php'); ?>

        <div class="col-8 main">
            <div class="row">

                <table class="table">

                    <thead class="thead-light">
                    <tr>
                        <?php
                            $colArray = array("Aufgabenbezeichnung", "Beschreibung der Aufgabe", "Reiter", "Zuständig");
                            fillTheader($colArray);
                        ?>
                    </tr>
                    </thead>

                    <tbody>

                    <?php
                        $aufgabenArray = array(
                            array(
                                  'bezeichnung' => 'Aufgabe 1',
                                  'beschreibung' => 'Beschreibung 1',
                                  'reiter' => 'ToDo',
                                  'last' => 'Person 1'
                            ),
	
	                        array(
		                        'bezeichnung' => 'Aufgabe 2',
		                        'beschreibung' => 'Beschreibung 2',
		                        'reiter' => 'ToDo',
		                        'last' => 'Person 2'
	                        ),
	
	                        array(
		                        'bezeichnung' => 'Aufgabe 3',
		                        'beschreibung' => 'Beschreibung 3',
		                        'reiter' => 'ToDo',
		                        'last' => 'Person 3'
	                        ),

                        );
                        
                        fillTbody($aufgabenArray);
                    ?>
                    
                    </tbody>
                </table>


            </div>

            <div class="row mt-5">
                <div class="col">

                    <h3>Bearbeiten/Erstellen:</h3>
                    <form>
                        <div class="form-group">
                            <label for="aufgabenbezeichnung">Aufgabenbezeichnung:</label>
                            <input name="aufgabenbezeichnung" id="aufgabenbezeichnung" type="text"  class="form-control" placeholder="Aufgabe">
                        </div>
                        <div class="form-group">
                            <label for="beschreibung">Beschreibung der Aufgabe:</label>
                            <textarea class="form-control" id="beschreibung" name="beschreibung" placeholder="Beschreibung"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="creationDate">Erstellungsdatum:</label>
                            <input name="creationDate" type="date" id="creationDate" class="form-control" placeholder="01.01.20">
                        </div>
                        <div class="form-group">
                            <label for="endDate">fällig bis:</label>
                            <input name="endDate" type="date" id="endDate" class="form-control" placeholder="01.01.20">
                        </div>
                        <div class="form-group">
                            <label for="reiter">Zugehöriger Reiter:</label>
                            <select id="reiter" name="reiter" class="custom-select">
                                <option selected value="todo">ToDo</option>
                                <option value="erledigt">Erledigt</option>
                                <option value="verschoben">Verschoben</option>
                            </select>
                        </div>
                        <div class="form-group">
                            
                            <label for="person">Zuständig:</label>
                            <select id="person" name="person" class="custom-select">
                                <option selected value="mustermann">Max Mustermann</option>
                                <option value="doodman">Daniel Doodman</option>
                                <option value="eisberg">Ellen Eisberg</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Speichern</button>
                        <button type="submit" class="btn btn-info">Reset</button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</div>


</body>
</html>