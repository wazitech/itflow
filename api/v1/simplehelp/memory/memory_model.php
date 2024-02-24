<?php

// Variable assignment from POST (or: blank/from DB is updating)
// For capacity
if (isset($_POST['capacity'])) {
    $capacity = sanitizeInput($_POST['capacity']);
} elseif (isset($simplehelp_memory_row) && isset($simplehelp_memory_row['capacity'])) {
    $capacity = $simplehelp_memory_row['capacity'];
} else {
    $capacity = '';
}

// For type
if (isset($_POST['type'])) {
    $type = sanitizeInput($_POST['type']);
} elseif (isset($simplehelp_memory_row) && isset($simplehelp_memory_row['type'])) {
    $type = $simplehelp_memory_row['type'];
} else {
    $type = '';
}

// For speedhz
if (isset($_POST['speedhz'])) {
    $speedhz = sanitizeInput($_POST['speedhz']);
} elseif (isset($simplehelp_memory_row) && isset($simplehelp_memory_row['speedhz'])) {
    $speedhz = $simplehelp_memory_row['speedhz'];
} else {
    $speedhz = '';
}

// For machine_id
if (isset($_POST['_machine_id'])) {
    $machine_id = sanitizeInput($_POST['machine_id']);
} elseif (isset($simplehelp_memory_row) && isset($simplehelp_memory_row['machine_id'])) {
    $machine_id = $simplehelp_memory_row['machine_id'];
} else {
    $machine_id = '';
}