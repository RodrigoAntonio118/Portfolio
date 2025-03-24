<!DOCTYPE html>
<html>
<head>
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            color: #2c3e50;
        }
        .info {
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
        }
        .message {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nuevo mensaje de contacto</h1>
        
        <div class="info">
            <p><span class="label">Nombre:</span> {{ $data['name'] }}</p>
            <p><span class="label">Email:</span> {{ $data['email'] }}</p>
            @if($data['company'])
            <p><span class="label">Empresa:</span> {{ $data['company'] }}</p>
            @endif
            <p><span class="label">Asunto:</span> {{ $data['subject'] }}</p>
        </div>
        
        <div class="message">
            <h3>Mensaje:</h3>
            <p>{{ $data['message'] }}</p>
        </div>
    </div>
</body>
</html>