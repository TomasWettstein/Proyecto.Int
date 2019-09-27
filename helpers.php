<?php
function old ($dato){
    if (isset($_POST[$dato])){
        return $_POST[$dato];
    }
}



?>