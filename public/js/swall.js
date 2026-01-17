document.addEventListener('DOMContentLoaded', () => {

    // ====== ALERT DARI SESSION ======
    const success = document.querySelector('meta[name="swal-success"]')?.content;
    const error   = document.querySelector('meta[name="swal-error"]')?.content;

    if (success) {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: success,
            timer: 2000,
            showConfirmButton: false
        });
    }

    if (error) {
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: error
        });
    }


// DELETE 
document.addEventListener('click', e => {
    const btn = e.target.closest('.btn-delete');
    if (!btn) return;

    e.preventDefault();

    Swal.fire({
        title: 'Hapus data?',
        text: 'Data tidak bisa dikembalikan.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
    }).then(r => r.isConfirmed && btn.closest('form').submit());
});

});
