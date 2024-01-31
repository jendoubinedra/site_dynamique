@include('layouts.navbar')
<!DOCTYPE html>
<head>
    <style>
        .table {
  border-collapse: collapse;
  width: 100%;
}

.table,
.table th,
.table td {
  border: 1px solid #ccc;
}

.table th,
.table td {
  padding: 0.5rem;
}

.table th {
  position: relative;
   cursor: grab;
      user-select: none;
}
   .table th:active {
      cursor: grabbing;
    }

.resizer {
  position: absolute;
  top: 0;
  right: 0;
  width: 5px;
  cursor: col-resize;
  user-select: none;
}

.resizer:hover,
.resizing {
  border-right: 2px solid blue;
}

.dragging {
  background-color: #f0f0f0;
}
.table-striped{
    background-color: gray;
}

    </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    <div class="section mt-0 py-5 ">
        <div class="container">
            <h3 class="mb-0">
                Key Dates
            </h3>
        </div>
    </div>

    <br>
    <div class="container mt-3">
        <table id="resizeMe" class="resizable-table table table-hover  table table-striped">
          <thead>
             <tr id="header-row">
              <th class="draggable-table" data-column="0">Action</th>
              <th class="draggable-table" data-column="1">Deadline</th>

            </tr>
          </thead>
          <tbody>
            <tr >
              <td>Special Sessions Proposal Deadline</td>
              <td>30 June 2022</td>

            </tr>
            <tr>
              <td>Open submission Website</td>
              <td>7 September 2022</td>

            </tr>
            <tr>
              <td>Papers Submission Deadline</td>
              <td>9 December 2022 (updated)</td>

            </tr>
            <tr>
              <td>Acceptance Notification</td>
              <td>31 January 2023</td>

            </tr>
            <tr>
              <td>Open Registration Website</td>
              <td>31 January 2023</td>
            </tr>
            <tr>
              <td>Early Registration Deadline</td>
              <td>31 March 2023</td>
            </tr>
            <tr>
              <td>Camera-ready Deadline</td>
              <td>7 April 2023</td>
            </tr>
            <tr>
              <td>Satellite Events</td>
              <td>16 May 2023</td>
            </tr>
            <tr>
              <td>Main Conference</td>
              <td>17 - 19 May 2023</td>

            </tr>
          </tbody>
        </table>
      </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
  const makeTableResizableAndSortable = function (table) {
    const tableBody = table.querySelector('tbody');

    // Make rows sortable
    const rowsSortable = new Sortable(tableBody, {
      animation: 150,
    });

    // Make columns and table header cells draggable using interact.js
    const headers = table.querySelectorAll('th');
    interact(headers).draggable({
      // Enable both left and right edges for dragging
      edges: { left: true, right: true, bottom: false, top: false },
      listeners: {
        start(event) {
          const target = event.target;
          target.classList.add('dragging');
        },
        move(event) {
          const target = event.target;
          const dx = event.dx;
          target.style.transform = `translate(${dx}px)`;
        },
        end(event) {
          const target = event.target;
          target.style.transform = '';
          target.classList.remove('dragging');
        },
      },
    }).resizable({
      // Enable right edge for resizing
      edges: { right: true },
      restrictEdges: {
        outer: 'parent',
      },
      restrictSize: {
        min: { width: 50 },
      },
      listeners: {
        move(event) {
          const target = event.target;
          const width = parseFloat(target.style.width) || 0;
          target.style.width = width + event.dx + 'px';
        },
      },
    });
  };

  const tables = document.querySelectorAll('.resizable-table');
  tables.forEach(function (table) {
    makeTableResizableAndSortable(table);
  });
});



document.addEventListener('DOMContentLoaded', function () {
const createResizableTable = function (table) {
const cols = table.querySelectorAll('th');
[].forEach.call(cols, function (col) {
// Add a resizer element to the column
const resizer = document.createElement('div');
resizer.classList.add('resizer');


// Set the height
resizer.style.height = `${table.offsetHeight}px`;


col.appendChild(resizer);


createResizableColumn(col, resizer);
});
};


const createResizableColumn = function (col, resizer) {
let x = 0;
let w = 0;


const mouseDownHandler = function (e) {
x = e.clientX;


const styles = window.getComputedStyle(col);
w = parseInt(styles.width, 10);


document.addEventListener('mousemove', mouseMoveHandler);
document.addEventListener('mouseup', mouseUpHandler);


resizer.classList.add('resizing');
};


const mouseMoveHandler = function (e) {
const dx = e.clientX - x;
col.style.width = `${w + dx}px`;
};


const mouseUpHandler = function () {
resizer.classList.remove('resizing');
document.removeEventListener('mousemove', mouseMoveHandler);
document.removeEventListener('mouseup', mouseUpHandler);
};


resizer.addEventListener('mousedown', mouseDownHandler);
};


createResizableTable(document.getElementById('resizeMe'));
});




</script>
</html>
<br><br><br>
@include('layouts.footer')
