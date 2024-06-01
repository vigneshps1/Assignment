//Assignment script.js
var selectedRow = null

function onFormSubmit() {
    if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        resetForm();
    }
}

function readFormData() {
    var formData = {};
    formData["Ccode"] = document.getElementById("Ccode").value;
    formData["name"] = document.getElementById("name").value;
    formData["barcode"] = document.getElementById("barcode").value;
    formData["Bquantity"] = document.getElementById("Bquantity").value;
    formData["Oquantity"] = document.getElementById("Oquantity").value;
    formData["Tquantity"] = document.getElementById("Tquantity").value;
    formData["price"] = document.getElementById("price").value;
    formData["discount"] = document.getElementById("discount").value;
    formData["Damount"] = document.getElementById("Damount").value;
    formData["Tamount"] = document.getElementById("Tamount").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("quotation").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.Ccode;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.name;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.barcode;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.Bquantity;
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = data.Oquantity;
    cell6 = newRow.insertCell(5);
    cell6.innerHTML = data.Tquantity;
    cell7 = newRow.insertCell(6);
    cell7.innerHTML = data.price;
    cell8 = newRow.insertCell(7);
    cell8.innerHTML = data.discount;
    cell9 = newRow.insertCell(8);
    cell9.innerHTML = data.Damount;
    cell10 = newRow.insertCell(9);
    cell10.innerHTML = data.Tamount;
    cell11 = newRow.insertCell(10);
    cell11.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}

function resetForm() {
    document.getElementById("Ccode").value = "";
    document.getElementById("name").value = "";
    document.getElementById("barcode").value = "";
    document.getElementById("Bquantity").value = "";
    document.getElementById("Oquantity").value = "";
    document.getElementById("Tquantity").value = "";
    document.getElementById("price").value = "";
    document.getElementById("discount").value = "";
    document.getElementById("Damount").value = "";
    document.getElementById("Tamount").value = "";
    selectedRow = null;
}


function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("quotation").deleteRow(row.rowIndex);
        resetForm();
    }
}
