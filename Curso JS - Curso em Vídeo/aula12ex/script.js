var agora = new Date()
var hora = agora.getHours()
var texto = window.document.getElementById('div1')
var imagens = window.document.getElementById('div2')
texto.innerHTML=`Agora são ${hora} horas.`
if (hora >= 1  && hora < 6){
    
}else if (hora < 12 && hora >=6){
    console.log('Bom dia!')
}else if(hora <= 18 && hora >= 12 ){
    console.log('Boa tarde!')
}else{
    console.log('Boa noite!')
}
