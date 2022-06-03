<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="index.php">hoofdpagina</a>
<br>
<br>
<button onclick="gen_naam()" class="button">Genereer random naam</button>
    <p style="font-size:25px;" id="name"></p>

    <script>


        let namen = ['Jerbo', 'Dehn', 'Fernando','Dirtyboy', 'Parls', 'Joe?', 'Bama']

        function gen_naam() {
            let randomNumber = Math.floor(Math.random() * namen.length);
            console.log(randomNumber);
            let randomNaam = namen[randomNumber]

            console.log(randomNaam);

            document.getElementById('name').innerText = randomNaam
    }

    </script>
</body>
</html>