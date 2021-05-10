<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="submit" name="submit1" value="click me to excecute"></input>
        <input type="submit" name="submit2" value="click me to stop"></input>

        <?php
            //Get content from the file we declear.
            //You can change the url if it's different
            $content = file_get_contents('C:\Users\myste\Desktop\test.bat', true);

            //This function will run the command
            function execCmd($cmd) {
                $output = shell_exec($cmd);
                echo $output;
            }
            
            if(isset($_POST["submit1"])){

                //Run the function
                execCmd($content);

            }

        ?>
    </form>
</body>
</html>