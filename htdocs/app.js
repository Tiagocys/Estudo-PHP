var login = document.getElementById('login');
var cadastro = document.getElementById('cadastro');
var bt_login = document.getElementById('bt_login');
var bt_cadastro = document.getElementById('bt_cadastro');

bt_cadastro.onclick = function(){
    login.style.display = 'none';
    cadastro.style.display = 'block';
}

bt_login.onclick = function(){
    login.style.display = 'block';
    cadastro.style.display = 'none';
}
