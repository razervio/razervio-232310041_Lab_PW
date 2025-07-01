[09.41, 24/4/2025] ~a: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h3> Object Array </h3>
    <script>
       function cobaarray (){
        nama = new Array("Daffa", "Alvio", "Josh", "Fadhil");
        document.write("nama;" +nama [1]);

       }
       </script>
       <script> cobaarray();
       </script> -->
       <!-- <h3>Latihan Objek Array II</h3>
    Pemanggilan data Array dengan Perintah Perulangan For <br />
    <script languange="Javascript">
      var nilai = new Array(3);
      nilai[0] = 10;
      nilai[1] = 20;
      nilai[2] = 30;
      for (a = 0; a < 3; a++) {
        document.writeln("<B> Nilai ke" + [a + 1] + ": " + nilai[a] + "<BR>");
      }
    </script> -->
    <!-- <h3 align="center">Latihan Objek Date/Tanggal</h3>
    <script language="JavaScript">
      var hari = new Array(
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu",
        "Minggu"
      );
      var bulan = new Array(
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
      );
      var t = new Date();
      var hari_ini = hari[t.getDay() - 1];
      var tanggal = t.getDate();
      var bulan_ini = bulan[t.getMonth()];
      var tahun = t.getFullYear();
      var jam = t.getHours();
      var menit = t.getMinutes();
      var detik = t.getSeconds();
      document.write("<font size=5 face=arial>");
      document.write(
        "<b><center>Sekarang adalah hari :" +
          hari_ini +
          ",tanggal: " +
          tanggal +
          " " +
          bulan_ini +
          " " +
          tahun 
      );
      document.write("<hr width=700>");
      document.write("</font>");
      document.write("<font size=3 face=arial>");
      document.write(
        "<b><center>Jam sekarang = " + jam + ":" + menit + ":" + detik
      );
      document.write("</font>");
    </script> -->
    <!-- <h3>Latihan Dengan Objek Math</h3>
    <script language="JavaScript">
      var a = 10;
      var b = 5;
      besar = Math.max(a, b);
      document.write(
        "antara " + a + " dan " + b + " lebih besar " + besar + "<br>"
      );
      pangkat = Math.pow(b, a);
      document.write(b + " pangkat " + a + " adalah " + pangkat + "<br>");
      var ran;
      ran = Math.round(Math.random() * 50000);
      document.write("Anda adalah pengunjung yang ke " + ran + ".<br>");
      var akar;
      akar = Math.sqrt(ran);
      document.write("Akar dari " + ran + " adalah " + akar);
    </script> -->
    <!-- <h3>Latihan Objek String</h3>
    <script language="Javascript">
      nama = "Alvio Reza Febrian";
      panjang = nama.length;
      n = nama.substring(1, 4);
      besar = nama.toUpperCase();
      namakulink = nama.link("shafa.html");
      document.writeln("Namaku adalah = " + nama + "<BR>");
      document.writeln("Panjang namaku adalah " + panjang + " karakter <BR>");
      document.writeln("method BIG = " + nama.big() + "<BR>");
      document.writeln("method SMALL = " + nama.small() + "<BR>");
      document.writeln("method SUB = " + nama.sub() + "<BR>");
      document.writeln("method SUP = " + nama.sup() + "<BR>");
      document.writeln("method BOLD = " + nama.bold() + "<BR>");
      document.writeln("method ITALIC = " + nama.italics() + "<BR>");
      document.writeln("method FONTCOLOR = " + nama.fontcolor("red") + "<BR>");
      document.writeln("method LOWERCASE = " + nama.toLowerCase() + "<BR>");
      document.writeln("method UPPERCASE = " + besar + "<BR>");
      document.writeln("method SUBSTRING = " + n + "<BR>");
      document.writeln("method STRIKE = " + nama.strike() + "<BR>");
      document.writeln("method CharAT = " + nama.charAt(3) + "<BR>");
      document.writeln("method Link = " + namakulink + "<BR>");
      ocument.writeln("Index Huruf c = " + nama.indexOf("c") + "<BR>");
      awal = nama.indexOf("V");
      akhir = nama.length;
      document.writeln(
        "Kata Yang Tersisa = " + nama.substring(awal, akhir) + "<BR>"
      );
    </script> -->

    <!-- Ke-6 -->
    <!-- <h3>Latihan Objek Document</h3>
    <hr />
    Dengan perintah ini maka teks dalam dokumen ini akan berwarna putih<br />
    <script language="Javascript">
      nama = "Febry D F";
      document.bgColor = "black";
      document.fgColor = "white";
      document.title = "Belajar objek Document";
      document.linkColor = "red";
      document.vlinkColor = "green";
      document.alinkColor = "white";
      namakulink = nama.link("https://www.linkedin.com/in/febri-d-2b9537b1/");
      document.writeln("Warna Link = " + namakulink + "<BR>");
    </script> -->
    <!-- <h3>Latihan Objek Window</h3>
    <hr />
    <script language="Javascript">
      window.status = "Welcome";
      window.alert = "Selamat Datang";
      angka = window.prompt("Inputkan Angka ?", 0);
      document.write(
        "Angka favorit anda adalah =<strong>" + angka + "</strong><br>"
      );
      tampung = window.confirm("jenis kelamin anda Pria?");
      if (tampung) {
        document.write("Boleh Kenalan donk");
      } else {
        document.write("Ok dech");
      }
      window.close();
    </script> -->
    <!-- <CENTER>
        <H3>Latihan Objek Document</H3><hr>
        Membuka Web Page dengan Perintah Window.Open dan Window.Location
    </CENTER>
    <SCRIPT LANGUAGE="Javascript">
    function konek1(){
        window.open("utsb.HTML");
    }
    function konek2()
    {
        window.location="kunci_jawaban UTS.HTML";
    }
    </SCRIPT>
    <FORM METHOD="post">
        <P><CENTER>
        <INPUT TYPE="button" VALUE="Kunci Jawaban UTS A" ONCLICK="konek1()">
        <INPUT TYPE="button" VALUE="Kunci Jawaban UTS B" ONCLICK="konek2()">
    </FORM></CENTER> -->
    <!-- <center>
      <h3>Latihan Objek Document</h3>
      <hr />
      Membuka Web Page dengan Perintah Window.Location.href
    </center>
    <script language="Javascript">
      function konek1() {
        if (document.pilihan.pilih.options[0].selected) {
          window.location.href = "latobjekradio.HTML";
        } else if (document.pilihan.pilih.options[1].selected) {
          window.location.href = "latobjekselect.HTML";
        } else if (document.pilihan.pilih.options[2].selected) {
          window.location.href = "latobjekteksarea.HTML";
        }
        return true;
      }
      function konek2() {
        var pilihint;
        var pilihstr;
        pilihint = document.pilihan.pilih.selectedIndex;
        pilihstr = document.pilihan.pilih.options[pilihint].text;
        document.pilihan.pilihteks.value = " Go To " + pilihstr + "!";
      }
    </script>
    <center>
      <form name="pilihan">
        <b>MENU PILIHAN DENGAN TOMBOL</b>
        <p>
          <select name="pilih" ONCHANGE="konek2()" multiple size="3">
            <option>Latihan Objek Radio</option>
            <option>Latihan Objek Select</option>
            <option>Latihan Objek Teks Area</option>
          </select>
        </p>
        <p>
          <br />
          <INPUT TYPE="button" name="pilihteks" value"" size="40"
          maxlength="40">
        </p>
        <p>
          <input
            type="button"
            name="Gobutton"
            value="Goo!!"
            ONCLICK="konek1()"
          />
        </p>
      </form>
    </center> -->
    <!-- <script language="JavaScript">
      function warna(pilihan) {
        alert("Anda Memilih Warna " + pilihan);
        document.bgColor = pilihan;
      }
    </script>
    <h1 align="center">Latihan Event OnClick</h1>
    <hr width="500" color="black" noshade />
    <h3 align="center">Pilih warna favorit anda.</h3>
    <center>
      <form>
        <input type="button" value="Biru" onClick="warna('lightblue')" />
        <input type="button" value="Pink" onClick="warna('pink')" />
        <input type="button" value="Coklat" onClick="warna('burlywood')" />
        <input type="button" value="Kelabu" onClick="warna('darkgray')" />
        <input type="button" value="Oranye" onClick="warna('peachpuff')" />
        <input type="button" value="Putih" onClick="warna('white')" />
        <input type="button" value="Hitam" onClick="warna('black')" />

      </form>
      <form>
        <img
          name="coolfan"
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/LOGO_IBIK.png/1200px-LOGO_IBIK.png"
          height="72"
        /><br /><br />
        <input
          type="BUTTON"
          value=" On "
          onClick="coolfan.src =
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJBZAVVaKE_AQgGYMov1VMtwOQ_vdCtKqikg&s'"
        />
        <input
          type="BUTTON"
          value=" Off "
          onClick="coolfan.src =
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPKQPJXgpsvoJ3uWp5F6tWir2VMmHhCp4Hnw&s'"
        />
      </form>
    </center> -->
    <!-- <h1 align="center">Latihan Event OnFocus dan OnBlur</h1>
    <hr width="600" color="black" noshade size="10" />

    <font face="arial">
      <h3 align="center">R E G I S T R A S I</h3>
      <hr width="600" color="black" noshade size="2" />

      <center>
        <form name="f" method="get">
          <table>
            <tr>
              <td width="31%">NIM</td>
              <td width="7%">:</td>
              <td width="62%">
                <input
                  type="text"
                  name="inim"
                  size="9"
                  onFocus="console.log('Silakan mengisi NIM Anda');"
                  onBlur="masukannim()"
                />
              </td>
            </tr>
            <tr>
              <td>NAMA</td>
              <td>:</td>
              <td>
                <input
                  type="text"
                  name="inama"
                  size="23"
                  onFocus="console.log('Silakan mengisi Nama Anda');"
                  onBlur="masukannama()"
                />
              </td>
            </tr>
            <tr>
              <td>ALAMAT</td>
              <td>:</td>
              <td>
                <input
                  type="text"
                  name="ialamat"
                  size="34"
                  onFocus="console.log('Silakan mengisi Alamat Anda');"
                  onBlur="masukanalamat()"
                />
              </td>
            </tr>
          </table>

          <hr width="600" color="black" noshade size="2" />
          <p>
            <input type="button" value="Kirim" onclick="terimakasih()" />
            <input type="reset" value="Reset" />
          </p>
        </form>
      </center>
    </font>

    <script>
      function masukannim() {
        if (document.f.inim.value == "") {
          alert("Anda belum memasukkan NIM");
        }
      }

      function masukannama() {
        if (document.f.inama.value == "") {
          alert("Anda belum memasukkan Nama");
        }
      }

      function masukanalamat() {
        if (document.f.ialamat.value == "") {
          alert("Anda belum memasukkan Alamat");
        }
      }

      function terimakasih() {
        if (
          document.f.inim.value != "" &&
          document.f.inama.value != "" &&
          document.f.ialamat.value != ""
        ) {
          alert("Terima kasih telah mengisi data");
        } else {
          alert("Mohon lengkapi semua data terlebih dahulu");
        }
      }
    </script> -->
    <!-- <script>
    function tanggal() {
      var now = new Date();
      var y = now.getFullYear();
      var m = now.getMonth() + 1;
      var day = now.getDate();
      var t = day + '/' + m + '/' + y;
      defaultStatus = "Anda datang pada tanggal " + t + ".";
      alert("Selamat Datang Teman \nSilahkan Masuk Ke Websiteku");
    }

    function timer() {
      var d = new Date();
      var jam = d.getHours().toString().padStart(2, '0');
      var menit = d.getMinutes().toString().padStart(2, '0');
      var detik = d.getSeconds().toString().padStart(2, '0');
      var strwaktu = jam + " : " + menit + " : " + detik;
      document.f.txtwaktu.value = strwaktu;
      setTimeout(timer, 1000);
    }

    function tutup() {
      alert("Terimakasih Telah Berkunjung\nJangan lupa Datang kembali Ya..");
    }
  </script>
