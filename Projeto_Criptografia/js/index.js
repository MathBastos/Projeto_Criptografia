
/*
async function get(){

    let promise = await fetch("php/get.php", {
        method: "GET"
    });

    let dados = await promise.json();
}
*/


// function entrar(){
//     let form = document.getElementById('formulario');
//     let formData = new FormData(form);

//     fetch("php/autenticar.php", {
//         method: "POST",
//         body: cript(formData)
//     });
// }

function entrar(){
    let form = document.getElementById('formulario');
    let formData = new FormData(form);

    fetch("php/decriptografia.php", {
        method: "POST",
        body: cript(formData)
    });
}