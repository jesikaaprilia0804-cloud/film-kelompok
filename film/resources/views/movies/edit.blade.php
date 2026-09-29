<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Film</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }</style>
</head>
<body class="text-slate-800 flex flex-col min-h-screen">
    <main class="flex-grow max-w-2xl w-full mx-auto px-4 py-12">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-slate-900">Edit Film</h1>
            <a href="{{ route('movies.index') }}" class="text-sm font-medium text-slate-600 hover:text-indigo-600">← Kembali</a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <form action="{{ route('movies.update', $movie->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label for="judul" class="block text-sm font-medium text-slate-700">Judul Film</label>
                    <input type="text" name="judul" id="judul" value="{{ $movie->judul }}" required class="mt-1 block w-full border border-slate-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="genre" class="block text-sm font-medium text-slate-700">Genre</label>
                    <select id="genre" name="genre" required class="mt-1 block w-full bg-white border border-slate-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="Action" {{ $movie->genre == 'Action' ? 'selected' : '' }}>Action</option>
                        <option value="Sci-Fi" {{ $movie->genre == 'Sci-Fi' ? 'selected' : '' }}>Sci-Fi</option>
                        <option value="Drama" {{ $movie->genre == 'Drama' ? 'selected' : '' }}>Drama</option>
                        <option value="Horror" {{ $movie->genre == 'Horror' ? 'selected' : '' }}>Horror</option>
                        <option value="Comedy" {{ $movie->genre == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                        <option value="Thriller" {{ $movie->genre == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                    </select>
                </div>
                <div>
                    <label for="tahun" class="block text-sm font-medium text-slate-700">Tahun Rilis</label>
                    <input type="number" name="tahun" id="tahun" value="{{ $movie->tahun }}" required min="1900" max="2099" class="mt-1 block w-full border border-slate-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <!-- Tambahan Form Detail/Sinopsis -->
                <div>
                    <label for="detail" class="block text-sm font-medium text-slate-700">Sinopsis / Detail</label>
                    <textarea name="detail" id="detail" rows="4" required class="mt-1 block w-full border border-slate-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $movie->detail }}</textarea>
                </div>

                <div class="pt-4 flex justify-end space-x-3">
                    <a href="{{ route('movies.index') }}" class="px-4 py-2 border border-slate-300 rounded-md text-sm font-medium text-slate-700 hover:bg-slate-50">Batal</a>
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm font-medium hover:bg-indigo-700">Update Film</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>