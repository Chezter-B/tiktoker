<?php
// เช็คว่าได้รับข้อมูลพิกัดจาก POST หรือไม่
if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // สร้างข้อความที่บันทึก
    $location_data = "Latitude: $latitude, Longitude: $longitude\n";
    
    // กำหนดไฟล์ที่จะเก็บข้อมูล
    $file = 'locations.txt';
    
    // เปิดไฟล์เพื่อเขียนข้อมูล
    file_put_contents($file, $location_data, FILE_APPEND);
    
    // ส่งการตอบกลับสำเร็จ
    echo "พิกัดถูกบันทึกเรียบร้อยแล้ว";
}
?>
