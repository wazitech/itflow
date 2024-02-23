<?php

require_once '../validate_api_key.php';

require_once '../require_post_method.php';


// Parse ID
$asset_id = intval($_POST['machine_id']);

// Default
$update_count = false;

if (!empty($asset_id)) {

    $asset_row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM assets WHERE asset_id = '$machine_id' LIMIT 1"));

    // Variable assignment from POST - assigning the current database value if a value is not provided
    require_once 'machine_model.php';


    $update_sql = mysqli_query($mysqli, "UPDATE assets SET asset_name = machine_id = '$machine_id',  online = '$online',  name = '$name',  state = '$state',  protocol = '$protocol',  lastRegistrationTime = '$lastRegistrationTime',  sessionCount = '$sessionCount',  monitoringEnabled = '$monitoringEnabled',  hasLoggedInUser = '$hasLoggedInUser',  consoleUser = '$consoleUser',  os = '$os',  hostname = '$hostname',  domain = '$domain',  wan_ip = '$wan_ip',  build = '$build',  uptime_ms = '$uptime_ms',  total_memory = '$total_memory',  model_name = '$model_name',  model_identifier = '$model_identifier',  manufacture = '$manufacture',  serial = '$serial',  ecc_memory = '$ecc_memory',  asset_id = '$asset_id' LIMIT 1");

    // Check insert & get insert ID
    if ($update_sql) {
        $update_count = mysqli_affected_rows($mysqli);

        //Logging
        mysqli_query($mysqli, "INSERT INTO logs SET log_type = 'Asset_Simplehelp', log_action = 'Updated', log_description = '$name via API ($api_key_name)', log_ip = '$ip', log_user_agent = '$user_agent', log_client_id = $client_id");
        mysqli_query($mysqli, "INSERT INTO logs SET log_type = 'API', log_action = 'Success', log_description = 'Updated Simplehelp machine $name via API ($api_key_name)', log_ip = '$ip', log_user_agent = '$user_agent', log_client_id = $client_id");
    }
}

// Output
require_once '../update_output.php';

