<?php

namespace Core;

// View
class View
{
    // Render a view file
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);
        $file = '../App/Views/' . $view;
        if (is_readable($file)) {
            require_once $file;
        } else {
            throw new \Exception("$file not found");
        }
    }

    // Render a view template using Twig
    public static function renderTemplate($template, $args = [])
    {
        static $twig = null;
        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader('../App/Views');
            $twig = new \Twig\Environment($loader);
        }
        echo $twig->render($template, $args);
    }
}
