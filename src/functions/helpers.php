<?php

/**
 * Printa os argumentos passados
 *
 * @param ...$dump
 * @return void
 */
function dd(...$dump)
{
  echo "<pre>";
  var_dump(...$dump);
  echo "</pre>";

  die();
}

/**
 * Retorna o método HTTP sendo utilizado
 *
 * @return array
 */
function request()
{
  $request = $_SERVER['REQUEST_METHOD'];

  if ($request === 'POST') {
    return $_POST;
  }

  return $_GET;
}

/**
 * Redireciona para página alvo
 *
 * @param $target
 * @return void
 */
function redirect($target)
{
  return header("Location: /?page={$target}");
}

function redirectToHome()
{
  return header("Location: /");
}
