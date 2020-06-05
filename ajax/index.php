<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PhP & Ajax</title>
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <div class="container">
        <h1>Name suggestion</h1>
            <form>
                <input type="text" placeholder="Search" onkeyup="showsug(this.value)" />
            </form>
            <p>Search Users: <span id="output"></span></p>
        </div>
        <script src="main.js"></script>
    </body>
</html>