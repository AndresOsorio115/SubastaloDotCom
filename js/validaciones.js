$().ready(function () {
    $(".formulario").validate({
                rules: {
                    nombre: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                     telefono: {
                        required: true,
                        minlength: 7,
                        number: true
                     },
                     direccion: {
                        required: true,
                        minlength: 10
                     },
                     correo: {
                        required: true,
                        email: true
                     },
                     contraseña: {
                        required: true,
                        minlength: 5
                     }
        }
    });
});


$().ready(function () {
    $(".formulario").validate({
                rules: {
                    nombre: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                     codigo: {
                        required: true,
                        minlength: 5,
                        number: true
                     },
                     precio: {
                        required: true,
                        minlength: 1,
                        digits: true
                     },
                     fechaF: {
                        required: true,
                        date: true
                     },
                     contraseña: {
                        required: true,
                        date: true
                     },
                     descripcion: {
                        required: true,
                        minlength: 10
                     }
        }
    });
});

$().ready(function () {
    $(".formulario").validate({
                rules: {
                    usuario: {
                        required: true,
                        minlength: 3
                    },
                     contraseña: {
                        required: true,
                        minlength: 6
                     }
        }
    });
});

$().ready(function () {
    $(".formulario").validate({
                rules: {
                    nombre: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    apellido: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                     }, 
                     cedula: {
                        required: true,
                        minlength: 10,
                        number: true
                     },
                     telefono: {
                        required: true,
                        minlength: 7,
                        number: true
                     },
                     direccion: {
                        required: true,
                        minlength: 8
                     },
                     correo: {
                        required: true,
                        email: true
                     },
                     contraseña: {
                        required: true,
                        minlength: 5
                     }
        }
    });
});
