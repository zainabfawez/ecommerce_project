$(document).ready(function() {
    $(".buy").click(function() {
        var id = $(this).val();

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById(id).innerHTML = this.responseText;
        }
        xhttp.open("GET", "client_buy.php?item_id=" + id);
        xhttp.send();
    });

});