<script type="text/javascript">
  jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#form" ).validate({
  rules: {
    nama: {
      required: true,
    },
  },
  messages: {
    nama : {
      'required' : '<span style="color:red"><i class="fa fa-times-circle-o"></i> Nama Golongan wajib di isi</span>',
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
</script>
