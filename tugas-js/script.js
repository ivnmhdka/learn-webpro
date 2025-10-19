function cariBarang() {
      let kode = document.getElementById("kodeBarang").value.toUpperCase();
      let nama = "";
      let harga = 0;

      switch (kode) {
        case "A001":
          nama = "Televisi Samsung 50”";
          harga = 5000000;
          break;
        case "A002":
          nama = "VCD Player Sony";
          harga = 750000;
          break;
        case "A003":
          nama = "Mini Compo";
          harga = 2300000;
          break;
        default:
          nama = "Tidak ditemukan";
          harga = 0;
      }

      document.getElementById("namaBarang").value = nama;
      document.getElementById("hargaBarang").value = harga;
    }

    function hitung() {
      let harga = parseInt(document.getElementById("hargaBarang").value);
      let jumlah = parseInt(document.getElementById("jumlahBarang").value);
      let total = harga * jumlah;
      let diskon = 0;

      if (jumlah > 10) {
        diskon = 0.12 * harga;
      }

      let totalBayar = total - diskon;

      document.getElementById("totalHarga").value = total;
      document.getElementById("diskon").value = diskon;
      document.getElementById("totalBayar").value = totalBayar;
    }