</head>
<body onload="tanggal(); timer();" onunload="tutup();">
  <h1 align="center">Latihan Event OnLoad dan OnUnLoad</h1>
  <hr width="600" color="black" noshade size="10">
  <font face="arial">
    <h3 align="center">SELAMAT DATANG</h3>
    <center>
      <form name="f">
        <h4 align="center">Sekarang Menunjukkan Jam</h4>
        <input type="Text" size="16" name="txtwaktu">
        <hr width="600" color="black" noshade size="2">
      </form>
    </center> -->
    <!-- <form name="formcari" onsubmit="cari(event)">
      <center>
        <table>
          <tr>
            <td colspan="4" bgcolor="orange">
              <h1 align="center">S e a r c h - E n g i n e</h1>
              <hr color="black" size="4" />
            </td>
          </tr>
          <tr>
            <td><b>Cari pakai</b></td>
            <td>
              <img
                src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_92x30dp.png"
                alt="Google Logo"
              />
            </td>
            <td><input name="keyword" size="40" type="text" /></td>
            <td>
              <input type="submit" value="Cari .. !!" />
              <input type="reset" value="Ulang" />
            </td>
          </tr>
          <tr>
            <td colspan="4" bgcolor="orange">
              <hr color="black" size="4" />
            </td>
          </tr>
        </table>
      </center>
    </form>
    <script>
      function cari(event) {
        event.preventDefault();
        var kata = document.formcari.keyword.value;
        var hasil =
          "https://www.google.com/search?q=" + encodeURIComponent(kata);
        window.open(
          hasil,
          "google",
          "height=500,width=750,scrollbars=yes,location=yes"
        );
      }
    </script> -->
    <!-- <form
      name="form-guest"
      method="post"
      action="mailto:222310054@student.ibik.ac.id?subject=FormJS"
    >
      <font face="Arial">
        <table align="center" border="1" cellpadding="5">
          <tr bgcolor="gray">
            <td colspan="2" align="center"><h1>G u e s t B o o k</h1></td>
          </tr>
          <tr bgcolor="peachpuff">
            <td>Nama Anda:</td>
            <td><input type="text" name="nama" size="30" /></td>
          </tr>
          <tr bgcolor="peachpuff">
            <td>Email Anda:</td>
            <td><input type="text" name="email" size="30" /></td>
          </tr>
          <tr bgcolor="peachpuff">
            <td>Komentar Anda:</td>
            <td><textarea name="cs" rows="5" cols="50"></textarea></td>
          </tr>
          <tr bgcolor="orange">
            <td colspan="2" align="center">
              <input
                type="button"
                name="thesubmit"
                value="Kirim"
                onclick="isiform(this.form)"
              />
              <input type="reset" value="Hapus" />
            </td>
          </tr>
          <tr bgcolor="gray">
            <td colspan="2" align="center">
              <b>Terima Kasih Telah Mengisi Guest Book</b>
            </td>
          </tr>
        </table>
      </font>
    </form>
    <script>
      function isiform(form) {
        if (isinama(form) && isiemail(form) && isikomentar(form)) {
          form.submit();
        } else {
          salahisi(form);
        }
      }

      function salahisi(form) {
        var teks = "Ada Kesalahan Isian:";
        if (!isinama(form)) {
          teks += "\n- Nama Anda";
        }
        if (!isiemail(form)) {
          teks += "\n- Email Anda";
        }
        if (!isikomentar(form)) {
          teks += "\n- Komentar Anda";
        }
        alert(teks);
      }

      function isinama(form) {
        return form.nama.value.trim() !== "";
      }

      function isiemail(form) {
        var email = form.email.value.trim();
        return email !== "" && email.includes("@") && email.includes(".");
      }

      function isikomentar(form) {
        return form.cs.value.trim() !== "";
      }
    </script> -->
    <!-- <center>
      <h2>Slideshow Gambar Online</h2>
      <img
        id="mypic"
        src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Brandenburger_Tor_abends.jpg/300px-Brandenburger_Tor_abends.jpg"
        height="200"
      />
      <p>
        <a href="#" onclick="slideshow(-1); return false;">Previous</a>
        |
        <a href="#" onclick="slideshow(1); return false;">Next</a>
      </p>
    </center>
    <script>
      let num = 1;
      const totalImages = 6;
      const images = [];

      // URL gambar yang dijamin tampil
      const imageURLs = [
        "", // index 0 sengaja dikosongkan
        "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Brandenburger_Tor_abends.jpg/300px-Brandenburger_Tor_abends.jpg",
        "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Fronalpstock_big.jpg/300px-Fronalpstock_big.jpg",
        "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Cat_poster_1.jpg/300px-Cat_poster_1.jpg",
        "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Honeycrisp.jpg/300px-Honeycrisp.jpg",
        "https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/English_Cocker_Spaniel.jpg/300px-English_Cocker_Spaniel.jpg",
        "https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Blue_Marble_Eastern_Hemisphere.jpg/300px-Blue_Marble_Eastern_Hemisphere.jpg",
      ];

      for (let i = 1; i <= totalImages; i++) {
        const img = new Image();
        img.src = imageURLs[i];
        images[i] = img;
      }

      function slideshow(x) {
        num += x;
        if (num > totalImages) num = 1;
        if (num < 1) num = totalImages;
        document.getElementById("mypic").src = images[num].src;
      }
    </script> -->
    
</body>
</html>