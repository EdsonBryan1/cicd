<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Cloud & DevOps Masterclass</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0f172a] text-slate-100 min-h-screen flex flex-col items-center justify-center py-12 px-4">

    <!-- Container Utama -->
    <div class="w-full max-w-2xl mx-auto text-center">
        
        <!-- Header / Judul Event -->
        <p class="text-cyan-400 font-semibold tracking-widest uppercase text-xs sm:text-sm mb-2">Exclusive Tech Workshop</p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black tracking-tight mb-3">
            CLOUD <span class="text-blue-500">ARCHITECTURE</span> & DEVOPS
        </h1>
        <p class="text-slate-400 text-sm md:text-base mb-6">Building Scalable & Secure Cloud Infrastructure with Kubernetes & CI/CD</p>

        <!-- Informasi Detail (Tanggal, Lokasi, Jam) -->
        <div class="flex flex-wrap justify-center items-center gap-4 text-xs sm:text-sm text-slate-300 mb-8 bg-slate-800/50 py-3 px-6 rounded-full border border-slate-700/50 w-fit mx-auto">
            <div class="flex items-center gap-2">
                <span>📅</span> Sabtu, 21 November 2026
            </div>
            <div class="flex items-center gap-2">
                <span>📍</span> Online via Zoom / Hybrid
            </div>
            <div class="flex items-center gap-2">
                <span>⏰</span> 09.00 WIB — Selesai
            </div>
        </div>

        <!-- Card Formulir Pendaftaran -->
        <div class="bg-[#1e293b] border border-slate-700 rounded-2xl p-6 sm:p-8 text-left shadow-2xl backdrop-blur-sm">
            <h2 class="text-xl font-bold text-white mb-1">Formulir Registrasi Peserta</h2>
            <p class="text-slate-400 text-sm mb-6">Lengkapi data diri Anda untuk mengamankan slot workshop & sertifikat.</p>

            <!-- Form HTML -->
            <form action="#" method="POST">
                @csrf
                
                <!-- Nama Lengkap -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Nama Lengkap & Gelar</label>
                    <input type="text" name="nama" placeholder="Contoh: Edson Bryan, S.Kom" required
                        class="w-full bg-[#0f172a] border border-slate-700 rounded-lg px-4 py-2.5 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm transition">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Alamat Email</label>
                    <input type="email" name="email" placeholder="nama@email.com" required
                        class="w-full bg-[#0f172a] border border-slate-700 rounded-lg px-4 py-2.5 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm transition">
                </div>

                <!-- Nomor WhatsApp -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Nomor WhatsApp</label>
                    <input type="tel" name="telepon" placeholder="08xxxxxxxxxx" required
                        class="w-full bg-[#0f172a] border border-slate-700 rounded-lg px-4 py-2.5 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm transition">
                </div>

                <!-- Paket Workshop -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Pilihan Paket Workshop</label>
                    <select name="paket" class="w-full bg-[#0f172a] border border-slate-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm transition">
                        <option value="regular">Regular Pass (Akses Live & E-Certificate) — Gratis</option>
                        <option value="pro">Pro Pass (Recording + Source Code + E-Book) — Rp 150.000</option>
                        <option value="vip">VIP Pass (Mentoring 1-on-1 + Sertifikat Cetak) — Rp 300.000</option>
                    </select>
                </div>

                <!-- Pekerjaan / Instansi -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Instansi / Perusahaan / Sekolah</label>
                    <input type="text" name="instansi" placeholder="Masukkan nama instansi atau kampus" required
                        class="w-full bg-[#0f172a] border border-slate-700 rounded-lg px-4 py-2.5 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm transition">
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 active:bg-blue-700 transition font-semibold text-white py-3 rounded-lg text-sm shadow-lg shadow-blue-600/30">
                    Daftar Workshop Sekarang
                </button>
            </form>
        </div>

    </div>

</body>
</html>