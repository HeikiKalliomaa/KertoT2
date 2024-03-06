<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../styles/kertot.css">   
</head>
<body>
    <div class="containeer">
        <div class="multiTable">
            <form>
                <div class="display">
                    <input type="text" name = "display">
                </div>  
                <div>
                    <input type="button" value="7" onclick="display.value += '7' ">
                    <input type="button" value="8" onclick="display.value += '8' ">
                    <input type="button" value="9" onclick="display.value += '9' ">
                </div> 
                <div>
                    <input type="button" value="4" onclick="display.value += '4' ">
                    <input type="button" value="5" onclick="display.value += '5' ">
                    <input type="button" value="6" onclick="display.value += '6' ">
                </div>
                <div>
                    <input type="button" value="1" onclick="display.value += '1' ">
                    <input type="button" value="2" onclick="display.value += '2' ">
                    <input type="button" value="3" onclick="display.value += '3' ">
                </div>
                <div>
                    <input type="button" value="0" onclick="display.value += '0' ">
                    <input type="button" value="C" onclick="display.value = '' ">
                    <input type="submit" value="Enter" name="submit" formmethod="post" formaction="<?php echo $_SERVER['PHP_SELF']; ?>">
                </div> 
            </form>
        </div>      
    </div>
    <div class="Test">
        <?php
            $num1 = rand(1,10);
            $num2 = rand(1,10);
            $num3 = $num1 * $num2;
            $multic = $num1 . " * " . $num2 . " = ";
            echo '<script>document.getElementsByName("display")[0].value = "' . $multic . '";</script>';

            
            if (isset($_POST['submit'])) 
            {
            $result = $_POST['display'];
            $resultb = str_replace(['=', ' '], '', substr($result, strpos($result, '=') + 1));
            echo ": " . $result;
            echo" resultb on: " . $resultb;
            $resultc = inval($resultb);
            echo " palautusc on : " . $resultc;
            echo "num3 on: " . $num3;
            if ($resultc == $num3) {  
                echo "  Correct answer!";
                unset($_POST['submit']);     
                } else {
                    echo " Wrong answer!";
                }  
            
            }
        ?>          
    </div>
    

</body>
</html>
