
// SOLO NUMEROS CON TECLAS ESPECIALES
function solonumeros(e){

    key=e.keycode || e.which;
    teclado =String.fromCharCode(key);

    numero="0123456789";

    especiales="8-37-38-46";

    teclado_especial=false;

    for(var i in especiales){
        if(key ==especiales[i]){
            teclado_especial=true;
        }
    }

    if(numero.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }

}


// alertas

$('#click').on('click',function(){
    Swal.fire(
        'Bienvenido',
        'Entro a su cuenta de banco',
        'success'
      )
});
    
