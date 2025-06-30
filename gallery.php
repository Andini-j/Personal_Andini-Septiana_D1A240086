<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery | Personal Web</title>
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
        Gallery | Nama Andini Septiana
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
    <!-- Gallery Grid -->
    <main class="max-w-6xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6 text-center text-wisteria-deep">Galeri Foto</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
            $query = mysqli_query($db, $sql);
            while ($data = mysqli_fetch_array($query)) {
                echo "<div class='bg-white border rounded shadow overflow-hidden'>";
                echo "<img src='images/{$data['foto']}' class='w-full h-48 object-cover' alt='Gambar'>";
                echo "<div class='p-4'>";
                echo "<h3 class='text-lg font-semibold text-wisteria-deep'>" .
                    htmlspecialchars($data['judul']) . "</h3>";
                echo "</div></div>";
            }
            ?>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-wisteria-dark text-white text-center py-4 mt-10">
        &copy; <?php echo date('Y'); ?> - Buatan Andini Septiana
    </footer>
</body>

</html>
