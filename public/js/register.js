const submitRegister = () => {
    with("formRegister"){
        console.log(email.value, nameUser.value, sap.value, password.value)
        if(!validEmail(email.value)) {alert("Informe corretamente seu email!"); return}
        if(nameUser.value == "") {alert("Por favor, informe o seu nome de usuário!"); return }
        if(password.value == "") {alert("Por favor, informe sua senha!"); return}
        if(!validPassword(password.value)) {alert("Senha não compatível com as regras de criação"); return}

        const res = request({
            email: email.value,
            nameUser: nameUser.value,
            sap: sap.value,
            password: password.value
        }, 
        "/account/registerLogin",
        "POST")
    }
}


function validPassword(pwd){
    reg = /^[0-9a-zA-Z]{8,20}/g;
    return reg.test(pwd)
}

function validEmail(email){
    reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return reg.test(email)
}


const request = async(obj, route, method = undefined) =>{
    //configura os headers
    const head = new Headers();
    head.append('Content-Type', 'application/json');

    //configura a requisição
    const req = {
        method: method || 'GET',
        headers:  head,
        mode: "cors",
        cache: "default",
        body: JSON.stringify(obj)
    };

    const response = await fetch(route, req)
    
}