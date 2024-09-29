<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Резюме</title>
    <style>
        body {font-family: 'DejaVu Sans', sans-serif;}
    </style>
</head>
<body>
    <h1>Резюме пользователя</h1>
    <p>Имя: {{ $user->first_name }}</p>
    <p>Фамилия: {{ $user->last_name }}</p>
    <p>Email: {{ $user->email }}</p>
</body>
</html>
