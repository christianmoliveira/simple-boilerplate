<?php

/**
 * Carrega as páginas com base na query param 'page'
 *
 * @return string
 */
function load()
{
  $page = null;

  if (array_key_exists('page', $_GET)) {
    $page = htmlspecialchars($_GET['page']);
  }

  $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

  if (!file_exists($page)) {
    $page = 'pages/_404.php';
  }

  return $page;
}
