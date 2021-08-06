<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add novo</title>
</head>
<body>

       

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="">Nome do usuário</label>
        <input type="text" name="name">
        <label for="">E-mail do usuário</label>
        <input type="email" name="email">
        <label for="">Senha do usuário</label>
        <input type="password" name="password">


        <input type="submit" value="Cadastrar usuário">
    </form>
   
    
</body>
</html>