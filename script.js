// pengiriman formulir absensi
document.getElementById('attendance-form').addEventListener('submit', function(event) {
    event.preventDefault();

//mengambil data dr formulir
    const name = document.getElementById('name').value;
    const date = document.getElementById('date').value;
    const status = document.getElementById('status').value;

// memasukan data ke tabel
    const table = document.getElementById('attendance-table').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow();
    newRow.innerHTML = `<td>${name}</td><td>${date}</td><td>${status}</td>`;

// Mereset formulir setelah pengiriman
    this.reset();


})