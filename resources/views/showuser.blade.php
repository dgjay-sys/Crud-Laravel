<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Show Users Page</h1>
    
    {{-- @foreach ($name as $key => $data)
        <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->user_name }}</td>
            <td>{{ $data->username }}</td>
        </tr>
    @endforeach --}}
    <div class="p-6 text-gray-900">
        <table>
            <thead>
                <tr>
                    <th>user_id</th>
                    <th>user_name</th>
                    <th>username</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($name as $key => $data)
                    <tr>
                        <td>{{ $data->user_id }}</td>
                        <td>{{ $data->fname }}</td>
                        <td>{{ $data->username }}</td>
                        <td>
                            <form action="/delete/{{ $data->user_id }}" method="POST">
                                @csrf {{ csrf_field() }}
                                <button type="submit">delete</button>
                            </form>
                        </td>

                        <td>
                            <form action="/update/{{ $data->user_id }}" method="GET">
                                @csrf {{ csrf_field() }}
                                <button type="submit">Edit</button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>
