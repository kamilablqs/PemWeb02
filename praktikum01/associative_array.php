<?php
$profileArray = [
    "nama" => "Kamilla",
    "semester" => 2
];

echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";
echo "<br>";
$profileMultiArray = [
    [
        "nama" => "Kamilla",
        "semester" => 2
    ], [
        "nama" => "bilqis",
        "semester" => 4
    ]
];
foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}