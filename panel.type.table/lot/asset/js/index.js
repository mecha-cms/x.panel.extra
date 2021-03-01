// Modified from <https://github.com/beatdjam/sorTable.js>
((win, doc, _) => {

    function querySelectorAll(query, base) {
        return (base || doc).querySelectorAll(query);
    }

    function addEventTo(elem, name, fn) {
        return elem.addEventListener(name, fn, false);
    }

    function addEventsTo(elems, name, fn) {
        elems.forEach(elem => {
            addEventTo(elem, name, fn);
        });
    }

    function getTableElement(elem) {
        let f = th => {
            return 'table' === th.tagName.toLowerCase() ? th : f(th.parentNode);
        };
        return f(elem.parentNode);
    }

    function getTableData(tableElem) {
        let data = [];
        for (let i = 1, l = tableElem.length; i < l; i++) {
            for (let j = 0, m = tableElem[i].cells.length; j < m; j++) {
                if ('undefined' === typeof data[i]) {
                    data[i] = {};
                    data[i]['key'] = i;
                }
                data[i][j] = tableElem[i].cells[j].innerText;
            }
        }
        return data;
    }

    function sortTableData(tableData, colNo, sortOrder) {
        return tableData.sort((a, b) => {
            if (a[colNo] < b[colNo]) {
                return -1 * sortOrder;
            }
            if (a[colNo] > b[colNo]) {
                return sortOrder;
            }
            return 0;
        });
    }

    function rewriteTableHTML(table, tableData) {
        let html = "";
        tableData.forEach(x => {
            html += querySelectorAll('tr', table)[x['key']].outerHTML;
        });
        querySelectorAll('tbody', table)[0].innerHTML = html;
    }

    function removeHeaderClass(table, tableData) {
        let tableElem = querySelectorAll('thead th', table);
        tableElem.length && tableElem.forEach(elem => {
            elem.classList.remove('is:asc');
            elem.classList.remove('is:desc');
        });
    }

    function addHeaderClass(elem, sortOrder) {
        elem.classList.add('is:' + (1 === sortOrder ? 'asc' : 'desc'));
    }

    function sortEvent(elem) {
        let table = getTableElement(elem);
        if (!table) {
            return;
        }
        let tableData = getTableData(querySelectorAll('tr', table));
        let sortOrder = !elem.classList.contains('is:asc') ? 1 : -1;
        tableData = sortTableData(tableData, elem.cellIndex, sortOrder);
        rewriteTableHTML(table, tableData);
        removeHeaderClass(table, tableData);
        addHeaderClass(elem, sortOrder);
    }

    function sortTable() {
        let elems = querySelectorAll('table.table.can\\:sort');
        elems.length && elems.forEach(elem => {
            let headers = querySelectorAll('thead th', elem);
            addEventsTo(headers, 'click', e => {
                sortEvent(e.target);
            });
        });
    }

    _.on('change', function() {
        sortTable();
    });

    sortTable();

})(window, document, _);
