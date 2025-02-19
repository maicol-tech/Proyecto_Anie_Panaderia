<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="public/assets/img/favicon.png">
    <title>
        Registro
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="public/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="public/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="public/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">

            <div class="col-12">
            </div>
        </div>
    </div>

<main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0" style="font-family:cursive;">Ya casi Terminamos Tu pedido</h4>
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0" style="font-family:cursive;">Completa esta Informacion Para terminar</h4>
                                </div>
                            </div>

                      <div class="card-body">


                <form action="?controlador=pedido&accion=registrar" method="post" id="frmRegistrarPedido">
                    
                    <div class="input-group input-group-outline my-3">
                    Fecha Pedido
                    <input type="datetime-local" name="ped_fecha_pedido" class="form-control">
                    </div>

                    <div class="input-group input-group-outline my-3">
                    Fecha de Entrega
                    <input type="datetime-local" name="ped_fecha_entrega" class="form-control">
                    </div>

                    <div class="input-group input-group-outline my-3">
                    Direccion
                    <input type="text" name="ped_direccion" class="form-control">
                    </div>
                   
                    <input class="btn btn-primary" type="submit" name="Aceptar"><br>
                 </form>

                     </div>
                  </div>
                </div>
            </div>
        </div>
    </main>
 <!--   Core JS Files   -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script Type="text/javascript" src="public/assets/js/scripts.js"></script>
    <script src="public/assets/js/core/popper.min.js"></script>
    <script src="public/assets/js/core/bootstrap.min.js"></script>
    <script src="public/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="public/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="public/assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>

