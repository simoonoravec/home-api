<?php
header("Content-type: application/json");
require($_SERVER['DOCUMENT_ROOT']."/apikeys.inc.php");

if (!isset($_GET["api_key"]) || !in_array(htmlspecialchars($_GET["api_key"]), $apikeys)) {
    die(json_encode(["success"=>false,"error"=>"Invalid or no API key."]));
}
?>