<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        body{
            font-family:Arial,Helvetica,sans-serif;
            background-image: linear-gradient(45deg, #fff , #FF7F50);
        }
        div{
            background-color: rgba( 0, 0, 0, 0.9);
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius:15px;
            color:#fff;
        }
        input{
            padding:15px;
            border-radius:10px;
            outline:none;
            font-size:15px;
        }
        .button-acessar{
            background-color: #FF7F50;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #FFF;
            font-size: 15px;
            cursor: pointer;
        }
        .button-cadastrar{
            background-color: #008000;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #FFF;
            font-size: 15px;
            cursor: pointer;
        }
        .button-acessar:hover{
            background-color: #FF6347;
        }
        .button-cadastrar:hover{
            background-color: #6B8E23;
        }
    </style>
    <body>
        <div>
            <form action={{route('login.autenticar')}} method="POST">
                @csrf
                <img src="logo.jpg" width="80px" hidth="50px" > 
                <h1>Login</h1>
                <input type="text" name="usuario" valeu="{{ old('usuario')}}" placeholder="Usuário"></input><br><br>
                {{$errors->has('usuario') ? $errors->first('usuario') : ''}}<br>
                <input type="password" name="senha" valeu="{{ old('senha')}} "placeholder="Senha"></input><br><br>
                {{$errors->has('senha') ? $errors->first('senha') : ''}}
                <button class="button-acessar" type="submit">Acessar</button><br><br>
                <button class="button-cadastrar" type="submit">Cadastre-se</button><br>
            </form>    
            {{isset($erro) && $erro != '' ? $erro : ''}}
        </div>     
    </body>
</html>