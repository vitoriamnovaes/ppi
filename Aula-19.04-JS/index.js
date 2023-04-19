function sorteiaNumero(){
    let numero=Math.random();
    let pHtml=document.createElement("p");
    pHtml.innerHTML=numero;

    let divNumeros=document.getElementById("numeros");
    divNumeros.appendChild(pHtml);
    }