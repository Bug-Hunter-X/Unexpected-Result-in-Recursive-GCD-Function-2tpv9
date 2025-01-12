# PHP GCD Function Bug
This repository demonstrates a bug in a PHP function designed to calculate the greatest common divisor (GCD) of two numbers using Euclid's algorithm.  The function produces unexpected results when both inputs are zero.  The solution demonstrates how to correct this behavior, addressing edge cases for robustness.

The bug is in how the function handles the case where both input numbers are 0.  A proper solution will either throw an error indicating invalid input or return a defined value appropriate for this case.