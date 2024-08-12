<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cabeleleila Leila</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <style>
        body {
            font-family: 'Newsreader';
            /* Mudança da fonte para Times New Roman */
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .conteudo {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 15vh;
        }

        .conteudo1 {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 15vh;
        }

        .title {
            font-size: 28px;
            /* Ajuste no tamanho da fonte */
            font-weight: bold;
            color: #4A6A29;
            /* Ajuste de cor para combinar com o Figma */
            text-align: center;
            /* margin-bottom: 160px; */
        }

        form {
            box-shadow: none;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 50px;
            /* Deixar os campos mais arredondados */
            background-color: #F7F7F0;
            /* Ajuste de cor para um tom mais claro */
            height: 50px;
            /* Ajuste de altura */
        }

        .btn-primary {
            background-color: #4A6A29;
            /* Ajuste na cor do botão */
            border-color: #4A6A29;
            border-radius: 50px;
            /* Botão mais arredondado */
            transition: background-color 0.3s ease;
            font-family: 'Newsreader';
            /* Mudança da fonte para Times New Roman */
            font-size: 18px;
            /* Tamanho da fonte */
            height: 50px;
            /* Ajuste na altura do botão */
        }

        .btn-primary:hover {
            background-color: #38582D;
        }

        .login-title {
            font-size: 48px;
            /* Redução no tamanho da fonte para coincidir com o Figma */
            font-weight: normal;
            color: #000;
            /* Cor preta para o subtítulo */
            margin-bottom: 20px;
            /* Ajuste de margem inferior */
            text-align: center;
        }

        .line {
            width: 90%;
            height: 1px;
            background-color: #ddd;
            margin: 10px 0 40px 0;
            /* Ajuste de margem para alinhar com o Figma */
        }
    </style>
</head>

<body>
    <div class="conteudo">
        <h1 class="title">Cabeleleila Leila</h1>
    </div>
        <div class="conteudo1">
        <h2 class="login-title">Login</h2>
        <div class="line"></div>
        </div>
    
    <form>
        <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Endereço de e-mail">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Senha">
        </div>
        <div class="form-group">
            <select class="form-control" id="perfil">
                <option value="cliente">Perfil</option>
                <option value="funcionario">Funcionário</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Acessar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstr