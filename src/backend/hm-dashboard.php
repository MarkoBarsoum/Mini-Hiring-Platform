<!DOCTYPE html>
<!-- Template By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mini Hiring Platform – Home</title>
        <link rel="stylesheet" href="hm-dashboard.css">
        <script>
            function createTemplateBtn(){
                window.location.href = "hm-create-template.php"
            }
            function inviteCandidateBtn(){
                window.location.href = "hm-invite-candidate.php"
            }
            function createScenarioBtn(){
                window.location.href = "hm-create-scenario.php"
            }
            
        </script>
    </head>
    <body>
        <nav>
            <div class="menu">
            <div class="logo">
                <a href="home.html">Mini Hiring Platform</a>
            </div>
            <ul>
                <li><a href="about.html">About</a></li>
            </ul>
            </div>
        </nav>
        <div class="center">
            <div class="btns">
                <button id="add-temp-btn" onclick="createTemplateBtn()">Create Template</button>
                <button id="inv-cand-btn" onclick="inviteCandidateBtn()">Invite Candidate</button>
                <button id="add-scen-btn" onclick="createScenarioBtn()">Create Scenario</button>
            </div>
            <div>
                <table>
                    
                </table>
                <table>
                    
                </table>
            </div>
          </div>
    </body>
</html>

<?php

session_start();
// Connect
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn, "USE hiring_platform;");

$hiring_manager_id = "SELECT id FROM hiring_managers WHERE name = \"" . $_SESSION['username'] . "\";";
// echo $hiring_manager_id . "<br>";
$hiring_manager_id = mysqli_query($conn, $hiring_manager_id);
$hiring_manager_id = mysqli_fetch_assoc($hiring_manager_id)['id'];

$_SESSION['hiring_manager_id'] = $hiring_manager_id;

// var_dump($_SESSION);

?>