<?php
require("../../base.inc.php");

function getSensorData() {
    $data = json_decode(file_get_contents("http://127.0.0.1:65069/data/now"), true);
    if ($data == false || $data["success"] != true) {
        return ["success"=>false, "temp_c"=>0];
    } else {
        return ["success"=>true, "temp_c"=>$data["data"]["temp"]];
    }
}

die(json_encode(getSensorData()));
?>