b
<!DOCTYPE html>
<html>
    <head>
        <title>PROGRAM9</title>
    </head>
    <body>
        <?php
            // Define variables and set to empty space
            $name = $email = $gender = $comment = $website = "";
            
            if($_SERVER["REQUEST METHOD"] == "POST"){
                $name = test_input($POST["name"]);
                $email = test_input($POST["email"]);
                $website = test_input($_POST["website"]);
                $comment = test_input($POST["comment"]);
                $gender = test_input($_POST["gender"]);
            }

            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <h2>PRESBYTERIAN UNIVERSITY NEW STUDENT REGISTRATION</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Name: </label> <input type="text" name="name"><br><br>
            <label>E-Mail: </label> <input type="text" name="email"><br><br>
            <label>Website: </label><input type="text" name="website"><br><br>
            <label>Comment: </label><textarea name="Your Comment" rows="5" cols="40"></textarea><br><br>
            <label>Gender: </label>     <!-- Radio Button -->
            <input type="radio" name="gender" value="Female"><label>Female</label>
            <input type="radio" name="gender" value="Male"><label>Male</label>
            <input type="radio" name="gender" value="Other"><label>Other</label><br><br>
            <button type="Submit" name="submit" value="Submit">Submit</button>
        </form>

        <?php
            echo "<h2>The Submitted information is as follows: </h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
            echo "<br>";
        ?>
    </body>
</html>
