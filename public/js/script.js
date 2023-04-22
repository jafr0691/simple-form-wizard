var currentTab = 0;
$(document).ready(function() {
    if (document.getElementsByClassName("tab").length > 0) {
        showTab(currentTab);
    }
    $("#btn-pol-pri").click(() => {
        setCookie('pol-pri', 'true', 2);
    });
    $("#btn-ca").click(() => {
        setCookie('aceptarcookies', 'true', 2);
    });
});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
if (!getCookie('aceptarcookies')) {
    setTimeout(() => {
        $('#cookieModal').modal('show');
    }, 15000);
}
if (!getCookie('pol-pri')) {
    setTimeout(() => {
        $('#politicas').modal('show');
    }, 2000);
}

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        $("#prevBtn").css("display", "none");
    } else {
        $("#prevBtn").css("display", "inline");
    }
    if (n == (x.length - 1)) {
        $("#nextBtn").html('<i class="fa fa-angle-double-right"></i>');
    } else {
        $("#nextBtn").html('<i class="fa fa-angle-double-right"></i>');
    }
    fixStepIndicator(n)
}


function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        $("#nextprevious").css("display", "none");
                $("#all-steps").css("display", "none");
                $("#register").css("display", "none");
        var datatestform = $("#formtest").serialize();
        $.ajax({
            url: location.origin+"/action/guardar.php",
            type: "post",
            data: datatestform,
            beforeSend: function() {
                $("#text-carga").css("display", "block");
            },
            success: function(res) {
                console.log(res);
                $("#text-carga").css("display", "none");
                $("#text-message").css("display", "block");
                if (res==1) {
                    $("#imgfinal").attr("src",location.origin+"/public/img/correcto.svg");
                    if($("#id_f").val()==""){
                        $("#timsg").html("<h3>¡Gracias por enviar tus datos!</h3> <span>Esperemos que le guste nuestro servicio.</span>");
                    }else{
                        $("#timsg").html("<h3>¡Gracias por editar los datos!</h3> <span>Los datos editados se gurdaron en nuestras bases de datos.</span>");
                    }
                    
                    $("#mensajes").html("<h4 class='text-success'>¡Felicitaciones todo un Exito el proceso!</h4>");
                    setTimeout(() => {
                        location.href = location.origin+"/form/listForm";
                    }, 10000);
                } else {
                    $("#imgfinal").attr("src",location.origin+"/public/img/error.svg");
                    if($("#id_f").val()==""){
                        $("#timsg").html("<h3>¡Error al enviar tus datos!</h3> <span>Le mostramos una lista de los error cometidos.</span>");
                    }else{
                        $("#timsg").html("<h3>¡Falla al editar los datos!</h3> <span>Los datos editados No se gurdaron en nuestras bases de datos.</span>");
                    }

                    $("#mensajes").html(res);
                    setTimeout(() => {
                        location.reload();
                    }, 10000);
                    
                }
                $("#error").html("");
            }
        });
    } else {
        showTab(currentTab);
    }
}

function Solo_Numerico(variable) {
    Numer = parseInt(variable);
    if (isNaN(Numer)) {
        return "";
    }
    return Numer;
}

function ValNumero(Control) {
    Control.value = Solo_Numerico(Control.value);
}

function msgerror(msg) {
    $("#error").html("<div id='error' class='alert alert-danger mt-1' role='alert'><ul><li>" + msg + "</li></ul></div>");
    setTimeout(() => {
        $("#error").html("");
    }, 10000);
}

function validateForm() {
    var x, y, i, valid = true;
    x = $(".tab");
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
            msgerror("Este campo No puede estar vacio");
        } else if (y[i].name == "name") {
            var txt = new RegExp(/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/g);
            if (txt.test(y[i].value) === false) {
                y[i].className += " invalid";
                valid = false;
                msgerror("En campo Nombre solo escriba con letras");
            }
        } else if (y[i].name == "email") {
            var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
            if (caract.test(y[i].value) === false) {
                y[i].className += " invalid";
                valid = false;
                msgerror("Escriba el Email ( ejemplo@dominio.com )");
            }
        } else if (y[i].name == "tlf") {
            if (y[i].value.length > 10) {
                y[i].className += " invalid";
                valid = false;
                msgerror("Telefono, no marcar mas de 10 digitos");
            }
        }
    }
    if (valid) {
        $(".step")[currentTab].className += " finish";
    }
    return valid;
}

function fixStepIndicator(n) {
    var i, x = $(".step");
    if (n < x.length) {
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        x[n].className += " active";
    }
}