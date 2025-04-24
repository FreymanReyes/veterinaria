

function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
  }
  var URLdominio = getAbsolutePath();
  var URLdominio2 = 'http://localhost:8000/';



  $("#saldo_inicial_caja").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{3})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});
  $("#saldo_final_caja").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{3})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});





$('#guardar_abrir_caja').click(function () {
  $('#guardar_abrir_caja').prop('disabled',true);
  $('#cerrar_abrir_caja').prop('disabled',true);

  var saldo_inicial = $('#saldo_inicial_caja').val();
  saldo_inicial = saldo_inicial.replace(".", "");
  // alert(saldo_inicial);
    if(saldo_inicial == ""){
        swal("DEBES INTRODUCIR UN VALOR!", "Click para continuar!", "error");
        $('#guardar_abrir_caja').prop('disabled',false);
        $('#cerrar_abrir_caja').prop('disabled',false);
        return false;
    }

      var url = URLdominio2 + 'cajas/store';

    $.ajax({
      url: url,
      type: 'GET',
      data: {
        saldo_inicial: saldo_inicial,
      },
      dataType: 'json',
      success: function (response) {

            location.reload();
      }//fin del success
    });//fin de ajax

});



$('#guardar_cerrar_caja').click(function () {

    $('#guardar_cerrar_caja').prop('disabled',true);
    $('#cerrar_cerrar_caja').prop('disabled',true);

    var saldo_final = $('#saldo_final_caja').val();
    saldo_final = saldo_final.replace(".", "");
    // alert(saldo_final);
    var id_caja = $('#id_caja').val();

    if(saldo_final == ""){
        swal("DEBES INTRODUCIR UN VALOR!", "Click para continuar!", "error");
        $('#guardar_cerrar_caja').prop('disabled',false);
        $('#cerrar_cerrar_caja').prop('disabled',false);
        return false;
    }

      var url = URLdominio2 + 'cajas/update';

    $.ajax({
      url: url,
      type: 'GET',
      data: {
        saldo_final: saldo_final,
        id_caja: id_caja,
      },
      dataType: 'json',
      success: function (response) {

            location.reload();
      }//fin del success
    });//fin de ajax

});



$("#numero_cc").keypress(function(e) {
  if (e.which == 13) {
    $('#numero_cc').prop('disabled',true);
    $('#nombre_cliente').prop('disabled',true);
    var cc = $('#numero_cc').val();

    if(cc == ""){
      swal("DEBES INTRODUCIR UN DOCUMENTO!", "Click para continuar!", "error");
      $('#numero_cc').prop('disabled',false);
      $('#nombre_cliente').prop('disabled',false);
      return false;
    }

    var url = URLdominio2 + 'buscar';

    $.ajax({
      url: url,
      type: 'GET',
      data: {
        cc: cc,
      },
      dataType: 'json',
      success: function (response) {
        if(response.length==0){

           $('#cc_modal').val(cc);
           $('#nombre_cliente').val("");
           $("#div_agg_pro").css({
            "display": "none",
          });
           $("#div_pro_agg").css({
            "display": "none",
          });$("#div_agg_serv").css({
            "display": "none",
          });
           $("#div_agg_serv").css({
            "display": "none",
          });

          $("#defaultModal3").addClass("in");
          $("#defaultModal3").css({
            "display": "block",
            "position": "fixed",
            "top": "0",
            "right": "0",
            "bottom": "0",
            "left": "0",
            "z-index": "1050",
          });



        }else{
          // console.log();
            $('#nombre_cliente').val(response[0]['nombre']);
            $('#id_cliente').val(response[0]['id']);
            var id_cliente= (response[0]['id']);
            $('#numero_cc').prop('disabled',false);
            $('#nombre_cliente').prop('disabled',true);


            var url = URLdominio2 + 'buscar_mascota';

            $.ajax({
              url: url,
              type: 'GET',
              data: {
                id_cliente: id_cliente,
              },
              dataType: 'json',
              success: function (response) {
                $('#mascota').html(response);
              }//fin del success
            });//fin de ajax



        }
      }//fin del success
    });//fin de ajax


    e.preventDefault();
    return (e.which != 13);
  }
});


