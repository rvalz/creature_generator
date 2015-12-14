<?php 
    include 'header.php';
    date_default_timezone_set('Canada/Eastern');
    
    $userName = $message = $creatureType = '';
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Harvest form info
    if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['creature_type'])) {
        $userName = $_POST['name'];
        $userName = strip_tags($userName);
        $userName = stripslashes($userName);
        $userName = htmlspecialchars($userName);
        $userName = strtolower($userName); 
        $userName = ucwords($userName); 
        $creatureType = $_POST['creature_type'];
        $message = 'our minions are crafting the perfect creature for you to achieve world domination. Muahahaha.';
    } else if (empty($_POST['name']) || empty($_POST['creature_type'])) {
        $errorWarning = "You must fill in your name AND select a creature type.";
        echo '<script type="text/javascript">
                alert("' . $errorWarning . '"); 
                window.location = "step_one.php";
        </script>';
    }

?>
    <h1>Creature Generator</h1>
    <h2>Step 2: Cooking up something monstrous</h2>
    <h3>Thanks for your business, <?php echo $userName; ?>!</h3>
    <p>Today is
        <?php echo date("l, F jS, Y "); ?> and it’s been a busy day. But, don’t worry –
            <?php echo $message; ?>
    </p>
    <p>Click on the 'Generate Your Creature' button below, when you're ready to see the results.</p>
    <button id="submitBtn">Generate Your Creature</button>
    <!-- show hidden div -->
    <button id="redoBtn">Generate Another Creature</button>
    <!-- go back to step 1 -->

    <div id="display-creature">
        <?php 
            // create two-dimensional array
            $creature = array (
                //Alien stock
                array("productNum" => "ET0", "url" => "images/alien-001.jpg", "imgAlt" => "Alien001", "bio" => "All ET0 aliens are as lethal as they are red in colour."),
                array("productNum" => "ET1", "url" => "images/alien-002.jpg", "imgAlt" => "Alien002", "bio" => "ET1 aliens are green, squishy and diabolical."),
                array("productNum" => "ET2", "url" => "images/alien-003.jpg", "imgAlt" => "Alien003", "bio" => "With three eyes, ET2 aliens are perfect for spying on other evil overlords."),
                array("productNum" => "ET3", "url" => "images/alien-004.jpg", "imgAlt" => "Alien004", "bio" => "Two heads are better than one, and the ET3 edition will deliver on this front."),
                //Robot stock 
                array("productNum" => "C3P0", "url" => "images/robot-001.jpg", "imgAlt" => "Robot001", "bio" => "The C3P0 robot's friendly smile is deceptive. Its laser eyes will destroy any enemy on command."),
                array("productNum" => "C3P1", "url" => "images/robot-002.jpg", "imgAlt" => "Robot002", "bio" => "The C3P1 robot editions are perfect for household tasks, freeing you up to plot world domination."),
                array("productNum" => "C3P2", "url" => "images/robot-003.jpg", "imgAlt" => "Robot003", "bio" => "The C3P2 robot has all the world's knowledge and will help you finesse your evil plans."),
                array("productNum" => "C3P3", "url" => "images/robot-004.jpg", "imgAlt" => "Robot004", "bio" => "The C3P3's camo exterior is perfect for a sneak attack on the enemy.")
              );

                if ($creatureType == "alien") {
                    $i = mt_rand(0,3);
                    $productNum = ($creature[$i]["productNum"]);
                    $url = ($creature[$i]["url"]);
                    $imgAlt = ($creature[$i]["imgAlt"]);
                    $bio = ($creature[$i]["bio"]);
                    $message = 'Your generated '.$creatureType.' is '.$userName.'ien '.$productNum.'<br><br>'.'<img src='.$url.' alt='.'"'.$imgAlt.'"'.'>'.'<br>'.$bio;
                    echo $message;
    //                        $to = 'eric.chen@senecacollege.com';
    //                        $subject = 'Your Creature Generator Results';
    //                        $headers = 'From: rvalz1@myseneca.ca'.'\r\n'.'Reply-To: rvalz1@myseneca.ca'.'\r\n'.'X-Mailer: PHP/'.phpversion();
    //                        mail($to, $subject, $message, $headers);
                } else {
                    $creatureType == "robot";
                    $i = mt_rand(4,7);
                    $productNum = ($creature[$i]["productNum"]);
                    $url = ($creature[$i]["url"]);
                    $imgAlt = ($creature[$i]["imgAlt"]);
                    $bio = ($creature[$i]["bio"]);
                    $message = 'Your generated '.$creatureType.' is '.$userName.'bot '.$productNum.'<br>'.'<img src='.$url.' alt='.$imgAlt.'>'.'<br>'.$bio;
                    echo $message;
//                        $to = 'eric.chen@senecacollege.com';
//                        $subject = 'Your Creature Generator Results';
//                        $headers = 'From: rvalz1@myseneca.ca'.'\r\n'.'Reply-To: rvalz1@myseneca.ca'.'\r\n'.'X-Mailer: PHP/'.phpversion();
//                        mail($to, $subject, $message, $headers);
                } 
        ?>
    </div>
    <!-- #displayCreature -->

<?php 
    include 'footer.php';
?>