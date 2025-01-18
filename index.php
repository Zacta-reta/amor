<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 

/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksHai = "Tunggu 10 Detik, baru dipencet pesannya yaaa";
    
konten = [
  {
    gambar: "Gambar1.gif",
    ucapan: "Halooo bila sayaaang, selamat ulang tahun, ciee udah 20 😏",
  },
  {
    gambar: "Gambar2.gif",
    ucapan: "maafin aku yaa, selama ini banyak salah, bikin sebel, bikin badmood 😔",
  },
  {
    gambar: "Gambar3.gif",
    ucapan: "Makasii juga udah sabar sama aku, kalo bikin salah di maafin (walaupun diinget trs😒)" ,
  },
  {
    gambar: "Gambar4.gif",
    ucapan: "Selamat tambah tahun, tambah tua wkwkw.",
  },
  {
    gambar: "Gambar5.gif",
    ucapan: "Bukan ngejek, tapi kan emang kita menua bersama ciee 🤣",
  },
  {
    gambar: "Gambar6.gif",
    ucapan: "Semoga kedepannya panjang umuur, banyak rejeki, banyak senengnyaa 😚",
  },
  {
    gambar: "Gambar7.gif",
    ucapan: "Semoga juga ngga sering sebel, sedih, badmood 😁🙏",
  },
{
    ucapan: "Semoga selalu bareng, maunya kan kayak lagu ini, coba dengerin liriknya 😌 " 
  },
{
    gambar: "Gambar2.gif",
    ucapan: "Selamat Ulang Tahun yaa sayaaang, maaf juga ucapin nya telat. hehehe",
  },
  {
    gambar: "Gambar10.gif",
    ucapan: "Oh iya btw, tambah tahun = tambah deket pelaminan, aamiin. uhuuy wkwkwk",
  },
  {
    gambar: "Gambar11.gif",
    ucapan: "nah gantian kamu yang ngasih ucapan 😏",
  },
];

musik = "musik.mp3";
nomorWhatsapp = "6285xxx";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>
