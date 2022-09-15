<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Hello world</h2>
    <form action="{{ route('test.post') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Test Name">
        <input type="submit" value="Submit">
    </form>
    <hr>
    <table>
        <tr>
            <th>Name</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>