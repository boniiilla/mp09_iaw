<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/laliga.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>LaLiga EA</title>
    <style>
        body {
            background-color: #111111;
            margin: 0;
            font-family: "Jockey One", sans-serif;
        }

        header {
            background: linear-gradient(to top, #111111, #000000) 0;
            padding: 15px 1%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            font-family: "Jockey One", sans-serif;
            height: 70px;
        }

        .button {
            width: 150px;
            background: none;
            font-family: "Jockey One", sans-serif;
            border: 3px solid #ff003f;
            font-size: 16px;
            font-weight: bold;
            border-radius: 30px;
            cursor: pointer;
            color: #FFFFFF;
            margin: 5px 25px;
            padding: 10px 0px;
            transform: scale(1);
            transition: transform 0.7s ease, background 0.7s ease;
            letter-spacing: 1.5px;

        }

        .button:hover {
            transform: scale(1.15);
            background-color: #ff002E;
            color: #FFFFFF;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: top;
            align-items: flex-start;
            margin-left: 16%;
        }

        .img {
            margin-right: -30px;
            margin-left: 10px;
            justify-content: top;
            align-content: flex-start;
        }

        .search_button {
            width: 300px;
            height: 30px;
            border-radius: 30px;
            border: 3px solid #ff003f;
            background-color: #000000;
            color: #FFFFFF;
            font-size: 16px;
            font-weight: bold;
            padding: 5px 10px;
            margin: 5px 25px;
            font-family: "Jockey One", sans-serif;
            letter-spacing: 1.5px;

        }

        .search {
            display: flex;
            flex-wrap: wrap;
            justify-content: top;
            align-items: flex-start;
        }


        @media (max-width: 1500px) {
            .button {
                width: 16vw;
                font-size: 1.3vw;
                margin: 5px 10px;

            }

            .search_button {
                width: 16vw;
                font-size: 1.3vw;
                margin: 5px 10px;
            }

            .img img {
                width: 6.5vw;
                height: 4.5vw;
                margin: 1vw 0;
            }
        }

        .container {
            margin: 0 25px;
            /* border: 3px solid #ff003f; */
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
        
        .title {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            text-align: center;
            justify-content: center;
        }

        h1 {
            color: #FFFFFF;
            font-size: 5vw;
            padding: 0;
            margin-top: 0;
            letter-spacing: 0.2vw;
        }
        
        .easports {
            margin: 1.5vw 1vw;
            width: 4.2vw;
            height: 4.2vw;
        }


    </style>
</head>
<body>
    <header>
        <div class="img">
            <img src="img/laligaea.png" alt="LaLiga EA" width="70" height="50" class="laligaea">
        </div>
        <div class="buttons">
    <!-- https://es.stackoverflow.com/questions/478520/c%C3%B3mo-redireccionar-a-una-pagina-con-un-bot%C3%B3n-en-html -->
            <input type="button" class="button" value="Añadir Equipo" onclick="location.href='form_add_clubes.php';"/> 
            <input type="button" class="button" value="Modificar Equipo"/>
            <input type="button" class="button" value="Eliminar Equipos"/>
        </div>
        <div class="search">
            <input type="text" class="search_button" placeholder="Buscar equipo..."/>
        </div>
    </header>
    <div class="container">
        <div class="title">
            <h1>LALIGA EA</h1>
            <img src="img/ea-sports.png" alt="LaLiga" width="70" height="70" class="easports">
        </div>
    </div>
</body>
</html>