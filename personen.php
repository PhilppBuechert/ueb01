<!doctype html>
<html lang="en">
<head>
	<?php include('headData.php'); ?>
    <title>Aufgabenplanner: Personen</title>
</head>
<body>

    <?php
        include ('header.php');
        echo dynamicHeader("Personen");
    ?>

<div class="container-fluid">
    <div class="row">

        <?php include('sidebar.php'); include ('table.php')?>

        <div class="col-8 main">
            <div class="row">

                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <?php
                            $colArray = array("Name", "E-Mail", "In Projekt");
                            fillTheader($colArray);
                        ?>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                        $personenArray = array(
                            array(
                                'name' => 'Name 1',
                                'email' => 'email1@email.com',
                                'last' => '<input type="checkbox" />',
                            ),
	
	                        array(
		                        'name' => 'Name 2',
		                        'email' => 'email2@email.com',
		                        'last' => '<input type="checkbox" />',
	                        ),
	
	                        array(
		                        'name' => 'Name 3',
		                        'email' => 'email3@email.com',
		                        'last' => '<input type="checkbox" />',
	                        ),
    
                        );
    
                        fillTbody($personenArray);
                    ?>
                    </tbody>
                </table>


            </div>

            <div class="row mt-5">
                <div class="col">

                    <h3>Bearbeiten/Erstellen:</h3>
                    <form>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input name="username" type="text" id="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail-Adresse:</label>
                            <input class="form-control" name="email" id="email" placeholder="E-Mail-Adresse eingeben" type="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Passwort:</label>
                            <input class="form-control" name="password" id="password" placeholder="Passwort" type="password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="check" id="check">
                            <label class="form-check-label" for="check" >Dem Projekt zugeordnet</label>
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