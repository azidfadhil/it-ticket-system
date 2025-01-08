$(document).ready(function() {
  var formTambahKategoriTiket = $('#formTambahKategoriTiket')

  /**
   * Jika berada di page tambah kategori tiker
   */
  if (formTambahKategoriTiket.length !== 0) {
    const kategoriTiket = $('#eNamaKatTiket')
    const checkAvailability = $('.check-availability')
    const buttonSubmit = $('.btn-submit')

    checkAvailability.html(`Cek Data: Masukkan nama ketegori tiket terlebih dahulu.`)
    kategoriTiket.on('change', function() {
      checkAvailability.html(`Cek Data: <div class="spinner-border spinner-border-sm ml-2" role="status"></div>`)
      $.ajax({
        url: baseUrl + 'admin/datamaster/checkavailability?type=kategori_tiket',
        type: 'POST',
        data: { data: kategoriTiket.val() },
        success: function(response) {
          if (!response.status) {
            checkAvailability.html(`Cek Data: <span class="text-danger ml-1">${response.message} <i class="far fa-fw fa-times-circle mr-1"></i></span>`)
            buttonSubmit.attr('disabled', true)
          } else {
            checkAvailability.html(`Cek Data: <span class="text-success ml-1">${response.message} <i class="far fa-fw fa-check-circle mr-1"></i></span>`)
            buttonSubmit.attr('disabled', false)
          }
        }
      })
    })
    formTambahKategoriTiket.on('submit', function(e) {
      e.preventDefault()
      var formData = new FormData(this)

      $.ajax({
        url: baseUrl + 'admin/datamaster/savedata?type=kategori_tiket',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: () => {
          swal.fire({
            title: 'Mengirim data...',
            allowOutsideClick: false,
            didOpen: () => {
              swal.showLoading()
            }
          })
        },
        success: function(response) {
          if (!response.status) {
            swal.fire({
              icon: 'error',
              title: 'Error',
              text: response.message,
              timer: 2000,
              timerProgressBar: true,
              allowOutsideClick: false,
              showConfirmButton: false,
            })
          } else {
            swal.fire({
              icon: 'success',
              title: 'Berhasil',
              text: response.message,
              timer: 2000,
              timerProgressBar: true,
              allowOutsideClick: false,
              showConfirmButton: false,
            }).then(() => {
              window.location.href = baseUrl + 'admin/datamaster'
            })
          }
        }
      })
    })
  }
})