<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin: 25px;
        }
        .card{
            border:solid 1px rgb(28, 125, 255 );
            box-shadow: 1px 0 3px 2px rgba(28, 125, 255, 0.8);
            border-radius: 10px;
            padding: 25px;
            background-color: rgb(247, 247, 247 );
        }
        .title{
            font-size: 1.5em;
            color: black;
            font-family: Helvetica, Arial, sans-serif;
            text-align: center;
        }
        .list-group-item{
            list-style: none;
            margin: 10px 0 10px 35px;
            font-family: Helvetica, Arial, sans-serif;
        }
        .list-group-flush{
            border-top: 1px solid gray;
            border-bottom: 1px solid gray;
            padding: 15px 0 15px 15px;
        }
        .text-secondary{
            color: gray;
            font-family: Helvetica, Arial, sans-serif;
        }
        .card-body{
            margin:25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 350px;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
              <h4 class="title">Solicitud de información</h4>
              <p class="card-text"></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong class="text-secondary">Nombre: </strong><br>{{$item['nameContact']}}</li>
              <li class="list-group-item"><strong class="text-secondary">Email: </strong><br>{{$item['email']}}</li>
              <li class="list-group-item"><strong class="text-secondary">Telefono: </strong><br>{{$item['tel']}}</li>
              <li class="list-group-item"><strong class="text-secondary">Equipo: </strong><br>{{$item['machine']}}</li>
            </ul>
            <div class="card-body">
                <p><strong class="text-secondary">Mensaje</strong></p>
                <p>{{$item['message']}}</p>
            </div>
        </div>
    </div>
</body>
</html>