<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>PROFILES</h1>
        <div> <b>ID:</b> {{$profile->id }} </div>
        <div> <b>Name:</b> {{ $profile->name }} </div>
        <div> <b>Email:</b> {{ $profile->email }} </div>
        <div> <b>Birthdate:</b> {{ $profile->birthdate }} </div>
        <div> <b>Home_Address:</b> {{ $profile->home_address }} </div>
        <div> <b>Contact_Number:</b> {{ $profile->contact_number }} </div>  
        <br>    
</body>
</html>