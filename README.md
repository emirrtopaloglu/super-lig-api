# Süper Lig Puan Durumu API

- Proje dosyalarını bir sunucuya yükleyin. (Ör: siteadi.com/puan/)
- `puandurumu.php` dosyasına cron job atayın.
- Cron job her çalıştığında yüklediğiniz dizinde `standings.json` dosyası yoksa oluşur, varsa güncellenir. (Ör: siteadi.com/puan/standings.json)
- JSON dosyasını fetch ederek puan durumu verilerini kullanabilirsiniz.
