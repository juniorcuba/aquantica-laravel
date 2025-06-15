<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo img {
            max-width: 200px;
            height: auto;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #0f2d49;
        }
        .message {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="https://www.aquantica.com.mx/images/logo@2x.png" alt="Logo de la empresa">
    </div>

    <div class="content">
        <h2>Nuevo mensaje de contacto</h2>
        
        <div class="field">
            <span class="field-label">Nombre:</span>
            <p>{{ $data['name'] }}</p>
        </div>

        <div class="field">
            <span class="field-label">Email:</span>
            <p>{{ $data['email'] }}</p>
        </div>

        @if(isset($data['phone']) && $data['phone'])
        <div class="field">
            <span class="field-label">Teléfono:</span>
            <p>{{ $data['phone'] }}</p>
        </div>
        @endif

        <div class="field">
            <span class="field-label">Mensaje:</span>
            <div class="message">
                {!! nl2br(e($data['message'])) !!}
            </div>
        </div>
    </div>
</body>
</html> 