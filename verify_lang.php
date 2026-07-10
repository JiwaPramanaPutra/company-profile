<?php

function flatten($array, $prefix = '') {
    $result = [];
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, flatten($value, $prefix . $key . '.'));
        } else {
            $result[$prefix . $key] = $value;
        }
    }
    return $result;
}

$files = ['home.php', 'footer.php', 'navbar.php'];

foreach ($files as $file) {
    echo "\n=== Verifying $file ===\n";
    $en = flatten(require __DIR__ . '/lang/en/' . $file);
    $id = flatten(require __DIR__ . '/lang/id/' . $file);
    
    $enKeys = array_keys($en);
    $idKeys = array_keys($id);
    
    $missingInId = array_diff($enKeys, $idKeys);
    $missingInEn = array_diff($idKeys, $enKeys);
    
    if (empty($missingInId) && empty($missingInEn)) {
        echo "Parity: 100% (Keys match exactly)\n";
    } else {
        if (!empty($missingInId)) {
            echo "Missing in ID: " . implode(', ', $missingInId) . "\n";
        }
        if (!empty($missingInEn)) {
            echo "Missing in EN: " . implode(', ', $missingInEn) . "\n";
        }
    }
}
