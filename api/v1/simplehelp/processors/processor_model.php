<?php

// Variable assignment from POST (or: blank/from DB is updating)
// For name
if (isset($_POST['name'])) {
    $name = sanitizeInput($_POST['name']);
} elseif (isset($simplehelp_processor_row) && isset($simplehelp_processor_row['name'])) {
    $name = $simplehelp_processor_row['name'];
} else {
    $name = '';
}

// For speed_hz
if (isset($_POST['speed_hz'])) {
    $speed_hz = sanitizeInput($_POST['speed_hz']);
} elseif (isset($simplehelp_processor_row) && isset($simplehelp_processor_row['speed_hz'])) {
    $speed_hz = $simplehelp_processor_row['speed_hz'];
} else {
    $speed_hz = '';
}

// For cores
if (isset($_POST['cores'])) {
    $cores = sanitizeInput($_POST['cores']);
} elseif (isset($simplehelp_processor_row) && isset($simplehelp_processor_row['cores'])) {
    $cores = $simplehelp_processor_row['cores'];
} else {
    $cores = '';
}

// For is64bit
if (isset($_POST['is64bit'])) {
    $is64bit = sanitizeInput($_POST['is64bit']);
} elseif (isset($simplehelp_processor_row) && isset($simplehelp_processor_row['is64bit'])) {
    $is64bit = $simplehelp_processor_row['is64bit'];
} else {
    $is64bit = '';
}

// For simplehelp_machine_id
if (isset($_POST['simplehelp_machine_id'])) {
    $simplehelp_machine_id = sanitizeInput($_POST['simplehelp_machine_id']);
} elseif (isset($simplehelp_processor_row) && isset($simplehelp_processor_row['simplehelp_machine_id'])) {
    $simplehelp_machine_id = $simplehelp_processor_row['simplehelp_machine_id'];
} else {
    $simplehelp_machine_id = '';
}