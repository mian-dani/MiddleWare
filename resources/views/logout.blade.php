<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
        <form action="/logoutuser" method="GET">
            @csrf
            <button type="submit">Logout</button>
        </form>
</body>
</html>