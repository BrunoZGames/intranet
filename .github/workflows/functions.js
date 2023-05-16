function btnConsulta(){
    alert("Se ah dado clic al enlace pero el sitio no ah sido abierto");
    var str = document.getElementById("text").value;
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "consulta.php?q="+str);
    xhttp.send();
}