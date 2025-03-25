@vite(["resources/sass/app.scss", "resources/js/app.js"])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Boldonse&family=Edu+TAS+Beginner:wght@400..700&family=Jersey+10&family=Montserrat+Underline:ital,wght@0,100..900;1,100..900&family=Playwrite+GB+J+Guides:ital@0;1&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sometype+Mono:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>@yield("titolo")</title>
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