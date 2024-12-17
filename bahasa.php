<?
if (isset($_POST['change_language']) && isset($_SESSION['user_logged_in'])) {
    $new_lang = $_POST['change_language'];
    setLanguageCookie($new_lang);
    $_SESSION['language_changed'] = true;
    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>