<?php
        $userNameVal=$genderVal=$selectOption='not value';

        $preferred_programming_language='not value';
        $emailVal='not value';
        $phoneNumVal='not value';
        $birthdayVal='not value';
        $radioVal='not value';
        if (isset($_GET['userName']))
            $userNameVal=$_GET['userName'];
        echo"Hello $userNameVal<br/>";
        
        if (isset($_GET['email']))
            $emailVal=$_GET['email'];
        echo"Your email: $emailVal<br/>";
        
        if (isset($_GET['phoneNum']))
            $phoneNumVal=$_GET['phoneNum'];
        echo"Your phone number: $phoneNumVal<br/>";
        
        if (isset($_GET['birthday']))
            $birthdayVal=$_GET['birthday'];
        echo"Your date of birth is : $birthdayVal<br/>";

        if (isset($_GET['gender']))
        {
        $radioVal = $_GET["gender"];
        
        if($radioVal == "Man")
        {
        echo("Your gender is Man<br/>");
        }
        else if ($radioVal == "Woman")
        {
        echo("Your gender is Woman<br/>");
        }
        }
        
        if(isset($_GET['PLChoice']))
            $selectOption = $_GET['PLChoice'];
        echo("Your prefered PL is $selectOption");
        ?>