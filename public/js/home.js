let btnSubmit = document.querySelector('button[name="btn-submit"]');

btnSubmit.addEventListener('click', function(event) {
    event.preventDefault();


    const judul = document.querySelector('input[name="judul"]').value;
    const Isbn = document.querySelector('input[name="isbn"]').value;
    const penulis = document.querySelector('input[name="penulis"]').value;
    const tahunTerbit = document.querySelector('input[name="tahunTerbit"]').value;
    const Publisher = document.querySelector('input[name="publisher"]').value;
    const kategori = document.querySelector('select[name="kategori"]').value;


    if ((judul == '' || Isbn == '' || penulis == '' || tahunTerbit == '' || Publisher == '') || kategori == 'kategori') {
        alert('Semua kolom harus diisi');
    }
    if (isNaN(tahunTerbit) || tahunTerbit.length !== 4) {
        alert('tahun terbit harus angka dengan jumlah 4 digit');
    }
    if (isNaN(Isbn)) {
        alert('ISBN Harus angka');
    } else {
        document.getElementById('form-home').submit();
    }
});