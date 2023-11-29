$(function () {
    $('#quickForm').validate({
      rules: {
        nomorAnggota: {
          required: true,
          minlength: 5
        },
        namaAnggota: {
          required: true
        },
        tglLahir: {
          required: true
        },
        alamat: {
          required: true
        },
      },
      messages: {
        nomorAnggota: {
          required: "Nomor Anggota Wajib Diisi",
          minlength: "Nomor Anggota Minimal 5 karakter"
        },
        namaAnggota: "Nama Anggota Wajib Diisi",
        tglLahir: "Tanggal Lahir Wajib Diisi",
        alamat: "Alamat Wajib Diisi",
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.col-form-input').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });