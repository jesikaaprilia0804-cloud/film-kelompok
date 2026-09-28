<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Movie - BREAD</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* slate-50 */
        }
        /* Custom scrollbar for table wrapper */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="text-slate-800 antialiased min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-indigo-600 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
                    <span class="font-bold text-xl text-white tracking-wide">MovieApp</span>
                </div>
                <div class="flex items-center">
                    <span class="text-indigo-100 text-sm hidden sm:block">Admin Panel</span>
                    <div class="ml-4 w-8 h-8 rounded-full bg-indigo-400 border-2 border-indigo-200 flex items-center justify-center text-white font-bold">
                        A
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Header Section -->
        <div class="sm:flex sm:items-center sm:justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Katalog Movie</h1>
                <p class="mt-1 text-sm text-slate-500">Kelola daftar film Anda: Tambah, Lihat, Edit, dan Hapus.</p>
            </div>
            <div class="mt-4 sm:mt-0">
                <button onclick="toggleModal('modal-form')" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                    <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    Tambah Film
                </button>
            </div>
        </div>

        <!-- BREAD Table (Browse) -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="overflow-x-auto scrollbar-hide">
                <table class="min-w-full divide-y divide-slate-200">
                    <thead class="bg-slate-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Judul Film</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Genre</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Tahun Rilis</th>
                            <th scope="col" class="px-6 py-4 text-center text-xs font-semibold text-slate-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="movie-tbody" class="bg-white divide-y divide-slate-200">
                        <!-- Data will be populated here by JavaScript -->
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination Footer (Static Dummy) -->
            <div class="bg-white px-4 py-3 border-t border-slate-200 sm:px-6 flex items-center justify-between">
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-slate-700">
                            Menampilkan <span class="font-medium" id="count-start">1</span> sampai <span class="font-medium" id="count-end">5</span> dari <span class="font-medium" id="count-total">5</span> data
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-slate-300 bg-white text-sm font-medium text-slate-500 hover:bg-slate-50">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>
                            </a>
                            <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-slate-300 bg-white text-sm font-medium text-slate-500 hover:bg-slate-50">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal BREAD (Form Add/Edit) -->
    <div id="modal-form" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-slate-900 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="toggleModal('modal-form')"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            
            <!-- Modal Panel -->
            <div class="inline-block align-bottom bg-white rounded-xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full">
                <form id="movieForm" onsubmit="handleFormSubmit(event)">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                <h3 class="text-lg leading-6 font-medium text-slate-900" id="modal-title">Tambah Film Baru</h3>
                                <div class="mt-4 space-y-4">
                                    <div>
                                        <label for="judul" class="block text-sm font-medium text-slate-700">Judul Film</label>
                                        <input type="text" name="judul" id="judul" required class="mt-1 block w-full border border-slate-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Contoh: The Matrix">
                                    </div>
                                    <div>
                                        <label for="genre" class="block text-sm font-medium text-slate-700">Genre</label>
                                        <select id="genre" name="genre" required class="mt-1 block w-full bg-white border border-slate-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">Pilih Genre...</option>
                                            <option value="Action">Action</option>
                                            <option value="Sci-Fi">Sci-Fi</option>
                                            <option value="Drama">Drama</option>
                                            <option value="Horror">Horror</option>
                                            <option value="Comedy">Comedy</option>
                                            <option value="Thriller">Thriller</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="tahun" class="block text-sm font-medium text-slate-700">Tahun Rilis</label>
                                        <input type="number" name="tahun" id="tahun" required min="1900" max="2099" class="mt-1 block w-full border border-slate-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Contoh: 1999">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Simpan
                        </button>
                        <button type="button" onclick="toggleModal('modal-form')" class="mt-3 w-full inline-flex justify-center rounded-md border border-slate-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-slate-700 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Logic JavaScript -->
    <script>
        // Dummy Data BREAD
        let movies = [
            { id: 1, judul: "The Matrix", genre: "Sci-Fi", tahun: 1999 },
            { id: 2, judul: "Inception", genre: "Sci-Fi", tahun: 2010 },
            { id: 3, judul: "The Dark Knight", genre: "Action", tahun: 2008 },
            { id: 4, judul: "Parasite", genre: "Thriller", tahun: 2019 },
            { id: 5, judul: "Interstellar", genre: "Sci-Fi", tahun: 2014 },
        ];

        // Function to render Table
        function renderTable() {
            const tbody = document.getElementById('movie-tbody');
            tbody.innerHTML = ''; // Clear table

            if (movies.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-slate-500">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-12 h-12 text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
                                <span class="text-sm">Belum ada data film.</span>
                            </div>
                        </td>
                    </tr>
                `;
            } else {
                movies.forEach((movie, index) => {
                    const tr = document.createElement('tr');
                    tr.className = "hover:bg-slate-50 transition-colors group";
                    tr.innerHTML = `
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">${index + 1}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-slate-900 group-hover:text-indigo-600 transition-colors">${movie.judul}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                ${movie.genre}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">${movie.tahun}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <div class="flex items-center justify-center space-x-2">
                                <!-- Read/View Button -->
                                <button onclick="viewMovie(${movie.id})" class="p-1.5 rounded-md text-emerald-600 bg-emerald-50 hover:bg-emerald-100 hover:text-emerald-700 transition" title="Detail">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </button>
                                <!-- Edit Button -->
                                <button onclick="editMovie(${movie.id})" class="p-1.5 rounded-md text-amber-600 bg-amber-50 hover:bg-amber-100 hover:text-amber-700 transition" title="Edit">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                                <!-- Delete Button -->
                                <button onclick="deleteMovie(${movie.id})" class="p-1.5 rounded-md text-red-600 bg-red-50 hover:bg-red-100 hover:text-red-700 transition" title="Hapus">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    `;
                    tbody.appendChild(tr);
                });
            }

            // Update stats
            document.getElementById('count-total').innerText = movies.length;
            document.getElementById('count-end').innerText = movies.length;
        }

        // Toggles Modal visibility
        function toggleModal(modalID) {
            const modal = document.getElementById(modalID);
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                document.getElementById('movieForm').reset();
            } else {
                modal.classList.add('hidden');
            }
        }

        // Handle Add Submission
        function handleFormSubmit(e) {
            e.preventDefault();
            const judul = document.getElementById('judul').value;
            const genre = document.getElementById('genre').value;
            const tahun = document.getElementById('tahun').value;

            // Add to dummy array
            movies.push({
                id: Date.now(), // Generate random id
                judul: judul,
                genre: genre,
                tahun: parseInt(tahun)
            });

            toggleModal('modal-form');
            renderTable();
        }

        // Dummy actions for buttons
        function viewMovie(id) {
            const movie = movies.find(m => m.id === id);
            alert(`Menampilkan Detail BREAD:\n\nJudul: ${movie.judul}\nGenre: ${movie.genre}\nTahun: ${movie.tahun}`);
        }

        function editMovie(id) {
            const movie = movies.find(m => m.id === id);
            alert(`Fitur BREAD Edit (Simulasi):\n\nAnda akan mengedit film "${movie.judul}"\n(Biasanya ini akan membuka modal edit atau halaman edit.blade.php)`);
        }

        function deleteMovie(id) {
            if(confirm("Apakah Anda yakin ingin menghapus film ini?")) {
                movies = movies.filter(m => m.id !== id);
                renderTable();
            }
        }

        // Initial render
        window.onload = renderTable;
    </script>
</body>
</html>