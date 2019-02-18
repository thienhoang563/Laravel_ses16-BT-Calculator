<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<form method="get" name="calculator" action="{{route('result')}}">
    @csrf
    <h1>Calculator</h1>
    <input type="number" name="firstnumber" placeholder="first number">
    <input type="number" name="secondnumber" placeholder="second number"><br><br>
    <select name="operator">
        <option value="+">Addition</option>
        <option value="-">Substraction</option>
        <option value="x">Multiply</option>
        <option value=":">Division</option>
    </select>
    <button type="submit" name="submit">RESULT</button><br>

</form>
</body>
</html>
