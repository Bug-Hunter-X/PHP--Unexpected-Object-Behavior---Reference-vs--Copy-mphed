# PHP: Unexpected Object Behavior - Reference vs. Copy

This repository demonstrates a common PHP bug related to object references and assignments.  Many PHP developers, especially those transitioning from other languages, often fall into the trap of assuming that assigning objects automatically creates a reference.

## The Bug

The `bug.php` file illustrates the problem.  Assigning one object to another creates a copy; changing properties in the copy doesn't affect the original.

## The Solution

The `bugSolution.php` file shows the correct approach using reference assignment (`&`). This creates a true reference, where changes to one object directly affect the other.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` and observe the output (10).
3. Run `bugSolution.php` and observe the output (20).

This example highlights the critical difference between simple object assignment and reference assignment in PHP. Understanding this distinction is vital for writing correct and predictable PHP code.