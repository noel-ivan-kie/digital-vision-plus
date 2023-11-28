<!DOCTYPE html>
<html>

<head>
    <title>{{ $user['sujet'] }}</title>
</head>

<body>
    <p>sujet du message :
    <h1>{{ $user['sujet'] }}</h1>
    </p>
    <p><strong>Nom :</strong> {{ $user['name'] }}</p>
    <p><strong>Email :</strong> {{ $user['email'] }}</p>
    <p><strong>Message :</strong> {{ $user['message'] }}</p>
</body>

</html>
