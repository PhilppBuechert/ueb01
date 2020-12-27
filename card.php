<?php

function createCard($name, $array) {
	
	if(isset($array) && is_array($array)) {
	    echo
	    '<div class="col">
	        <div class="card">
	            <div class="card-header">' . $name . '</div>
	            <ul class="list-group list-group-flush">';
	                foreach ($array as $item) {
	                    echo '<li class="list-group-item">' . $item .'</li>';
	                }
	    echo
	    '</ul>
	        </div>
	    </div>';
	}
}

