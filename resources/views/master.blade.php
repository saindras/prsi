<html>
<head>
    <title> @yield('title') </title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="/css/cssfamilyroboto.css">
    <link rel="stylesheet" type="text/css" href="/css/material-icons.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    
    <!-- Datatables -->
    <link rel="stylesheet" href="/css/dataTables.bootstrap.min.css">    
    
    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">

    <!-- Date Picker Style -->
    <link rel="stylesheet" href="/css/jquery-ui.css">
    
    <!-- CbBox DropDownList Style -->
    <style>
        .overflow { height: 200px; }
    </style>

</head>
<body>

@include('shared.navbar')

@yield('content')

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
<!-- App scripts -->
<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
<script src="/js/jquery.datetimeselector.min.js"></script>
<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>

<!-- OtherJavaScripts -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    //datepicker script
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd',
                                    changeMonth: true,
                                    changeYear: true,
                                    minDate: "-50Y",                    
                                    maxDate: "-4Y"
                                  });
    //menentukan umur dan klp umur
    $('#datepicker').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                var kelompokumur;
                switch (true) {
                    case (age>=16):
                        kelompokumur = "I";
                        break;  
                    case (age>=14 && age<=15):
                        kelompokumur = "II";
                        break;  
                    case (age>=12 && age<=13):
                        kelompokumur = "III";
                        break;
                    case (age>=10 && age<=11):
                        kelompokumur = "IV";
                        break;
                    case (age>=8 && age<=9):
                        kelompokumur = "V";
                        break;                  
                    case (age<=7):
                        kelompokumur = "P";
                }
                
                $('#umur').val(age);
                $('#kelompokumur').val(kelompokumur);
            });
    //combo box
    $("#cb-asalSekolah").selectmenu({width: 250}).selectmenu( "menuWidget" ).addClass( "overflow" );
    $("#cb-namaKlub").selectmenu({width: 250}).selectmenu( "menuWidget" ).addClass( "overflow" );
    $("#cb-noLomba1").selectmenu({width: 250}).selectmenu( "menuWidget" ).addClass( "overflow" );
    $("#cb-noLomba2").selectmenu({width: 250}).selectmenu( "menuWidget" ).addClass( "overflow" );
    $("#cb-noLomba3").selectmenu({width: 250}).selectmenu( "menuWidget" ).addClass( "overflow" );
    $("#cb-noLomba4").selectmenu({width: 250}).selectmenu( "menuWidget" ).addClass( "overflow" );
    //time selector
    $("#timeselector").dateTimeSelector({format:'H:i:s'});
  });

</script>

</script>
@stack('scripts')

</body>

</html>