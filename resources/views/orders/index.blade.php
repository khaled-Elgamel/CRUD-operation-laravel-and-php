<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>price</th>
                <th>user id</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order )
                <tr style="{{ $loop->odd ? 'background: #e1e1e1;' : '' }}">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                    <td class="action-buttons">

                     <form action="{{ route('orders.update',$order->id)}}" >
                    @csrf
                        <button type="submit">update</button>
                        </form>


                        <form action="{{ route('orders.destroy',$order->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('orders.create')}}">
<button type=submit style="margin-left: 650px;" >Create a new order</button>
</form>
</body>
</html>
