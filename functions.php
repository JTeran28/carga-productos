<?php
// Function for the errors
function getAlert($message, $alertType) {
    return '<div class="alert alert-' . $alertType . '" role="alert">' . $message . '</div>';
}
