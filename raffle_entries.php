<?php

$existingData = All(); //lets say this is the the exisitng data we have in database;

$newData = [];
$i = 'AAA';
foreach ($existingData as $item) {
    $new = $i . str_pad($item->id, 3, 0, STR_PAD_LEFT);
    if (!in_array($new, $newData)) { //we will check if the new data has already been created, if not we will proceed to next step, if yes, then will skip
        $newData[] = $new; //expecting that the 'i' is 'AAA' and the item->id is 1 then the result is AAA001 then will insert to newData array;
    }
    $i++; //this will increment the AAA to AAB
}
