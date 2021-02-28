$(() => {
  const formId = $("#formulario");
  formId.submit(function (event) {
    event.preventDefault();
    const form = $(this);
    $.ajax({
      type: "POST",
      url: "./functions/formulario.php",
      data: form.serialize(),
      success: () => {
        formId[0].reset();
        Swal.fire("¡Enviado!", "¡Gracias por contactarnos!", "success");
      },
    });
  });
});
