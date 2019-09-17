<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 75px;
            }

            .tip {
                position: relative;
                width: 350px;
                height: 130px;
                background-color: beige;
                border: 2px solid grey;
                border-radius: 4px;
                box-shadow: 3px 5px 12px grey;
                margin: 15px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref ">

            <div class="content">
                <div class="title">
                    Llistat llibres
                </div>

                <div class="subtitle">
                    Laravel <small>5.8</small>
                </div>

                <div class="container">
                
                    <div class="row">
                    
                        <div class="col-md-3 tip">
                            <h2>Llibres per autor.</h2>
                            <label>Autor:</label>
                            <input type="text" id="form_autor">
                        </div>

                        <div class="col-md-3 tip">
                            <h2>Editorials per autors.</h2>
                            <label>Editorial:</label>
                            <input type="text" id="form_editorial">
                        </div>

                        <div class="col-md-3 tip">
                            <h2>Llibres inferiors a 15€.</h2>
                            
                            <button>Buscar</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </body>
</html>