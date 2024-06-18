let btnSubmit = document.querySelector('button[name="btn-submit"]');

btnSubmit.addEventListener('click', function(event) {
    event.preventDefault();


    const judul = document.querySelector('input[name="nama-peminjam"]').value;
    const Isbn = document.querySelector('input[name="no-telpon-peminjam"]').value;
    const penulis = document.querySelector('input[name="email"]').value;
    const tahunTerbit = document.querySelector('input[name="judul-buku"]').value;
    const Publisher = document.querySelector('input[name="tanggal-peminjam"]').value;


    if ((judul == '' || Isbn == '' || penulis == '' || tahunTerbit == '' || Publisher == '') || kategori == 'kategori') {
        alert('Semua kolom harus diisi');
    } else {
        document.getElementById('form-home').submit();
    }
});