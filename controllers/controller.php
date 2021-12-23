<?php
class Controller {
    public static function CreateView($viewName) {
        require_once ("./views/pages/$viewName.php");
    }
}
?>