<?php


if (!function_exists('init_header')) {
    /**
     * Generates a dynamic HTML header
     *
     * @param string $title The page title
     */
    function init_header(string $title = '')
    {
        echo "<!DOCTYPE html>";
        echo '<html lang="en">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo "<title>{$title}</title>";
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">';
        echo '<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">';
        echo '</head>';
        echo '<body>';
        echo '<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">';
        echo '<div class="container">';
        echo '<a class="navbar-brand" href="#">Blogs</a>';
        echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
        echo '<span class="navbar-toggler-icon"></span>';
        echo '</button>';
        echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
        echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
        echo '<li class="nav-item">';
        echo '<a class="nav-link active" aria-current="page" href="#"></a>';
        echo '</li>';
        echo '</ul> ';
        echo '</div>';
        echo '</div>';
        echo '</nav>';
    }
}

if (!function_exists('init_footer')) {
    /**
     * Generates a dynamic HTML header
     *
     * @param string $title The page title
     */
    function init_footer()
    {
        echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>';
        echo '<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>';
        echo '</body>';
        echo '</html>';
    }
}
