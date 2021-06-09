<!DOCTYPE html>
<html>
    <head>
        <title>DataCar</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }

            .button {
            background-color: rgb(221, 218, 221);
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Ocorreu um problema. =/</div>
            </div>
            <div>
                <button class="button button1"><a href="{{ url("/carros") }}">Inicio</a></button>
            </div>
        </div>
    </body>
</html>
