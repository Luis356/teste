//  VALIDA NOME

function validaNome(elemento) {
  var formControl = elemento.parentElement;

  if (elemento.value == 0) {
    formControl.className = "form-control error";
    return false;
  } else {
    formControl.className = "form-control success";
  }
}

//  VALIDA EMAIL

function validaEmail(elemento) {
  var formControl = elemento.parentElement;

  if (elemento.value == 0) {
    formControl.className = "form-control error";
  } else if (!checkEmail(elemento.value)) {
    formControl.className = "form-control error";
  } else {
    formControl.className = "form-control success";
  }
}

//  VALIDA SENHA

function validaSenha(elemento) {
  var formControl = elemento.parentElement;

  if (elemento.value == 0) {
    formControl.className = "form-control error";
  } else {
    formControl.className = "form-control success";
    confirmaSenha(csenha);
  }
}

//  CONFIRMA SENHA

function confirmaSenha(elemento) {
  var formControl = elemento.parentElement;
  const senha = document.getElementById("senha").value;

  if (senha != elemento.value) {
    formControl.className = "form-control error";
  } else {
    formControl.className = "form-control success";
  }
}

//  VALIDA CEP

function validaCep(elemento) {
  var formControl = elemento.parentElement;

  if (elemento.value != 0) {
    formControl.className = "form-control success";
  } else {
    formControl.className = "form-control error";
  }
}

//  CHECA EMAIL

function checkEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
