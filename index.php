<?php
// Detect browser language
$locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Redirect to French version if locale is French and user is in a Canadian French-speaking province
if ($locale === 'fr' ) {
    header("Location: index-fr.html");
    exit();
} else {
    header("Location: index-en.html");
    exit();
}
