<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header -->
    <div class="header-teks">
        <h1>Absensi Kehadiran</h1>
        <p>silahkan isi absensinya</p>
    </div>

    <!-- absensi -->
    <section class="attendance-form">
        <h2>Absensi</h2>
        <form id="attendance-from">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" placeholder=" Masukan nama Anda" required>
            </div>
            <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="date" id="date" required>
            </div>
            <div class="form-grooup">
                <label for="status">Status</label>
                <select id="status">
                    <option value="hadir">Hadir</option>
                    <option value="izin">Izin</option>
                    <option value="alpa">Alpa</option>
                </select>
            </div>
            <button type="submid">Kirim</button>
        </form>
        
        <h3>Data absensi</h3>
        <table id="attendance-tabel">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Status kehadiran</th>
                </tr>
            </thead>
            <tbody>
                <!-- php -->
                <?php
                if (isset($_GET['name']) && isset($_GET['date']) && isset($_GET['status'])) {
                    $name = htmlspecialchars($_GET['name']);
                    $date = htmlspecialchars($_GET['date']);
                    $status = htmlspecialchars($_GET['status']);

                    echo "<tr><td>{$name}</td><td>{$date}</td><td>{$status}</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
    <script src="script.js"></script>
</body>
</html>