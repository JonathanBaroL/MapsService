<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="Mayra Lucero García Ramírez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta description="Página web ">
    <title>Inicio de Sesión</title>
</head>
<body>
    <form action="consulta.php" id="login-form" method="GET">
            <header>Consulta Datos</header>
                <fieldset>
                    <section>
                        <label class="label">Nombre de usuario</label>
                        <label class="input">
                            <input type="text" name="nomUsuario" id="nomUsuario" placeholder="Nombre de usuario"></label>
                    </section>
                    <section>
                        <h2></h2>
                        <label class="label">Contraseña</label>
                        <label class="input">
                            <input type="password" name="contra" id="contra" placeholder="contraseña">
                        </label>
                    </section>
                    <section>
                            <button type="submit">Acceder</button>
                    </section>
                </fieldset>
            </form>
            <form action="registro.php" id="registro" method="GET">
            <fieldset>
                <legend>Datos Personales</legend>
                <div class="datos"> 
                    <label>
                        Usuario: <input type="text" name="nomUsuario" id="nomUsuario" placeholder="Usuario" required>
                    </label>
                    <label>
                        Apellidos: 
                        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
                        <div id="mensajeap">
                        </div>
                    </label>
                    <label>
                        Nombre: <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                        <div id="mensajenom">
                        </div>
                    </label>   
                    <label>
                        Contraseña: <input type="password" id = "contra" name="contra" placeholder="Contraseña" required>
                    </label>
                    <label>
                        Correo: <input type="email" id="email" name="email" placeholder="E-mail" required>
                    </label>
                </div>
                
            </fieldset>
            <input id="send" type="submit" name="enviar" value="Registrarme">
        </form>
        </body>
</html>