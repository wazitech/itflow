<?php

// Variable assignment from POST (or: blank/from DB is updating)
// For machine_id
if (isset($_POST['machine_id'])) {
    $machine_id = sanitizeInput($_POST['machine_id']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['machine_id'])) {
    $machine_id = $asset_simplehelp_machine_row['machine_id'];
} else {
    $machine_id = '';
}

// For online
if (isset($_POST['online'])) {
    $online = sanitizeInput($_POST['online']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['online'])) {
    $online = $asset_simplehelp_machine_row['online'];
} else {
    $online = '';
}

// For name
if (isset($_POST['name'])) {
    $name = sanitizeInput($_POST['name']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['name'])) {
    $name = $asset_simplehelp_machine_row['name'];
} else {
    $name = '';
}

// For state
if (isset($_POST['state'])) {
    $state = sanitizeInput($_POST['state']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['state'])) {
    $state = $asset_simplehelp_machine_row['state'];
} else {
    $state = '';
}

// For protocol
if (isset($_POST['protocol'])) {
    $protocol = sanitizeInput($_POST['protocol']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['protocol'])) {
    $protocol = $asset_simplehelp_machine_row['protocol'];
} else {
    $protocol = '';
}

// For lastRegistrationTime
if (isset($_POST['lastRegistrationTime'])) {
    $lastRegistrationTime = sanitizeInput($_POST['lastRegistrationTime']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['lastRegistrationTime'])) {
    $lastRegistrationTime = $asset_simplehelp_machine_row['lastRegistrationTime'];
} else {
    $lastRegistrationTime = '';
}

// For sessionCount
if (isset($_POST['sessionCount'])) {
    $sessionCount = sanitizeInput($_POST['sessionCount']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['sessionCount'])) {
    $sessionCount = $asset_simplehelp_machine_row['sessionCount'];
} else {
    $sessionCount = '';
}

// For monitoringEnabled
if (isset($_POST['monitoringEnabled'])) {
    $monitoringEnabled = sanitizeInput($_POST['monitoringEnabled']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['monitoringEnabled'])) {
    $monitoringEnabled = $asset_simplehelp_machine_row['monitoringEnabled'];
} else {
    $monitoringEnabled = '';
}

// For hasLoggedInUser
if (isset($_POST['hasLoggedInUser'])) {
    $hasLoggedInUser = sanitizeInput($_POST['hasLoggedInUser']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['hasLoggedInUser'])) {
    $hasLoggedInUser = $asset_simplehelp_machine_row['hasLoggedInUser'];
} else {
    $hasLoggedInUser = '';
}

// For consoleUser
if (isset($_POST['consoleUser'])) {
    $consoleUser = sanitizeInput($_POST['consoleUser']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['consoleUser'])) {
    $consoleUser = $asset_simplehelp_machine_row['consoleUser'];
} else {
    $consoleUser = '';
}

// For os
if (isset($_POST['os'])) {
    $os = sanitizeInput($_POST['os']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['os'])) {
    $os = $asset_simplehelp_machine_row['os'];
} else {
    $os = '';
}

// For hostname
if (isset($_POST['hostname'])) {
    $hostname = sanitizeInput($_POST['hostname']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['hostname'])) {
    $hostname = $asset_simplehelp_machine_row['hostname'];
} else {
    $hostname = '';
}

// For domain
if (isset($_POST['domain'])) {
    $domain = sanitizeInput($_POST['domain']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['domain'])) {
    $domain = $asset_simplehelp_machine_row['domain'];
} else {
    $domain = '';
}

// For wan_ip
if (isset($_POST['wan_ip'])) {
    $wan_ip = sanitizeInput($_POST['wan_ip']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['wan_ip'])) {
    $wan_ip = $asset_simplehelp_machine_row['wan_ip'];
} else {
    $wan_ip = '';
}

// For build
if (isset($_POST['build'])) {
    $build = sanitizeInput($_POST['build']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['build'])) {
    $build = $asset_simplehelp_machine_row['build'];
} else {
    $build = '';
}

// For uptime_ms
if (isset($_POST['uptime_ms'])) {
    $uptime_ms = sanitizeInput($_POST['uptime_ms']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['uptime_ms'])) {
    $uptime_ms = $asset_simplehelp_machine_row['uptime_ms'];
} else {
    $uptime_ms = '';
}

// For total_memory
if (isset($_POST['total_memory'])) {
    $total_memory = sanitizeInput($_POST['total_memory']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['total_memory'])) {
    $total_memory = $asset_simplehelp_machine_row['total_memory'];
} else {
    $total_memory = '';
}

// For model_name
if (isset($_POST['model_name'])) {
    $model_name = sanitizeInput($_POST['model_name']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['model_name'])) {
    $model_name = $asset_simplehelp_machine_row['model_name'];
} else {
    $model_name = '';
}

// For model_identifier
if (isset($_POST['model_identifier'])) {
    $model_identifier = sanitizeInput($_POST['model_identifier']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['model_identifier'])) {
    $model_identifier = $asset_simplehelp_machine_row['model_identifier'];
} else {
    $model_identifier = '';
}

// For manufacture
if (isset($_POST['manufacture'])) {
    $manufacture = sanitizeInput($_POST['manufacture']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['manufacture'])) {
    $manufacture = $asset_simplehelp_machine_row['manufacture'];
} else {
    $manufacture = '';
}

// For serial
if (isset($_POST['serial'])) {
    $serial = sanitizeInput($_POST['serial']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['serial'])) {
    $serial = $asset_simplehelp_machine_row['serial'];
} else {
    $serial = '';
}

// For ecc_memory
if (isset($_POST['ecc_memory'])) {
    $ecc_memory = sanitizeInput($_POST['ecc_memory']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['ecc_memory'])) {
    $ecc_memory = $asset_simplehelp_machine_row['ecc_memory'];
} else {
    $ecc_memory = '';
}

// For asset_id
if (isset($_POST['asset_id'])) {
    $asset_id = sanitizeInput($_POST['asset_id']);
} elseif (isset($asset_simplehelp_machine_row) && isset($asset_simplehelp_machine_row['asset_id'])) {
    $asset_id = $asset_simplehelp_machine_row['asset_id'];
} else {
    $asset_id = '';
}
