<?php

// Variable assignment from POST (or: blank/from DB is updating)
// For name
if (isset($_POST['name'])) {
    $name = sanitizeInput($_POST['name']);
} elseif (isset($simplehelp_ipaddress_row) && isset($simplehelp_ipaddress_row['name'])) {
    $name = $simplehelp_ipaddress_row['name'];
} else {
    $name = '';
}

// For ip
if (isset($_POST['ip'])) {
    $ip = sanitizeInput($_POST['ip']);
} elseif (isset($simplehelp_ipaddress_row) && isset($simplehelp_ipaddress_row['ip'])) {
    $ip = $simplehelp_ipaddress_row['ip'];
} else {
    $ip = '';
}

// For mac
if (isset($_POST['mac'])) {
    $mac = sanitizeInput($_POST['mac']);
} elseif (isset($simplehelp_ipaddress_row) && isset($simplehelp_ipaddress_row['mac'])) {
    $mac = $simplehelp_ipaddress_row['mac'];
} else {
    $mac = '';
}

// For simplehelp_machine_id
if (isset($_POST['simplehelp_machine_id'])) {
    $simplehelp_machine_id = sanitizeInput($_POST['simplehelp_machine_id']);
} elseif (isset($simplehelp_ipaddress_row) && isset($simplehelp_ipaddress_row['simplehelp_machine_id'])) {
    $simplehelp_machine_id = $simplehelp_ipaddress_row['simplehelp_machine_id'];
} else {
    $simplehelp_machine_id = '';
}