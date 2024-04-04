<?php session_start();
$conn = new mysqli("localhost","root","","bursary");
$msg = '';
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  $msg = 'Service Down! Try again later';
  exit();
}

if ($_SERVER['REQUEST_METHOD']=="POST"){

    if($_POST["submit"]=="Submit Application"){
        
    }else{
        header("Location: http://localhost/bursary");
        exit();
    }
    
    //echo $_POST["submit"];
    if(isset($_POST["first_name"])){$first_name = htmlspecialchars(strip_tags($_POST["first_name"]));}
    if(isset($_POST["middle_name"])){$middle_name = htmlspecialchars(strip_tags($_POST["middle_name"]));}
    if(isset($_POST["last_name"])){$last_name = htmlspecialchars(strip_tags($_POST["last_name"]));}
    if(isset($_POST["date_of_birth"])){$first_name = htmlspecialchars(strip_tags($_POST["date_of_birth"]));}
    if(isset($_POST["address"])){$middle_name = htmlspecialchars(strip_tags($_POST["address"]));}
    if(isset($_POST["parent_phone_number"])){$last_name = htmlspecialchars(strip_tags($_POST["parent_phone_number"]));}
    if(isset($_POST["class"])){$first_name = htmlspecialchars(strip_tags($_POST["class"]));}
    if(isset($_POST["school_name"])){$middle_name = htmlspecialchars(strip_tags($_POST["school_name"]));}
    if(isset($_POST["admission_number"])){$last_name = htmlspecialchars(strip_tags($_POST["admission_number"]));}
    if(isset($_POST["school_address"])){$first_name = htmlspecialchars(strip_tags($_POST["school_address"]));}
    if(isset($_POST["admission_year"])){$middle_name = htmlspecialchars(strip_tags($_POST["admission_year"]));}
    if(isset($_POST["year_of_study"])){$last_name = htmlspecialchars(strip_tags($_POST["year_of_study"]));}
    if(isset($_POST["course_duration"])){$first_name = htmlspecialchars(strip_tags($_POST["course_duration"]));}
    if(isset($_POST["subcounty"])){$middle_name = htmlspecialchars(strip_tags($_POST["subcounty"]));}
    if(isset($_POST["ward"])){$last_name = htmlspecialchars(strip_tags($_POST["ward"]));}
    if(isset($_POST["location"])){$first_name = htmlspecialchars(strip_tags($_POST["location"]));}
    if(isset($_POST["sublocation"])){$middle_name = htmlspecialchars(strip_tags($_POST["sublocation"]));}
    if(isset($_POST["village"])){$last_name = htmlspecialchars(strip_tags($_POST["village"]));}
    if(isset($_POST["father"])){ $father = htmlspecialchars(strip_tags($_POST["father"]));}
    if(isset($_POST["mother"])){ $mother = htmlspecialchars(strip_tags($_POST["mother"]));}
    if(isset($_POST["is_orphan"])){ $is_orphan = htmlspecialchars(strip_tags($_POST["is_orphan"]));}
    if(isset($_POST["death_permit"])){$first_name = htmlspecialchars(strip_tags($_POST["death_permit"]));}
    if(isset($_POST["guardian_id"])){$middle_name = htmlspecialchars(strip_tags($_POST["guardian_id"]));}
    if(isset($_POST["voter_id"])){$last_name = htmlspecialchars(strip_tags($_POST["voter_id"]));}
    if(isset($_POST["birth"])){$first_name = htmlspecialchars(strip_tags($_POST["birth"]));}
    if(isset($_POST["chief_letter"])){$middle_name = htmlspecialchars(strip_tags($_POST["chief_letter"]));}
    

}else{

    header("Location: http://localhost/bursary");
    exit();
}


////Save to Student DB
$query = "INSERT INTO student_information ( first_name, 
                                            middle_name, 
                                            last_name,
                                            date_of_birth,
                                            address,
                                            parent_phone_number,
                                            class,
                                            school_name,
                                            admission_number,
                                            school_address,
                                            admission_year,
                                            course_duration,
                                            year_of_study
                                            subcounty,
                                            ward,
                                            location,
                                            sublocation,
                                            village )

                                    values ('".$first_name."', 
                                            '".$middle_name."',
                                            '".$last_name."' ,
                                            '".$date_of_birth."', 
                                            '".$address."',
                                            '".$parent_phone_number."', 
                                            '".$class."',
                                            '".$school_name."',
                                            '".$admission_number."', 
                                            '".$school_address."',
                                            '".$admission_year."' ,
                                            '".$course_duration."', 
                                            '".$year_of_study."',
                                            '".$subcounty."' ,
                                            '".$ward."', 
                                            '".$location."',
                                            '".$sublocation."' ,
                                            '".$village."'); 
}else{
"
();
                                      

$query = "INSERT INTO family_information ( father, 
                                            mother, 
                                            is_orphan,
                                            student_id ) 
                                    values ('".$father."', 
                                            '".$mother."',
                                            '".$is_orphan."',
                                            '".$student_id."');

                                            
if ($conn->query($query) === TRUE) {
    $student_id = $conn->insert_id;
 
    $msg .= '<p>Success! Application has been submitted. <p>';
   // $msg = $msg.'';
   



if ($conn->query($query) === TRUE) {
    
} else {
    
}

$conn -> close();
$_SESSION["message"] = $msg;
header("Location: http://localhost/bursary");