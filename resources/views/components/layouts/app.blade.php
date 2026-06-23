<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Next Level Study' }}</title>
    <link rel="icon" type="image/x-icon" href="/nls-logo.ico">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-brand-surface font-sans selection:bg-brand-light selection:text-white overflow-x-hidden flex flex-col text-slate-800">
    <x-navbar />
    
    <div class="flex-grow pt-20"> 
        {{ $slot }}
    </div>

    <x-footer />
</body>
</html>
