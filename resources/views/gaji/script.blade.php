<script type="text/javascript">
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

    $( "#form" ).validate({
      rules: {
        gaji: {
          required: true,
        },
        nip: {
          required: true,
        },
      },
      messages: {
        gaji : {
          'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> Gaji wajib di isi</span>',
        },
        nip : {
          'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> Nip wajib di isi</span>',
        },
      },
      highlight: function (element) {
                    $(element).closest(".error").removeClass('has-success').addClass('has-error');
                },
      unhighlight: function (element) {
                  $(element).closest(".error").removeClass('has-error').addClass('has-success');
                },
      submitHandler: function (form) {
                     form.submit();
                          }

    });

    $('#nip').on('change', function() {
      var nip = $(this).val();

      if (nip != "") {
        $('.after').css('display','block');

        $.ajax({

            url: "/pegawai/search/"+nip,
            type: "GET",
            data : {nip : nip},
            dataType:"json"

        }).done(function(response) {
            $('#nama').val(response.nama);
            $('#golongan').val(response.golongan.nama);
            $('#id').val(response.id);
        });

      }
    })
</script>
