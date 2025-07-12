<?php
// String declaration
$mystr = "Raju is a good boy";

// Display the original string
echo "Original String: $mystr<br><br>";

// 1️⃣ String Length using strlen()
$length = strlen($mystr);
echo "1. Length of string: $length<br>";

// 2️⃣ Word Count using str_word_count()
$wordCount = str_word_count($mystr);
echo "2. Word count: $wordCount<br>";

// 3️⃣ Reverse String using strrev()
$reversed = strrev($mystr);
echo "3. Reversed string: $reversed<br>";

// 4️⃣ String to Uppercase using strtoupper()
$upper = strtoupper($mystr);
echo "4. Uppercase string: $upper<br>";

// 5️⃣ String to Lowercase using strtolower()
$lower = strtolower($mystr);
echo "5. Lowercase string: $lower<br>";

// 6️⃣ Replace a word using str_replace()
$replaced = str_replace("good", "bad", $mystr);
echo "6. Word replaced: $replaced<br>";

// 7️⃣ Chunk Split using chunk_split() — inserts a character every n positions
$chunked = chunk_split($mystr, 3, "*");
echo "7. Chunked string (every 3 chars): $chunked<br>";

// 8️⃣ Substring using substr()
$substr = substr($mystr, 6, 6); // Get 6 characters from index 6
echo "8. Substring (from index 6, length 6): $substr<br>";

// 9️⃣ Position of word using strpos()
$pos = strpos($mystr, "good");
echo "9. Position of 'good': $pos<br>";

// 🔟 Remove whitespace from beginning and end using trim()
$trimmed = trim("   Raju is sleeping   ");
echo "10. Trimmed string: '$trimmed'<br>";

?>
