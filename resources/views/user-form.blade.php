<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Document</title>
</head>
<body>
    <h1>Create User </h1>
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter User Name" required >
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter User email" required>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="birth">Birth</label>
            <input type="date" name="birth" id="birth" placeholder="Enter User Birth Date" required>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="phone">Phone</label>
            <input type="number" name="phone" id="phone" placeholder="Enter User Phone Number" required>
        </div>
        <div style="margin-bottom: 20px;">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="4" placeholder="Enter User Message" required></textarea>
        </div>
        <button type="submit">Create User</button>
        <a href="{{route('user.index')}}"  style="margin-left: 10px;">Back</a>
    </form>
</body>
</html>