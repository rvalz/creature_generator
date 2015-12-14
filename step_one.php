<?php
    include 'header.php';
    date_default_timezone_set('Canada/Eastern');

//   FORM VALIDATION ATTEMPT #1 i.e. VALIDATE AT STEP 1. It works...ish...but not perfectly. NOTE THE COMMENTED OUT SPAN TAGS AND FORM METHOD.
//    $nameEmpty = $creatureEmpty = "";
//    $userName = $creatureType = "";   
//        
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        $valid = true;
//        if (empty($_POST["name"])) {
//           $nameEmpty = " Name is required";
//            $valid = false;
//        } else {
//            $userName =  test_input($_POST["name"]);
//        }
//
//        if (empty($_POST["creature_type"])) {
//            $creatureEmpty = " Creature Type is required";
//            $valid = false;
//        } else {
//           $creatureType = test_input($_POST["creature_type"]);
//        }
//        if($valid){
//            header('Location: step_two.php');
//            exit();
//        }
//    } 
//    function test_input($data) {
//        $data = trim($data);
//        $data = stripslashes($data);
//        $data = htmlspecialchars($data);
//        return $data;
//    }

?>
    <h1>Seneca College</h1>
    <h2>Webmaster Program</h2>
    <h3>Creature Generator</h3>

    <p>Step right up, step right up! Learn your creature-name in 3 short steps!</p>

    <h4>Step One: Information Gathering</h4>
    <!--            <form method="post" action="< ?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">-->
    <form method="post" id="myForm" action="step_two.php">
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <!--                    <span class="error">* < ?php echo $nameEmpty;?></span>-->
        </p>

        <fieldset>
            <legend>Choose your creature type:</legend>
            <p>
                <input type="radio" name="creature_type" value="alien" id="alien">
                <label for="alien">Alien
                </label>
            </p>
            <p>
                <input type="radio" name="creature_type" value="robot" id="robot">
                <label for="robot">Robot</label>
            </p>
            <!--                    <span class="error">* < ?php echo $creatureEmpty;?></span>-->
        </fieldset>

        <p>
            <input type="submit" name="send" id="send" value="Go to step 2 (if you dare)">
        </p>
    </form>

<?php 
    include 'footer.php';
?>