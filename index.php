<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio One</title>
  </head>
  <style>

    body {
      margin: 0px;
      padding: 20px;
      background-color: grey;
    }

    fieldset {
      background-color: white;
      border: 3px outset black;
    }

    legend {
      background-color: grey;
      color: #FFD670;
      font-weight: 900;
      letter-spacing: 3px;
    }

    h1 {
      color: #FFD670;
      text-shadow: 3px 3px black;
    }

    #subheadingStyle {
      color: white;
      text-align: center;
    }

    button {
      background-color: #FFD670;
      padding: 10px 30px 10px 30px;
      font-size: 13px;
      border: 3px outset #FFD670;
      border-radius: 10px;
      font-weight: 700;
      letter-spacing: 2px;
    }
   
  </style>
  <body>
  <h1 style="text-align: center;"> UCF Class Locator</h1>
    <p id="subheadingStyle">Welcome to the UCF Class Locator. This site will assist you in locating any class you may be taking at one of the UCF campuses.</p>
    <form action="data.php" method="POST">
      <!-- fieldset for the personal information -->
      <fieldset>
        <!-- <div class="personInfo" style="text-align:center"> -->
          <legend class="personalInfo" style="text-align: center;">Personal Info</legend>
          <p>Please fill out the following personal information</p>
          <label for="firstName">First Name</label>
          <br>
          <input type="text" placeholder="First Name" name="firstName" required>
          <br><br>
          <label for="lastName">Last Name</label>
          <br>
          <input type="text" placeholder="Last Name" name="lastName" required>
          <br><br>
          <label for="stuEmail">UCF Email Address</label>
          <br>
          <input type="text" placeholder="Email Address" name="email" required>
          <br><br>
          <label for="stuID">UCF NID</label>
          <br>
          <input type="text" placeholder="UCF NID" name="id" required>
          <br><br>
        <!-- </div> -->
      </fieldset>
      <br>
      <!-- fieldset for the class information -->
      <fieldset>
        <legend class="classInfo" style="text-align: center;">Class Information</legend>
        <p>Please fill out the following class information</p>
        <label for="classNumber">Class Name</label>
        <input type="text" placeholder="Building (ex: CMB)" name="building" required>
        <input type="text" placeholder="Room Number (ex: 101)" name="classNum" required>
        <br><br>
        <label for="professor">Professor's Name (if the professor's name is unknown or unavailable at this time, please enter "N/A")</label>
        <br>
        <input type="text" placeholder="First Name" name="profFName">
        <input type="text" placeholder="Last Name" name="profLName" required> 
        <p>Are you an attendant of either the UCF Main Campus or the UCF Downtown Campus?</p>
        <input type="radio" name="choice1" class="choice1" id= "c1"  value="yes" onclick="clickMe()">
        <label for="c1">Yes</label>
        <br>
        <br>
        <input type="radio" name="choice1" class="choice1" id= "c2"  value="no" onclick="clickMe()">
        <label for="c2">No (enter the name of the campus here):</label>
        <input type="text" placeholder="Campus Name" name="campusName">
      </fieldset>
      
      <div style="text-align: center;">
        <br>
        <!-- <input type="submit" name="submitButton" value="Submit" onclick=""> -->
        <button type="submit">Submit</button>
       </div> 
    </form>
  </body>
</html>