<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/tailwind.css') }}">
</head>

<body>
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 my-4">
                <a href="{{route('form')}}"
                    class="inline-block bg-indigo-500 py-4 px-8 hover:bg-indigo-600 font-bold text-white">Create</a>
            </div>
            <div class="w-full px-4">
                <div class="bg-gray-900 text-center space-y-4  group py-14 relative px-2">
                    <div class="flex  justify-center">
                        <img class="w-20" src="{{ asset('images/delete-button.png') }}" alt="">
                        {{-- {{asset('storage/'.$roadmap->coin_img)}} --}}
                    </div>
                    <h1 class="w-full text-white text-3xl font-bold leading-9">Retrieving Or Creating Models
                    </h1>
                    <p class="w-full text-gray-300 text-lg leading-8">The firstOrCreate method will attempt to locate a
                        database record using the given column</p>
                    <a href="create.html"
                        class="inline-block bg-indigo-500 py-4 px-8 hover:bg-indigo-600 font-bold text-white">Edit</a>
                    <a href=""
                        class="inline-block bg-red-500 py-4 px-8 hover:bg-red-600 font-bold text-white">Delete</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
