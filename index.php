<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <input type="text" id="name" placeholder=" Masukan nama Anda">
            </div>
            <div class="form-group">
                <label for="date">Tanggal lahir</label>
                <input type="text" id="date" required>
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
    </section>
</body>
</html>