$(document).on("ready", inicioUsuarios)
function inicioUsuarios() {
    validarTipeoCajas();
    mostrarDatosU("");
    $("#txtBuscarU").keyup(function () {
        buscarU = $("#txtBuscarU").val();
        mostrarDatosU(buscarU);
    });
    $("form").submit(function (event) {
        //event.preventDefault();
    });
    $("body").on("click", "#tablaDatosU button", function (event) {
        idsele = $(this).attr("value");
        $.post(baseurla + "cusuario/mostrarUsuarioSolo", {
        idsele
        },
                function(data){
                var r = JSON.parse(data);
                $.each(r, function (i, item) {
                    id = item.idUsuario;
                    nombre = item.nombre;
                    paterno = item.apellidoPaterno;
                    materno = item.apellidoMaterno;
                    sexo = item.sexo;
                    matricula = item.matricula;
                    correo = item.correo;
                    procedencia = item.institucionProcedencia;
                    semestre = item.semestre;
                    telefono = item.telefono;
                    alta = item.fechaAlta;
                    inicio = item.fechaInicio;
                    termino = item.fechaTermino;
                    tipo = item.tipoUsuario;
                    user = item.user;
                    pass = item.password;
                    inicial = item.passInicial;
                    area = item.idArea;
                });
                switch (sexo) {
                    case 'H':
                        document.getElementById('sexoseleh').checked = true;
                        break;
                    case 'M':
                        document.getElementById('sexoselem').checked = true;
                }
                $('#id').val(id);
                $('#txtnombresele').val(nombre);
                $('#txtapsele').val(paterno);
                $('#txtamsele').val(materno);
                $('#sexosele').val(sexo);
                $('#txtmatriculasele').val(matricula);
                $('#txtcorreosele').val(correo);
                $('#txtinstitucionsele').val(procedencia);
                $('#txtsemestresele').val(semestre);
                $('#txttelefonosele').val(telefono);
                $('#txtaltasele').val(alta);
                $('#txtiniciosele').val(inicio);
                $('#txtfinsele').val(termino);
                $('#ctipousuariosele').val(tipo);
                $('#txtusersele').val(user);
                $('#txtpasswordsele').val(pass);
                $('#cboAreasele').val(area);
            });
    });
            $("body").on("click", "#tablaDatosU a", function (event) {
        event.preventDefault();
        idsele = $(this).attr("href");
        eliminar(idsele);
    });
    $("#btnGuardarU").click(function () {        
        if ($("#txtnombre").val() === "") {	// Validacoin de la caja de texto nombre de usuario
            document.getElementById("txtnombre").style.borderColor = "red";
            $("#txtnombre").attr("placeholder", "Verifique nombre de usuario");
            $("#txtnombre").focus();
            return false;
        } else {
            document.getElementById("txtnombre").style.borderColor = "";
            if ($("#txtap").val() === "") { // Validcion de caja de texto apellido paterno
                document.getElementById("txtap").style.borderColor = "red";
                $("#txtap").attr("placeholder", "Verifique apellido paterno");
                $("#txtap").focus();
                return false;
            } else {
                document.getElementById("txtap").style.borderColor = "";
                if ($("#txtam").val() === "") { // Validaciion de apellido materno
                    document.getElementById("txtam").style.borderColor = "red";
                    $("#txtam").attr("placeholder", "Verifique apellido materno");
                    $("#txtam").focus();
                    return false;
                } else {
                    document.getElementById("txtam").style.borderColor = ""; //validacion de checkbox de sexo
                    if (!document.getElementById("sexo_hombre").checked && !document.getElementById("sexo_mujer").checked) {
                        $("#esexo").fadeIn();
                        $("#sexo_hombre").focus();
                        $("#sexo_mujer").focus();
                        return false;
                    } else {
                        $("#esexo").fadeOut();
                        if($("#txtmatricula").val() === ""){ //Validacion de matricula
                            document.getElementById("txtmatricula").style.borderColor = "red";
                            $("#txtmatricula").attr("placeholder", "Verifique matricula");
                            $("#txtmatricula").focus();
                            return false;
                        }else{
                            document.getElementById("txtmatricula").style.borderColor ="";
                            //var exp = new RegExp ("/[^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$]/");                            
                            if($("#txtcorreo").val() === ""){ 
                                document.getElementById("txtcorreo").style.borderColor = "red";
                                $("#txtcorreo").attr("placeholder", "Verifique correo");
                                $("#txtcorreo").focus();
                                return false;
                            }else{
                                document.getElementById("txtcorreo").style.borderColor = "";
                                if($("#txtinstitucion").val() == ""){
                                    document.getElementById("txtinstitucion").style.borderColor= "red";
                                    $("#txtinstitucion").attr("placeholder", "Verifique instituci�n de procedecia");
                                    $("#txtinstitucion").focus();
                                    return false;
                                }else{
                                    document.getElementById("txtinstitucion").style.borderColor = "";
                                    if($("#txtsemestre").val() === "" || $("#txtsemestre").val() <= 0 || $("#txtsemestre").val() > 10){
                                        $("#txtsemestre").val("");
                                        document.getElementById("txtsemestre").style.borderColor = "red";
                                        $("#txtsemestre").attr("placeholder", "Verifique semestre (1� - 10�)");
                                        $("#txtsemestre").focus();
                                        return false;
                                    }else{
                                        document.getElementById("txtsemestre").style.borderColor = "";
                                        var tel = $("#txttelefono").val();
                                        if($("#txttelefono").val() ==="" || $("#txttelefono").val().length !== 10){                                        
                                            document.getElementById("txttelefono").style.borderColor = "red";
                                            $("#txttelefono").val("");
                                            $("#txttelefono").attr("placeholder", "Verifique telefono (10 digitos)");
                                            $("#txttelefono").focus();
                                            return false;
                                        }else{
                                            document.getElementById("txttelefono").style.borderColor = "";
                                            if($("#txtalta").val() ===""){
                                                document.getElementById("txtalta").style.borderColor = "red";
                                                $("#ealta").fadeIn();
                                                $("#txtalta").focus();
                                                return false;
                                            }else{
                                                $("#ealta").fadeOut();
                                                document.getElementById("txtalta").style.borderColor ="";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }


    });
}

function mostrarDatosU(valor)
{
    $.ajax({
        url: baseurla + "cusuario/mostrarUsuario",
        type: "POST",
        data: {buscarU: valor},
        success: function (respuesta) {
            var registros = eval(respuesta);
            $('#tablaDatosU').html(
                    '<tr>' +
                    '<td class="text-center">Nombre</td>' +
                    '<td class="text-center">Correo electrónico</td>' +
                    '<td class="text-center">Teléfono</td>' +
                    '<td id="tel" class="text-center">Area asignada</td>' +
                    '<td class="text-center">Editar</td>' +
                    '</tr>');
            $.each(registros, function (i, item) {
                $('#tablaDatosU').append(
                        '<tr>' +
                        '<td align ="center">' + item.nombre + ' ' + item.apellidoPaterno + ' ' + item.apellidoMaterno + '</td>' +
                        '<td align ="center">' + item.correo + '</td>' +
                        '<td align ="center">' + item.telefono + '</td>' +
                        '<td align ="center">' + item.nombreArea + '</td>' +
                        '<td height=5 width=120><button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#editar" value="' + item.idUsuario + '" id="btnEditar"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  </button>' + ' ' +
                        '<a class="btn btn-danger btn-ms" href="' + item.idUsuario + '" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>' +
                        '</tr>'
                        );
            });
        }
    });
}

function eliminar(idsele)
{
    $.ajax({
        url: baseurla + "cusuario/eliminar",
        type: "POST",
        data: {id: idsele},
        success: function (respuesta) {
            alert(respuesta);
            mostrarDatosU("");
        }

    });
}

function guardar() {
    var nombre = $("#txtnombre").val();
    var app = $("#txtap").val();
    var apm = $("#txtam").val();
    var sex = '';
    if (document.getElementById("sexo_hombre").checked) {
        sex = "H";
    } else {
        sex = "M";
    }
    var mat = $("#txtmatricula").val();
    var core = $("#txtcorreo").val();
    var ins = $("#txtinstitucion").val();
    var sem = $("#txtsemestre").val();
    var tel = $("#txttelefono").val();
    var alta = $("#txtalta").val();
    var ini = $("#txtinicio").val();
    var ter = $("#txtfin").val();
    var tu = $("#cbotipousuario").val();
    var user = $("#txtuser").val();
    var pass = $("#txtpassword").val();
    var area = $("#cboArea").val();
    alert(nombre + " " + app + " " + apm + " " + sex + " " + mat + " " + core + " " + ins + " " + sem + " " + tel + " " + alta + " " + ini + " " + ter + " " + tu + " " + user + " " + pass + " " +
            area);
    $.ajax({
        type: "POST",
        url: baseurla + "cusuario/guardar/",
        data: {
            'nombre': nombre,
            'apellidoPaterno': app,
            'apellidoMaterno': apm,
            'sexo': sex,
            'matricula': mat,
            'correo': core,
            'institucion': ins,
            'semestre': sem,
            'telefono': tel,
            'fechaAlta': alta,
            'fechaInicio': ini,
            'fechaTermino': ter,
            'tipoUsuario': tu,
            'user': user,
            'password': pass,
            'idArea': area
        },
        success: function (respuesta) {
            alert(respuesta, data);
            //mostrarDatosU("");
        }
    });
}

function validarTipeoCajas() {
    //Validaciones de tipeo de teclas
    $("#txtnombre").keypress(function (e) {
        if (/[(A-Za-z)\s(áéíóú�?É�?ÓÚ)\.]/.test(String.fromCharCode(e.which)) == false) {
            event.preventDefault();
        }
    });
    $("#txtap").keypress(function (e) {
        if (/[(A-Za-z)\s(áéíóú�?É�?ÓÚ)\.]/.test(String.fromCharCode(e.which)) == false) {
            event.preventDefault();
        }
    });
    $("#txtam").keypress(function (e) {
        if (/[(A-Za-z)\s(áéíóú�?É�?ÓÚ)\.]/.test(String.fromCharCode(e.which)) == false) {
            event.preventDefault();
        }
    });
    $("#txtmatricula").keypress(function (e) {
        if (/[(A-Za-z)(0-9)(áéíóú�?É�?ÓÚ)-]/.test(String.fromCharCode(e.which)) == false) {
            event.preventDefault();
        }
    });
    $("#txtcorreo").keypress(function (e) {
        if (/[(A-Za-z)(0-9)@_-\.]/.test(String.fromCharCode(e.which)) == false){
        event.preventDefault();
    }
    });
    $("#txtinstitucion").keypress(function (e) {
        if (/[(A-Za-z)(0-9)\s(áéíóú�?É�?ÓÚ)\.]/.test(String.fromCharCode(e.which)) == false) {
            event.preventDefault();
        }
    });
    $("#txtsemestre").keypress(function (e) {
        if (/[(0-9)]/.test(String.fromCharCode(e.which)) == false) {
            event.preventDefault();
        }
    });
    $("#txttelefono").keypress(function (e) {
        if (/[(0-9)]/.test(String.fromCharCode(e.which)) == false || $("#txttelefono").val().length >=  10) {            
            event.preventDefault();
        }
    });
    $("#txtuser").keypress(function (e) {
        if (/[(A-Za-z)(0-9)@_-]/.test(String.fromCharCode(e.which)) == false) {
            event.preventDefault();
        }
    });
    $("#txtuser").keypress(function (e) {
        if (/[(A-Za-z)(0-9)@_-\.]/.test(String.fromCharCode(e.which)) == false){
        event.preventDefault();
    }
    });
}



