<?php

// Variable assignment from POST (or: blank/from DB is updating)

// For device_name
if (isset($_POST['device_name'])) {
    $device_name = sanitizeInput($_POST['device_name']);
} elseif (isset($simplehelp_disk_row) && isset($simplehelp_disk_row['device_name'])) {
    $device_name = $simplehelp_disk_row['device_name'];
} else {
    $device_name = '';
}

// For media_name
if (isset($_POST['media_name'])) {
    $media_name = sanitizeInput($_POST['media_name']);
} elseif (isset($simplehelp_disk_row) && isset($simplehelp_disk_row['media_name'])) {
    $media_name = $simplehelp_disk_row['media_name'];
} else {
    $media_name = '';
}

// For capacity
if (isset($_POST['capacity'])) {
    $capacity = sanitizeInput($_POST['capacity']);
} elseif (isset($simplehelp_disk_row) && isset($simplehelp_disk_row['capacity'])) {
    $capacity = $simplehelp_disk_row['capacity'];
} else {
    $capacity = '';
}

// For type
if (isset($_POST['type'])) {
    $type = sanitizeInput($_POST['type']);
} elseif (isset($simplehelp_disk_row) && isset($simplehelp_disk_row['type'])) {
    $type = $simplehelp_disk_row['type'];
} else {
    $type = '';
}

// For protocol
if (isset($_POST['protocol'])) {
    $protocol = sanitizeInput($_POST['protocol']);
} elseif (isset($simplehelp_disk_row) && isset($simplehelp_disk_row['protocol'])) {
    $protocol = $simplehelp_disk_row['protocol'];
} else {
    $protocol = '';
}

// For internal
if (isset($_POST['internal'])) {
    $internal = sanitizeInput($_POST['internal']);
} elseif (isset($simplehelp_disk_row) && isset($simplehelp_disk_row['internal'])) {
    $internal = $simplehelp_disk_row['internal'];
} else {
    $internal = '';
}

// For machine_id
if (isset($_POST['machine_id'])) {
    $machine_id = sanitizeInput($_POST['machine_id']);
} elseif (isset($simplehelp_disk_row) && isset($simplehelp_disk_row['machine_id'])) {
    $machine_id = $simplehelp_disk_row['machine_id'];
} else {
    $machine_id = '';
}