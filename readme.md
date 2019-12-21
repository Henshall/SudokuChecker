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
$sodoku_checker = new SudokuChecker($puzzle);
die(var_dump($sodoku_checker->validate()));
```

Alternatively we can use the 'return_string_validity' function and return true/false as a string
```bash
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


