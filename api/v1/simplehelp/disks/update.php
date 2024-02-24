<?php

require_once '../../validate_api_key.php';

require_once '../../require_post_method.php';


// Parse ID
$machine_id = strval($_POST['machine_id']);

// Default
$update_count = false;

if (!empty($machine_id)) {

    $simplehelp_disk_row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM simplehelp_disks WHERE asset_id = '$machine_id' LIMIT 1"));

    // Variable assignment from POST - assigning the current database value if a value is not provided
    require_once './disk_model.php';


    $update_sql = mysqli_query($mysqli, "UPDATE simplehelp_disks SET device_name = '$device_name',  media_name = '$media_name',  capacity = '$capacity',  type = '$type',  protocol = '$protocol',  internal = '$internal',  simplehelp_disks_simplehelp_machine_id = '$machine_id' LIMIT 1");

    // Check insert & get insert ID
    if ($update_sql) {
        $update_count = mysqli_affected_rows($mysqli);

        //Logging
        mysqli_query($mysqli, "INSERT INTO logs SET log_type = 'simplehelp_machines', log_action = 'Updated', log_description = '$device_name add to $machine_id via API ($api_key_name)', log_ip = '$ip', log_user_agent = '$user_agent', log_client_id = $client_id");
        mysqli_query($mysqli, "INSERT INTO logs SET log_type = 'API', log_action = 'Success', log_description = 'Updated disk $device_name attached to Simplehelp machine $machine_id via API ($api_key_name)', log_ip = '$ip', log_user_agent = '$user_agent', log_client_id = $client_id");
    }
}

// Output
require_once '../../update_output.php';

