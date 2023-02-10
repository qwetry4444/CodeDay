<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" name="linkToCss" id="linkToCSS" href="css/lightTheme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&family=Open+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <script src="theme.js"></script>
    <title>Registration</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__row">

                <div class="header__logo">
                    <a href="#" class="header__text">CodeDay</a>
                    <a href="#"><img src="img/logo.png" alt="logo" class="header__img"></a>
                </div>

                <div class="header__switchTheme"><input type="button" class="header__button" value="Change theme" onclick="switch_theme()"></div>
            </div>
        </div>
    </header>


    <main>
        <h1 class="title">Registration</h1>
            <form action="" class="form">
                <fieldset>   

                        <div class="form__form-field">
                            <div class="form__group">
                                <label class="form__label">User name</label> <input type="text" class="form__input" required="Required field!" required placeholder="123">
                            </div>
                            <div class="form__group">
                                <label class="form__label">Password</label><input type="password" class="form__input" required="Required field!">
                            </div>
                            <div class="form__group">
                                <label class="form__label">Repeat password</label><input type="password" class="form__input" required="Required field!">
                            </div>
                        </div>

                </fieldset>
        
       
                <fieldset>

                        <div class="form__form-field">
                            <div class="form__group">
                                <label class="form__label">Choose your gender</label>
                                <div class="form__gender_input">
                                    <label> <input type="radio" name="gender" value="Man" id="Man">Man</label>
                                    <label> <input type="radio" name="gender" value="Woman" id="Woman">Woman</label>
                                </div>
                            </div>
                
                
                            <div class="form__group">
                                <label class="form__label">Choose your preferred <br/>programming language</label>
                                <select name="PL" id="PlChoose" class="form__PL_input">
                                    <option value="C">C</option>
                                    <option value="C++">C++</option>
                                    <option value="C#">C#</option>
                                    <option value="Python">Python</option>
                                    <option value="JavaScript">JavaScript</option>
                                </select>
                            </div>
                
                            <div class="form__group">
                                <label class="form__label">Email</label>
                                <input class="form__input" type="email" pattern="*" required placeholder="myEmail@mail.ru">
                            </div>
                            <div class="form__group">
                                <label class="form__label">Phone number</label>
                                <input class="form__input" type="text" >
                            </div>
                            <div class="form__group">
                                <label class="form__label">Birtday</label>
                                <input class="form__input" type="date" required placeholder="day.mounth.year" pattern="[0-9]{1,2}.[0-9]{1,2}.[0-9]{3,4}">
                            </div>
                        </div>

                </fieldset>
                <div class="agree-group">
                    <label class="agree-group__text">I agree to data processing</label>
                    <input class="agree-group__buuton" type="checkbox">
                </div>
                <div class="end-group">
                    <div class="end-group__submit-button"><input class="end-group__submit" type="submit" value="Sumbit"></div>
                    <div class="end-gorup__clear-button"><input class="end-group__reset" type="reset" value="Clear"></div>
                </div>
            </form>
    </main>

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

</body>
</html>