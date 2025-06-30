<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('icons/ger_func.png') }}"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- CSS do DataTables com Bootstrap -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <title>Employee Manager</title>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar text-white navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/icons/ger_func.png') }}">Employee Manager<img src="{{ asset('icons/ger_func.png') }}" style="width: 35px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('funcionarios*') ? 'active' : '' }}" href="{{ route('funcionarios.index') }}"><i class="bi bi-people"></i> Funcionários</a>
                    </li>                                  
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo -->
    <div class="container mt-4 flex-fill">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Todos os direitos reservados.</p>
            <p class="mb-0">Desenvolvido por <a href="https://encodify.com.br" target="_blank">Emerson Santos</a>.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- JS do DataTables + Bootstrap -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

    <script>
       $(document).ready(function() {
            var tabela = $('#tabela').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
                },
                dom: '<"top d-flex justify-content-between align-items-center"Bf>rt<"bottom d-flex justify-content-between align-items-center"ilp><"clear">',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: '<i class="bi bi-filetype-xls"></i>',
                        className: 'btn dataTable'
                    },
                    {
                        text: '<i class="bi bi-funnel"></i>',
                        className: 'btn dataTable',
                        action: function ( e, dt, node, config ) {
                            dt.search('').columns().search('').draw();
                        }
                    }
                ],
                lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]],
                pageLength: 10
            });
        });
    </script>
</body>
</html>
