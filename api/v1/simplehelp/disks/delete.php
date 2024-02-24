<?php
require_once '../../validate_api_key.php';


require_once '../../require_post_method.php';


// Parse ID
$machine_id = strval($_POST['$machine_id']);

// Default
$delete_count = false;

if (!empty($machine_id)) {
    $row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM simplehelp_disks WHERE machine_id = $machine_id AND device_name = $device_name LIMIT 1"));
    $disk_name = $row['device_name'];

    $delete_sql = mysqli_query($mysqli, "DELETE FROM simplehelp_disks WHERE machine_id = $machine_id AND device_name = $device_name LIMIT 1");

    // Check delete & get affected rows
    if ($delete_sql && !empty($machine_name)) {
        $delete_count = mysqli_affected_rows($mysqli);

        //Logging
        mysqli_query($mysqli, "INSERT INTO logs SET log_type = 'simplehelp_machines', log_action = 'Deleted', log_description = '$disk_name deleted from $machine_name via API ($api_key_name)', log_ip = '$ip', log_user_agent = '$user_agent', log_client_id = $client_id");
    }
}

// Output
require_once '../../delete_output.php';

