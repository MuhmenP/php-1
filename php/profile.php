<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    // session_start();
    // $userID = $_SESSION['userID'];
    // if(!isset($_SESSION['userID']))
    // {
    //     header('Location:./login.php');
    // }
	// include_once('includes/top_header.php');	
    // include_once('includes/user.php');
 
    /*$databaseObject = new Database();
   if(isset($_POST['addProfile'])){
        $userObject = new User();
        $userObject->addUserProfile($_POST);
    }*/
    if(isset($_POST['logout'])){
        $user = new User();
        $user->logout();
    }
   
   /* $SQLSELECT = "SELECT * FROM userAccounts INNER JOIN addUserProfile ON userAccounts.userID = addUserProfile.userID WHERE userAccounts.userID = $userID";                                
    $SQLSELECT;
    echo $SQLSELECT = $this->db->prepare($SQLSELECT);  
    $SQLSELECT->execute();
    $result = $SQLSELECT->fetch();         */      

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/costume.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <title>Complete Your profile</title>
</head>

<body>
    <div class="main-nav new-block">
        <div class="overlay"></div>
        <div class="container-fluid pad0">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="home.html"><img src="images/logo2.png" alt="logo" class="img-responsive"></a>
                    </div>
                    <a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
                    <div class="nav-block">
                        <nav class="nav">
                            <ul class="list-unstyled">
                                <li class="active drop"><a href="#">My Profile</a>
                                </li>
                                <li><a href="search_girls.html">Girls</a></li>
                                <li><a href="search_girls.html">Boys</a></li>
                                <li><a href="online_search_result.html">Online Users</a></li>
                                <li><a href="online_search_country.html">Countries</a></li>
                                <li><a href="search_by_map.html">All World</a></li>
                                <li><a href="#">Filter Profile</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="about_us.html">About us</a></li>
                                <li><a href="contact_us.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search-form new-block pdtb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="col-md-3" name="box1">

                        <button type="button" onclick="openTabs(event, 'view-details')" class="btn btn-lg"
                        id="defaultOpen" name="register">My Details</button>

                    </div>

                    <div class="col-md-3" name="box2">

                        <button type="button" onclick="openTabs(event, 'edit-details')" class="btn btn-lg"
                        id="defaultOpen" name="register">Complete Your Profile</button>

                    </div>

                    <div class="col-md-3" name="box3">

                        <button type="button" onclick="openTabs(event, 'received-invitations')" class="btn btn-lg"
                        id="regBtn" name="register">Received Invitation</button>

                    </div>

                    <div class="col-md-3" name="box4">
                        <button type="button" onclick="openTabs(event, 'sended-invitations')" class="btn btn-lg"
                        id="regBtn" name="register">Sended Invitation</button>
                    </div>

                    <div class="inner-wrapper" id="view-details">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <div class="mix category-2 category-3 all">
                                            <div class="block-stl2">
                                                <div class="img-holder">
                                                    <img src="20190703_105511.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="txt-block">
                                                    <h3 class="fz22"><a href="#">Tenma Shyna</a></h3>
                                                    <p>22 / M / Philippines </p>
                                                </div>
                                                <div class="txt-block2">
                                                    <h3 class="fz22"><a href="#">Tenma Shyna</a></h3>
                                                    <p>M / 22 / Philippines </p>
                                                    <p class="ab-txt">There's tons of singles. We're one ofthe biggest
                                                        dating sites on earth, andit's all totally.</p>
                                                    <a href="#" class="c-btn btn3">contact</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="detail" id="table">
                                                <table class="table ">

                                                    <tbody>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Looking For</th>
                                                            <td>Mark</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Location - country</th>
                                                            <td>Jacob</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Age</th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>

                                                        <tr>
                                                            <th class="titles-th" scope="row">Height</th>
                                                            <td>Mark</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Weight</th>
                                                            <td>Jacob</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Education</th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Believe in </th>
                                                            <td>Mark</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Marital Status </th>
                                                            <td>Jacob</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Drinking </th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Smoking </th->
                                                            <td>Mark</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Have children </th>
                                                            <td>Jacob</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Phone</th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>

                                                        <tr>
                                                            <th class="titles-th" scope="row">Address</th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Description of your self
                                                            </th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner-wrapper" id="edit-details">
                        <form id="form">
                            <div class="row">


                                <!-- Looking for-->

                                <div class="col-lg-4 col-md-4">
                                    <label>Looking For</label>
                                    <div class="form-group">
                                        <select name="userPreferenceGender" id="userPreferenceGender">
                                            <option value="" selected>Choose Your Preferences</option>
                                            <option value="Men">Men</option>
                                            <option value="Girl">Girl</option>
                                            <option value="other">other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <label>Location - country</label>
                                    <div class="form-group">
                                        <select name="userLocation" id="userLocation">
                                            <option value="" selected>Choose Your Location</option>
                                            <optgroup label="Denmark">
                                                <option value="Copenhagen, DK">Copenhagen, DK</option>
                                                <option value="Aalborg, DK">Aalborg, DK</option>
                                                <option value="Aarhus, DK">Aarhus, DK</option>
                                            </optgroup>
                                            <optgroup label="Norway">
                                                <option value="Oslo, NO">Oslo, NO</option>
                                                <option value="Bergen, NO">Bergen, NO</option>
                                                <option value="Trondhim, NO">Trondhim, NO</option>
                                            </optgroup>
                                            <optgroup label="Sweeden">
                                                <option value="Stockholm, SE">Stockholm, SE</option>
                                                <option value="Skaane, SE">Skaane, SE</option>
                                                <option value="Malmo, SE">Malmo, Se</option>
                                            </optgroup>
                                        </select>
                                    </div>


                                </div>

                                <!-- Location -->
                                <!-- User's age -->
                                <div class="col-lg-4 col-md-4">
                                    <label>Age :</span></label>
                                    <div class="form-group">
                                        <select name="userAge" id="userAge" class="form-control select">
                                            <option value="" disabled selected>Select your age</option>
                                            <?php 
                                    for($i=18; $i<=99; $i++)
                                    {
                                    
                                        echo "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- User's height -->
                                <div class="col-lg-4 col-md-4">
                                    <label>Height :</span></label>
                                    <div class="form-group">
                                        <select name="userHeight" id="userHeight" class="form-control select2">
                                            <option value="" disabled selected>Select your height</option>
                                            <?php 
                                    for($i = 1.40; $i <= 2.00; $i += 0.01)
                                    {
                                        echo "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- User's weight -->
                                <div class="col-lg-4 col-md-4">
                                    <label>Weight :</span></label>
                                    <div class="form-group">
                                        <select name="userWeight" id="userWeight" class="form-control select2">
                                            <option value="" disabled selected>Select your weight</option>
                                            <?php 
                                      for($i=0; $i<=99; $i++)
                                      {
                                    
                                          echo "<option value=".$i.">".$i."</option>";
                                      }
                                      ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- User's education -->
                                <div class="col-lg-4 col-md-4">
                                    <label>Education :</label>
                                    <div class="form-group">
                                        <select name="userMaximumEducation" id="userMaximumEducation">
                                            <option value="" disabled>Select maximum education </option>
                                            <option value="20">20 years</option>
                                            <option value="18">18 years</option>
                                            <option value="16">16 years</option>
                                            <option value="14">14 years</option>
                                            <option value="12">12 years</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- User's religion -->
                                <div class="col-lg-4 col-md-4">
                                    <label>Believe in :</label>
                                    <div class="form-group">
                                        <select name="userReligion" id="userReligion">
                                            <option value="" disabled selected>Select religion </option>
                                            <option value="islam">Islam</option>
                                            <option value="hinduism">Hinduism</option>
                                            <option value="cristianity">Cristianity</option>
                                            <option value="jews">jews</option>
                                            <option value="non-religious">non-religious</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- User's Marital status -->
                                <div class="col-lg-4 col-md-4">
                                    <label>Marital Status :</label>
                                    <div class="form-group">
                                        <select name="userMaritalStatus" id="userMaritalStatus">
                                            <option value="" disabled selected>Select Marital Status </option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widow">Widow</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- User's smoking -->
                                <div class="col-lg-4 col-md-4">
                                    <label>Smoking :</label>
                                    <div class="form-group">
                                        <select name="userSmokingStaus" id="userSmokingStaus">
                                            <option value="" disabled selected>Select Smoking Habits </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- User's drinking-->
                                <div class="col-lg-4 col-md-4">
                                    <label>Drinking :</label>
                                    <div class="form-group">
                                        <select name="userDrinkingStatus" id="userDrinkingStatus">
                                            <option value="" disabled selected>Select Drinking Habits </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>Have children :</label>
                                    <div class="form-group">
                                        <select name="userParentStatus" id="userParentStatus">
                                            <option value="" disabled selected>Select parent status</option>
                                            <option value="I don't">I don't</option>
                                            <option value="I do">I do</option>
                                            <option value="I want to">I want to</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>Phone :</label>
                                    <div class="form-group">
                                        <input type="text" name="userPhone" id="userPhone" placeholder="phone"
                                            class="form-control form-rounded">
                                        <!-- Permission -->
                                        <input type="checkbox" name="phonePermission" id="phonePermission"
                                            value="1">Show my phone number public
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>Address</label>
                                    <div class="form-group">
                                        <textarea class="form-control form-rounded" name="userAddress" id="userAddress"
                                            cols="10" rows="5"></textarea>
                                        <input type="checkbox" name="addressPermission" id="addressPermission"
                                            value="1">Show my address public
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>Describe your self</label>
                                    <div class="form-group">
                                        <textarea class="form-control form-rounded" name="userDescription"
                                            id="userDescription" cols="10" rows="10"></textarea>
                                    </div>
                                </div>


                            </div>

                            <!--  <button type="button" onclick="return finishProfile();" name="addProfile">Finish
                                profile</button>-->
                            <button type="submit" class="btn btn-info" id="addProfileBtn">Submit to hell of a database</button>


                            <button type="submit" name="logout">logOut</button>
                        </form>
                    </div>
                    <div class="inner-wrapper" id="received-invitations">
                        <h1>received invitations</h1>
                        <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="detail" id="table">
                                                <table class="table ">

                                                    <tbody>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Looking For</th>
                                                            <td>Mark</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Location - country</th>
                                                            <td>Jacob</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Age</th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>

                                                        <tr>
                                                            <th class="titles-th" scope="row">Height</th>
                                                            <td>Mark</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Weight</th>
                                                            <td>Jacob</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Education</th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Believe in </th>
                                                            <td>Mark</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Marital Status </th>
                                                            <td>Jacob</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Drinking </th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Smoking </th->
                                                            <td>Mark</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Have children </th>
                                                            <td>Jacob</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Phone</th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>

                                                        <tr>
                                                            <th class="titles-th" scope="row">Address</th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>
                                                        <tr>
                                                            <th class="titles-th" scope="row">Description of your self
                                                            </th>
                                                            <td colspan="2">Larry the Bird</td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>

                    </div>

                    <div class="inner-wrapper" id="sended-invitations">
                        <h1>send invitations</h1>
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>


<script type="text/javascript">


$("#addProfileBtn").bind("click", function(e) {
    e.preventDefault();
    var userPreferenceGender = $("#userPreferenceGender").val();
    var userLocation = $("#userLocation").val();
    var userAge = $("#userAge").val();
    var userHeight = $("#userHeight").val();
    var userWeight = $("#userWeight").val();
    var userMaximumEducation = $("#userMaximumEducation").val();
    var userReligion = $("#userReligion").val();
    var userMaritalStatus = $("#userMaritalStatus").val();
    var userSmokingStaus = $("#userSmokingStaus").val();
    var userDrinkingStatus = $("#userDrinkingStatus").val();
    var userParentStatus = $("#userParentStatus").val();
    var userPhone = $("#userPhone").val();
    var phonePermission = $("#phonePermission").val();
    var userAddress = $("#userAddress").val();
    var addressPermission = $("#addressPermission").val();
    var userDescription = $("#userDescription").val();
    $.ajax({
        url: "userData.php",
        data:{
            userPreferenceGender: userPreferenceGender,
            userLocation: userLocation,
            userAge: userAge,
            userHeight: userHeight,
            userWeight: userWeight,
            userMaximumEducation: userMaximumEducation,
            userReligion: userReligion,
            userMaritalStatus: userMaritalStatus,
            userSmokingStaus: userSmokingStaus,
            userDrinkingStatus: userDrinkingStatus,
            userParentStatus: userParentStatus,
            userPhone: userPhone,
            phonePermission: phonePermission,
            userAddress: userAddress,
            addressPermission: addressPermission,
            userDescription: userDescription
        },
       // contentType: "application/json;",
        type: "POST",
        success: function(data) {
            console.log('Done!')
            alert('Fint, jeg indsætter noget');
        },
        error: function (err) {
        console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
        }
         
    })
})

/*$('form').submit(function(event){
    event.preventDefault();
    var $form = $($this),
    url = 'userData.php'
    var action = "insert"
    addUserProfile(url, action)
});*/

 

// $("#form").submit(function(e){
//     e.preventDefault();
//     console.log("cliked");
//     $.ajax({
//         url : "userData.php",
//         type: "POST",
//         data: $("#form").serialize()+"&action=insert",
//         success: function(res)
//         {
//             console.log(res);
//         },
//         fail: function(res)
//         {
//             console.log('failed!')

//         }
//     })
// })



</script>

</html>
