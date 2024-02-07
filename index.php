<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong password generator</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1 class="text-center mb-5">
                Password Generator
            </h1>
        </header>
        <main>
            <section>
                <div class="container d-flex justify-content-center">
                    <form action="" method="get">
                        <div class="mb-3">
                            <label class="fw-bold form-label " for="lengthPsw">
                                Inserisci la lunghezza della password da generare
                            </label>
                            <input class=" form-control w-200 " type="number" name="lengthPsw" id="lengthPsw" min="5" max="15" placeholder="Inserisci un numero da 5 a 15">
                        </div>
                        <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
            
            <section>
                <div class="container">
                    <div id="result">

                    </div>
                </div>
            </section>
        </main>
    </body>
</html> 