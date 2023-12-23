<?php

function luasSegitiga($data){
    $result = [];
    foreach($data as $key => $value){
        $result[$key] = $value[0] * $value[1] * 0.5;
    }
    return $result;
}
$dataSegitiga = [
    [10,33],
    [20,33],
    [72,44],
    [88,44]
];
?>

<?php foreach(luasSegitiga($dataSegitiga) as $key => $value): $key = $key+1;?>
<div style="margin: 10px 0px;">
    <i><?= "Luas Segitiga Ke {$key} Adalah {$value} CM" ?></i>
</div>
<?php endforeach; ?>