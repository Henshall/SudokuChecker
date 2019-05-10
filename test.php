<?php
require("sudokuChecker.php");
require("sudokus.php");

// use sudokuchecker class to validate the sudoku puzzles
var_dump(sudokuChecker::validate($valid_sudoku));
var_dump(sudokuChecker::validate($invalid_sudoku));
?>
