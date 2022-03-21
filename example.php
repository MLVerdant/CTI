<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

use CTI\Define;

$iblockID = Define::getIblock("TEST_IBLOCK"); // 1

echo "<pre>ID инфоблока: ", var_dump($iblockID), "</pre>";