$('#cerrar_modal_cliente').click(function () {
  $('#numero_cc').prop('disabled',false);
  $('#nombre_cliente').prop('disabled',true);

  $("#defaultModal3").removeClass("in");
  $('#nombre_modal').val("");
  $('#cc_modal').val("");
  $('#direccion_modal').val("");
  $('#sexo_modal').val("");
  $('#telefono_modal').val("");
  $('#correo_modal').val("");
  $('#nombre_cliente').val("");

  $("#defaultModal3").css({
    "display": "none",

  });

});
$('#cerrar_modal_mascota').click(function () {
  // $('#numero_cc').prop('disabled',false);
  // $('#nombre_cliente').prop('disabled',true);

  $("#defaultModal4").removeClass("in");
  $('#nombre_modal_mascota').val("");
  $('#edad_modal_mascota').val("");
  $('#raza_modal_mascota').val("");
  $('#sexo_modal_mascota').val("");
  $('#tipo_modal_mascota').val("");

  $("#defaultModal4").css({
    "display": "none",

  });

});

$('#guardar_modal_cliente').click(function () {

  var nombre = $('#nombre_modal').val();
  var cc = $('#cc_modal').val();
  var direccion = $('#direccion_modal').val();
  var sexo = $('#sexo_modal').val();
  var telefono = $('#telefono_modal').val();
  var correo = $('#correo_modal').val();

  if(cc==""){
    swal("DEBES INTRODUCIR UN DOCUMENTO!", "Click para continuar!", "error");

    return false;
  }
  if(nombre==""){
    swal("DEBES INTRODUCIR UN NOMBRE!", "Click para continuar!", "error");

    return false;
  }
  if(sexo=="" || sexo == null){
    swal("DEBES INTRODUCIR UN SEXO!", "Click para continuar!", "error");

    return false;
  }



  var url = URLdominio2 + 'crear_cliente';

  $.ajax({
    url: url,
    type: 'GET',
    data: {
      nombre: nombre,
      cc: cc,
      direccion: direccion,
      sexo: sexo,
      telefono: telefono,
      correo: correo,
    },
    dataType: 'json',
    success: function (response) {
      if(response==1){
        $("#div_agg_pro").css({
          "display": "none",
        });
        $("#div_pro_agg").css({
          "display": "none",
        });
        swal("YA EXISTE UN CLIENTE CON ESTE DOCUMENTO!", "Click para continuar!", "error");

        return false;
      }else{
        $('#numero_cc').prop('disabled',false);
        $('#nombre_cliente').val(response['nombre']);
        $('#id_cliente').val(response['id']);
        var id_cliente= (response['id']);
        $("#defaultModal3").removeClass("in");
        $("#defaultModal3").css({
          "display": "none",
        });
        $("#div_agg_pro").css({
          "display": "block",
        });
        $("#div_pro_agg").css({
          "display": "block",
        });

        var url = URLdominio2 + 'buscar_mascota';

        $.ajax({
          url: url,
          type: 'GET',
          data: {
            id_cliente: id_cliente,
          },
          dataType: 'json',
          success: function (response) {
            $('#mascota').html(response);
          }//fin del success
        });//fin de ajax

      }
    }//fin del success
  });//fin de ajax

});


$('#guardar_modal_mascota').click(function () {

  var nombre = $('#nombre_modal_mascota').val();
  var edad = $('#edad_modal_mascota').val();
  var tipo = $('#tipo_modal_mascota').val();
  var sexo = $('#sexo_modal_mascota').val();
  var raza = $('#raza_modal_mascota').val();
  var id_cliente = $('#id_cliente').val();

  if(nombre==""){
    swal("DEBES INTRODUCIR UN NOMBRE!", "Click para continuar!", "error");

    return false;
  }
  if(edad==""){
    swal("DEBES INTRODUCIR UNA EDAD!", "Click para continuar!", "error");

    return false;
  }
  if(sexo=="" || sexo == null){
    swal("DEBES INTRODUCIR UN SEXO!", "Click para continuar!", "error");

    return false;
  }
  if(tipo=="" || tipo == null){
    swal("DEBES INTRODUCIR UN TIPO DE EDAD!", "Click para continuar!", "error");

    return false;
  }
  if(raza=="" || raza == null){
    swal("DEBES INTRODUCIR UNA RAZA!", "Click para continuar!", "error");

    return false;
  }




  var url = URLdominio2 + 'crear_mascota';

  $.ajax({
    url: url,
    type: 'GET',
    data: {
      nombre: nombre,
      edad: edad,
      tipo: tipo,
      sexo: sexo,
      raza: raza,

      id_cliente: id_cliente,
    },
    dataType: 'json',
    success: function (response) {
      $("#defaultModal4").removeClass("in");
      $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove();//eliminamos el backdrop del modal
      $("#defaultModal4").css({
        "display": "none",
        "position": "fixed", "top": "0px", "right": "0px", "bottom": "0px", "left": "0px", "z-index": "1050",
      });
      $('#nombre_modal_mascota').val("");
      $('#edad_modal_mascota').val("");
      $('#tipo_modal_mascota').val("");
      $('#sexo_modal_mascota').val("");
      $('#raza_modal_mascota').val("");
      $('#mascota').html(response);

    }//fin del success
  });//fin de ajax

});






