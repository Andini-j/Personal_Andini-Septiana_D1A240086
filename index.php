<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Web | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        wisteria: '#C9A0DC',
                        'wisteria-dark': '#B088CC',
                        'wisteria-light': '#EBDDF3',
                        'wisteria-deep': '#9F79B3'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-wisteria-light text-gray-800 font-sans">
    <!-- Header -->
    <header class="bg-wisteria-dark text-white text-center p-6 text-2xl font-bold">
        Personal Web | Nama Andini Septiana
    </header>
    <!-- Navigation -->
    <nav class="bg-wisteria text-white py-3">
        <ul class="flex justify-center space-x-10 font-medium text-lg">
            <li><a href="index.php" class="hover:underline">Artikel</a></li>
            <li><a href="gallery.php" class="hover:underline">Gallery</a></li>
            <li><a href="about.php" class="hover:underline">About</a></li>
            <li><a href="admin/login.php" class="hover:underline">Login</a></li>
        </ul>
    </nav>
    <!-- Main Content -->
    <main class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <!-- Artikel Utama -->
        <section class="md:col-span-2 bg-white p-6 rounded shadow">
            <h2 class="text-xl font-bold mb-4 text-wisteria-deep">Artikel Terbaru</h2>
            <div class="space-y-4">
                <?php
                $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
                $query = mysqli_query($db, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    echo "<div class='border-b pb-4'>";
                    echo "<h3 class='text-lg font-semibold text-wisteria-deep'>" . htmlspecialchars($data['nama_artikel']) . "</h3>";
                    echo "<p>" . htmlspecialchars($data['isi_artikel']) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>
        <!-- Sidebar -->
        <aside class="bg-white p-6 rounded shadow">
            <h2 class="text-lg font-bold mb-4 text-wisteria-deep">Daftar Artikel</h2>
            <ul class="space-y-2 list-disc list-inside text-gray-700">
                <?php
                $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
                $query = mysqli_query($db, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    echo "<li>" . htmlspecialchars($data['nama_artikel']) . "</li>";
                }
                ?>
            </ul>
        </aside>
    </main>
    <!-- Footer -->
    <footer class="bg-wisteria-dark text-white text-center py-4 mt-10">
        &copy; <?php echo date('Y'); ?> - Buatan Andini Septiana 
    </footer>
</body>

</html>
