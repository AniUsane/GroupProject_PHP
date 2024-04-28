<?php 
    $clientName = $_POST['inputPatientName'];
    $email = $_POST['email'];
    $clientNumber = $_POST['inputPhone'];
    $message = $_POST['message'];

    $array = [
        'clientName' => "$clientName",
        'email' => "$email",
        'clientNumber' => "$clientNumber",
        'message' => "$message",
    ];

    function get_in_touch($array) {
        echo '
        <div class = "book-container">
            <p class="confirmation">Your form is submitted!</p>
        </div>
        ';
}
?>