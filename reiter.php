<!doctype html>
<html lang="en">
<head>
    <?php include('headData.php'); ?>
    <title>Aufgabenplanner: Reiter</title>
</head>
<body>

    <?php
        include ('header.php');
        echo dynamicHeader("Reiter");
    ?>

<div class="container-fluid">
    <div class="row">

        <?php include('sidebar.php'); include ('table.php');?>

        <div class="col-8 main">
            <div class="row">

                <table class="table">
                    <thead class="thead-light">
                    <tr>
	                    <?php
                            $colArray = array("Name", "Beschreibung");
                            fillTheader($colArray);
	                    ?>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $personenArray = array(
                            array(
                                'name' => 'Name 1',
                                'last' => 'Beschreibung 1',
                            ),
        
                            array(
                                'name' => 'Name 2',
                                'last' => 'Beschreibung 2',
                            ),
        
                            array(
                                'name' => 'Name 3',
                                'last' => 'Beschreibung 3',
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
                            <label for="reiter">Bezeichnung des Reiters</label>
                            <input name="reiter" type="text"  class="form-control" placeholder="Reiter">
                        </div>
                        <div class="form-group">
                            <label for="beschreibung">Beschreibung</label>
                            <textarea class="form-control" name="beschreibung" placeholder="Beschreibung"></textarea>
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