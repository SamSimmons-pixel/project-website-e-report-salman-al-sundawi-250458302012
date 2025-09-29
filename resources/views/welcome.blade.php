<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portal Pengaduan Masyarakat - Bersama Membangun Negeri</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#dc2626', // warm red for passion and care
                            secondary: '#f59e0b', // warm amber for hope and warmth
                            accent: '#10b981', // emerald for growth and harmony
                            muted: '#fef7f0', // warm cream background
                            destructive: '#ea580c'
                        }
                    }
                }
            }
        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        @livewireStyles
    </head>

    <body>
    <!-- Header -->
    <header class="bg-primary text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-hands-helping text-2xl"></i>
                    <h1 class="text-xl font-bold">Bersama Membangun Negeri</h1>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="#beranda" class="hover:text-secondary transition-colors">Beranda</a>
                    <a href="#cara-pengaduan" class="hover:text-secondary transition-colors">Cara Pengaduan</a>
                    <a href="#jenis-pengaduan" class="hover:text-secondary transition-colors">Jenis Pengaduan</a>
                    <a href="#faq" class="hover:text-secondary transition-colors">FAQ</a>
                    <a href="#berdonasi" class="hover:text-secondary transition-colors">Berdonasi</a>
                    <a href="#kontak" class="hover:text-secondary transition-colors">Kontak</a>
                </nav>
                <button class="md:hidden text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="bg-gradient-to-r from-primary to-red-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-6 text-balance">Bersama Kita Peduli, Bersama Kita Membangun</h2>
            <p class="text-xl md:text-2xl mb-8 text-pretty max-w-3xl mx-auto">Mari bersatu dalam kepedulian untuk membangun negeri yang lebih baik. Setiap suara Anda adalah langkah menuju perubahan yang kita impikan bersama</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-secondary hover:bg-amber-500 text-gray-800 font-bold py-4 px-8 rounded-lg text-lg transition-colors">
                    <i class="fas fa-heart mr-2"></i>Sampaikan Kepedulian
                </button>
                <button class="border-2 border-white hover:bg-white hover:text-primary text-white font-bold py-4 px-8 rounded-lg text-lg transition-colors">
                    <i class="fas fa-search mr-2"></i>Lacak Perkembangan
                </button>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-muted">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-users text-4xl text-primary mb-4"></i>
                    <h3 class="text-3xl font-bold text-primary">12,847</h3>
                    <p class="text-gray-600">Warga Peduli</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-check-circle text-4xl text-accent mb-4"></i>
                    <h3 class="text-3xl font-bold text-accent">9,234</h3>
                    <p class="text-gray-600">Masalah Teratasi</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-handshake text-4xl text-secondary mb-4"></i>
                    <h3 class="text-3xl font-bold text-secondary">2,156</h3>
                    <p class="text-gray-600">Sedang Ditangani</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-heart text-4xl text-pink-500 mb-4"></i>
                    <h3 class="text-3xl font-bold text-pink-500">8,945</h3>
                    <p class="text-gray-600">Komunitas Aktif</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Pengaduan -->
    <section id="cara-pengaduan" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-primary">Mari Bersama Menyuarakan Kepedulian</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Setiap langkah kecil Anda adalah kontribusi besar untuk kemajuan bersama. Mari bergabung dalam gerakan kepedulian ini.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bergabung dengan Komunitas</h3>
                    <p class="text-gray-600">Daftar dan jadilah bagian dari komunitas peduli yang berkomitmen membangun negeri</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bagikan Kepedulian</h3>
                    <p class="text-gray-600">Sampaikan aspirasi dan kepedulian Anda dengan penuh tanggung jawab dan kasih sayang</p>
                </div>
                <div class="text-center">
                    <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Saksikan Perubahan</h3>
                    <p class="text-gray-600">Pantau bagaimana kepedulian kita bersama menciptakan perubahan nyata di masyarakat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Jenis Pengaduan -->
    <section id="jenis-pengaduan" class="py-16 bg-muted">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-primary">Bidang Kepedulian Kita</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Bersama-sama kita peduli pada berbagai aspek kehidupan masyarakat untuk menciptakan lingkungan yang lebih baik</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <i class="fas fa-road text-3xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Infrastruktur Bersama</h3>
                    <p class="text-gray-600">Jalan, lampu, drainase - fasilitas yang kita gunakan bersama</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <i class="fas fa-hospital text-3xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Kesehatan Keluarga</h3>
                    <p class="text-gray-600">Layanan kesehatan untuk keluarga dan komunitas kita</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <i class="fas fa-graduation-cap text-3xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Pendidikan Anak Bangsa</h3>
                    <p class="text-gray-600">Masa depan cerah untuk generasi penerus kita</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <i class="fas fa-shield-alt text-3xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Keamanan Bersama</h3>
                    <p class="text-gray-600">Lingkungan yang aman untuk semua keluarga</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <i class="fas fa-file-invoice text-3xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Pelayanan Publik</h3>
                    <p class="text-gray-600">Kemudahan administrasi untuk seluruh masyarakat</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <i class="fas fa-leaf text-3xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Lingkungan Hijau</h3>
                    <p class="text-gray-600">Bumi yang lestari untuk anak cucu kita</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Pengaduan -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-primary">Bagikan Kepedulian Anda</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Setiap suara yang Anda sampaikan adalah wujud kepedulian untuk kemajuan bersama</p>
            <div class="max-w-4xl mx-auto">
                <form class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Nama Lengkap *</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Email *</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Nomor Telepon *</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Kategori Pengaduan *</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" required>
                                <option value="">Pilih Kategori</option>
                                <option value="infrastruktur">Infrastruktur</option>
                                <option value="kesehatan">Kesehatan</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="keamanan">Keamanan</option>
                                <option value="administrasi">Administrasi</option>
                                <option value="lingkungan">Lingkungan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Lokasi Kejadian *</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Alamat lengkap lokasi" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Judul Pengaduan *</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Ringkasan singkat masalah" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Detail Pengaduan *</label>
                        <textarea rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Jelaskan masalah secara detail..." required></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Lampiran Bukti</label>
                        <input type="file" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" multiple accept="image/*,.pdf,.doc,.docx">
                        <p class="text-sm text-gray-500 mt-2">Format: JPG, PNG, PDF, DOC (Max 5MB per file)</p>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-primary hover:bg-red-700 text-white font-bold py-4 px-8 rounded-lg text-lg transition-colors">
                            <i class="fas fa-heart mr-2"></i>Sampaikan Kepedulian
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-muted">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Pertanyaan yang Sering Diajukan</h2>
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="bg-white rounded-lg shadow-md">
                    <button class="w-full px-6 py-4 text-left font-bold text-gray-800 hover:text-primary focus:outline-none">
                        <span>Berapa lama waktu yang dibutuhkan untuk menindaklanjuti pengaduan?</span>
                        <i class="fas fa-chevron-down float-right mt-1"></i>
                    </button>
                    <div class="px-6 pb-4 text-gray-600">
                        Waktu penanganan bervariasi tergantung jenis dan kompleksitas masalah. Umumnya 3-14 hari kerja untuk pengaduan standar.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md">
                    <button class="w-full px-6 py-4 text-left font-bold text-gray-800 hover:text-primary focus:outline-none">
                        <span>Apakah pengaduan saya akan ditanggapi?</span>
                        <i class="fas fa-chevron-down float-right mt-1"></i>
                    </button>
                    <div class="px-6 pb-4 text-gray-600">
                        Ya, setiap pengaduan akan mendapat tanggapan. Anda akan menerima nomor tiket untuk melacak status pengaduan.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md">
                    <button class="w-full px-6 py-4 text-left font-bold text-gray-800 hover:text-primary focus:outline-none">
                        <span>Bisakah saya mengajukan pengaduan secara anonim?</span>
                        <i class="fas fa-chevron-down float-right mt-1"></i>
                    </button>
                    <div class="px-6 pb-4 text-gray-600">
                        Untuk memastikan tindak lanjut yang optimal, kami menyarankan untuk menyertakan identitas. Namun, data pribadi Anda akan dijaga kerahasiaannya.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md">
                    <button class="w-full px-6 py-4 text-left font-bold text-gray-800 hover:text-primary focus:outline-none">
                        <span>Bagaimana cara melacak status pengaduan saya?</span>
                        <i class="fas fa-chevron-down float-right mt-1"></i>
                    </button>
                    <div class="px-6 pb-4 text-gray-600">
                        Gunakan nomor tiket yang diberikan setelah pengajuan untuk melacak status melalui fitur "Lacak Status" di website ini.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berdonasi Section -->
    <section id="berdonasi" class="py-16 bg-gradient-to-r from-secondary to-amber-400">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Bersama Membangun, Bersama Berbagi</h2>
            <p class="text-xl text-white mb-8 max-w-3xl mx-auto text-pretty">
                Kepedulian Anda adalah kekuatan yang menggerakkan perubahan. Mari bersama-sama membangun platform
                yang menjadi jembatan antara aspirasi masyarakat dan solusi nyata. Setiap kontribusi adalah wujud cinta untuk negeri.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mb-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <i class="fas fa-server text-4xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Teknologi untuk Semua</h3>
                    <p class="text-gray-600">Sistem yang handal untuk melayani setiap warga dengan sepenuh hati</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <i class="fas fa-mobile-alt text-4xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Akses yang Mudah</h3>
                    <p class="text-gray-600">Aplikasi mobile agar setiap suara dapat tersampaikan dengan mudah</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <i class="fas fa-users text-4xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Tim yang Peduli</h3>
                    <p class="text-gray-600">Pelatihan tim untuk melayani dengan empati dan profesionalisme</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">Wujudkan Kepedulian Anda</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <button class="bg-gray-100 hover:bg-primary hover:text-white p-4 rounded-lg font-bold transition-colors">Rp 25.000</button>
                    <button class="bg-gray-100 hover:bg-primary hover:text-white p-4 rounded-lg font-bold transition-colors">Rp 50.000</button>
                    <button class="bg-gray-100 hover:bg-primary hover:text-white p-4 rounded-lg font-bold transition-colors">Rp 100.000</button>
                    <button class="bg-gray-100 hover:bg-primary hover:text-white p-4 rounded-lg font-bold transition-colors">Lainnya</button>
                </div>
                <div class="mb-6">
                    <input type="number" placeholder="Masukkan nominal (Rp)" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <button class="bg-primary hover:bg-red-700 text-white font-bold py-4 px-8 rounded-lg text-lg transition-colors w-full">
                    <i class="fas fa-heart mr-2"></i>Berbagi Kasih Sekarang
                </button>
                <p class="text-sm text-gray-500 mt-4">Setiap rupiah yang Anda berikan adalah investasi untuk masa depan yang lebih baik. Terima kasih atas kepedulian Anda!</p>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Hubungi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <i class="fas fa-phone text-4xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Telepon</h3>
                    <p class="text-gray-600">+62 21 1234 5678</p>
                    <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-envelope text-4xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Email</h3>
                    <p class="text-gray-600">pengaduan@suararakyat.id</p>
                    <p class="text-gray-600">info@suararakyat.id</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-map-marker-alt text-4xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Alamat</h3>
                    <p class="text-gray-600">Jl. Merdeka No. 123</p>
                    <p class="text-gray-600">Jakarta Pusat, 10110</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Bersama Membangun Negeri</h3>
                    <p class="text-gray-300 mb-4">Platform yang menghubungkan hati dan kepedulian masyarakat untuk menciptakan perubahan nyata dalam kehidupan bersama.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-secondary"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-secondary"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-secondary"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-secondary"><i class="fab fa-youtube text-xl"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Menu Utama</h4>
                    <ul class="space-y-2">
                        <li><a href="#beranda" class="text-gray-300 hover:text-secondary">Beranda</a></li>
                        <li><a href="#cara-pengaduan" class="text-gray-300 hover:text-secondary">Cara Pengaduan</a></li>
                        <li><a href="#jenis-pengaduan" class="text-gray-300 hover:text-secondary">Jenis Pengaduan</a></li>
                        <li><a href="#faq" class="text-gray-300 hover:text-secondary">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-secondary">Ajukan Pengaduan</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-secondary">Lacak Status</a></li>
                        <li><a href="#berdonasi" class="text-gray-300 hover:text-secondary">Berdonasi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-secondary">Laporan Bulanan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Informasi</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-secondary">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-secondary">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-secondary">Syarat & Ketentuan</a></li>
                        <li><a href="#kontak" class="text-gray-300 hover:text-secondary">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; 2024 Bersama Membangun Negeri. Dengan cinta untuk Indonesia yang lebih baik.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="fixed bottom-6 right-6 bg-primary hover:bg-red-700 text-white p-3 rounded-full shadow-lg transition-colors hidden">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Show/hide scroll to top button
        window.addEventListener('scroll', function() {
            const scrollTop = document.getElementById('scrollTop');
            if (window.pageYOffset > 300) {
                scrollTop.classList.remove('hidden');
            } else {
                scrollTop.classList.add('hidden');
            }
        });

        // Scroll to top functionality
        document.getElementById('scrollTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // FAQ accordion functionality
        document.querySelectorAll('#faq button').forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('i');

                if (content.style.display === 'block') {
                    content.style.display = 'none';
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                } else {
                    content.style.display = 'block';
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            });
        });

        // Donation amount selection
        document.querySelectorAll('#berdonasi button').forEach(button => {
            if (button.textContent.includes('Rp')) {
                button.addEventListener('click', function() {
                    const amount = this.textContent.replace('Rp ', '').replace('.', '');
                    const input = document.querySelector('#berdonasi input[type="number"]');
                    if (input) {
                        input.value = amount;
                    }

                    // Remove active class from all buttons
                    document.querySelectorAll('#berdonasi button').forEach(btn => {
                        btn.classList.remove('bg-primary', 'text-white');
                        btn.classList.add('bg-gray-100');
                    });

                    // Add active class to clicked button
                    this.classList.remove('bg-gray-100');
                    this.classList.add('bg-primary', 'text-white');
                });
            }
        });
    </script>
        @livewireScripts
    </body>
</html>
