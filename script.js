function changeTable(){
    var tableHeaderRowCount = 1;
    var table = document.getElementById('countries');
    var rowCount = table.rows.length;
    for (var i = tableHeaderRowCount; i < rowCount; i++) {
    table.deleteRow(tableHeaderRowCount);
    }
}