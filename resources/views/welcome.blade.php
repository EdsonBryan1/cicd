<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tiket Konser</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#121212] text-white min-h-screen flex flex-col items-center justify-center py-12 px-4">

    <!-- Container Utama -->
    <div class="w-full max-w-2xl mx-auto text-center">
        
        <!-- Header / Judul Konser -->
        <p class="text-amber-600 font-semibold tracking-widest uppercase text-sm mb-2">Konser Spesial</p>
        <h1 class="text-4xl md:text-5xl font-black tracking-wider mb-2">
            ARIEL <span class="text-orange-600">NOAH</span>
        </h1>
        <p class="text-gray-400 text-sm md:text-base mb-6">Live in Concert — A Cool & Crazy Night with Noah</p>

        <!-- Informasi Detail (Tanggal, Lokasi, Jam) -->
        <div class="flex flex-wrap justify-center items-center gap-4 text-sm text-gray-300 mb-10">
            <div class="flex items-center gap-2">
                <span>📅</span> Mingggu, 15 November 2026
            </div>
            <div class="flex items-center gap-2">
                <span>📍</span> Istora Senayan, Jakarta
            </div>
            <div class="flex items-center gap-2">
                <span>⏰</span> 19.00 WIB — Selesai
            </div>
        </div>

        <!-- Card Formulir Pendaftaran -->
        <div class="bg-[#1a1a1a] border border-gray-800 rounded-xl p-6 md:p-8 text-left shadow-2xl">
            <h2 class="text-xl font-bold mb-1">Formulir Pendaftaran Tiket</h2>
            <p class="text-gray-400 text-sm mb-6">Isi data diri kamu untuk mendapatkan tiket konser Ariel NOAH.</p>

            <!-- Form HTML -->
            <form action="#" method="POST">
                @csrf
                
                <!-- Nama Lengkap -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-300 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required
                        class="w-full bg-[#121212] border border-gray-700 rounded-lg px-4 py-2.5 text-white placeholder-gray-500 focus:outline-none focus:border-orange-600 text-sm">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                    <input type="email" name="email" placeholder="nama@email.com" required
                        class="w-full bg-[#121212] border border-gray-700 rounded-lg px-4 py-2.5 text-white placeholder-gray-500 focus:outline-none focus:border-orange-600 text-sm">
                </div>

                <!-- Nomor Telepon -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-300 mb-1">Nomor Telepon</label>
                    <input type="tel" name="telepon" placeholder="08xxxxxxxxxx" required
                        class="w-full bg-[#121212] border border-gray-700 rounded-lg px-4 py-2.5 text-white placeholder-gray-500 focus:outline-none focus:border-orange-600 text-sm">
                </div>

                <!-- Kategori Tiket -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-300 mb-1">Kategori Tiket</label>
                    <select name="kategori" class="w-full bg-[#121212] border border-gray-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-orange-600 text-sm">
                        <option value="festival">Festival — Rp 350.000</option>
                        <option value="vip">VIP — Rp 750.000</option>
                        <option value="tribune">Tribune — Rp 500.000</option>
                    </select>
                </div>

                <!-- Jumlah Tiket -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-300 mb-1">Jumlah Tiket</label>
                    <input type="number" name="jumlah" value="1" min="1" max="5" 
                        class="w-full bg-[#121212] border border-gray-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-orange-600 text-sm">
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="w-full bg-[#ff4500] hover:bg-[#e03d00] transition font-semibold text-white py-3 rounded-lg text-sm shadow-lg">
                    Daftar Sekarang
                </button>
            </form>
        </div>

    </div>

</body>
</html>