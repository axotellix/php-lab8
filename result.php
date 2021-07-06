
<?php

    // [ get > data from form ]
    $text = $_POST['text'] ?? '';
    if( !preg_match('/[a-zA-z]/' , $text) ) {
        $text = iconv('utf-8' , 'cp1251' , $text);
    }

    // [ FUNCTIONS ]

     //@ count > chars
    function countChars($text) {
        return mb_strlen($text);
    }
     //@ count > letters
    function countLetters($text) {
        $letters = 0;

        echo "All letters: <br>";
        for( $i = 0 ; $i < mb_strlen($text) ; $i++ ) {
            echo "{$text[$i]} <br>";
            if( preg_match('/[a-zA-Zа-яА-я]/', $text[$i]) ) $letters++;
        }

        return $letters;
    }
    //@ count > words
    function countWords($text) {
        $words = explode(' ' , $text);
        
        $words = array_filter( $words ,
                    function($word) {
                        return $word !== '' && $word !== ' ';
                    }  
                ); 

        return count($words);
    }
     //@ count > punctuation marks
    function countPunctMarks($text) {
        $P_MARKS = [33, 34, 39, 40, 41, 44, 45, 46, 58, 59, 63];
        $marks_count = 0;

        for( $i = 0 ; $i < strlen($text) ; $i++ ) {
            if( in_array(ord($text[$i]), $P_MARKS) ) $marks_count++;
        }

        return $marks_count;
    }
     //@ count > numbers
    function countNumbers($text) {
        $nums_count = 0;

        for( $i = 0 ; $i < strlen($text) ; $i++ ) {
            if( $text[$i] ) $marks_count++;
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
<?php

    echo "<h3>Исходный текст:</h3>";
    echo "$text";

    echo "<h3>Результаты анализа:</h3>";
    echo "Chars: " . countChars( $text );
    echo "<br> Letters: " . countLetters( $text );
    echo "<br> Words: " . countWords( $text );
    echo "<br> Punctuation marks: " . countPunctMarks( $text );

?>
</body>
</html>