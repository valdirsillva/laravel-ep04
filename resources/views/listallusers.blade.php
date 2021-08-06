<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listagem de usuarios</title>
</head>
<body>

    <table>
        <tr>
            <th>#Id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        
        @foreach($users  as $user):
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>

            <td>
                <a href="{{ route('user.show', ['user' => $user->id ])}}">Ver usuário</a>

                <form action="{{ route('user.destroy', ['user' => $user->id ]) }}" method="POST">

                
                    <input type="hidden" name="user" value="{{ $user->id }}">
                    <input type="submit" value="Remover">
                </form>
            </td>
        </tr>

         @endforeach

    </table>
    
</body>
</html>