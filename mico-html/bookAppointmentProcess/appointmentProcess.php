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
        // Display error message
        echo "<div style='display:flex; flex-direction:column; align-items:center; justify-content:center;'>
        <h4 style='font-weight: bold; font-size: 20px;'>YOUR APPOINTMENT IS NOT CONFIRMED!</h4>
        <h4 style='color:red; font-weight: bold; font-size: 20px;'>All fields are required</h4>
        <div class='btn-box'>
          <button class='btn' style='background-color: #00c6a9; padding: 10px 45px; border-radius: 5px; margin-top: 10px; text-transform: uppercase'><a href='../index.php' style='text-decoration: none; color: #ffffff'>Back to Homepage</a></button>
        </div>
      </div>";
    } else {
        // Redirect to new page with filled information
        $url = "appointmentDetails.php?patientName=" . urlencode($patientName) . "&doctorName=" . urlencode($doctorName) . "&departmentName=" . urlencode($departmentName) . "&phoneNumber=" . urlencode($phoneNumber) . "&symptoms=" . urlencode($symptoms) . "&date=" . urlencode($date);
        header("Location: $url");
        exit();
    }
}
?>