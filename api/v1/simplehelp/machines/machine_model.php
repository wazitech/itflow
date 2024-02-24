<?php

// Variable assignment from POST (or: blank/from DB is updating)
// For machine_id
if (isset($_POST['machine_id'])) {
    $machine_id = sanitizeInput($_POST['machine_id']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['machine_id'])) {
    $machine_id = $simplehelp_machines_row['machine_id'];
} else {
    $machine_id = '';
}

// For online
if (isset($_POST['online'])) {
    $online = sanitizeInput($_POST['online']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['online'])) {
    $online = $simplehelp_machines_row['online'];
} else {
    $online = '';
}

// For name
if (isset($_POST['name'])) {
    $name = sanitizeInput($_POST['name']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['name'])) {
    $name = $simplehelp_machines_row['name'];
} else {
    $name = '';
}

// For state
if (isset($_POST['state'])) {
    $state = sanitizeInput($_POST['state']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['state'])) {
    $state = $simplehelp_machines_row['state'];
} else {
    $state = '';
}

// For protocol
if (isset($_POST['protocol'])) {
    $protocol = sanitizeInput($_POST['protocol']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['protocol'])) {
    $protocol = $simplehelp_machines_row['protocol'];
} else {
    $protocol = '';
}

// For lastRegistrationTime
if (isset($_POST['lastRegistrationTime'])) {
    $lastRegistrationTime = sanitizeInput($_POST['lastRegistrationTime']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['lastRegistrationTime'])) {
    $lastRegistrationTime = $simplehelp_machines_row['lastRegistrationTime'];
} else {
    $lastRegistrationTime = '';
}

// For sessionCount
if (isset($_POST['sessionCount'])) {
    $sessionCount = sanitizeInput($_POST['sessionCount']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['sessionCount'])) {
    $sessionCount = $simplehelp_machines_row['sessionCount'];
} else {
    $sessionCount = '';
}

// For monitoringEnabled
if (isset($_POST['monitoringEnabled'])) {
    $monitoringEnabled = sanitizeInput($_POST['monitoringEnabled']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['monitoringEnabled'])) {
    $monitoringEnabled = $simplehelp_machines_row['monitoringEnabled'];
} else {
    $monitoringEnabled = '';
}

// For hasLoggedInUser
if (isset($_POST['hasLoggedInUser'])) {
    $hasLoggedInUser = sanitizeInput($_POST['hasLoggedInUser']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['hasLoggedInUser'])) {
    $hasLoggedInUser = $simplehelp_machines_row['hasLoggedInUser'];
} else {
    $hasLoggedInUser = '';
}

// For consoleUser
if (isset($_POST['consoleUser'])) {
    $consoleUser = sanitizeInput($_POST['consoleUser']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['consoleUser'])) {
    $consoleUser = $simplehelp_machines_row['consoleUser'];
} else {
    $consoleUser = '';
}

// For os
if (isset($_POST['os'])) {
    $os = sanitizeInput($_POST['os']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['os'])) {
    $os = $simplehelp_machines_row['os'];
} else {
    $os = '';
}

// For hostname
if (isset($_POST['hostname'])) {
    $hostname = sanitizeInput($_POST['hostname']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['hostname'])) {
    $hostname = $simplehelp_machines_row['hostname'];
} else {
    $hostname = '';
}

// For domain
if (isset($_POST['domain'])) {
    $domain = sanitizeInput($_POST['domain']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['domain'])) {
    $domain = $simplehelp_machines_row['domain'];
} else {
    $domain = '';
}

// For wan_ip
if (isset($_POST['wan_ip'])) {
    $wan_ip = sanitizeInput($_POST['wan_ip']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['wan_ip'])) {
    $wan_ip = $simplehelp_machines_row['wan_ip'];
} else {
    $wan_ip = '';
}

// For build
if (isset($_POST['build'])) {
    $build = sanitizeInput($_POST['build']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['build'])) {
    $build = $simplehelp_machines_row['build'];
} else {
    $build = '';
}

// For uptime_ms
if (isset($_POST['uptime_ms'])) {
    $uptime_ms = sanitizeInput($_POST['uptime_ms']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['uptime_ms'])) {
    $uptime_ms = $simplehelp_machines_row['uptime_ms'];
} else {
    $uptime_ms = '';
}

// For total_memory
if (isset($_POST['total_memory'])) {
    $total_memory = sanitizeInput($_POST['total_memory']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['total_memory'])) {
    $total_memory = $simplehelp_machines_row['total_memory'];
} else {
    $total_memory = '';
}

// For model_name
if (isset($_POST['model_name'])) {
    $model_name = sanitizeInput($_POST['model_name']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['model_name'])) {
    $model_name = $simplehelp_machines_row['model_name'];
} else {
    $model_name = '';
}

// For model_identifier
if (isset($_POST['model_identifier'])) {
    $model_identifier = sanitizeInput($_POST['model_identifier']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['model_identifier'])) {
    $model_identifier = $simplehelp_machines_row['model_identifier'];
} else {
    $model_identifier = '';
}

// For manufacture
if (isset($_POST['manufacture'])) {
    $manufacture = sanitizeInput($_POST['manufacture']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['manufacture'])) {
    $manufacture = $simplehelp_machines_row['manufacture'];
} else {
    $manufacture = '';
}

// For serial
if (isset($_POST['serial'])) {
    $serial = sanitizeInput($_POST['serial']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['serial'])) {
    $serial = $simplehelp_machines_row['serial'];
} else {
    $serial = '';
}

// For ecc_memory
if (isset($_POST['ecc_memory'])) {
    $ecc_memory = sanitizeInput($_POST['ecc_memory']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['ecc_memory'])) {
    $ecc_memory = $simplehelp_machines_row['ecc_memory'];
} else {
    $ecc_memory = '';
}

// For asset_id
if (isset($_POST['asset_id'])) {
    $asset_id = sanitizeInput($_POST['asset_id']);
} elseif (isset($simplehelp_machines_row) && isset($simplehelp_machines_row['asset_id'])) {
    $asset_id = $simplehelp_machines_row['asset_id'];
} else {
    $asset_id = '';
}
