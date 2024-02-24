<?php

require_once '../../validate_api_key.php';

require_once '../../require_post_method.php';


// Parse POST info
require_once './disk_model.php';


// Default
$insert_id = false;

if (!empty($machine_id)) {
    // Insert into Database
    $insert_sql = mysqli_query($mysqli, "INSERT INTO simplehelp_disks SET  device_name = '$device_name',  media_name = '$media_name',  capacity = '$capacity',  type = '$type',  protocol = '$protocol',  internal = '$internal',  simplehelp_disks_simplehelp_machine_id = '$machine_id'");

    if ($insert_sql) {
        $insert_id = mysqli_insert_id($mysqli);

        //Logging
        mysqli_query($mysqli, "INSERT INTO logs SET log_type = 'simplehelp_machines', log_action = 'Created', log_description = '$device_name via API ($api_key_name)', log_ip = '$ip', log_user_agent = '$user_agent', log_client_id = '$client_id'");
        mysqli_query($mysqli, "INSERT INTO logs SET log_type = 'API', log_action = 'Success', log_description = 'Added Disk $device_name to simplehelp machine $machine_id via API ($api_key_name)', log_ip = '$ip', log_user_agent = '$user_agent', log_client_id = '$client_id'");
    }
}

// Output
require_once '../../create_output.php';

