<?php
// Include configuration files
include "includes/config.php";
include "includes/functions.php";

// Include library files
include "libs/template/autoload.php";
include "libs/database/autoload.php";
include "libs/session/autoload.php";


// Session configuration initialization
Session::init(SESSION_CONFIGURATION);

// Http request page
$requestPath = isset($_SERVER["PATH_INFO"]) ? ltrim($_SERVER["PATH_INFO"], "/") . ".php" : DEFAULT_PAGE;
$requestPath = ALLOWED_URI_DASHES === true ? str_replace("-", "_", $requestPath) : $requestPath;

// Include the file if exist request path
if (file_exists(PAGE_DIRECTORY . $requestPath)) {
    require PAGE_DIRECTORY . "$requestPath";
} else {
    http_response_code(404);
    require PAGE_DIRECTORY . "404.php";
}

