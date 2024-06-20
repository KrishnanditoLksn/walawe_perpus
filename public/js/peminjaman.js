document.addEventListener('DOMContentLoaded', function() {
    let form = document.getElementById('form-pinjam');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const judul = document.querySelector('select[name="Judul"]').value;
        const namaPeminjam = document.querySelector('input[name="nama-peminjam"]').value;
        const noTelpon = document.querySelector('input[name="no-telpon-peminjam"]').value;
        const email = document.querySelector('input[name="email"]').value;
        const tanggalPeminjam = document.querySelector('input[name="tanggal-peminjam"]').value;

        // Validasi semua kolom harus diisi
        if (judul === 'kategori' || namaPeminjam === '' || noTelpon === '' || email === '' || tanggalPeminjam === '') {
            alert('Semua kolom harus diisi');
            return;
        }

        // Submit form jika validasi berhasil
        form.submit();
    });
});