<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<title>Gestor Escolar</title>



@yield('head')
<!------------------------------ Bootstrap/jquery ----------------------------------------->
<script src="{{asset('js/app.js')}}" rel="text/javascript"></script>
<link href="{{asset('css/jquery.growl.css')}}" rel="stylesheet">
<script src="{{asset('js/jquery.blockUI.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/jquery.growl.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/configuracao.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/jquery.mask.min.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/jquery-ui.js')}}" rel="text/javascript"></script>
<link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{asset('css/configuracao.css')}}" rel="stylesheet">
<link href="{{asset('css/app.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">


<script src="{{asset('js/date.js')}}" rel="text/javascript"></script>


@yield('css-view')

</head>


<body>

<img src="{{ asset('img/big_bg.png') }}" id="background">

<!---<div class="carregando" id="carregando">
<img src="{{ asset('img/carregando.gif') }}" class="carregando">

</div>-->


<div class="corpo" id="corpo">




<main role="main">
@hasSection('body')
@yield('body')
@endif   

    @yield('conteudo-view')

</main>
 

<!---------------------------------- Requisições ------------------------------------------->

<script src="{{asset('js/request/clientesrequest.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/request/escolasrequest.js')}}" rel="text/javascript"></script>
<!------------------------------------------------------------------------------------------>

<!---------------------------------- Requisições ------------------------------------------->

<script src="{{asset('js/validator/util.js')}}" rel="text/javascript"></script>

<!------------------------------------------------------------------------------------------>

<!-------------------------------------=Libs ----------------------------------------------->

<script src="{{asset('js/jquery.validate.min.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/localization/messages_pt_BR.min.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/data/moment.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/locales/moment-with-locales.js')}}" rel="text/javascript"></script>


<script src="{{asset('js/bootstrap-datepicker.min.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/locales/bootstrap-datepicker.pt-BR.min.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/data/formatardata.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/jquery.tablesorter.min.js')}}" rel="text/javascript"></script>












@hasSection("javascript")
    @yield('javascript')
@endif    
</div>


</div>

</body>


</html>
