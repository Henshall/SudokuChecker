<?php

/**
* Task: Create a class which validates a sudoku puzzle
*
* @param array[]
*  A 9x9 matrix of integers from 1-9 (inclusive).
*
* @return bool
*   TRUE if the sudoku is a valid, complete solution, otherwise FALSE.
*/

class sudokuChecker
{
  public static function validate(array $puzzle) : bool {

    // Check to make sure sudoku puzzle has corret number of rows
    if (count($puzzle) != 9) {
      throw new \Exception("Sudoku puzzle not in correct format - impossible to validate - invalid number of rows", 1);
    }

    // Check to make sure sudoku puzzle has corret number of columns
    foreach ($puzzle as $arr) {
      if (count($arr) != 9) {
        throw new \Exception("Sudoku puzzle not in correct format - impossible to validate - invalid number of columns", 1);
      }

      // Check to make sure there are only integers in the puzzle
      foreach ($arr as $value) {
        if (!is_int($value)) {
          throw new \Exception("One or more values is not an integer", 1);
        }
      }

    }

    // set is_valid variable to true - this variable will be returned and set to false later if puzzle is not validated.
    $is_valid = true;

    // Check Puzzle
    foreach ($puzzle as $array) {
      for ($i=1; $i < 10; $i++) {
        if (!in_array($i, $array)) {
          $is_valid = false;
        }
      }
    }

    // invert Puzzle
    $puzzle2 = [ [],[],[],[],[],[],[],[],[] ];
    for ($j=0; $j < 9; $j++) {
      for ($i=0; $i < 9; $i++) {
        array_push( $puzzle2[$j], $puzzle[$i][$j] );
      }
    }

    // Check Inverted Puzzle
    foreach ($puzzle2 as $array) {
      for ($i=1; $i < 10; $i++) {
        if (!in_array($i, $array)) {
          $is_valid = false;
        }
      }
    }
    return $is_valid;
  }

}


?>
