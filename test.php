<?php
require("src/SudokuChecker.php");
require("sudokus.php");

// use sudokuchecker class to validate the sudoku puzzles

// VALID SUDOKU CHECKER
$sodoku_checker = new SudokuChecker($valid_sudoku);
$sodoku_checker->validate();
$sodoku_checker_validity = $sodoku_checker->return_string_validity();

// VALID SUDOKU CHECKER
$sodoku_checker = new SudokuChecker($invalid_sudoku);
$sodoku_checker->validate();
echo $sodoku_checker->return_string_validity();

?>