$("#codigo_producto").keypress(function(e) {

  if (e.which == 13) {

    $('#codigo_producto').prop('disabled',true);
    $('#cantidad_compra').prop('disabled',true);
    $('#descuento_compra').prop('disabled',true);
    $('#precio_compra').prop('disabled',true);
    var producto = $('#codigo_producto').val();

    if(producto == ""){
      swal("DEBES INTRODUCIR UN CODIGO!", "Click para continuar!", "error");
      $('#codigo_producto').prop('disabled',false);
      $('#cantidad_compra').prop('disabled',true);
      $('#descuento_compra').prop('disabled',true);
      $('#precio_compra').prop('disabled',true);
      return false;
    }

    var url = URLdominio2 + 'buscar_producto';

    $.ajax({
      url: url,
      type: 'GET',
      data: {
        producto: producto,
      },
      dataType: 'json',
      success: function (response) {
          if(response!=0){
              swal("PRODUCTO ENCONTRADO!", "Click para continuar!", "success");
              $('#id_product_buscado').val(response['id']);
              $('#precio_compra').val(response['precio']);
              $('#total_compra').val(response['precio']);
              $('#cantidad_compra').val(1);
              $('#codigo_producto').prop('disabled',false);
              $('#cantidad_compra').prop('disabled',false);
              $('#descuento_compra').prop('disabled',false);
              $('#precio_compra').prop('disabled',false);
          }else{
              swal("NO HAY STOCK!", "Click para continuar!", "error");
              $('#id_product_buscado').val('');
              $('#precio_compra').val(0);
              $('#cantidad_compra').val(0);
              $('#total_compra').val(0);
              $('#codigo_producto').prop('disabled',false);
              $('#cantidad_compra').prop('disabled',true);
              $('#descuento_compra').prop('disabled',true);
              $('#precio_compra').prop('disabled',true);
          }

      }//fin del success
    });//fin de ajax
    e.preventDefault();
    return (e.which != 13);
  }
});

$('#tipo').click(function (){
    var tipo = $('#tipo').val();

    if(!tipo){
        return false;
    }else{
        if(tipo == 1){
            $("#div_agg_pro").css({
                "display": "none",
            });
            $("#div_agg_serv").css({
                "display": "block",
            });
        }else{
            $("#div_agg_serv").css({
                "display": "none",
            });
            $("#div_agg_pro").css({
                "display": "block",
            });
        }
    }
})

$("#descuento_compra_serv").keyup(function(e) {
    
    var cantidad = $('#cantidad_compra_serv').val();
    var precio = $('#precio_compra_serv').val();
    var descuento = $('#descuento_compra_serv').val();

    var total2 = cantidad*precio;
    total = (total2*descuento)/100;
    total= total2-total;

    $('#total_compra_serv').val(total);

});
$("#precio_compra_serv").keyup(function(e) {
    
    var cantidad = $('#cantidad_compra_serv').val();
    var precio = $('#precio_compra_serv').val();
    var descuento = $('#descuento_compra_serv').val();

    var total2 = cantidad*precio;
    total = (total2*descuento)/100;
    total= total2-total;

    $('#total_compra_serv').val(total);

});

