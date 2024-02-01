<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Submit </title>
</head>
<body>
<h1>Register Name</h1>
    <form action="/form" method="post">
        <label for="name"  ><b>Name</b>
            <input type="text" name="name" >
        </label>
            <input type="submit" value="Submit">
            @csrf
            {{-- <input type="hiden" name="_token" value="{{csrf_token()}}"> --}}
    </form>

</body>
</html>
