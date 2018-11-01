function validarSenha(){
	senha1 = document.f1.senha1.value
	senha2 = document.f1.senha2.value

  if (senha1 == '') {
    alert('Campo 1 está vazio!');
}else if (senha2 == '') {
  alert('Campo 2 está vazio!');

  }else if (senha1 == senha2)
		alert("AS SENHAS COINCIDEM")
	else
		alert("SENHAS DIFERENTES")
}
