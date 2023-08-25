<?php
// Step 1: Define a string to search for a pattern
$string = "The quick brown fox jumps over the lazy dog , the guru THE.";

// Step 2: Define the pattern to search for
$pattern = "/the/i"; // Searches for the word "the" regardless of case sensitivity

// Step 3: Perform the regular expression search using preg_match_all() function
preg_match_all($pattern, $string, $matches, PREG_SET_ORDER, 0);

// Step 4: Output the matches found
echo "Matches found: \\\\n";
foreach ($matches as $match) {
    echo $match[0] . "\\\\n"; // Output the entire matched string
}

// Output:
// Matches found:
// The
// the

