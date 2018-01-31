<script type="text/javascript">
  jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#form" ).validate({
  rules: {
    nip: {
      required: true,
      digits: true
    },
    nama: {
      required: true,
    },
    no_tlp: {
      required: true,
      digits: true
    },
    alamat: {
      required: true,
    },
    agama: {
      required: true,
    },
    golongan: {
      required: true,
    },
    jabatan: {
      required: true,
    },
  },
  messages: {
    nip : {
      'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> NIP wajib di isi</span>',
      'digits' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> NIP harus berisi angka</span>',
    },
    nama : {
      'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> Nama wajib di isi</span>',
    },
    no_tlp : {
      'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> No telepon wajib di isi</span>',
      'digits' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> No telepon harus berisi angka</span>',
    },
    alamat : {
      'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> Alamat wajib di isi</span>',
    },
    agama : {
      'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> Agama wajib di isi</span>',
    },
    golongan : {
      'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> Golongan wajib di isi</span>',
    },
    jabatan : {
      'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> Jabatan wajib di isi</span>',
    },
  },
  highlight: function (element) {
                $(element).closest(".error").removeClass('has-success').addClass('has-error');
            },
  unhighlight: function (element) {
              $(element).closest(".error").removeClass('has-error').addClass('has-success');
            },
});
</script>
