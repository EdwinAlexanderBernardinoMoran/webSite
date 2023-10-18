<!DOCTYPE html>
<html>
<body>
    <div class="container" style="width: 100%; max-width: 900px; margin: auto;">
        <div class="content" style="background-color: #f8f4f4; padding-top: 60px; padding-bottom: 60px; padding-right: 30px; padding-left: 30px;">
            <h1 style="text-align: center; margin-bottom: 30px;">Oferta de Empleo para Desarrollador</h1>
            <p style="margin: 10px; font-size: 16px;"><strong>De parte de: </strong> {{ $name }}</p>
            <p style="margin: 10px; font-size: 16px;"><strong>Direccion de correo del remitente:</strong> {{ $email }}</p>
            <p style="margin: 10px; font-size: 16px;"><strong>Celular:</strong> {{ $datos['phone'] }}</p>
            <p style="margin: 10px; font-size: 16px;">{{ $datos['body'] }}</p>
        </div>
    </div>
</body>
</html>
