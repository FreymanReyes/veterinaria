
$('#agregar_productos_compra').click(function () {

    var codigo = $('#codigo_compra').val();

    var data = Array();
    $("#encabezado_compras tr").each(function (i, v) {
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
    var unundmedida_id = $('#undmedida').val();
    if(unundmedida_id==1){
        var undmedida = "UND";
    }else{
        var undmedida = "KL";
    }
    var cantidad = $('#cantidad_compra').val();
    var precio = $('#precio_compra').val();
    
    if (codigo != "" && cantidad != "" && precio != "" && unundmedida_id != "") {
        
        var fila = '<tr class="dato"><td> ' + codigo +
        '</td><td style="display:none">' + unundmedida_id +
        '</td><td>' + undmedida +
        '</td><td ">' + cantidad +
        '</td><td>' + precio +
        '</td><td><button onclick="eliminar(this);"  type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons">clear</i></button></td></tr>';
        //  console.log(fila);
        var conteo = $('#encabezado_compras tr:last');
        conteo.after(fila);
        
        $('#codigo_compra').val("");
        $('#undmedida').val();
        $('#cantidad_compra').val("");
        $('#precio_compra').val("");
        
    }else{
        swal("DATOS DE PRODUCTO INCOMPLETOS!", "Click para continuar!", "error");
        return false;
    }
});

function eliminar(row){
    var data = Array();
    var d = row.parentNode.parentNode.rowIndex;
    document.getElementById('example').deleteRow(d);
    $("#encabezado_pr_fac tr").each(function (i, v) {
        data[i] = Array();
        $(this).children('td').each(function (ii, vv) {
            data[i][ii] = $(this).text();
        });
    });
    data.splice(0, 1);
    if(data.length!=0){
    
        var tot_global=0;
        var total_final=0;
    for (var i = 0; i < data.length; i++) {

            // var tot_global = $('#total_global').html();

            // tot_global = tot_global.replace(/\./g,'');
            // tot_global=parseInt(tot_global);
            var tot_global2 = data[i][4];
            tot_global2=parseInt(tot_global2);
            tot_global2=tot_global+tot_global2;
  
            total_final = total_final+tot_global2;
  
            var total_iva = total_final/1.19;
            var total_subtotal = total_iva;
            total_subtotal = Math.round(total_subtotal);
            total_subtotal = total_subtotal.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
            total_subtotal = total_subtotal.split('').reverse().join('').replace(/^[\.]/,'');

            total_iva=total_final-total_iva;
            total_iva = Math.round(total_iva);
            total_iva = total_iva.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
            total_iva = total_iva.split('').reverse().join('').replace(/^[\.]/,'');

            
        }
            total_final = total_final.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
            total_final = total_final.split('').reverse().join('').replace(/^[\.]/,'');

            $('#total_global').html(total_final);
            $('#total_iva').html(total_iva);
            $('#subtotal').html(total_subtotal);
    }else{
        $('#iva_condicion').prop('disabled',false);
        $('#total_global').html(0.0);
        $('#total_iva').html("");
        $('#subtotal').html("");
        $('#facturar').prop('disabled',true);
    }
    
}

$('#tipo_factura_compra').click(function () {
    var tipo = $('#tipo_factura_compra').val();
    if(tipo!=2){
        $(document.getElementById("fechas_fac_comp")).css({"display": "none"});
    }else{
        $(document.getElementById("fechas_fac_comp")).css({"display": "block"});
    }
});


$('#guardar_compra').click(function () {
    
    $('#guardar_compra').prop('disabled',true);

    var tipo = $('#tipo_factura_compra').val();
    var proveedor = $('#proveedor').val();
    var numero_factura = $('#numero_fac_comp').val();
    var iva_factura = $('#iva_comp').val();
    var fecha1 = $('#fecha_actual').val();
    var fecha2 = $('#fecha_limite_pago').val();

    if(tipo=="" || proveedor =="" || numero_factura=="" || iva_factura=="" ){
        swal("Todos los datos son necesarios!", "Click para continuar!", "error");
        $('#guardar_compra').prop('disabled',false);
        return false;
    }
    if(tipo==2){
        var estado = 2;
        if( fecha1=="" || fecha2==""){
            swal("DEBES SELECIONAR LAS FECHAS!", "Click para continuar!", "error");
            $('#guardar_compra').prop('disabled',false);
            return false; 
        }
    }else{
        var estado = 1;
    }
    if(fecha2==""){
        fecha2=fecha1;
    }
    var data = Array();
    $("#encabezado_compras tr").each(function (i, v) {
        data[i] = Array();
        $(this).children('td').each(function (ii, vv) {
            data[i][ii] = $(this).text();
        });
    });
    data.splice(0, 1);

    if(data.length == 0){
        swal("DEBES AGREGAR AL MENOS 1 PRODUCTO!", "Click para continuar!", "error");
        $('#guardar_compra').prop('disabled',false);
        return false; 
    }else if(data.length > 0){
       
        function getAbsolutePath() {
            var loc = window.location;
            var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
            return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
          }
          var URLdominio = getAbsolutePath();

          var url = URLdominio + 'store';

        $.ajax({
          url: url,
          type: 'GET',
          data: {
            data: data,
            tipo: tipo,
            proveedor: proveedor,
            numero_factura: numero_factura,
            iva_factura: iva_factura,
            fecha1: fecha1,
            fecha2: fecha2,
            estado: estado
          },
          dataType: 'json',
          success: function (response) {
            if(response==1){
                swal("DATOS ALMACENADOS CORRECTAMENTE!", "Click para continuar!", "success");
                location.reload();
            }else{
                swal("AH OCURRIDO UN PROBLEMA!", "Click para continuar!", "error");
                return false; 
            }
          }//fin del success
        });//fin de ajax


    }

});

