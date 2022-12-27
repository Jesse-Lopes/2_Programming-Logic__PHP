<?php
  function calculateValues()
  {
    $values = [];

    for ($i = 0; $i < 2; $i++)
    {
      $values[$i] = intval(fgets(STDIN));
    }

    return $values[0] + $values[1];
  }

  $result = calculateValues();

  echo "X = $result";
?>
