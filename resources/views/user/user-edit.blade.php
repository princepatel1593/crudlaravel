<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Update</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="{{route('user.update',$users->id)}}" method="POST">
        @csrf
        @method('put')
        <div style="margin-bottom: 15px;">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter User Name" required value="{{$users->name}}">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter User email" required value="{{$users->email}}">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="birth">Birth</label>
            <input type="date" name="birth" id="birth" placeholder="Enter User Birth Date" required value="{{$users->birth}}">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="phone">Phone</label>
            <input type="number" name="phone" id="phone" placeholder="Enter User Phone Number" required value="{{$users->phone}}">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="4" placeholder="Enter User Message" required>{{$users->message}}</textarea>
        </div>
        <button type="submit">Update User</button>
        <a href="{{route('user.index')}}"  style="margin-left: 10px;">Back</a>
    </form>
</body>
</html>