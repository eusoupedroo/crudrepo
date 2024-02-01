function deleteData(id) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./delete.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    var params = "id=" + id;

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("phpResponse").innerHTML = xhr.responseText;
        }
    };

    xhr.send(params);
}

function updateData(id) {
    var username = document.getElementById("username" + id).value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./update.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Envie os parâmetros id e username para o arquivo PHP
    var params = "id=" + encodeURIComponent(id) + "&username=" + encodeURIComponent(username);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("phpResponse" + id).innerHTML = xhr.responseText;
        }
    };
    xhr.send(params);
}
