<?php
  namespace Project\Name\Core;

  /**
   * Math
   * 
   * A class containing static methods for performing mathematical operations.
   * This is just a sample class to demonstrate how to use OOP in PHP.
   */
  final class Math {
    /**
     * Add
     * 
     * Adds two integers together.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The sum of $a and $b
     */
    public static function add(int $a, int $b): int {
      return $a + $b;
    }

    /**
     * Subtract
     * 
     * Subtracts two integers.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The difference of $a and $b
     */
    public static function subtract(int $a, int $b): int {
      return $a - $b;
    }

    /**
     * Multiply
     * 
     * Multiplies two integers.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The product of $a and $b
     */
    public static function multiply(int $a, int $b): int {
      return $a * $b;
    }

    /**
     * Divide
     * 
     * Divides two integers.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The quotient of $a and $b
     */
    public static function divide(int $a, int $b): int {
      return $a / $b;
    }

    /**
     * Modulo
     * 
     * Returns the remainder of two integers.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The remainder of $a and $b
     */
    public static function modulo(int $a, int $b): int {
      return $a % $b;
    }

    /**
     * Power
     * 
     * Raises one integer to the power of another.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The result of $a raised to the power of $b
     */
    public static function power(int $a, int $b): int {
      return $a ** $b;
    }

    /**
     * Square
     * 
     * Raises an integer to the power of two.
     *
     * @param integer $a
     * @return integer The result of $a raised to the power of two
     */
    public static function square(int $a): int {
      return $a ** 2;
    }

    /**
     * Cube
     * 
     * Raises an integer to the power of three.
     *
     * @param integer $a
     * @return integer The result of $a raised to the power of three
     */
    public static function cube(int $a): int {
      return $a ** 3;
    }

    /**
     * Square Root
     * 
     * Returns the square root of an integer.
     *
     * @param integer $a
     * @return integer The square root of $a
     */
    public static function squareRoot(int $a): int {
      return sqrt($a);
    }

    /**
     * Factorial
     * 
     * Returns the factorial of an integer.
     * 
     * @param integer $a
     * @return integer The factorial of $a
     */
    public static function factorial(int $a): int {
      return $a < 2 ? 1 : $a * self::factorial($a - 1);
    }
  }