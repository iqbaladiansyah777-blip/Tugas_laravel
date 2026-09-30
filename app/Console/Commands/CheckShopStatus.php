<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckShopStatus extends Command
{
    // Nama perintah dan argumen jam yang bersifat opsional
    protected $signature = 'pos:status {jam?}';

    // Deskripsi perintah
    protected $description = 'Mengecek status operasional Toko Kelontong POS';

    public function handle()
    {
        // Meminta input nama kasir sesuai tugas mandiri
        $namaKasir = $this->ask('Masukkan nama Anda: ');
        
        // Mengambil argumen jam, default jam 10 jika kosong
        $jam = $this->argument('jam') ?? 10;
        
        $this->info("=== SISTEM MONITORING TOKO KELONTONG ===");

        // Asumsi toko buka jam 08:00 sampai 21:00
        if ($jam >= 8 && $jam <= 21) {
            $this->info("Halo $namaKasir, Status Toko pada jam $jam:00 WIB adalah: BUKA");
            $this->comment("Silakan kasir bersiap di meja transaksi.");
        } else {
            $this->error("Halo $namaKasir, Status Toko pada jam $jam:00 WIB adalah: TUTUP");
            $this->warn("Akses transaksi kasir dinonaktifkan sementara.");
        }
    }
}