$("#cantidad_compra_serv").keyup(function(e) {
    
    var cantidad = $('#cantidad_compra_serv').val();
    var precio = $('#precio_compra_serv').val();
    var descuento = $('#descuento_compra_serv').val();

    var total2 = cantidad*precio;
    total = (total2*descuento)/100;
    total= total2-total;
    $('#total_compra_serv').val(total);

});
$("#precio_compra").keyup(function(e) {
    
    var cantidad = $('#cantidad_compra').val();
    var precio = $('#precio_compra').val();
    var descuento = $('#descuento_compra').val();

    var total2 = cantidad*precio;
    total = (total2*descuento)/100;
    total= total2-total;
    $('#total_compra').val(total);

});
$("#descuento_compra").keyup(function(e) {
    
    var cantidad = $('#cantidad_compra').val();
    var precio = $('#precio_compra').val();
    var descuento = $('#descuento_compra').val();

    var total2 = cantidad*precio;
    total = (total2*descuento)/100;
    total= total2-total;
    $('#total_compra').val(total);

});

$("#cantidad_compra").keyup(function(e) {
    
    var cantidad = $('#cantidad_compra').val();
    var precio = $('#precio_compra').val();
    var descuento = $('#descuento_compra').val();

    var total2 = cantidad*precio;
    total = (total2*descuento)/100;
    total= total2-total;
    $('#total_compra').val(total);

});



$('#servicio_agg').click(function (){
   var id_servicio = $('#servicio_agg').val();

   if(!id_servicio){
       return false;
   }

    var url = URLdominio2 + 'buscar_servicio';

    $.ajax({
        url: url,
        type: 'GET',
        data: {
            id_servicio: id_servicio,
        },
        dataType: 'json',
        success: function (response) {
            swal("SERVICIO ENCONTRADO!", "Click para continuar!", "success");
            $('#precio_compra_serv').val(response['precio']);
            $('#total_compra_serv').val(response['precio']);
            $('#cantidad_compra_serv').val(1);
        }//fin del success
    });//fin de ajax

});



$('#agregar_servicios_compra').click(function () {
  $('#iva_condicion').prop('disabled',true);
  var tot_global = $('#total_global').html();

  tot_global = tot_global.replace(/\./g,'');
  tot_global=parseInt(tot_global);

  var tot_global2 = $('#total_compra_serv').val();
  tot_global2=parseInt(tot_global2);
  
  var total_final = tot_global+tot_global2;
  
  var iva_condicion = $('#iva_condicion').val();
  
  var total_iva = total_final/1.19;
  var total_subtotal = total_iva;
  total_subtotal = Math.round(total_subtotal);
  total_subtotal = total_subtotal.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
  total_subtotal = total_subtotal.split('').reverse().join('').replace(/^[\.]/,'');
  
  total_iva=total_final-total_iva;
  total_iva = Math.round(total_iva);
  total_iva = total_iva.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
  total_iva = total_iva.split('').reverse().join('').replace(/^[\.]/,'');


  total_final = total_final.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
  total_final = total_final.split('').reverse().join('').replace(/^[\.]/,'');

  $('#total_global').html(total_final);
  if(iva_condicion==0){
    $('#total_iva').html(0);
    $('#subtotal').html(total_final);
  }else{
    $('#total_iva').html(total_iva);
    $('#subtotal').html(total_subtotal);
  }

    var servicio = $('#servicio_agg').val();
    var servicio_nombre = $("#servicio_agg option:selected").html();

    var data = Array();
    $("#encabezado_pr_fac tr").each(function (i, v) {
        data[i] = Array();
        $(this).children('td').each(function (ii, vv) {
            data[i][ii] = $(this).text();
        });
    });
    data.splice(0, 1);

    for (var i = 0; i < data.length; i++) {

        if(data[i][0].trim()==servicio){
            swal("ESTE PRODUCTO YA HA SIDO AGREGADO!", "Click para continuar!", "error");
            return false;
        }

    }
    var cantidad = $('#cantidad_compra_serv').val();
    var precio = $('#precio_compra_serv').val();
    var descuento = $('#descuento_compra_serv').val();

    if (servicio != "" && cantidad != "" && precio != "" && descuento != "" && tot_global2 != "") {
        
        var fila = '<tr class="dato"><td> ' + servicio_nombre +
            '</td><td style="display: none">' + servicio +
            '</td><td>' + cantidad +
            '</td><td>' + precio +
            '</td><td>' + tot_global2 +
            '</td><td>' + descuento +
            '%</td><td><button onclick="eliminar(this);"  type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons">clear</i></button></td></tr>';
        var conteo = $('#encabezado_pr_fac tr:last');

        conteo.after(fila);
        

        $('#servicio_agg').val("");
        $('#cantidad_compra_serv').val("");
        $('#precio_compra_serv').val("");
        $('#descuento_compra_serv').val(0);
        $('#total_compra_serv').val("");
        $('#cantidad_compra_serv').prop('disabled',false);
        $('#descuento_compra_serv').prop('disabled',false);
        $('#facturar').prop('disabled',false);

    }else{
        swal("DATOS DE PRODUCTO INCOMPLETOS!", "Click para continuar!", "error");
        return false;
    }
});



