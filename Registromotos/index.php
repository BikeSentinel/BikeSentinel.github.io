<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Sentinel Registro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="estilo.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya registraste tu moto?</h3>
                        <p>Consulta la ubicacion de tu moto</p>
                        <button id="btn__iniciar-sesion">Consulta</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no esta registrada?</h3>
                        <p>Regístrala para que puedas consultar su ubicacion</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="loginmoto.php" method="POST"class="formulario__login">
                        <h2>Consulta tu moto</h2>
                        <input type="text" placeholder="Placa" name="placa">
                        <input type="text" placeholder="Numero GPS" name="gps">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="registromoto.php" method="POST" class="formulario__register">
                        <h2>Regístra tu moto</h2>
                        <input type="text" placeholder="Marca" name="marca">
                        <input type="text" placeholder="Modelo" name="modelo">
                        <input type="text" placeholder="Numero GPS" name="gps">
                        <input type="text" placeholder="Placa" name="placa">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="script.js"></script>
</body>
</html>