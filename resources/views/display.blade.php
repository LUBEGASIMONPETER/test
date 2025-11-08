<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="records">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FULL NAME</th>
                    <th>DATE</th>
                    <th>LOCATION</th>
                    <th>PHONE NUMBER</th>
                    <th>CREATED AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
                @foreach($racheal as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->full_name}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->phone_number}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        <a href="{{route('racheal.edit',$item->id)}}"><button>EDIT</button></a>
        
                        <form action="{{route('racheal.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>