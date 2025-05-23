<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800, // 30 minutes
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true, // Set to true if using HTTPS
    'httponly' => true
]);

session_start();

if (isset($_SESSION['user_id'])) {
    if (!isset($_SESSION['last_regeneration'])) {
    regenerate_session_id_loggedin();    
    } else {
    $interval = 1800; // 30 minutes
    if (time() - $_SESSION['last_regeneration'] > $interval) {
        regenerate_session_id_loggedin();
    }
}
} else {
    if (!isset($_SESSION['last_regeneration'])) {
    regenerate_session_id();    
    } else {
    $interval = 1800; // 30 minutes
    if (time() - $_SESSION['last_regeneration'] > $interval) {
        regenerate_session_id();
    }
}
}

function regenerate_session_id_loggedin() {
    session_regenerate_id(true);

    $userId = $_SESSION['user_id']; //User ID from the session
    $newSessionId = session_create_id(); //Create a new id
    $sessionId = $newSessionId . '_' . $userId;
    session_id($sessionId);

    $_SESSION['last_regeneration'] = time(); // Update the last regeneration time
}

function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time(); // Get the last regeneration time
}