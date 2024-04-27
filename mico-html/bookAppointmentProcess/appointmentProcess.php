<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form data
    $patientName = isset($_POST['inputPatientName']) ? htmlspecialchars(trim($_POST['inputPatientName'])) : '';
    $doctorName = isset($_POST['inputDoctorName']) ? htmlspecialchars(trim($_POST['inputDoctorName'])) : '';
    $departmentName = isset($_POST['inputDepartmentName']) ? htmlspecialchars(trim($_POST['inputDepartmentName'])) : '';
    $phoneNumber = isset($_POST['inputPhone']) ? htmlspecialchars(trim($_POST['inputPhone'])) : '';
    $symptoms = isset($_POST['inputSymptoms']) ? htmlspecialchars(trim($_POST['inputSymptoms'])) : '';
    $date = isset($_POST['inputDate']) ? htmlspecialchars(trim($_POST['inputDate'])) : '';

    // Validate input (e.g., check if required fields are not empty)
    if (empty($patientName) || empty($doctorName) || empty($departmentName) || empty($phoneNumber) || empty($date)) {
        // Handle error (e.g., redirect back to the form page with an error message)
        header("Location: formPage.php?error=1");
        exit();
    }

    // Redirect to new page with filled information
    $url = "appointmentDetails.php?patientName=" . urlencode($patientName) . "&doctorName=" . urlencode($doctorName) . "&departmentName=" . urlencode($departmentName) . "&phoneNumber=" . urlencode($phoneNumber) . "&symptoms=" . urlencode($symptoms) . "&date=" . urlencode($date);
    header("Location: $url");
    exit();
}
?>