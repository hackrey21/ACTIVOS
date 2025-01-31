<?php
include("connection/ServerConfiguration.php");
include("connection/Dbconnection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/homestructure.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.css" />

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.js"></script>

  <link rel="icon" href="image/F.png" sizes="192x192" />
  <title>ASSETS-Files TI</title>
</head>

<body>
  <nav class="sb-topnav navbar navbar-expand navbar-dark">
    <a class="navbar-brand" href="index.html">
      <h1 class="logotipo">FISHER & PAYKEL</h1>
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto ml-md-0" style="position: absolute; right: 0.5cm">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#"><b>{{current_user.fullname}}</b></a><a class="dropdown-item" href="#"><b>{{current_user.user_type}}</b></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url_for('inicio_dica') }}">Volver al inicio</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url_for('logout') }}">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <a class="nav-link" href="index.html">
              <div class="sb-nav-link-icon">
                <i class="fa-solid fa-house">
                  <spam>Inicio</spam>
                </i>
              </div>
            </a>
            <a class="nav-link" href="home.html">
              <div class="sb-nav-link-icon">
                <i class="fa-solid fa-file-excel">
                  <spam>Archivos excel</spam>
                </i>
              </div>
            </a>
          </div>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <div class="filter-sh">
        <div class="icons"><i class="fa-solid fa-plus"></i></div>
        <div>
          <div class="search-container">
            <input type="text" id="searchInput" placeholder="Buscar" oninput="searchMain()" />
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>

      <main class="mainContent" id="areas-container" style="display: flex; flex-wrap: wrap">
        <div class="container">
          <div class="content-wrapper">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Registros de activos</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                          <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                  <div class="col-sm-12 col-md-6"></div>
                                  <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-12" id="news">
                                    <table id="example" class="display expandable-table dataTable no-footer" style="width: 100%" role="grid">
                                      <thead>
                                        <tr role="row">
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            ID
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Co.
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Numero de activo
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Nombre de activo
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            MER#
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Fecha de adquisicion
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Costo/COI
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Valor neto en libros
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Moneda
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Area especifica
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Ubicacion
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Existe activo
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            ¿Activo etiquetado?
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Foto
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Modelo
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Marca
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            No. Serie
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Pedimento
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Estado actual
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Notas adicionales
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Experto de apoyo
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Auditor
                                          </th>
                                          <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#" style="width: 70px">
                                            Acciones
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr class="odd">
                                          <?php
                                          $stmt = $pdo->prepare("SELECT * FROM excel_info");
                                          if ($stmt->execute()) {
                                            while ($row = $stmt->fetch()) {
                                              print_r($row);
                                            }
                                          }
                                          ?>
                                          <td class="select-checkbox" contenteditable="true">

                                          </td>

                                          <td>
                                            <form action="" method="POST">
                                              <input type="hidden" name="txtID" value="" />
                                              <button type="button" name="action" value="Delete" class="red">
                                                <i class="fa-solid fa-trash"></i>
                                              </button>
                                            </form>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-12 col-md-5"></div>
                                  <div class="col-sm-12 col-md-7"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12 col-md-5"></div>
                            <div class="col-sm-12 col-md-7"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- Modal -->
      <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage" />
        <button>Change</button>
      </div>

      <footer class="Myfooter">
        <p>© <span id="year"></span> Fisher & Paykel.</p>
      </footer>
    </div>
  </div>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/ffc59e7747.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/database.js"></script>
  <script src="js/datafilter.js"></script>
  <script src="js/registerM.js"></script>
  <script src="js/requests.js"></script>
  <script src="js/script.js"></script>
  <script src="js/wrap.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var modal = document.getElementById("imageModal");
      var modalImg = document.getElementById("modalImage");
      var img = document.querySelector(
        "#example tbody tr:first-child td:nth-child(7) img"
      ); // Selecciona la primera imagen en la tabla

      img.onclick = function() {
        modal.style.display = "flex";
        modalImg.src = this.src;
      };

      var closeBtn = document.querySelector(".close");
      closeBtn.onclick = function() {
        modal.style.display = "none";
      };
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var table = document.getElementById("example");

      table.addEventListener("input", function(event) {
        var cell = event.target;
        var rowIndex = cell.parentNode.rowIndex;
        var cellIndex = cell.cellIndex;
        var newValue = cell.innerText;

        console.log(
          "Se modificó la celda en la fila " +
          rowIndex +
          " y la columna " +
          cellIndex +
          ". Nuevo valor: " +
          newValue
        );
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#example").DataTable();
    });
  </script>
  <script>
    // Obtener el icono de "add"
    var addIcon = document.querySelector(".filter-sh .icons i.fa-plus");

    // Agregar un evento de clic al icono de "add"
    addIcon.addEventListener("click", function() {
      // Obtener la tabla
      var table = document.getElementById("example");

      // Crear una nueva fila
      var newRow = table.insertRow();

      // Crear celdas vacías para cada columna, excepto la última
      for (var i = 0; i < table.rows[0].cells.length - 1; i++) {
        newRow.insertCell(i).setAttribute("contenteditable", "true");
      }

      // Crear la celda para el botón de eliminar en la última columna
      var deleteCell = newRow.insertCell(table.rows[0].cells.length - 1);
      var deleteButton = document.createElement("button");
      deleteButton.setAttribute("type", "button");
      deleteButton.setAttribute("class", "red");
      deleteButton.innerHTML = '<i class="fa-solid fa-trash"></i>';
      deleteButton.addEventListener("click", function() {
        if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
          // Eliminar la fila correspondiente
          var row = this.parentNode.parentNode;
          row.parentNode.removeChild(row);
        }
      });
      deleteCell.appendChild(deleteButton);
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var imageCells = document.querySelectorAll(".image-cell");

      imageCells.forEach(function(cell) {
        var img = cell.querySelector(".img-repos");
        var addIcon = cell.querySelector(".add-icon");
        var fileInput = cell.querySelector(".img-upload");

        if (!img.src || img.src === "" || img.src === "null") {
          addIcon.style.display = "block";
        }

        addIcon.addEventListener("click", function() {
          fileInput.click();
        });

        fileInput.addEventListener("change", function() {
          var file = this.files[0];
          var reader = new FileReader();
          reader.onload = function(event) {
            img.src = event.target.result;
            img.style.display = "block";
            addIcon.style.display = "none";
          };
          reader.readAsDataURL(file);
        });
      });
    });
  </script>
</body>

</html>