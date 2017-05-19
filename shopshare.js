function getJSON()
{
    request = new XMLHttpRequest();
    request.open("get", "https://localhost:8000/data.json", true);
    request.onreadystatechange = handleJSON;
    request.send();
}

function handleJSON()
{
    if (request.readyState == 4 && request.status == 200) {
        data = JSON.parse(request.responseText);
        document.getElementById("panel-body").innerHTML = data.pic;
        document.getElementById("panel-footer-price").innerHTML = data.price;
        document.getElementById("panel-footer-name").innerHTML = data.name;
    }

}