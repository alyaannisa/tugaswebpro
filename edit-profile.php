<?php

require('connection.php');

session_start();
$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM profile WHERE username = '$username'");
$att = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.php">
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="explore.php" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="profile.html" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="images/avatar.jpg" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username" ><?= $att["username"]; ?></h4>
            </header>
           
            <form action="edit.php" method="post" class="edit-profile__form">
                <div class="form__row">
                    <label for="fullname" class="form__label">Name:</label>
                    <input id="full-name" type="text" name="fullname" class="form__input" value= "<?php echo ($att["name"]); ?>" />
                </div>
                <div class="form__row">
                    <label for="username" class="form__label">Username:</label>
                    <input id="username" type="text" name="username" class="form__input" value="<?php echo ($att["username"]); ?>" />
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input id="website" type="text" name="website" class="form__input" value="<?php echo ($att["website"]); ?>" />
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea id="bio" name="bio" ><?php echo ($att["bio"]); ?></textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input id="email" type="email" name="email" class="form__input" value="<?php echo ($att["email"]); ?>" />
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input id="phone" type="tel" name="nohp" class="form__input" value="<?php echo ($att["nohp"]); ?>" />
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <select id="gender" name="gender" >
                        <?php
                            if($att['gender'] == "male"){
                                echo "<option selected value='male'>Male</option>";
                                echo "<option value='female'>Female</option>";
                                echo "<option value='cant'>Can't Remember</option>";
                            }
                            else if($att['gender'] == "female"){
                                echo "<option value='male'>Male</option>";
                                echo "<option selected value='female'>Female</option>";
                                echo "<option value='cant'>Can't Remember</option>";
                            }
                            else{
                                echo "<option value='male'>Male</option>";
                                echo "<option value='female'>Female</option>";
                                echo "<option selected value='cant'>Can't Remember</option>";
                            }
                        ?>
                    </select>
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2017 Vietgram</span>
        </div>
    </footer>
</body>

</html>