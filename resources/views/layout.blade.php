<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Excellent Taste</title>
    <link rel='stylesheet' href='css/app.css' />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css'
          integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/r-2.2.2/sl-1.3.0/datatables.min.css"/>
</head>
<body>
<div class='bg-image'></div>
<div class='d-flex flex-column container-fluid h-100'>
    <div class='row d-flex spacing_between_content'>
        <nav class='col-12 navbar navbar-light navbar-expand-md navigation-clean navbar-expand-xl'>
            <div class='container-fluid'>
                <a class='navbar-brand' href='\'><img
                        height="25px" alt="Logo"/>
                </a>
                <button class='navbar-toggler' data-toggle='collapse' data-target='#navcol-1'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse'
                     id='navcol-1'>
                    <ul class='nav navbar-nav ml-auto'>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="/reservation/list/">Reserveringen</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="/order/list/bar/">Overzicht
                                Bestellingen Barman</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link"
                               href="/menu-items/management/exclude-drinks/">
                                Gerechten Beheren
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class='row d-flex spacing_between_content flex-grow-1'>
        @yield('content')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-html5-1.5.6/r-2.2.2/sl-1.3.0/datatables.min.js"></script>
</body>
</html>