$('#agregar_productos_compra2').click(function () {

  var tot_global = $('#total_global').html();
  
  tot_global = tot_global.replace(/\./g,'');
  tot_global=parseInt(tot_global);
  
  var tot_global2 = $('#total_compra').val();
  tot_global2=parseInt(tot_global2);
  
  var total_final = tot_global+tot_global2;

  var total_iva = total_final/1.19;
  var total_subtotal = total_iva;
  total_subtotal = Math.round(total_subtotal);
  total_subtotal = total_subtotal.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
  total_subtotal = total_subtotal.split('').reverse().join('').replace(/^[\.]/,'');

  total_iva=total_final-total_iva;
  total_iva = Math.round(total_iva);
  total_iva = total_iva.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
  total_iva = total_iva.split('').reverse().join('').replace(/^[\.]/,'');
    
  total_final = total_final.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
  total_final = total_final.split('').reverse().join('').replace(/^[\.]/,'');

  $('#total_global').html(total_final);
  if(iva_condicion==0){
    $('#subtotal').html(total_final);
    $('#total_iva').html(0);
  }else{
    $('#total_iva').html(total_iva);
    $('#subtotal').html(total_subtotal);
  }

  var codigo = $('#codigo_producto').val();
  var descuento = $('#descuento_compra').val();

  var data = Array();
  $("#encabezado_pr_fac tr").each(function (i, v) {
      data[i] = Array();
      $(this).children('td').each(function (ii, vv) {
          data[i][ii] = $(this).text();
      });
  });
  data.splice(0, 1);

  for (var i = 0; i < data.length; i++) {
      
      
      if(data[i][0].trim()==codigo){
          swal("ESTE PRODUCTO YA HA SIDO AGREGADO!", "Click para continuar!", "error");
          return false;
      }

  }
  
  var cantidad = $('#cantidad_compra').val();
  var precio = $('#precio_compra').val();
  


  if (codigo != "" && cantidad != "" && precio != "" && descuento != "" && tot_global2 != "") {
      
      var fila = '<tr class="dato"><td> ' + codigo +
      '</td><td style="display:none">' + codigo +
      '</td><td ">' + cantidad +
      '</td><td>' + precio +
      '</td><td>' + tot_global2 +
      '</td><td>' + descuento +
      '%</td><td><button onclick="eliminar(this);"  type="button" class="l11s btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons">clear</i></button></td></tr>';
      //  console.log(fila);
      var conteo = $('#encabezado_pr_fac tr:last');
      conteo.after(fila);
      
      $('#codigo_producto').val("");
      $('#cantidad_compra').val("");
      $('#precio_compra').val("");
      $('#total_compra').val("");
      $('#descuento_compra').val(0);
      $('#facturar').prop('disabled',false);
      
    }else{
      swal("DATOS DE PRODUCTO INCOMPLETOS!", "Click para continuar!", "error");
      return false;
    }
  });
  
  
  
  
  $('#facturar').click(function () {
    var id_cliente = $('#id_cliente').val();
    
    if(!id_cliente){
      swal("SELECCIONA UN CLIENTE!", "Click para continuar!", "error");
      return false;
    }else{
      var data = Array();
      $("#encabezado_pr_fac tr").each(function (i, v) {
          data[i] = Array();
          $(this).children('td').each(function (ii, vv) {
              data[i][ii] = $(this).text();
          });
      });
      data.splice(0, 1);
      console.log(data);
    }
});