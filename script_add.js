$(document).ready(function() {
    $(".add").click(function() {
        var id = $(this).val();

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById(id).innerHTML = this.responseText;
        }
        xhttp.open("GET", "store_add.php?item_id=" + id);
        xhttp.send();
    });

});