<?php

require_once '../validate_api_key.php';

require_once '../require_get_method.php';


// Asset via ID (single)
if (isset($_GET['machine_id'])) {
    $id = intval($_GET['machine_id']);
    $sql = mysqli_query($mysqli, "SELECT * FROM asset_simplehelp_machines WHERE machine_id = $id");

}

// Output
require_once "../read_output.php";
