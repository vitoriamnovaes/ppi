let urlendopoitn = "http://localhost/aula/api_listausuarios.php";

function ajax_getallusers(){

    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", urlendpoint, true);
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            //a conexão foi bem sucedida e o servidor retornou os dados http 200
            let listaUsr= JSON.parse(this.responseText);
            altualizarLista(listaUsr);
        }
    };
    xhttp.send();
}
function atualizarLista(listaUsr){
    document.querySelector("#minhalista").innerHTML="";
    for(let i=0; i<listaUsr.lenght; i++){
        let tr=document.createElement("tr");
        let td1=document.createElement("td");
        let td2=document.createElement("td");
        td1.innerHTML=listaUsr[i].nome;
        td2.innerHTML=listaUsr[i].email;
        tr.appendChild(td1);
        tr.appendChild(td2);
        document.querySelector("#minhalista").appendChild(tr);
    }
}