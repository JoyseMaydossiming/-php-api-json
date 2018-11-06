<?php 
$conn = mysqli_connect("localhost","root","","php-api");
// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $box = [];
        while ($data = mysqli_fetch_assoc($result)) {
            $box[] = $data;
        }
        return $box;
    }
$students = query("SELECT * FROM users");   
?>