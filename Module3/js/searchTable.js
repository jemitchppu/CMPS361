function searchTable() {
    var input, filter, table, tr, td, i, j, textValue;
    
    // Get input value and table elements
    input = document.getElementById("searchInput");
    filter = input.value.toLowerCase();
    table = document.getElementById("dataGrid");
    tr = table.getElementsByTagName("tr"); // Get all rows

    // Keep track if a match was found
    var rowsFound = false;

    // Loop through table rows (start from 1 to skip the header)
    for (i = 1; i < tr.length; i++) {
        tr[i].style.display = "none"; // Initially hide all rows
        td = tr[i].getElementsByTagName("td"); // Get all cells in this row

        // Loop through each cell in the row
        for (j = 0; j < td.length; j++) {
            if (td[j]) {
                textValue = td[j].textContent || td[j].innerText; // Get cell text content
                // Check if the text matches the filter
                if (textValue.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = ""; // Show row if match is found
                    rowsFound = true;
                    break; // Exit the loop once a match is found
                }
            }
        }
    }

    // Handle the case when no rows are found
    if (!rowsFound) {
        alert("No matching records found.");
    }
}