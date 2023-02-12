<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginDatas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$logindatas[0]['id']}}</th>
                <td>{{$logindatas[0]['nome']}}</td>
                <td>{{$logindatas[0]['email']}}</td>
            </tr>
            <tr>
                <th scope="row">{{$logindatas[1]['id']}}</th>
                <td>{{$logindatas[1]['nome']}}</td>
                <td>{{$logindatas[1]['email']}}</td>
            </tr>
        </tbody>
    </table>
    <pre>
    </pre>

</body>

</html>