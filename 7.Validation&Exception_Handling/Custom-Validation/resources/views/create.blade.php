<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="content">
    <div class="title m-b-md">
        Laravel Custom Validation
    </div>
    <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>
    <div class="form-custom-validation">
        <form action="{{route('form.submit')}}" method="GET">
            <label for="name">Name: </label>
            <input id="name" name="name" type="text" placeholder="Enter the full name">
            <br>
            <label for="age">Age: </label>
            <input id="age" name="age" type="text" placeholder="Enter the age">
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="error-message">
        @if($errors->any())
            @foreach($error->all() as $nameError)
                <p style="color:red">{{$nameError}}</p>
            @endforeach
        @endif
    </div>
</div>
</body>
</html>
