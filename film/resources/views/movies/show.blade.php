<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }</style>
</head>
<body class="text-slate-800 flex flex-col min-h-screen">
    <main class="flex-grow max-w-2xl w-full mx-auto px-4 py-12">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-slate-900">Detail Film</h1>
            <a href="{{ route('movies.index') }}" class="text-sm font-medium text-slate-600 hover:text-indigo-600">← Kembali ke Daftar</a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 space-y-4">
            <div>
                <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Judul Film</h3>
                <p class="text-lg font-semibold text-slate-800 mt-1">{{ $movie->judul }}</p>
            </div>
            <hr class="border-slate-100">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Genre</h3>
                    <span class="inline-block mt-1 px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                        {{ $movie->genre }}
                    </span>
                </div>
                <div>
                    <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Tahun Rilis</h3>
                    <p class="text-base text-slate-700 mt-1">{{ $movie->tahun }}</p>
                </div>
            </div>
            <hr class="border-slate-100">
            <!-- Menampilkan Detail/Sinopsis -->
            <div>
                <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Sinopsis / Detail</h3>
                <p class="text-sm text-slate-600 mt-2 leading-relaxed">
                    {{ $movie->detail }}
                </p>
            </div>
        </div>
    </main>
</body>
</html>