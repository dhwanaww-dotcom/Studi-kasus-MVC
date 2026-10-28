
<?php

require_once __DIR__ . '/LoginController.php';

$controller = new LoginController();

$page = $_GET["page"] ?? "login";

if ($page === "dashboard") {
    require __DIR__ . '/dashboard.php';
} else {
    $controller->login();
}
