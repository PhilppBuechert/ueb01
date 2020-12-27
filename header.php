<?php

function dynamicHeader($name) {
    return
    '<div class="jumbotron jumbotron-fluid header">

        <div class="container-fluid header-content text-center">
            <h2>Aufgabenplanner: ' . $name . '</h2>
        </div>

    </div>';
}