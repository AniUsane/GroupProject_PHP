<?php 

function get_in_touch() {
    if (isset($_POST['inputPatientName'], $_POST['email'], $_POST['inputPhone'], $_POST['message'])) {
        $inputPatientName = $_POST['inputPatientName'];
        $email = $_POST['email'];
        $inputPhone = $_POST['inputPhone'];
        $message = $_POST['message'];
    
        if (empty($inputPatientName) || empty($email) || empty($inputPhone) || empty($message)) {
            echo "Fields are missing. Please fill in all boxes.";
        } else {
            echo "Your form is submitted.";
        }
    } else {
        echo "Fields are missing. Please fill in all boxes.";
    }
}
?>