<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />
    <script src="main.js"></script>
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Laravel
                <a href="{{ url('/login') }}"> <button type="submit" class="btn btn-default">Agendar cita</button></a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">GUIA DEL USUARIO:</div>

                            <div class="panel-body">
                                <p>
                                    1. En la pestaña "DATOS EVENTO" se deben completar los campos que están en azul: Nombres de empresas colombianas e internacionales, nombres de participantes, país de las empresas internacionales, horarios de las citas, lugar y fecha del evento .
                                </p>
                                <p>
                                    NOTA: Si las reuniones son en el Stand de la empresa Colombiana, en la columna A se indica el número del Stand de cada empresa.
                                </p>
                                <p>
                                    2. En la pestaña "AGENDAMIENTO" se deben organizar las citas en la tabla 1 (LOS CAMPOS QUE ESTAN EN AZUL): Agenda de las Empresas Internacionales (cada columna corresponde a una empresa internacional). En la celda correspondiente a la hora de cada cita se despliegan los nombres de las empresas colombianas y se debe elegir un nombre.
                                </p>
                                <p>
                                    NOTA: Si la empresa internacional ya tiene cita con esa misma empresa colombiana, la celda quedará resaltada en amarillo. Si a la misma hora la empresa colombiana ya tenía agendada una cita, la celda quedará resaltada en rojo.
                                </p>
                                <p>
                                    3. En las pestañas: "AGENDAS INTERNACIONALES" y "AGENDAS COLOMBIANOS" quedan automáticamente las agendas con el formato de evaluación y el logo de Proexport, listas para imprimir. Sólo se deben ocultar las filas que no tienen citas. Para que la impresión quede bien se recomienda ocultar el mismo número de filas en cada agenda.
                                </p>
                                <p>
                                    NOTA: Si las reuniones son en el Stand de cada empresa colombiana se sugiere en la pestaña: "AGENDAS INTERNACIONALES": MOSTRAR la columna C: Stand y OCULTAR la columna K: Comentarios y en la pestaña "AGENDAS COLOMBIANOS": OCULTAR la columna B: Mesa.
                                </p>
                                <p>
                                    4. Cuando las empresas entreguen el formato de evaluación, se transcriben los resultados en: "AGENDAS INTERNACIONALES" y "AGENDAS COLOMBIANOS" y la tabulación aparece automáticamente en las pestañas: "RESULTADOS EMP. INTERNACIONALES" y "RESULTADOS EMP. COLOMBIANAS".
                                </p>
                                <p>
                                    NOTA: ESTA TABLA ESTA DISEÑADA PARA RUEDAS DE NEGOCIOS EN LAS QUE PARTICIPEN 30 O MENOS EMPRESAS INTERNACIONALES , 30 O MENOS EMPRESAS COLOMBIANAS Y QUE TENGAN HASTA 20 CITAS DE NEGOCIOS
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>