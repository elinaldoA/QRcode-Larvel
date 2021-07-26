<!DOCTYPE html>
<html>
<head>
    <title>How to Generate QR Code in Laravel 8 - Online Web Tutor</title>
    <style>
      .text-center{
          text-align: center;
      }
    </style>
</head>
<body>
    
<div class="visible-print text-center">
    <h1>Laravel 8 - QR Code</h1>
     
    {!! QrCode::size(300)->generate('Este QRCode foi gerado com laravel'); !!}
     
    <p>Qr code básico</p>
</div>
    
</body>
</html>