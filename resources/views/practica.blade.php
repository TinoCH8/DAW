<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/estilos.css') }}">

</head>
<body>

<div class="container" >

 <div class="row d-none d-xl-block">
    <div class="a cajainv"></div>
    <div class="a cajaA azull" >a</div>

    <div class="a cajainvp"></div>
    
</div>

<div class="row d-xl-none">
    <div class="l cajainv"></div>
    <div class="l cajaL azull" >L</div>

    <div class="l cajainvp"></div>
    
</div>


<div class="row">
    <div class="col azull cajaBCDE d-none d-sm-block">b</div>
    <div class="col azull cajaBCDE">c</div>
    <div class="col azull cajaBCDE">d</div>
    <div class="col azull cajaBCDE d-none d-xl-block">e</div>
    <div class="a cajainvp"></div>
  </div>

  <div class="row">
    <div class="col azull cajaFG">f</div>
    <div class="col azull cajaFG d-none d-sm-block">g</div>

    <div class="a cajainvp"></div>
  </div>


  <div class="row">
    <div class="col azull cajaFG d-block d-sm-none">M</div>
    
    <div class="a cajainvp"></div>
  </div>

  <div class="row">
    <div class="col azull cajaHI">h</div>
    <div class="col-2 azull cajaHI d-none d-xl-block">i</div>
    
    <div class="a cajainvp"></div>
  </div>

  <div class="row">
    <div class="col azull cajaHI d-xl-none">i</div>
    <div class="a cajainvp"></div>
  </div>


 

  <div class="row">
    <div class="col-1 NcajaJK d-none d-xl-block"></div>
    <div class="col azull cajaJK">j</div>
    <div class="col-2 NcajaJK d-none d-xl-block"></div>
    <div class="col-4 azull cajaJK d-none d-xl-block">k</div>
    <div class="col-1 NcajaJK d-none d-xl-block"></div>

    <div class="a cajainvp"></div>
  </div>

  <div class="row">
    <div class="col azull cajaJK d-none d-md-block d-lg-none">k</div>
    <div class="a cajainv"></div>
  </div>

  
</div>
    



<script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
</body>
</html>