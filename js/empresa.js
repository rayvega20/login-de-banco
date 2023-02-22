let chec = document.getElementById("empresa");
chec.addEventListener("change", function(){
    input.setAttribute('maxlength', 5);
  if(this.checked){

    inputCadena.value = 4555;
  }
});

let che = document.getElementById("borrar");
che.addEventListener("change",function(){

  inputCadena.value = ""

})


