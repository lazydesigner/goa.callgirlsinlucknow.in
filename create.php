<!-- <?php

// $fileNames = ["escorts-in-hyatt-centric-candolim.php", "escorts-in-itc-grand-hotel.php", "escorts-in-tej-fort-aguada-resort.php", "escorts-in-taj-exotica-resort.php", "escorts-in-novotel-hotel.php"];
// $folderPath = "./hotels";

// foreach ($fileNames as $fileName) {
//     $filePath = $folderPath . DIRECTORY_SEPARATOR . $fileName;
    
//     if (touch($filePath)) {
//         echo "Created file: $fileName in $folderPath\n";
//     } else {
//         echo "Failed to create file: $fileName\n";
//     }
// }
?> -->

<?php

$hotelNames = [
    "escorts-in-hyatt-centric-candolim",
];

// Add ".php" at the end of each item
$updatedHotelNames = array_map(function($hotelName) {
    return $hotelName . ".php";
}, $hotelNames);


$fileNames = ["escorts-in-hyatt-centric-candolim.php", "escorts-in-itc-grand-hotel.php", "escorts-in-tej-fort-aguada-resort.php", "escorts-in-taj-exotica-resort.php", "escorts-in-novotel-hotel.php"];
$folderPath = "./hotels";

foreach ($updatedHotelNames as $fileName) {
    $filePath = $folderPath . DIRECTORY_SEPARATOR . $fileName;
    
    if (touch($filePath)) {
        echo "Created file: $fileName in $folderPath\n";
    } else {
        echo "Failed to create file: $fileName\n";
    }
}

?>
