<?php

require_once '../../validate_api_key.php';

require_once '../../require_get_method.php';


// Asset via ID (single)
if (isset($_GET['machine_id'])) {
    $machine_id = strval($_GET['machine_id']);
    $sql = mysqli_query($mysqli, "SELECT * FROM simplehelp_ipaddresses WHERE machine_id = $machine_id");

}

// Output
require_once "../../read_output.php";
