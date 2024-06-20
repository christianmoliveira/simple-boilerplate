<?php

/**
 * Valida os valoes passados por formulários
 *
 * @param $fields
 * @return object
 */
function validate($fields)
{
  $request = request();

  $validate = [];
  foreach ($fields as $field => $type) {
    switch ($type) {
      case 's':
        $validate[$field] = htmlspecialchars($request[$field]);
        break;
      case 'e':
        $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
        break;
      case 'i':
        $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
        break;
    }
  }

  return (object) $validate;
}

function isEmpty()
{
  $request = request();

  foreach ($request as $key => $value) {
    if (!$value) {
      return false;
    }
  }

  return true;
}
