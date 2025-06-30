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
    <title>Tambah About</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        wisteria: '#C9A0DC',
                        'wisteria-dark': '#B388CC',
                        'wisteria-light': '#E9D6F5'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-wisteria-light min-h-screen">
    <!-- Header -->
    <header class="bg-wisteria-dark text-white text-center py-6 shadow">
        <h1 class="text-3xl font-bold">Tambah Data About</h1>
    </header>
    <div class="flex max-w-7xl mx-auto mt-8 px-4">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white rounded shadow p-4">
            <h2 class="text-xl font-semibold text-wisteria-dark mb-4 text-center">MENU</h2>
            <ul class="space-y-2 text-gray-700">
                <li><a href="beranda_admin.php" class="block hover:text-wisteria-dark">Beranda</a></li>
                <li><a href="data_artikel.php" class="block hover:text-wisteria-dark">Kelola Artikel</a></li>
                <li><a href="data_gallery.php" class="block hover:text-wisteria-dark">Kelola Gallery</a></li>
                <li><a href="about.php" class="block font-semibold text-wisteria-dark">About</a></li>
                <li>
                    <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
                        class="block text-red-600 hover:underline font-medium">Logout</a>
                </li>
            </ul>
        </aside>
        <!-- Main Content -->
        <main class="w-3/4 bg-white rounded shadow p-6 ml-6">
            <form action="proses_add_about.php" method="post" class="space-y-6">
                <div>
                    <label for="about" class="block text-sm font-medium text-gray-700 mb-1">About</label>
                    <textarea id="about" name="about" rows="5" required
                        class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-wisteria-dark"></textarea>
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="submit"
                        class="bg-wisteria-dark text-white px-4 py-2 rounded hover:bg-wisteria transition">Simpan</button>
                    <a href="about.php"
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition">Batal</a>
                </div>
            </form>
        </main>
    </div>
    <!-- Footer -->
    <footer class="bg-wisteria-dark text-white text-center py-4 mt-10">
        &copy; <?php echo date('Y'); ?> - Buanta Andini septiana
    </footer>
</body>

</html>
