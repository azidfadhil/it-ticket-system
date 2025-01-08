$(document).ready(function() {
  /**
   * Data Table
   */
  if ($('.data-table').length !== 0) {
    $('.data-table').dataTable({
      'paging': false,
      'searching': false,
      'ordering': false,
      'info': false,
      'lengthChange': false,
      'autoWidth': false,
      'responsive': true,
    })
  }

  /**
   * Button Lock Data
   */
  $(document).on('click', '.btn-lock', function() {
    const id = $(this).data('id')
    const status = $(this).data('status')
    
    swal.fire({
      icon: 'warning',
      title: 'Menonaktifkan Kategori Tiket?',
      text: 'Apakah Anda yakin ingin menonaktifkan kategori tiket?',
      confirmButtonText: 'Yakin!',
      confirmButtonColor: '#dc3545',
      showCancelButton: true,
      cancelButtonText: 'Tidak',
      cancelButtonColor: '#6c757d',
      reverseButtons: true,
    }).then((response) => {
      if (response.isConfirmed) {
        $.ajax({
          url: baseUrl + 'admin/datamaster/changeStatusData?id=' + id + '&status=' + status,
          type: 'POST',
          beforeSend: () => {
            swal.fire({
              title: 'Mohon Tunggu...',
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
                timer: 1500,
                timerProgressBar: true,
                allowOutsideClick: false,
                showConfirmButton: false,
              })
            } else {
              swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: response.message,
                timer: 1500,
                timerProgressBar: true,
                allowOutsideClick: false,
                showConfirmButton: false,
              }).then(() => {
                window.location.href = baseUrl + 'admin/datamaster'
              })
            }
          }
        })
      }
    })
  })

  /**
   * Jika berada di page tambah kategori tiket
   */
  if ($('#formTambahKategoriTiket').length !== 0) {
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
    $('#formTambahKategoriTiket').on('submit', function(e) {
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
            title: 'Mohon Tunggu...',
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
              timer: 1500,
              timerProgressBar: true,
              allowOutsideClick: false,
              showConfirmButton: false,
            })
          } else {
            swal.fire({
              icon: 'success',
              title: 'Berhasil',
              text: response.message,
              timer: 1500,
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