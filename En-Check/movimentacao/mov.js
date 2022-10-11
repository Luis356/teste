const login = document.querySelector("#troca").addEventListener("click", e => {
    if (e.target.textContent == 'login') {
        e.target.textContent = 'cadastro';
        document.querySelector("#login").classList.add("oculta")
    }else{
        e.target.textContent = 'login';
        document.querySelector("#login").classList.remove("oculta")

    }
})