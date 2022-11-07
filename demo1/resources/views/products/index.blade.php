@extends('index')

@section('content')
<table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>id</td>
                <td>imei</td>
                <td>name</td>
                <td>color</td>
                <td>width</td>
                <td>length</td>
                <td>height</td>
                <td>Screen size</td>
                <td>Manufacture</td>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->imei }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->color }}</td>
                <td>{{ $product->width }}</td>
                <td>{{ $product->length }}</td>
                <td>{{ $product->height }}</td>
                <td>{{ $product->screen_size }}</td>
                <td>{{ $product->manufacture }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
