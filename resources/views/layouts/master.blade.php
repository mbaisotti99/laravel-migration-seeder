<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treni</title>
<style>
    body, html{
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
    }
    .container{
        flex: 1;
    }
</style>
</head>
<body>
    @include ("partials.header")
    @yield("contenuto")
    @include ("partials.footer")
</body>
</html>