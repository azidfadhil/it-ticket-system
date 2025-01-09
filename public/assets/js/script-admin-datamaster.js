$(document).ready(function() {
  /**
   * Data Table
   */
  if ($('.data-table').length !== 0) {
    $('.data-table').dataTable({
      'ordering': false,
      'lengthChange': false,
      'autoWidth': false,
      'responsive': true,
      'language': {
        'search': '',
        'zeroRecords': 'Tidak ada data ditemukan',
        'info': 'Menampilkan _START_ hingga _END_ dari _TOTAL_ data',
        'infoEmpty': 'Menampilkan 0 hingga 0 dari 0 data',
        'infoFiltered': '(disaring dari total _MAX_ data)',
        'paginate': {
          'previous': 'Sebelumnya',
          'next': 'Berikutnya',
        },
      },
      'initComplete': function() {
        $('.dataTables_filter').each(function() {
          $(this).addClass('mr-3')
          $('.dataTables_filter input').attr('placeholder', 'Cari data...')
        })

        $('.dataTables_paginate').each(function() {
          $(this).addClass('mr-3 mb-3')
        })
        
        $('.dataTables_info').each(function() {
          $(this).addClass('ml-3 mb-3')
        })
      }
    })
  }

  /**
   * Button Lock Data
   */
  $(document).on('click', '.btn-lock', function() {
    const id = $(this).data('id')
    const status = $(this).data('status')
    const type = $(this).data('type')
    const text = type == 'kategori_tiket' ? 'kategori tiket' 
    : type == 'divisi' ?? ''
    
    swal.fire({
      icon: 'warning',
      title: 'Menonaktifkan ' + text + '?',
      text: 'Apakah Anda yakin ingin menonaktifkan ' + text + '?',
      confirmButtonText: 'Yakin!',
      confirmButtonColor: '#dc3545',
      showCancelButton: true,
      cancelButtonText: 'Tidak',
      cancelButtonColor: '#6c757d',
      reverseButtons: true,
    }).then((response) => {
      if (response.isConfirmed) {
        $.ajax({
          url: baseUrl + 'admin/datamaster/changestatusdata?type=' + type + '&id=' + id + '&status=' + status,
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
      if (kategoriTiket.val() == '') {
        checkAvailability.html(`Cek Data: Masukkan nama ketegori tiket terlebih dahulu.`)
        buttonSubmit.attr('disabled', true)
      } else {
        buttonSubmit.attr('disabled', true)
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
      }
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

  /**
   * Jika berada di page edit kategori tiket
   */
  if ($('#formEditKategoriTiket').length !== 0) {
    const kategoriTiket = $('#eNamaKatTiket')
    const kategoriTiketSekarang = kategoriTiket.val()
    const checkAvailability = $('.check-availability')
    const buttonSubmit = $('.btn-submit')

    checkAvailability.html(`Cek Data: Masukkan nama ketegori tiket terlebih dahulu.`)
    kategoriTiket.on('change', function() {
      if (kategoriTiket.val() == '' || kategoriTiket.val() == kategoriTiketSekarang) {
        checkAvailability.html(`Cek Data: Masukkan nama ketegori tiket terlebih dahulu.`)
        buttonSubmit.attr('disabled', true)
      } else {
        buttonSubmit.attr('disabled', true)
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
      }
    })
    $('.btn-delete').on('click', function(e) {
      e.preventDefault()
      const id = $('#iKatTiket').val()

      swal.fire({
        icon: 'warning',
        title: 'Menghapus Kategori Tiket?',
        text: 'Data yang sudah dihapus tidak dapat dikembalikan lagi. Apakah Anda yakin?',
        confirmButtonText: 'Yakin!',
        confirmButtonColor: '#dc3545',
        showCancelButton: true,
        cancelButtonText: 'Tidak',
        cancelButtonColor: '#6c757d',
        reverseButtons: true,
      }).then((response) => {
        if (response.isConfirmed) {
          $.ajax({
          url: baseUrl + 'admin/datamaster/deletedata?type=kategori_tiket&id=' + id,
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
    $('#formEditKategoriTiket').on('submit', function(e) {
      e.preventDefault()
      const id = $('#iKatTiket').val()
      var formData = new FormData(this)

      $.ajax({
        url: baseUrl + 'admin/datamaster/updatedata?type=kategori_tiket&id=' + id,
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
  
  /**
   * Jika berada di page tambah divisi
   */
  if ($('#formTambahDivisi').length !== 0) {
    const divisi = $('#eNamaDivisi')
    const checkAvailability = $('.check-availability')
    const buttonSubmit = $('.btn-submit')

    checkAvailability.html(`Cek Data: Masukkan nama divisi terlebih dahulu.`)
    divisi.on('change', function() {
      if (divisi.val() == '') {
        checkAvailability.html(`Cek Data: Masukkan nama divisi terlebih dahulu.`)
        buttonSubmit.attr('disabled', true)
      } else {
        buttonSubmit.attr('disabled', true)
        checkAvailability.html(`Cek Data: <div class="spinner-border spinner-border-sm ml-2" role="status"></div>`)
        $.ajax({
          url: baseUrl + 'admin/datamaster/checkavailability?type=divisi',
          type: 'POST',
          data: { data: divisi.val() },
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
      }
    })
    $('#formTambahDivisi').on('submit', function(e) {
      e.preventDefault()
      var formData = new FormData(this)

      $.ajax({
        url: baseUrl + 'admin/datamaster/savedata?type=divisi',
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

  /**
   * Jika berada di page edit kategori tiket
   */
  if ($('#formEditDivisi').length !== 0) {
    const divisi = $('#eNamaDivisi')
    const divisiSekarang = divisi.val()
    const checkAvailability = $('.check-availability')
    const buttonSubmit = $('.btn-submit')

    checkAvailability.html(`Cek Data: Masukkan nama ketegori tiket terlebih dahulu.`)
    divisi.on('change', function() {
      if (divisi.val() == '' || divisi.val() == divisiSekarang) {
        checkAvailability.html(`Cek Data: Masukkan nama ketegori tiket terlebih dahulu.`)
        buttonSubmit.attr('disabled', true)
      } else {
        buttonSubmit.attr('disabled', true)
        checkAvailability.html(`Cek Data: <div class="spinner-border spinner-border-sm ml-2" role="status"></div>`)
        $.ajax({
          url: baseUrl + 'admin/datamaster/checkavailability?type=divisi',
          type: 'POST',
          data: { data: divisi.val() },
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
      }
    })
    $('.btn-delete').on('click', function(e) {
      e.preventDefault()
      const id = $('#iDivisi').val()

      swal.fire({
        icon: 'warning',
        title: 'Menghapus Divisi?',
        text: 'Data yang sudah dihapus tidak dapat dikembalikan lagi. Apakah Anda yakin?',
        confirmButtonText: 'Yakin!',
        confirmButtonColor: '#dc3545',
        showCancelButton: true,
        cancelButtonText: 'Tidak',
        cancelButtonColor: '#6c757d',
        reverseButtons: true,
      }).then((response) => {
        if (response.isConfirmed) {
          $.ajax({
          url: baseUrl + 'admin/datamaster/deletedata?type=divisi&id=' + id,
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
    $('#formEditDivisi').on('submit', function(e) {
      e.preventDefault()
      const id = $('#iDivisi').val()
      var formData = new FormData(this)

      $.ajax({
        url: baseUrl + 'admin/datamaster/updatedata?type=divisi&id=' + id,
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