# PHP Foreach Loop and unset() function unexpected behavior
This repository demonstrates an uncommon error in PHP that can occur when using the `unset()` function within a `foreach` loop.  The problem stems from how `unset()` modifies the internal array pointer of the loop.  This can lead to unexpected results and skipped elements.

The `bug.php` file contains the erroneous code, while `bugSolution.php` provides a corrected version.

The problem is explained in detail in the file comments.

This demonstrates a subtle but important aspect of PHP array manipulation.