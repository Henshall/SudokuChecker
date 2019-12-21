# Sudoku Checker
## Version: 1.0.0

I had the task of creating a simple sudoku checker which would check if a given puzzle (in an array) is valid or not. Feel free to use this class in any Sodoku related projects you have :)

## Installation:
```bash
composer require henshall/sudoku_checker
```

## Using on Laravel:
```bash
use Henshall\SudokuChecker\SudokuChecker;
```

## Usage:

Soduku checker is instantiated and accepts a puzzle as an argument. 
We validate the puzzle, and then die / var_dump its resulting value of is_valid
```bash
$valid_sudoku = [
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
$sodoku_checker = new SudokuChecker($valid_sudoku);
die(var_dump($sodoku_checker->validate()));
```

Alternatively we can use the 'return_string_validity' function and return true/false as a string
```bash
$invalid_sudoku = [
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
$sodoku_checker = new SudokuChecker($invalid_sudoku);
$sodoku_checker->validate();
echo $sodoku_checker->return_string_validity();
```

You can also check the status of the puzzle by accessing the $is_valid variable. 
```bash
$sodoku_checker = new SudokuChecker($invalid_sudoku);
$sodoku_checker->validate();
$validity = $sodoku_checker->is_valid;
```
