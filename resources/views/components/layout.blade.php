<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-sky-900">
    
    <div class="w-1/2 h-screen mx-auto my-12">
        <x-navbar />
        <div class="mx-auto my-6 p-6 bg-zinc-200 rounded-lg text-center">
            <main>
                {{$slot}}
            </main>
        </div>
    </div>
    
</body>
</html>