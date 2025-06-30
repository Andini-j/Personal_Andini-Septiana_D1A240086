<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Gambar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        wisteria: '#C9A0DC',
                        'wisteria-dark': '#B388CC',
                        'wisteria-light': '#F3E5F5'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-wisteria-light min-h-screen">
    <!-- Header -->
    <header class="bg-wisteria-dark text-white text-center py-6 shadow">
        <h1 class="text-3xl font-bold">Tambah Gambar ke Gallery</h1>
    </header>
    <div class="flex max-w-7xl mx-auto mt-8 px-4">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white rounded shadow p-4">
            <h2 class="text-xl font-semibold text-wisteria-dark mb-4 text-center">MENU</h2>
            <ul class="space-y-2 text-gray-700">
                <li><a href="beranda_admin.php" class="block hover:text-wisteria-dark">Beranda</a></li>
                <li><a href="data_artikel.php" class="block hover:text-wisteria-dark">Kelola Artikel</a></li>
                <li><a href="data_gallery.php" class="block font-semibold text-wisteria-dark">Kelola Gallery</a></li>
                <li><a href="about.php" class="block hover:text-wisteria-dark">About</a></li>
                <li>
                    <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
                        class="block text-red-600 hover:underline font-medium">Logout</a>
                </li>
            </ul>
        </aside>
        <!-- Main Content -->
        <main class="w-3/4 bg-white rounded shadow p-6 ml-6">
            <form action="proses_add_gallery.php" method="post" enctype="multipart/form-data" class="space-y-6">
                <div>
                    <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Gambar</label>
                    <input type="text" id="judul" name="judul" required
                        class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-wisteria-dark">
                </div>
                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Pilih Gambar</label>
                    <input type="file" id="foto" name="foto" accept="image/*" required
                        class="block w-full text-sm text-gray-600
                               file:mr-4 file:py-2 file:px-4 file:rounded-full
                               file:border-0 file:text-sm file:font-semibold
                               file:bg-wisteria-light file:text-wisteria-dark
                               hover:file:bg-wisteria">
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="submit"
                        class="bg-wisteria-dark text-white px-4 py-2 rounded hover:bg-wisteria transition">Simpan</button>
                    <a href="data_gallery.php"
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition">Batal</a>
                </div>
            </form>
        </main>
    </div>
    <!-- Footer -->
    <footer class="bg-wisteria-dark text-white text-center py-4 mt-10">
        &copy; <?php echo date('Y'); ?> - Buatan Andini Septiana
    </footer>
</body>

</html>
