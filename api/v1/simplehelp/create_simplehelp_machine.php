<?php

require_once '../validate_api_key.php';

require_once '../require_post_method.php';


// Parse POST info
require_once 'simplehelp_machine_model.php';


// Default
$insert_id = false;

if (!empty($machine_id)) {
    // Insert into Database
    $insert_sql = mysqli_query($mysqli, "INSERT INTO asset_simplehelp_machines SET  machine_id = '$machine_id',  online = '$online',  name = '$name',  state = '$state',  protocol = '$protocol',  lastRegistrationTime = '$lastRegistrationTime',  sessionCount = '$sessionCount',  monitoringEnabled = '$monitoringEnabled',  hasLoggedInUser = '$hasLoggedInUser',  consoleUser = '$consoleUser',  os = '$os',  hostname = '$hostname',  domain = '$domain',  wan_ip = '$wan_ip',  build = '$build',  uptime_ms = '$uptime_ms',  total_memory = '$total_memory',  model_name = '$model_name',  model_identifier = '$model_identifier',  manufacture = '$manufacture',  serial = '$serial',  ecc_memory = '$ecc_memory',  asset_id = '$asset_id'");

    if ($insert_sql) {
        $insert_id = mysqli_insert_id($mysqli);

        //Logging
        mysqli_query($mysqli, "INSERT INTO logs SET log_type = 'Asset_Simplehelp', log_action = 'Created', log_description = '$name via API ($api_key_name)', log_ip = '$ip', log_user_agent = '$user_agent', log_client_id = '$client_id'");
        mysqli_query($mysqli, "INSERT INTO logs SET log_type = 'API', log_action = 'Success', log_description = 'Created simplehelp machine $name via API ($api_key_name)', log_ip = '$ip', log_user_agent = '$user_agent', log_client_id = '$client_id'");
    }
}

// Output
require_once '../create_output.php';

