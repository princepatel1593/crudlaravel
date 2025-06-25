<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('user.create')}}">Add User </a>
    <table border="1" style="margin :10px">
        <tr style="align-content: center">
            <th>Name</th>
            <th>Email</th>
            <th>Birth</th>
            <th>Phone Number</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
        <tr style="align-content: center">
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->birth}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->message}}</td>
            <td style="padding: 5px">
                <a href="{{route('user.edit',$user->id)}}">Edit</a>
                <form action="{{route('user.destroy',$user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>