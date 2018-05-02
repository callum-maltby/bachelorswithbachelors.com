<?php
    if($_GET['button1']){fun1();}
    if($_GET['button2']){fun2();}
    function fun1() {
        //This function will update some column in database to 1    
    }
    function fun2() {
        //This function will update some column in database to 2
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Button click by Vishnu Sivan</title>
    </head>
    <body>
        <button id="btnfun1" name="btnfun1" onClick='location.href="?button1=1"'>Update to 1</button>
        <button id="btnfun2" name="btnfun2" onClick='location.href="?button2=1"'>Update to 2</button>
    </body>
</html>