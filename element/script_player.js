function createSortableTable(targetContainerId, tableData) {
    const container = document.getElementById(targetContainerId);
    if (!container) {
        console.error(`Container with ID "${targetContainerId}" not found.`);
        return;
    }

    // Initialize sorting state for the table
    const sortStates = new Array(tableData.headers.length).fill(false);

    // Function to create the table element
    function generateTable() {
        const tableContainer = document.createElement("div");

        // // Add a title above the table
        // const title = document.createElement("h3");
        // title.textContent = tableData.title;
        // tableContainer.appendChild(title);

        // Create the table element
        const table = document.createElement("table");

        // Apply custom table class if provided
        // if (classes.table) {
        //     table.className = classes.table;
        // }

        // Create the header row
        const headerRow = document.createElement("tr");
        tableData.headers.forEach((header, colIndex) => {
            const th = document.createElement("th");
            th.textContent = header;

            // // Apply custom header cell class if provided
            // if (classes.headerCell) {
            //     th.className = classes.headerCell;
            // }

            // Add sorting functionality to the headers
            th.addEventListener("click", () => handleSort(colIndex));
            headerRow.appendChild(th);
        });
        table.appendChild(headerRow);

        // Create the data rows
        tableData.rows.forEach(row => {
            const tr = document.createElement("tr");
            row.forEach(cellData => {
                const td = document.createElement("td");
                td.textContent = cellData;

                // Apply custom data cell class if provided
                // if (classes.dataCell) {
                //     td.className = classes.dataCell;
                // }

                tr.appendChild(td);
            });
            table.appendChild(tr);
        });

        tableContainer.appendChild(table);
        return tableContainer;
    }

    // Function to handle sorting
    function handleSort(columnIndex) {
        const isAscending = !sortStates[columnIndex];
        sortStates[columnIndex] = isAscending;

        tableData.rows.sort((a, b) => {
            const valA = a[columnIndex];
            const valB = b[columnIndex];

            // Compare numbers or strings
            if (!isNaN(valA) && !isNaN(valB)) {
                return isAscending ? valA - valB : valB - valA;
            } else {
                return isAscending ?
                    String(valA).localeCompare(String(valB), 'th') :
                    String(valB).localeCompare(String(valA), 'th');
            }
        });

        // Re-render the table
        renderTable();
    }

    // Function to render the table
    function renderTable() {
        container.innerHTML = ""; // Clear existing content
        container.appendChild(generateTable());
    }

    // Initial render
    renderTable();
}