<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "Twoje konto nie zostało jeszcze aktywowane. Wejdź w link, który masz na mail'u.");
define("MESSAGE_CAPTCHA_WRONG", "Captcha jest zła!");
define("MESSAGE_COOKIE_INVALID", "Niepoprawne ciasteczka");
define("MESSAGE_DATABASE_ERROR", "Problemy z połączeniem z bazą.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Ten adres został już wykożystany. Proszę użyć \"Zapomniałe(a)ś hasła\" jeśli go nie pamiętasz.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Przepraszam, błąd zmiany adresu.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Twój adres e-mail został zmieniony. Nowy adres e-mail to ");
define("MESSAGE_EMAIL_EMPTY", "Musisz wpisać adres e-mail");
define("MESSAGE_EMAIL_INVALID", "Twój adres e-mail nie jest poprawny");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Ten adres e-mail jest taki sam jak poprzedni. Powinieneś wybrać inny.");
define("MESSAGE_EMAIL_TOO_LONG", "E-mail nie może być dłuższy niż 64 litery.");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Puste pole.");
define("MESSAGE_LOGGED_OUT", "Zostałeś wylogowany.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Nie poprawne logowanie.");
define("MESSAGE_OLD_PASSWORD_WRONG", "Twoje OLD hasło jest złe.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Hasła nie zgadzają się.");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Sory, zmiana hasła poległa.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Poprawnie zmienione hasło!!!");
define("MESSAGE_PASSWORD_EMPTY", "pole hasła nie może być puste.");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "Resetowane hasło nie zostało wysłane! Error: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "Zmienione hasło zostało wysłane na twój adres e-mail!");
define("MESSAGE_PASSWORD_TOO_SHORT", "Minimalna ilość znaków to 6.");
define("MESSAGE_PASSWORD_WRONG", "Złe hasło. Próbuj dalej!");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Wprowadzono niepoprawne hasło 3 lub więcej razy. Proszę czekać 30 sekund, aby spróbować ponownie.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Przepraszam, nie takie połączenie identyfikatora / weryfikacja tutaj ...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Aktywacja powiodła się! Możesz się teraz logować!");
define("MESSAGE_REGISTRATION_FAILED", "Sorry, your registration failed. Please go back and try again.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Your reset link has expired. Please use the reset link within one hour.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Sorry, we could not send you an verification mail. Your account has NOT been created.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Verification Mail NOT successfully sent! Error: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Your account has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.");
define("MESSAGE_USER_DOES_NOT_EXIST", "This user does not exist");
define("MESSAGE_USERNAME_BAD_LENGTH", "Username cannot be shorter than 2 or longer than 64 characters");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Sorry, your chosen username renaming failed");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Your username has been changed successfully. New username is ");
define("MESSAGE_USERNAME_EMPTY", "Username field was empty");
define("MESSAGE_USERNAME_EXISTS", "Sorry, that username is already taken. Please choose another one.");
define("MESSAGE_USERNAME_INVALID", "Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Sorry, that username is the same as your current one. Please choose another one.");

// views
define("WORDING_BACK_TO_LOGIN", "Back to Login Page");
define("WORDING_CHANGE_EMAIL", "Change email");
define("WORDING_CHANGE_PASSWORD", "Change password");
define("WORDING_CHANGE_USERNAME", "Change username");
define("WORDING_CURRENTLY", "currently");
define("WORDING_EDIT_USER_DATA", "Edit user data");
define("WORDING_EDIT_YOUR_CREDENTIALS", "You are logged in and can edit your credentials here");
define("WORDING_FORGOT_MY_PASSWORD", "I forgot my password");
define("WORDING_LOGIN", "Log in");
define("WORDING_LOGOUT", "Log out");
define("WORDING_NEW_EMAIL", "New email");
define("WORDING_NEW_PASSWORD", "New password");
define("WORDING_NEW_PASSWORD_REPEAT", "Repeat new password");
define("WORDING_NEW_USERNAME", "New username (username cannot be empty and must be azAZ09 and 2-64 characters)");
define("WORDING_OLD_PASSWORD", "Your OLD Password");
define("WORDING_PASSWORD", "Password");
define("WORDING_PROFILE_PICTURE", "Your profile picture (from gravatar):");
define("WORDING_REGISTER", "Register");
define("WORDING_REGISTER_NEW_ACCOUNT", "Register new account");
define("WORDING_REGISTRATION_CAPTCHA", "Please enter these characters");
define("WORDING_REGISTRATION_EMAIL", "User's email (please provide a real email address, you'll get a verification mail with an activation link)");
define("WORDING_REGISTRATION_PASSWORD", "Password (min. 6 characters!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Password repeat");
define("WORDING_REGISTRATION_USERNAME", "Username (only letters and numbers, 2 to 64 characters)");
define("WORDING_REMEMBER_ME", "Keep me logged in (for 2 weeks)");
define("WORDING_REQUEST_PASSWORD_RESET", "Request a password reset. Enter your username and you'll get a mail with instructions:");
define("WORDING_RESET_PASSWORD", "Reset my password");
define("WORDING_SUBMIT_NEW_PASSWORD", "Submit new password");
define("WORDING_USERNAME", "Username");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "You are logged in as ");
