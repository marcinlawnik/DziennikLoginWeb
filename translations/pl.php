<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "Twoje konto nie zostało jeszcze aktywowane. Wejdź w link, który otrzymaleś e-mailem.");
define("MESSAGE_CAPTCHA_WRONG", "Captcha jest zła!");
define("MESSAGE_COOKIE_INVALID", "Niepoprawne ciasteczka");
define("MESSAGE_DATABASE_ERROR", "Problemy z połączeniem z bazą.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Ten adres został już wykorzystany. Użyj funkcji \"Zapomniałe(a)ś hasła\" jeśli go nie pamiętasz.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Przepraszamy, błąd zmiany adresu.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Twój adres e-mail został zmieniony. Nowy adres e-mail to ");
define("MESSAGE_EMAIL_EMPTY", "Musisz wpisać adres e-mail");
define("MESSAGE_EMAIL_INVALID", "Twój adres e-mail nie jest poprawny");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Ten adres e-mail jest taki sam jak poprzedni. Wybierz inny.");
define("MESSAGE_EMAIL_TOO_LONG", "E-mail nie może być dłuższy niż 64 litery.");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Puste pole.");
define("MESSAGE_LOGGED_OUT", "Zostałeś wylogowany.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Błąd logowania.");
define("MESSAGE_OLD_PASSWORD_WRONG", "Twoje STARE hasło jest złe.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Hasła nie zgadzają się.");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Nie udało się zmienić hasła.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Poprawnie zmieniono hasło!");
define("MESSAGE_PASSWORD_EMPTY", "Pole hasła nie może być puste.");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "Link do wygenerowania nowego hasła nie został wysłany! Błąd: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "Link do zmiany hasła został wysłany na twój adres e-mail!");
define("MESSAGE_PASSWORD_TOO_SHORT", "Minimalna ilość znaków w haśle to 6.");
define("MESSAGE_PASSWORD_WRONG", "Złe hasło. Próbuj dalej!");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Wprowadzono niepoprawne hasło 3 lub więcej razy. Proszę czekać 30 sekund, aby spróbować ponownie.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Przepraszamy, aktywacja nie powiodła się!");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Aktywacja powiodła się! Możesz się teraz zalogować!");
define("MESSAGE_REGISTRATION_FAILED", "Przepraszam, błędna rejestracja. Powróć, lub spróbuj raz jeszcze.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Twój link resetowania wygasł. Proszę kliknąć na link w ciągu jednej godziny resetowania");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Przepraszam, nie mogłem wysłać weryfikacji na twój e-mail. Twoje konto nie zostało stworzone.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Weryfikacja nie została wysłana poprawnie ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Twoje konto zostało stworzone. Potwierdź adres e-mail.");
define("MESSAGE_USER_DOES_NOT_EXIST", "Taki użytkownik nie istnieje!");
define("MESSAGE_USERNAME_BAD_LENGTH", "Nazwisko nie może być krótsze niż 2 i dłuższe niż 64 litery");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Przepraszam, wybór nazwy używkonika nie powiódł się.");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Nazwa użytkownika została zaakceptowana. Nowa nazwa użytkownika to ");
define("MESSAGE_USERNAME_EMPTY", "Pole nazwy użytkownika jest puste.");
define("MESSAGE_USERNAME_EXISTS", "Przepraszamy, nazwa użytkownika zajęta. Wybierz coś innego.");
define("MESSAGE_USERNAME_INVALID", "Nazwa użytkownika jest niepoprawna: tylko A-Z i cyfry są dozwolone.");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Przepram, nazwa użytkownika jest taka sama jak poprzednia. Wybierz inną.");

// views
define("WORDING_BACK_TO_LOGIN", "Wróć do strony logowania");
define("WORDING_CHANGE_EMAIL", "Zmień email");
define("WORDING_CHANGE_PASSWORD", "Zmień hasło");
define("WORDING_CHANGE_USERNAME", "Zmień nazwę użytkownika");
define("WORDING_CURRENTLY", "Bieżące");
define("WORDING_EDIT_USER_DATA", "Zmień dane użytkownika");
define("WORDING_EDIT_YOUR_CREDENTIALS", "Jesteś zalogowany i możesz edytować dane twojego konta");
define("WORDING_FORGOT_MY_PASSWORD", "Zapomniałem hasła");
define("WORDING_LOGIN", "Zaloguj");
define("WORDING_LOGOUT", "Wyloguj");
define("WORDING_NEW_EMAIL", "Nowy email");
define("WORDING_NEW_PASSWORD", "Nowe hasło");
define("WORDING_NEW_PASSWORD_REPEAT", "Powtórz nowe hasło");
define("WORDING_NEW_USERNAME", "Nowa nazwa użytkownika (nazwa użytkownika może zawierać małe i wielkie litery (Aa-Zz), cyfry (0-9)");
define("WORDING_OLD_PASSWORD", "Twoje STARE hasło");
define("WORDING_PASSWORD", "Hasło");
define("WORDING_PROFILE_PICTURE", "Twoje profilowe (z gravatara):");
define("WORDING_REGISTER", "Rejestracja");
define("WORDING_REGISTER_NEW_ACCOUNT", "Zarejestruj nowe konto");
define("WORDING_REGISTRATION_CAPTCHA", "Wpisz znaki");
define("WORDING_REGISTRATION_EMAIL", "Email użytkownika (Wprowadź prawdziwy adress email, powinieneś dostać mail weryfikacyjny z linkiem aktywacyjnym)");
define("WORDING_REGISTRATION_PASSWORD", "Hasło (min. 6 znaków!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "powtórz hasło");
define("WORDING_REGISTRATION_USERNAME", "Nazwa użytkownika (tylko litery i znaki, od 2 do 64 znaków)");
define("WORDING_REMEMBER_ME", "Zapamiętaj mnie (na dwa tygodnie)");
define("WORDING_REQUEST_PASSWORD_RESET", "Zresetuj hasło. Wprowadź swoją nazwę użytkownika i powinieneś dostać email z instrukcją:");
define("WORDING_RESET_PASSWORD", "Zresetuj hasło");
define("WORDING_SUBMIT_NEW_PASSWORD", "Wpisz nowe hasło");
define("WORDING_USERNAME", "Nazwa użytkownika");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Jesteś zalogowany jako ");
