<?php
session_start();

if (isset($_GET['theme'])) {
    $allowed_themes = ['light', 'dark'];
    $selected_theme = $_GET['theme'];
    if (in_array($selected_theme, $allowed_themes)) {
        $_SESSION['theme'] = $selected_theme;
    }
}

if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'light';
}

$theme = $_SESSION['theme'];
