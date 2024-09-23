<?php
session_start();


if (!isset($_SESSION["user"])) {
    header("Location: /login.php");
    exit;
}

if (!isset($_SESSION["room_list"])) {
    $_SESSION["room_list"] = [];
}

$detail = [
    "name" => "Atma Kitchen",
    "tagline" => "Restaurant & Bar",
    "page_title" => "Atma Kitchen Restaurant & Co",
    "logo" => "./assets/images/HatCook.png",
    "user" => "nama/npm"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaRuangan = $_POST["namaRuanganInput"];
    $deskripsiRuangan = $_POST["deskripsiRuanganInput"];
    $tipeRuangan = $_POST["tipeRuanganInput"];
    $hargaRuangan = $_POST["hargaRuanganInput"];
    
    if($tipeRuangan === "Reguler"){
        $fotoRuangan = "./assets/images/regular.jpg";
    }else if($tipeRuangan === "Bar"){
        $fotoRuangan = "./assets/images/bar.jpg";
    }else if($tipeRuangan === "VIP"){
        $fotoRuangan = "./assets/images/vip.jpg";
    }else{
        $fotoRuangan = "./assets/images/vvip.jpg";
    }

    $fotoRuanganUrl = $_SERVER['DOCUMENT_ROOT'] . $fotoRuangan;

    $_SESSION["room_list"][] = [
        "namaRuangan" => $namaRuangan,
        "deskripsiRuangan" => $deskripsiRuangan,
        "tipeRuangan" => $tipeRuangan,
        "hargaRuangan" => $hargaRuangan,
        "fotoRuangan" => $fotoRuangan
    ];

    $_SESSION["tambah"] += 1;

    $_SESSION["success"] = "Ruangan berhasil ditambahkan!";

    header("Location: dashboard.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $detail["page_title"]; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo $detail["logo"]; ?>" type="image/x-icon" />
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="./assets/css/poppins.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css" />
  <style>
    .img-bukti-ngantor {
      width: 100%;
      aspect-ratio: 1 / 1;
      object-fit: cover;
    }
  </style>
</head>
<body>
<header class="fixed-top scrolled" id="navbar">
    <nav class="container nav-top py-2">
        <a href="./" class="rounded py-2 px-3 d-flex align-items-center nav-home-btn" style="background-color: #EE4D2D;">
            <img src="<?php echo $detail['logo']; ?>" class="crown-logo" />
            <div>
                <p class="mb-0 fs-5 fw-bold text-"><?php echo $detail['name']; ?></p>
                <p class="small mb-0 text-white"><?php echo $detail['tagline']; ?></p>
            </div>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="./" class="nav-link" style="color: #EE4D2D;">Home</a>
            </li>
            <li class="nav-item ms-3">
                <a href="#" class="nav-link active" style="background-color: #EE4D2D;" aria-current="page">Admin Panel</a>
            </li>
            <li class="nav-item">
                <a href="./processLogout.php" class="nav-link text-danger">Logout</a>
            </li>
        </ul>
    </nav>
</header>

<main style="padding-top: 84px;" class="container">
  <h1 class="mt-5 mb-3 border-bottom fw-bold">Tambah Ruangan</h1>
  <!-- $_Session untuk menyimpan error dari form yang disubmit-->
  <?php if (isset($_SESSION["success"])) { ?>
    <div class="alert alert-success mb-4 text-start" role="alert">
      <strong>Berhasil!</strong> <?php echo $_SESSION["success"]; ?>
    </div>
  <?php
    unset($_SESSION["success"]); //hapus error dari session
} ?>
  
  <form action="addRoom.php"  method="POST" id="addRoomForm">
  <div class="row align-items-center">
    <div class="col-4 mb-3">
        <label for="namaRuanganInput" class="col-form-label">Nama Ruangan</label>
    </div>
    <div class="col-8 mb-3">
        <input type="text" id="namaRuanganInput" name="namaRuanganInput" class="form-control" placeholder="Nama Ruangan" required>
    </div>
    <div class="col-4 mb-3">
        <label for="deskripsiRuanganInput" class="col-form-label">Deskripsi Ruangan</label>
    </div>
    <div class="col-8 mb-3">
        <textarea id="deskripsiRuanganInput" name="deskripsiRuanganInput" class="form-control" rows="3" placeholder="Deskripsi Ruangan" required></textarea>
    </div>
    <div class="col-4 mb-3">
        <label for="tipeRuanganInput" class="col-form-label">Tipe Ruangan</label>
    </div>
    <div class="col-8 mb-3">
        <select id="tipeRuanganInput" name="tipeRuanganInput" class="form-select" required>
            <option selected disabled value="">Pilih Ruangan</option>
            <option value="Bar">Bar</option>
            <option value="VIP">VIP</option>
            <option value="VVIP">VVIP</option>
            <option value="Reguler">Reguler</option>
        </select>
    </div>
    <div class="col-4 mb-3">
        <label for="hargaRuanganInput" class="col-form-label">Harga Ruangan</label>
    </div>
    <div class="col-8 mb-3">
        <input type="number" id="hargaRuanganInput" name="hargaRuanganInput" class="form-control" placeholder="Harga Ruangan" step="100000" required>
    </div>
  </div>
  <button class="btn btn-success mt-3" type="submit" style="background-color: #EE4D2D; border: 1px solid #EE4D2D; font-size:18px">
  <span><img src="<?php echo './assets/images/saveIcon.png'; ?>" alt="Simpan Ruangan" width="25" height="25" /></span>
    Simpan 
  </button>
 
  </form>
</main>
<!-- Bootstrap 5.3 JS -->
<script src="./assets/js/bootstrap.min.js"></script>

</body>
</html>