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

?>


