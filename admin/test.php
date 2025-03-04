<?php 
    $house = 5;
    echo " <p>lorem knxfoinklsjdijf nius'.$house.'</p><br>";
    echo "<br>";
    echo " <p>lorem knxfoinklsjdijf nius $house </p><br>";
    
    //We'll do real-life implementations to get a better understanding of the concepts

    //for the static explanation in a better way
    function captchaAttempt() {
        static $attempts = 0; // Track attempts
        $maxAttempts = 3;     // Set a limit

        if ($attempts >= $maxAttempts) {
            echo "Too many failed CAPTCHA attempts. Try again later.";
            return false;
        }

        $attempts++;
        echo "CAPTCHA attempt #$attempts.<br>";

        // Simulating correct or incorrect input (random for demo)
        $isCorrect = rand(0, 1); 

        if ($isCorrect) {
            echo "CAPTCHA passed!<br>";
            return true;
        } else {
            echo "Incorrect CAPTCHA, please try again.<br>";
            return false;
        }
    }

    // Simulating user attempts
    captchaAttempt();
    captchaAttempt();
    captchaAttempt();
    captchaAttempt(); // This will be blocked



     $x = username










 if(5 < 10){
    echo "Hey";
    if(15 < 20){
        echo "Hello";
        if(25 < 30){
            echo "Hello";
        }
    }
}else {
         echo "Bye";
    }









    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Text Display with While Loop</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            .output {
                font-size: 20px;
                color: #333;
                padding: 10px;
                border: 1px solid #ddd;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
    
        <h1>Displaying Text with a While Loop</h1>
        <div class="output">
            <?php
            // Initialize $i to 0
            $i = 1;
    
            // Array of texts
            $texts = [
                "The quick brown fox jumps over the lazy dog.",
                "PHP is a popular scripting language for web development.",
                "Learning to code opens up new opportunities.",
                "Practice makes perfect.",
                "Consistency is key to success."
            ];
    
            // Loop until $i reaches the count of $texts
            while ($i <= count($texts)) {
                echo $texts[$i - 1] . "<br>";  // Output text from the array
                $i++;  // Increment to the next text
            }
            ?>
        </div>
    
    </body>
    </html>
    








    
?>


