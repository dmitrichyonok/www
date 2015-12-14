  $.validator.setDefaults({
    submitHandler: function() {
      alert("submitted!");
    }
  });

  $().ready(function() {
    // validate signup form on keyup and submit
    $("#form").validate({
      rules: {
        name: "required",
        phone: {
          required: true,
          minlength: 8
        },
        email: {
          required: true,
          email: true
        },
        adress: "required"
      },
      messages: {
        name: "Lūdzu ievadiet savu vārdu un uzvārdu",
        email: "Lūdzu ievadiet e-pasta adresi pareizi",
        phone: "Lūdzu ievadiet telefona numuru pareizi",
        adress: "Lūdzu ievadiet adresi"
      }
    });
  });