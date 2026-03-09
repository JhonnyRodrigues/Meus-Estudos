<?php
"Use como exemplo a aplicação TI_RELACAO_TERMOS_USUARIOS_F: crie botão 'insert_impostor' e esconda o botão insert original"
?>
<script>
Swal.fire({
	title: "Atenção!",
	text: "Ao criar um novo contrato, será prescrita a vigência dos contratos anteriores para os equipamentos selecionados.",
	type: "warning",
	showCancelButton: true,
	confirmButtonColor: "#1abf90",
	cancelButtonColor: "#f84d70",
	confirmButtonText: "Sim, prescrever anteriores!",
	cancelButtonText: "Cancelar"
}).then((result) => {
	// console.log(result);
	// if (result.isConfirmed) {
	if (result.hasOwnProperty('value') && result.value) {
		// alert('confirma operação?');
		document.querySelector('#sc_b_ins_b').click();
	}
});