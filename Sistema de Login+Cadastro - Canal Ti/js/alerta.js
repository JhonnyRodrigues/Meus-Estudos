const formCad = document.getElementById('formCad');

if (formCad) {
    formCad.addEventListener("submit", async (evento) => {
        evento.preventDefault(); //não recarregar a página
console.log("chamou a função alerta()");

        /** Receber os dados do Formulário */
        const dadosForm = new FormData(formCad); /* objeto que contém os dados do formulário */

        // const dadosRequest = await fetch("cadastrar.php", {
        const dadosRequest = await fetch("cadastrar_usando_sweetalert2.php", { /** faz requisição a um arquivo que, por sua vez, recebe um objeto com os dados da request */
            method: "POST",
            body: dadosForm
        });

        const resposta = await dadosRequest.json();
console.log(resposta);
console.log(resposta['msg']);

        if (resposta['status']) {
            Swal.fire({
                title: 'Sucesso!',
                text: resposta['msg'],
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            })
            //   .then((result) => {
            //     if (result.isConfirmed) {
            //       Swal.fire(
            //         'Deleted!',
            //         'Your file has been deleted.',
            //         'success'
            //       )
            //     }
            //   })
        } else {
            Swal.fire({
                title: 'Erro',
                text: resposta['msg'],
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            })
            //   .then((result) => {
            //     if (result.isConfirmed) {
            //       Swal.fire(
            //         'Deleted!',
            //         'Your file has been deleted.',
            //         'success'
            //       )
            //     }
            //   })
        }
    })

}

/** Exemplo básico
function alerta() {
    Swal.fire('Sucesso', 'O usuário foi cadastrado!', 'success');
}

alerta();  */