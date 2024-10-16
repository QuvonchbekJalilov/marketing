<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <style>
        /* Style for Select2 dropdown */
        .select2-container--default .select2-selection--multiple {
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 4px;
            color: black !important; /* Text color */
            min-height: 38px; /* Adjust height as needed */
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #007bff;
            border-color: #007bff;
            color: black !important; /* Text color */
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: black !important; /* Text color */
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            color: black !important; /* Text color */
        }

        /* Ensure text color inside Select2 dropdown */
        .select2-container--default .select2-results__option {
            color: black !important; /* Text color */
        }
    </style>

    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Маркетинговая Ассоциация Узбекистана - Marketing.uz | By DORA® System</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/favicon.ico') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/dataTables.bs5.min.css') }}">

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/select2.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/select2-theme.min.css') }}">

    <!-- For employees CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/jquery.steps.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/quill.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/datepicker.min.css') }}">
    <!--! END: Vendors CSS-->

    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/theme.min.css') }}">
    <!-- Add in your <head> section -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js"></script>


    <!-- Add before the closing </body> tag -->

    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
    <script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--! ================================================================ !-->
<!--! [Start] Navigation Manu !-->
<!--! ================================================================ !-->
@include('provider.components.sidebar')
<!--! ================================================================ !-->
<!--! [End]  Navigation Manu !-->
<!--! ================================================================ !-->

    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    @include('provider.components.header')
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        @yield('content')
        @include('provider.components.footer')
    </main>
    <!-- Add this in your <head> section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Add this before closing </body> tag -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    // Check for success message in the session
    @if(session('success'))
        toastr.success("{{ session('success') }}", "Muvaffaqiyatli", {
            positionClass: "toast-bottom-right",
            closeButton: true,
            progressBar: true,
            timeOut: "5000" // Duration for which the message is displayed
        });
    @endif
</script>
<script>
    // Check for error message in the session
    @if(session('error'))
        toastr.error("{{ session('error') }}", "Xato", {
            positionClass: "toast-bottom-right",
            closeButton: true,
            progressBar: true,
            timeOut: "5000" // Duration for which the message is displayed
        });
    @endif
</script>

    <script>
        function confirmDelete(event) {
            event.preventDefault();
            var num1 = Math.floor(Math.random() * 10) + 1;
            var num2 = Math.floor(Math.random() * 10) + 1;
            var answer = prompt(`Please solve the following to confirm deletion: ${num1} + ${num2} = ?`);
    
            if (answer == (num1 + num2)) {
                event.target.submit();
            } else {
                alert('Wrong answer. Correct answer is required to delete.');
            }
        }
    </script>
    
    <style>
        .card {
            transition: transform 0.2s, box-shadow 0.2s;
            border: none;
        }
    
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    
        .card-title {
            font-size: 1.3rem;
            color: #007bff;
        }
    
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    
        .pagination .page-link {
            background-color: #0f172a;
            color: #fff;
            border-color: #000;
        }
    
        .pagination .page-link:hover {
            background-color: #555;
            color: #fff;
            border-color: #000;
        }
    
        .pagination .page-item.active .page-link {
            background-color: #000;
            border-color: #000;
        }
    </style>
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   

    <!--! BEGIN: Vendors JS !-->
    <script src="{{ asset('admin/assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ asset('admin/assets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/js/select2-active.min.js') }}"></script>
    <!-- For employees JS-->
     <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin/assets/vendors/js/quill.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/js/datepicker.min.js') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('admin/assets/js/common-init.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/reports-leads-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('admin/assets/js/payment-init.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="{{ asset('admin/assets/js/formatter.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ asset('admin/assets/js/theme-customizer-init.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
    function confirmDelete(event) {
        event.preventDefault();
        var num1 = Math.floor(Math.random() * 10) + 1;
        var num2 = Math.floor(Math.random() * 10) + 1;
        var correctAnswer = num1 + num2;

        Swal.fire({
            title: 'Matematik amalni bajaring',
            text: `${num1} + ${num2} = ?`,
            input: 'text',
            inputPlaceholder: 'Javobni kiriting',
            showCancelButton: true,
            confirmButtonText: 'Tasdiqlash',
            cancelButtonText: 'Bekor qilish',
            preConfirm: (answer) => {
                if (parseInt(answer) === correctAnswer) {
                    return true;
                } else {
                    Swal.showValidationMessage(
                        'Notog\'ri javob. O\'chirish uchun to\'g\'ri javob kiritilishi kerak.'
                    );
                    return false;
                }
            }
        }).then((result) => {
            if (result.value) { // Ensure deletion only if confirmed
                Swal.fire({
                    title: 'O\'chirishni tasdiqlaysizmi?',
                    text: "Bu amalni bekor qilib bo'lmaydi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ha, o\'chirilsin!',
                    cancelButtonText: 'Bekor qilish'
                }).then((result) => {
                    if (result.value) { // Ensure submission only if confirmed
                        event.target.submit();
                    }
                });
            }
        });
    }
</script>

<!--! END: Theme Customizer !-->
</body>

</html>
