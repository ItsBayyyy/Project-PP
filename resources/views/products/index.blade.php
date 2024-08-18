<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Data Products</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-200">

<div class="container mx-auto mt-5">
    <div class="w-full">
        <div>
            <h3 class="text-center my-4 text-2xl font-semibold">CRUD with Laravel</h3>
            <hr>
        </div>
        <div class="bg-white shadow-sm rounded-lg">
            <div class="p-4">
                <div class="flex justify-between mb-3">
                    <a href="{{ route('products.create') }}" class="btn btn-md bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">ADD PRODUCT</a>
                    <a href="{{ route('logout') }}" class="btn btn-md bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Logout</a>
                </div>
                <table class="table-auto w-full bg-white border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">IMAGE</th>
                            <th class="border border-gray-300 px-4 py-2">TITLE</th>
                            <th class="border border-gray-300 px-4 py-2">PRICE</th>
                            <th class="border border-gray-300 px-4 py-2">STOCK</th>
                            <th class="border border-gray-300 px-4 py-2" style="width: 20%">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td class="text-center border border-gray-300 px-4 py-2">
                                <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 150px">
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{"Rp" . number_format($product->price,2,',','.') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->stock }}</td>
                            <td class="text-center border border-gray-300 px-4 py-2">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm bg-gray-800 hover:bg-gray-900 text-white px-3 py-1 rounded">SHOW</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data Products belum Tersedia.
                        </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>

<script>
//message with sweetalert
@if(session('success'))
Swal.fire({
icon: "success",
title: "BERHASIL",
text: "{{ session('success') }}",
showConfirmButton: false,
timer: 2000
});
@elseif(session('error'))
Swal.fire({
icon: "error",
title: "GAGAL!",
text: "{{ session('error') }}",
showConfirmButton: false,
timer: 2000
});
@endif
</script>

</body>
</html>
