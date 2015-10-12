<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::Page();
include Page::getPageLocation(Page::getOption1(), PAGE_ENUM_CLASSES::LOGIN);
?>

