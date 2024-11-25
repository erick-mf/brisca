<?php

namespace Controllers;

class ErrorController{
    public static function showError404():string {
        return "<p>La página que buscas no existe";
    }
}
