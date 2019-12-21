<?php

namespace Henshall\SudokuChecker

/**
* Task: Create a simple class which validates a sudoku puzzle
* - Must accept a 9x9 matrix of integers from 1-9
* - Must return TRUE if the sudoku is a valid, complete solution, otherwise FALSE.
*/

class SudokuChecker
{
    public $puzzle = NULL;
    public $is_valid = NULL;

    function __construct(array $puzzle) {
        $this->puzzle = $puzzle;
        self::check_input();
    }
    

    public function check_input(){
        
        // Check to make sure sudoku puzzle has corret number of rows
        if (count($this->puzzle) !== 9) {
          throw new \Exception("Sudoku puzzle not in correct format - impossible to validate - invalid number of rows", 1);
        }
        // additional checks, set i to loop through puzzle
        $i=0;
        foreach ($this->puzzle as $key => $arr) {

          //Check to make sure sudoku puzzle has corret number of columns
          if (count($arr) !== 9) {
            throw new \Exception("Sudoku puzzle not in correct format - impossible to validate - invalid number of columns", 1);
          }

          //Check to make sure keys are correctly formatted
          if ($key !== $i) {
            throw new \Exception("Sudoku puzzle not in correct format - impossible to validate - keys in array should be 0-9", 1);
          }

          //Check to make sure puzzle contains arrays
          if (!is_array($arr)) {
            throw new \Exception("Sudoku puzzle not in correct format - impossible to validate - puzzle contains objects other then arrays", 1);
          }

          // Check to make sure there are only integers in the puzzle
          foreach ($arr as $value) {
            if (!is_int($value)) {
              throw new \Exception("Sudoku puzzle not in correct format - impossible to validate - one or more values is not an integer", 1);
            }
          }
          $i++;
        }
    }
    
    //loops through the rows of the puzzle and checks to make sure that each number is unique. 
    public  function check_rows_for_unique_numbers() {
        foreach ($this->puzzle as $array) {
          for ($i=1; $i < 10; $i++) {
            if (!in_array($i, $array)) {
              $this->is_valid = false;
              return false;
            }
          }
        }
        $this->is_valid = true;
        return true;
    }
    
    public function invert_puzzle() {
        // invert Puzzle
        $puzzle_new = [ [],[],[],[],[],[],[],[],[] ];
        for ($j=0; $j < 9; $j++) {
          for ($i=0; $i < 9; $i++) {
            array_push( $puzzle_new[$j], $this->puzzle[$i][$j] );
          }
        }
        $this->puzzle = $puzzle_new;
    }
    
  public function validate() {
      $check = self::check_rows_for_unique_numbers();
      if (!$this->is_valid) {
         return $this->is_valid;
      }
      self::invert_puzzle();
      self::check_rows_for_unique_numbers();
      return $this->is_valid;
  }
  
  public function return_string_validity() {
     if ($this->is_valid) {
         return "true";
     } else {
         return "false";
     }
  }

}

?>
