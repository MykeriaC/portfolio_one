<style>

    .welcome {
        background-color: grey;
        color: #FFD670;
        text-shadow: 3px 3px black;
        padding: 20px;
        margin: 0px;
    }

    .center {
        color: white;
        text-align: center;
        position: absolute;
        top: 35%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .center-button {
        text-align: center;
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #FFD670;
    }

    a {
        text-decoration: none;
        color: black;
    }

</style>
<?php
    echo "<body style='background-color:grey'>";
    // reg expressions for all the data being entered
    $nameReg = "/^([a-zA-Z]+|N\/A)$/";
    $emailRegU = "/^[a-zA-Z]{1,100}[0-9]?@knights.ucf.edu$/";
    $emailRegW = "/^[a-zA-Z]{1,100}[0-9]?@ucf.edu$/";
    $idReg = "/^[a-z]{2}[0-9]{6}$/";
    $buildingReg = "/^[a-zA-Z]{2,4}[0-9]?$/";
    $roomReg = "/^[0-9]{3}[a-zA-Z]?$/";

    // stores the values entered ito form into the variables
    $fName = $_POST["firstName"];
    $lName = $_POST["lastName"];
    $email = $_POST["email"];
    $id = $_POST["id"];
    $building = $_POST["building"];
    $building = strtoupper($building);
    $room = $_POST["classNum"];
    $profFirst = $_POST["profFName"];
    $profLast = $_POST["profLName"];

    $arrayDT = array("CMB", "DPAC", "UWCV");
    $arrayDTLong = array("Communications and Media Building", "Dr Phillips Academic Commons", "Union West Creative Village");
    $DTAdd = "<b><i>500 W Livingston St, Orlando, FL 32801</i></b>";
    $arrayMain = array("BIO", "BMRA", "BHC", "BA1", "BA2", "CHEM", "CAH", "CB1", "CB2", "CNH", "CSEL", "ED", "ENGR", "ENG2", "HEC", "HPA", "HPA2", "HC", "HPH", "LIB", "MSB", "NSC", "CROL", "PAC", "PSB", "PSY", "CSB", "STUN", "TA", "VAB");
    $arrayMainLong = array("Biological Sciences Building", "Biomolecular Research Annex", "Burnett Honors", "Business Administration 1", "Business Administration 2", "Chemistry", "College of Arts and Humanities", "Classroom Building 1", "Classroom Building 2", "Colbourn Hall", "Career Services and Experiental Learning", "Education Complex", "Engineering 1", "Engineering 2", "Harris Corporation Engineering Center", "Health Public Affairs 1", "Health Public Affairs 2", "Health Center & Pharmacy", "Howard Phillips Hall", "Library, John C. Hitt", "Mathematical Science Building", "Nicholson School of Communication", "Optics and Photonics (CROEL)", "Performing Arts Center", "Physical Science Building", "Psychology Building", "Sciences Building", "Student Union", "Teaching Academy", "Visual Arts Building");
    $MainAdd = "<b><i>4000 Central Florida Blvd, Orlando, FL 32816<b><i>";

    function clickMe(){
        echo("<p class='center'>Unfortunately we do not have the information for " ."<b>".$_POST["campusName"]."</b>". " at this time. </p>");
        echo("<button class='center-button'><a href='index.php'>Return</a></button>");
    }

    // if what the user enters meets the regExp
    if (preg_match($nameReg, $fName) && preg_match($nameReg, $lName) && (preg_match($emailRegU, $email) || preg_match($emailRegW, $email)) && preg_match($idReg, $id) && preg_match($buildingReg, $building) && preg_match($roomReg, $room) && preg_match($nameReg, $profFirst) && preg_match($nameReg, $profLast)){
        // if user clicks no they do not attend listed campus
        if ($_POST["choice1"] == "no"){
            clickMe();
        }
        // else if they click yes then we 
        else {
            // for loop that runs through Main Campus array and tests against user entry ($building); if a match is found, we alert that the user attends main, if not, we alert that the user attends downtown
            for ($x=0; $x < count($arrayMain); $x++){
                if($arrayMain[$x] == $building){
                    echo("Welcome " . $fName . " ". $lName . "!" );
                    echo nl2br("\n\n");
                    echo("<h3>Your class is located on the Main UCF Campus.</h3>");
                    echo nl2br("\n\n");
                    echo("The address to this campus is " . $MainAdd);
                    echo nl2br("\n\n");
                    echo("According to our form, you would like to locate building: ". "<b><i>".$building."</i></b>"." ". "<b><i>".$room."</i></b>");
                    echo nl2br("\n\n");
                    echo($arrayMain[$x] . " is the abbreviation for " ."<b><i>".$arrayMainLong[$x]."</i></b>". " located on campus.");
                    echo nl2br("\n\n");

                    if($room[0] == 1){
                        echo($building ." ". $room . " is located on the <b><i>1st floor.</i></b>");
                    }
                    else if($room[0] == 2){
                        echo($building ." ". $room . " is located on the <b><i>2nd floor.</i></b>");
                    }
                    else if($room[0] == 3){
                        echo($building ." ". $room . " is located on the <b><i>3rd floor.</i></b>");
                    }
                    else if($room[0] == 4){
                        echo($building ." ". $room . " is located on the <b><i>4th floor.</i></b>");
                    }
                    else if($room[0] == 5){
                        echo($building ." ". $room . " is located on the <b><i>5th floor.</i></b>");
                    }
                    else if($room[0] == 6){
                        echo($building ." ". $room . " is located on the <b><i>6th floor.</i></b>");
                    }

                    if(($profFirst == "N/A") || ($profLast == "N/A")){
                        echo nl2br("\n");
                        echo("Good luck in class with your professor!");
                    }else if (($profFirst != "N/A") && ($profLast != "N/A")){
                        echo nl2br("\n");
                        echo("Good luck in class with Professor ". $profFirst ." ". $profLast .".");
                    }
                }
            }
            for ($y=0; $y < count($arrayDT); $y++){
                if($arrayDT[$y] == $building){
                    echo("<h1 class='welcome'>Welcome " . $fName . " ". $lName . "!</h1>");
                    echo nl2br("\n\n");
                    echo("<h3>Your class is located on the Downtown UCF Campus.</h3>");
                    echo nl2br("\n\n");
                    echo("The address to this campus is " . $DTAdd);
                    echo nl2br("\n\n");
                    echo("According to our form, you would like to locate building: ". "<b><i>".$building."</i></b>"." ". "<b><i>".$room."</i></b>");
                    echo nl2br("\n\n");
                    echo($arrayDT[$y] . " is the abbreviation for " ."<b><i>".$arrayDTLong[$y]."</i></b>" . " located on campus.");
                    echo nl2br("\n\n");

                    if($room[0] == 1){
                        echo($building ." ". $room . " is located on the <b><i>1st floor.</i></b>");
                    }
                    else if($room[0] == 2){
                        echo($building ." ". $room . " is located on the <b><i>2nd floor.</i></b>");
                    }
                    else if($room[0] == 3){
                        echo($building ." ". $room . " is located on the <b><i>3rd floor.</i></b>");
                    }
                    else if($room[0] == 4){
                        echo($building ." ". $room . " is located on the <b><i>4th floor.</i></b>");
                    }
                    else if($room[0] == 5){
                        echo($building ." ". $room . " is located on the <b><i>5th floor.</i></b>");
                    }
                    else if($room[0] == 6){
                        echo($building ." ". $room . " is located on the <b><i>6th floor.</i></b>");
                    }

                    if(($profFirst == "N/A") || ($profLast == "N/A")){
                        echo nl2br("\n");
                        echo("<h3>Good luck in class with your professor!</h3>");
                    }else if (($profFirst != "N/A") && ($profLast != "N/A")){
                        echo nl2br("\n");
                        echo("<h3>Good luck in class with Professor ". $profFirst ." ". $profLast .".</h3>");
                    }
                }
            }
        }
    }
    // else return to the form to have them refill it
    else {
        header("Location: index.php");
    }

    
    
    
?>