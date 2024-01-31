@include('layouts.navbar')
<!DOCTYPE html>
<head>
    <style>
        .table {
  border-collapse: collapse;
  width: 50%;
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
                committes
            </h3>
        </div>
    </div>
    <br>
    <p>Conference Chair</p>
    <br>
    <div class="container mt-3">
        <table id="resizeMe" class="resizable-table table table-hover  ">
          <tbody>
            <tr >
              <td>Nektarios Chrysoulakis, FORTH</td>
            </tr>

          </tbody>
        </table>
      </div>
    <p>Steering Committee</p>
    <br>
    <div class="container mt-3">
        <table id="resizeMe" class="resizable-table table table-hover  ">
          <tbody>
            <tr >
              <td>Devis Tuia, EPFL</td>
            </tr>
            <tr>
              <td>Monika Kuffer, University of Twente</td>
            </tr>
            <tr>
              <td>Clément Mallet, Université Gustave Eiffel, IGN, ENSG</td>
            </tr>
            <tr>
                <td>Hannes Taubenböck, DLR</td>
              </tr>
          </tbody>
        </table>
      </div>

    <p> Organizing Committee</p>
    <div class="container mt-3">
        <table id="resizeMe" class="resizable-table table table-hover  ">

          <tbody>
            <tr >
              <td>Maria Angela Abascal Imizcoz Abrams, University of Twente, The Netherlands</td>

            </tr>

            <tr >
                <td>Michael Abrams, JPL, USA</td>

              </tr>
              <tr >
                <td>Claudia Almeida, National Institute for Space Research, Brazil</td>

              </tr>
              <tr >
                <td>Erchan Aptoula, Gebze Technical University, Turkey</td>

              </tr>
              <tr >
                <td>Jacob Arndt, Oak Ridge National Laboratory, USA</td>

              </tr>
              <tr >
                <td>Felix Bachofer, DLR, Germany</td>

              </tr>
              <tr >
                <td>Richard Bamler, DLR & Technische Universität München, Germany</td>

              </tr>
              <tr >
                <td>Yifang Ban, KTH Royal Institute of Technology, Sweden</td>

              </tr>
              <tr >
                <td>Ellen Banzhaf, UFZ, Germany</td>

              </tr>
              <tr >
                <td>Giovanni Barbotti, Politecnico di Milano, Italy</td>

              </tr>
              <tr >
                <td>Benjamin Bechtel, Ruhr-University Bochum, Germany</td>

              </tr>
              <tr >
                <td>Mariana Belgiu, University of Twente, The Netherlands</td>
              </tr>
              <tr >
                <td>Thomas Blaschke, University of Salzburg, Austria</td>
              </tr>
              <tr >
                <td>Cosmin Bonchis, West University of Timisoara, Romania</td>
              </tr>
              <tr >
                <td>Xavier Briottet, ONERA, France</td>
              </tr>
              <tr >
                <td>Ingunn Burud, Norwegian University of Life Sciences, Norway</td>
              </tr>
              <tr >
                <td>Laurent Caraffa, IGN, France</td>
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
