/*
*var txt = $("<p></p>").text("Campo Vazio !!!");
    txt.addClass("message__error");
    $("#nome").after(txt);

$("#btn").click(function(){
  
});
*/
$('input').keyup(function(){
  if($(this).val() == ''){
    //pegando a referencia do input com o this
    $('#btn').prop('disabled',true)
    //prop() chega se o valor esta true or false
  }else{
    $('#btn').prop('disabled',false)
  }
})