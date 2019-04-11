<?php
/**
* Validate a Sudoku.
*
* @param int[][] $sudoku
*   A 9x9 matrix of integers from 1-9 (inclusive).
*
* @return bool
*   TRUE if the sudoku is a valid, complete solution, otherwise FALSE.
*/

function validate(array $puzzle) {

  // Simple check to make sure puzzle is in correct format.
  // This is meant for a temporary fix so that users do not accidently
  // put the sudoku puzzle inside another array (which will make the function
  // always return false).
  if (count($puzzle) != 9) {
    return "Please put the puzzle in the correct format. You may of accidently put it inside of another array";
  }

  $valid = true;

  // Check Puzzle
  foreach ($puzzle as $array) {
    for ($i=1; $i < 10; $i++) {
      if (!in_array($i, $array)) {
        $valid = false;
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
        $valid = false;
      }
    }
  }
  return $valid;
}

// put any sudoku puzzle here
$valid_sudokus = [
  [7, 2, 6, 4, 9, 3, 8, 1, 5],
  [3, 1, 5, 7, 2, 8, 9, 4, 6],
  [4, 8, 9, 6, 5, 1, 2, 3, 7],
  [8, 5, 2, 1, 4, 7, 6, 9, 3],
  [6, 7, 3, 9, 8, 5, 1, 2, 4],
  [9, 4, 1, 3, 6, 2, 7, 5, 8],
  [1, 9, 4, 8, 3, 6, 5, 7, 2],
  [5, 6, 7, 2, 1, 4, 3, 8, 9],
  [2, 3, 8, 5, 7, 9, 4, 6, 1],
];

$invalid_sudokus = [
  [5, 3, 4, 6, 7, 8, 9, 1, 2],
  [6, 7, 2, 1, 9, 5, 3, 4, 8],
  [1, 9, 8, 3, 4, 2, 5, 6, 7],
  [8, 5, 9, 9, 6, 1, 4, 2, 3],
  [4, 2, 6, 8, 5, 3, 7, 9, 1],
  [7, 1, 3, 7, 2, 4, 8, 5, 6],
  [9, 6, 1, 5, 3, 7, 2, 8, 4],
  [2, 8, 7, 4, 1, 9, 6, 3, 5],
  [3, 4, 5, 2, 8, 6, 1, 7, 9],
];

print(validate($valid_sudokus));
?>
