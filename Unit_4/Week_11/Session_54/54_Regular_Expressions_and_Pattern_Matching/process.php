 
<?php
// Retrieving input text from the form
$text = $_POST['text'];

// Pattern for detecting email addresses
$email_pattern = "/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}\b/";

// Using preg_match() to find email addresses
$matches = [];
if (preg_match($email_pattern, $text, $matches)) {
    echo "Found email address: " . $matches[0] . "<br>";
} else {
    echo "No email address found.<br>";
}

// Using preg_replace() to censor profanity
$profanity = "/bad|terrible|awful/i";
$censored_text = preg_replace($profanity, "****", $text);
echo "Censored Text: " . $censored_text . "<br>";

// Using preg_split() to split the text into sentences
$sentences = preg_split("/[.!?]/", $text, -1, PREG_SPLIT_NO_EMPTY);
echo "Sentences:<br>";
foreach ($sentences as $sentence) {
    echo "- " . trim($sentence) . "<br>";
}
?>

