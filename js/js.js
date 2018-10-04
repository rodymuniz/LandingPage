
var redirect = function (cliente) {
    if (cliente) {
        document.getElementById("cadastrar").onclick = function () {
            location.href = "./obrigado.html";
        };
    }
}