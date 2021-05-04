<?php
 session_start();
    include('user.php');
    
    if(isset($_POST["action"]) && $_POST["action"] == "insert")
    {
        $userPreferenceGender = $_POST['userPreferenceGender'];
        $userID = $_SESSION['userID'];
        $userLocation = $_POST['userLocation'];
        $userAge = $_POST['userAge'];
        $userHeight = $_POST['userHeight'];
        $userWeight = $_POST['userWeight'];
        $userMaximumEducation = $_POST['userMaximumEducation'];
        $userReligion = $_POST['userReligion'];
        $userMaritalStatus = $_POST['userMaritalStatus'];
        $userSmokingStaus = $_POST['userSmokingStaus'];
        $userDrinkingStatus = $_POST['userDrinkingStatus'];
        $userParentStatus = $_POST['userParentStatus'];
        $userPhone = $_POST['userPhone'];
        $phonePermission = $_POST['phonePermission'];
        $userAddress = $_POST['userAddress'];
        $addressPermission = $_POST['addressPermission'];
        $userDescription = $_POST['userDescription'];

        // $databaseObject = new Database(); 
        $userObjct = new User();
        $userObjct->addUserProfile(
        $userPreferenceGender,
        $userID,
        $userLocation,
        $userAddress,
        $userAge,
        $userHeight,
        $userWeight,
        $userMaximumEducation,
        $userReligion,
        $userMaritalStatus,
        $userSmokingStaus,
        $userDrinkingStatus,
        $userParentStatus,
        $userPhone,
        $userDescription,
        $phonePermission,
        
        $addressPermission
        
        );
         
    }
     /*   
   
       //$databaseObject = new Database();
       
        */
          


?>