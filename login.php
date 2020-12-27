<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="../style/login.css">-->
    <title>Aufgabenplanner: Login</title>

</head>
<body>

    <?php
        include ('header.php');
        echo dynamicHeader("Login");
    ?>

    <div class="container">

        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="email">Email-Addresse:</label>
                        <input type="email" class="form-control" id="email" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="loginSubmit">AGBs und Datenschutzbedingung akzeptieren</label>
                    </div>
                    <button type="submit" class="btn btn-primary" id="loginSubmit" disabled>Einloggen</button>
                </form>
                <div class="form-group mt-5">
                    Noch nicht registriert?
                    <a href="sign-up">Registrierung</a>
                </div>
                <div class="form-group">
                    Überspringen
                    <a href="/">Überspringen</a>
                </div>
            </div>

        </div>

    </div>

    <script>
        const checkBox = document.getElementById('checkbox');
        const loginSubmit = document.getElementById('loginSubmit');

        let toggle = e => loginSubmit.disabled = !e.target.checked;
        checkBox.addEventListener('change', toggle);
    </script>

</body>
</html>