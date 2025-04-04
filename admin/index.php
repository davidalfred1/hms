<?php
include("includes/header.php");
?>

<div class="welcome">
    <h1>Welcome, <?php echo $_SESSION['loggedInUser']['username']; ?> </h1> <br>
    <h3>Thanks for downloading HospitalServ</h3> <br>
    <p> You are running HospitalRun in stand alone mode. This mode allows you to support multiple users on a single, desktop/laptop instance of HospitalRun. This is ideal for:</p> <br>

    <ul>
        <li>Evaluating HospitalRun for an eventual server deployment.</li>
        <li>Using the platform to support a clinic / facility where a single instance is sufficient.</li>
    </ul> <br>
    <p>If you're considering a multi-device deployment of HospitalRun, we're working on features that will allow you to "graduate" from this single instance into a traditional cloud / server-based deployment.
        We recommend that you setup a User account.
    </p>
</div>
<?php
include("includes/footer.php");
?>