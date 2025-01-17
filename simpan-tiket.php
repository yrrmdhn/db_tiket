<?php
$kodeTiket = $_POST['kodeTiket'];
$kodePesawat = $_POST['kodePesawat'];
$namaPembeli = $_POST['namaPembeli'];
$berangkat = $_POST['berangkat'];
$tujuan = $_POST['tujuan'];
$tglBerangkat = $_POST['tglBerangkat'];
$waktuBerangkat = $_POST['waktuBerangkat'];
$waktuSampai = $_POST['waktuSampai'];
$harga = $_POST['harga'];
$noKursi = $_POST['noKursi'];
$kelas = $_POST['kelas'];
$total = $harga; // Assuming total is the same as harga

// Validate input (optional, but recommended)
if (empty($kodeTiket) || empty($kodePesawat) || empty($namaPembeli)) {
    die("Error: Required fields are missing.");
}

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO tiket 
    (`kodeTiket`, `kodePesawat`, `namaPembeli`, `berangkat`, `tujuan`, `tglBerangkat`, `waktuBerangkat`, `waktuSampai`, `harga`, `noKursi`, `kelas`, `total`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param(
    "", 
    $kodeTiket, 
    $kodePesawat, 
    $namaPembeli, 
    $berangkat, 
    $tujuan, 
    $tglBerangkat, 
    $waktuBerangkat, 
    $waktuSampai, 
    $harga, 
    $noKursi, 
    $kelas, 
    $total
);

// Execute query and check for errors
if ($stmt->execute()) {
    echo "Data successfully inserted.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
