<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include("config.php");
    //session_start(); 
?>

<?php
    // Bruger-klasse, som extendere database-klassen
    class User extends Database {

        public $db;
        public function __construct()
        {
            $this->db=$this->connectDB();
            $this->wrongPassword="Password is invalid. Please check!";
            $this->wrongEmail="Email is invalid. Please check!";
            $this->loggedOut="You have succesfully logged out. Please login again, if you wish!";
            $this->successMessage = "Your message has been sent";
            $this->successreg = "You have been registered. You can login now";
        }
        //User registration
        public function registerUser($firstName, $lastName, $userName, $email, $password, $confirmedpassword, $gender)
        {
            try 
            {
                    $insertQuery = "INSERT INTO userAccounts (firstName, lastName, userName, email, userPassword, confirmeduserPassword, gender) 
                    VALUES(:firstName, :lastName, :userName, :email, :userPassword, :confirmeduserPassword, :gender)";
                    $insertStatement = $this->db->prepare($insertQuery);
                    $insertStatement->bindParam(":firstName", $firstName); 
                    $insertStatement->bindParam(":lastName", $lastName); 
                    $insertStatement->bindParam(":userName", $userName); 
                    $insertStatement->bindParam(":email", $email);
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $insertStatement->bindParam(":userPassword", $passwordHash); 
                    $confirmedpasswordHash = password_hash($confirmedpassword, PASSWORD_DEFAULT);
                    $insertStatement->bindParam(":confirmeduserPassword", $confirmedpasswordHash); 
                    $insertStatement->bindParam(":gender", $gender);
                    $executeQuery = $insertStatement->execute(); 
                    $lastID =  $this->getLastInsertedID();
                if(!empty($lastID))
                {              
                    $insertQuery = "INSERT INTO loginTable (email, userPassword, userID)
                    VALUES (:email, :userPassword, :userID)";
                    $insertStatement = $this->db->prepare($insertQuery);
                    $insertStatement->bindParam(":email", $email); 
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $insertStatement->bindParam(":userPassword", $passwordHash); 
                    $insertStatement->bindParam(":userID", $lastID); 
                    $executeQuery = $insertStatement->execute(); 
                     
                    $_SESSION['successReg'] = $this->successreg;
                    return header('Location:./login.php');
                }
                else
                {
                    return false;  
                }
            } 
            catch(Exception $ex){
                echo "<pre>";
                print_r($ex);
                exit();
            }
        }
        
        public function addUserProfile(
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
        $userDescription,
        $userPhone,
        $addressPermission,
        $phonePermission
        ){
         /*   $userID = $_SESSION['userID'];
            $userPreferenceGender = $_POST['userPreferenceGender'];
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
            
            $check = true;
            $userID = $_SESSION['userID'];

            $userPreferenceGender = (!empty($data['userPreferenceGender'])) ? $data['userPreferenceGender'] : $check = false;
            $userLocation = $_POST['userLocation']  = (!empty($data['userLocation'])) ? $data['userLocation'] : $check = false;
            $userAge = $_POST['userAge']  = (!empty($data['userAge'])) ? $data['userAge'] : $check = false;
            $userHeight = $_POST['userHeight'] = (!empty($data['userHeight'])) ? $data['userHeight'] : $check = false;
            $userWeight = $_POST['userWeight']  = (!empty($data['userWeight'])) ? $data['userWeight'] : $check = false;
            $userMaximumEducation = $_POST['userMaximumEducation']  = (!empty($data['userMaximumEducation'])) ? $data['userMaximumEducation'] : $check = false;
            $userReligion = $_POST['userReligion']  = (!empty($data['userReligion'])) ? $data['userReligion'] : $check = false;
            $userMaritalStatus = $_POST['userMaritalStatus']  = (!empty($data['userMaritalStatus'])) ? $data['userMaritalStatus'] : $check = false;
            $userSmokingStaus = $_POST['userSmokingStaus']  = (!empty($data['userSmokingStaus'])) ? $data['userSmokingStaus'] : $check = false;
            $userDrinkingStatus = $_POST['userDrinkingStatus']  = (!empty($data['userDrinkingStatus'])) ? $data['userDrinkingStatus'] : $check = false;
            $userParentStatus = $_POST['userParentStatus']  = (!empty($data['userParentStatus'])) ? $data['userParentStatus'] : $check = false;
            $userPhone = $_POST['userPhone']  = (!empty($data['userPhone'])) ? $data['userPhone'] : $check = false;
            $phonePermission = $_POST['phonePermission']  = (!empty($data['phonePermission'])) ? $data['phonePermission'] : $check = false;
            $userAddress = $_POST['userAddress']  = (!empty($data['userAddress'])) ? $data['userAddress'] : $check = false;
            $addressPermission = $_POST['addressPermission']  = (!empty($data['addressPermission'])) ? $data['addressPermission'] : $check = false;
            $userDescription = $_POST['userDescription']  = (!empty($data['userDescription'])) ? $data['userDescription'] : $check = false;
            */
                try 
                {
                    
                    
                    $insertQuery = "INSERT INTO addUserProfile(userPreferenceGender, userID, userLocation, userAddress, userAge, userHeight, userWeight, userMaximumEducation, userReligion, userMaritalStatus, userSmokingStaus, userDrinkingStatus, userParentStatus, userDescription, userPhone, addressPermission, phonePermission) 
                    VALUES(:userPreferenceGender, :userID, :userLocation, :userAddress, :userAge, :userHeight, :userWeight, :userMaximumEducation, :userReligion, :userMaritalStatus, :userSmokingStaus, :userDrinkingStatus, :userParentStatus, :userDescription, :userPhone, :addressPermission, :phonePermission)";
                    $insertStatement = $this->db->prepare($insertQuery);               
                    $insertStatement->bindParam(":userPreferenceGender", $userPreferenceGender); 
                    $insertStatement->bindParam(":userID", $userID);       
                    $insertStatement->bindParam(":userLocation", $userLocation); 
                    $insertStatement->bindParam(":userAddress", $userAddress);     
                    $insertStatement->bindParam(":userAge", $userAge);
                    $insertStatement->bindParam(":userHeight", $userHeight); 
                    $insertStatement->bindParam(":userWeight", $userWeight); 
                    $insertStatement->bindParam(":userMaximumEducation", $userMaximumEducation); 
                    $insertStatement->bindParam(":userReligion", $userReligion);
                    $insertStatement->bindParam(":userMaritalStatus", $userMaritalStatus);
                    $insertStatement->bindParam(":userSmokingStaus", $userSmokingStaus); 
                    $insertStatement->bindParam(":userDrinkingStatus", $userDrinkingStatus); 
                    $insertStatement->bindParam(":userParentStatus", $userParentStatus); 
                    $insertStatement->bindParam(":userDescription", $userDescription); 
                    $insertStatement->bindParam(":userPhone", $userPhone);
                    $insertStatement->bindParam(":addressPermission", $addressPermission);
                    $insertStatement->bindParam(":phonePermission", $phonePermission);
                    $executeQuery = $insertStatement->execute(); 
                  
                }
                catch(Exception $ex){
                    echo "<pre>";
                    print_r($ex);
                    exit();
                }
            
        }

        public function updateUserDetails(){

        }
        public function deleteUser(){}
        public function getUserDetails(){}
        //Method to get last ID and use it in foregin keys
        public function getLastInsertedID(){
            $SQLSELECT = "SELECT userID FROM userAccounts ORDER BY userID DESC LIMIT 1";
            $SQLSELECT =  $this->db->prepare($SQLSELECT);  
            $SQLSELECT->execute();
            $result = $SQLSELECT->fetchColumn();
            return $result;
        }
        //Login method
        public function login($post)
        {          
          $email = $post['email'];
         $password =  $post['userPassword'];
            $selectQuery = "SELECT * FROM loginTable WHERE email = :email";
            $selectStatement = $this->connectDB()->prepare($selectQuery);  
            $selectStatement->bindParam(':email', $email);
            $selectStatement->execute();
            $result = $selectStatement->fetch();
            if(!$result)
            {
               // echo "hello";exit();
                $_SESSION['wrongEmail'] = $this->wrongEmail;
                return header('Location:./login.php') ;
            }
            if(!password_verify($password, $result['userPassword']))
            {
              //  echo "hello1";exit();
                $_SESSION['wrongPassword'] = $this->wrongPassword;
                return header('Location:./login.php');
            }
            else
            {
                //echo "true";exit();
                $_SESSION['email'] = $email;
                $_SESSION['userID'] = $result['userID'];
                return header('Location: ./profile.php');
            }      
        }
        //logout
        public function logout(){
            if(isset($_SESSION['userID'])){
                session_unset();
                $_SESSION['loggedOut'] = $this->loggedOut;
                return header('Location:./login.php');
            }
        }
        //Contactform
        public function contactFormInformation($post){
            try 
            {   
                $firstName = $post['firstName'];
                $lastName =  $post['lastName'];
                $email = $post['email'];
                $phone =  $post['phone'];
                $messages = $post['messages'];
                $insertQuery = "INSERT INTO contactTable (firstName, lastName, email, phone, messages) 
                VALUES(:firstName, :lastName, :email, :phone, :messages)";
                $insertStatement = $this->db->prepare($insertQuery);
                $insertStatement->bindParam(":firstName", $firstName); 
                $insertStatement->bindParam(":lastName", $lastName); 
                $insertStatement->bindParam(":email", $email); 
                $insertStatement->bindParam(":phone", $phone);
                $insertStatement->bindParam(":messages", $messages);
                $executeQuery = $insertStatement->execute(); 
                if($executeQuery)
            {              
              $_SESSION['successMessage']=$this->successMessage;
              header('location: contact.php');
            }
            }
            catch(Exception $ex)
            {
                echo "<pre>";
                print_r($ex);
                exit();
            }
        }  


}
?>