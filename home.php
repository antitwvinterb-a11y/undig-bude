<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title>Undangan Walimatul Khitan — Muhammad Arosy Raffasyah</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Jost:wght@300;400;500;600&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
<style>
:root{
  --ink:#0b0a08;
  --ink2:#161310;
  --ink3:#1f1a14;
  --gold:#cda85e;
  --gold-bright:#ecd089;
  --gold-dim:#8a703c;
  --cream:#f3ead4;
  --cream-dim:#cdc0a3;
  --bronze:#6b4226;
  --bronze-light:#a9714a;
  --shadow:0 20px 60px rgba(0,0,0,.55);
}
*{box-sizing:border-box;}
html,body{margin:0;padding:0;}
body{
  background:var(--ink);
  color:var(--cream);
  font-family:'Jost',sans-serif;
  font-weight:300;
  -webkit-font-smoothing:antialiased;
  overflow-x:hidden;
}
::selection{background:var(--gold-dim);color:var(--ink);}

.frame{
  max-width:520px;
  margin:0 auto;
  position:relative;
  min-height:100vh;
  background:
    radial-gradient(ellipse at 50% -10%, rgba(205,168,94,.10), transparent 55%),
    var(--ink);
  border-left:1px solid rgba(205,168,94,.18);
  border-right:1px solid rgba(205,168,94,.18);
  box-shadow:var(--shadow);
}
.gold-rail{
  position:fixed;
  top:0;bottom:0;
  width:6px;
  background:linear-gradient(180deg,transparent,var(--gold) 12%,var(--gold) 88%,transparent);
  opacity:.55;
  z-index:5;
  pointer-events:none;
}
.gold-rail.left{left:calc(50% - 260px);}
.gold-rail.right{right:calc(50% - 260px);}
@media(max-width:560px){
  .gold-rail.left{left:6px;}
  .gold-rail.right{right:6px;}
}

/* ---------- ornaments ---------- */
.mandala{
  display:block;
  margin:0 auto;
  animation:spin 90s linear infinite;
}
@media (prefers-reduced-motion: reduce){ .mandala{animation:none;} }
@keyframes spin{ to{ transform:rotate(360deg); } }

.divider{
  display:flex;align-items:center;gap:14px;
  margin:14px auto 6px;
  width:80%;
  opacity:.8;
}
.divider .line{flex:1;height:1px;background:linear-gradient(90deg,transparent,var(--gold),transparent);}
.divider .mark{width:18px;height:18px;flex:none;}

.eyebrow{
  font-family:'Cormorant Garamond',serif;
  letter-spacing:.35em;
  text-transform:uppercase;
  font-size:12.5px;
  color:var(--gold);
  text-align:center;
}

.script{
  font-family:'Mrs Saint Delafield',cursive;
  color:var(--gold-bright);
  line-height:1;
}

.serif-title{
  font-family:'Cormorant Garamond',serif;
  letter-spacing:.06em;
}

/* ---------- COVER (gate) ---------- */
#cover{
  min-height:100vh;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  text-align:center;
  padding:40px 28px;
  position:relative;
  background:
    radial-gradient(ellipse at 50% 20%, rgba(205,168,94,.14), transparent 60%),
    var(--ink);
}
#cover .frame-corner{
  position:absolute; width:46px; height:46px; opacity:.85;
}
#cover .fc-tl{top:18px;left:18px;}
#cover .fc-tr{top:18px;right:18px;transform:scaleX(-1);}
#cover .fc-bl{bottom:18px;left:18px;transform:scaleY(-1);}
#cover .fc-br{bottom:18px;right:18px;transform:scale(-1,-1);}

.cover-eyebrow{
  font-family:'Cormorant Garamond',serif;
  letter-spacing:.5em;
  text-transform:uppercase;
  color:var(--cream-dim);
  font-size:12px;
  margin-bottom:6px;
}
.cover-title{
  font-size:54px;
  margin:6px 0 0;
}
.cover-sub{
  font-family:'Cormorant Garamond',serif;
  font-size:22px;
  letter-spacing:.3em;
  text-transform:uppercase;
  color:var(--gold);
  margin-top:2px;
}
.cover-date{
  margin-top:18px;
  font-family:'Cormorant Garamond',serif;
  font-size:18px;
  color:var(--cream);
  letter-spacing:.08em;
}
.cover-photo{
  width:128px;height:128px;border-radius:50%;
  object-fit:cover;object-position:top center;
  border:2px solid var(--gold);
  box-shadow:0 0 0 6px rgba(205,168,94,.12), var(--shadow);
  margin-top:22px;
}
.cover-name{
  font-family:'Cormorant Garamond',serif;
  font-size:28px;
  margin-top:14px;
  color:var(--cream);
}
.cover-guest{
  margin-top:30px;
  font-size:13px;
  letter-spacing:.05em;
  color:var(--cream-dim);
}
.cover-guest b{
  display:block;
  margin-top:6px;
  font-family:'Cormorant Garamond',serif;
  font-size:22px;
  color:var(--gold-bright);
  font-weight:600;
}
.btn-open{
  margin-top:30px;
  padding:14px 36px;
  border-radius:999px;
  border:1px solid var(--gold);
  background:linear-gradient(180deg, rgba(205,168,94,.16), rgba(205,168,94,.04));
  color:var(--gold-bright);
  font-family:'Cormorant Garamond',serif;
  letter-spacing:.18em;
  text-transform:uppercase;
  font-size:14px;
  cursor:pointer;
  transition:transform .25s ease, background .25s ease;
}
.btn-open:hover{transform:translateY(-2px); background:rgba(205,168,94,.22);}
.btn-open:active{transform:translateY(0);}

/* ---------- content ---------- */
#content{
  display:none;
  padding:0;
}
#content.show{display:block; animation:fadeUp .9s ease both;}
@keyframes fadeUp{from{opacity:0; transform:translateY(14px);} to{opacity:1; transform:translateY(0);}}

section{
  padding:54px 30px;
  position:relative;
}
section + section{
  border-top:1px solid rgba(205,168,94,.14);
}
.section-title{
  text-align:center;
  font-family:'Cormorant Garamond',serif;
  font-size:34px;
  color:var(--gold-bright);
  margin:6px 0 2px;
}
.center{text-align:center;}
.lede{
  text-align:center;
  font-size:14.5px;
  line-height:1.9;
  color:var(--cream-dim);
  max-width:400px;
  margin:14px auto 0;
}

/* opening */
.bismillah{
  font-family:'Amiri',serif;
  font-size:28px;
  text-align:center;
  color:var(--gold-bright);
  margin-top:4px;
}

/* ayat */
.ayat-card{
  margin-top:22px;
  padding:26px 22px;
  border:1px solid rgba(205,168,94,.3);
  border-radius:4px;
  background:linear-gradient(180deg, rgba(205,168,94,.06), transparent);
  text-align:center;
}
.ayat-arab{
  font-family:'Amiri',serif;
  font-size:26px;
  line-height:2.1;
  color:var(--cream);
  direction:rtl;
}
.ayat-terjemah{
  margin-top:16px;
  font-family:'Cormorant Garamond',serif;
  font-style:italic;
  font-size:17px;
  line-height:1.7;
  color:var(--cream-dim);
}
.ayat-ref{
  margin-top:10px;
  font-size:12px;
  letter-spacing:.18em;
  text-transform:uppercase;
  color:var(--gold);
}
.ayat-note{
  margin-top:14px;
  font-size:12px;
  line-height:1.7;
  color:var(--cream-dim);
  opacity:.8;
}

/* profile (anak) */
.profile-photo-wrap{
  width:220px;height:280px;
  margin:26px auto 0;
  position:relative;
}
.profile-photo-wrap img{
  width:100%;height:100%;object-fit:cover;object-position:top center;
  border:1px solid var(--gold);
  box-shadow:var(--shadow);
}
.profile-photo-wrap::before{
  content:"";
  position:absolute; inset:-10px;
  border:1px solid rgba(205,168,94,.35);
  pointer-events:none;
}
.profile-name{
  text-align:center;
  font-family:'Cormorant Garamond',serif;
  font-size:30px;
  margin-top:20px;
  color:var(--cream);
}
.profile-nick{
  text-align:center;
  font-family:'Mrs Saint Delafield',cursive;
  font-size:34px;
  color:var(--gold-bright);
  margin-top:2px;
}
.profile-parents{
  text-align:center;
  margin-top:16px;
  font-size:14px;
  line-height:1.9;
  color:var(--cream-dim);
}
.profile-parents .label{
  display:block;
  font-size:11px;
  letter-spacing:.25em;
  text-transform:uppercase;
  color:var(--gold);
  margin-bottom:4px;
}

.invite-list{
  margin-top:32px;
  text-align:center;
}
.invite-list .label{
  font-size:11px;
  letter-spacing:.25em;
  text-transform:uppercase;
  color:var(--gold);
  margin-bottom:10px;
  display:block;
}
.invite-list ol{
  list-style:none;
  padding:0;margin:0;
  font-size:13.5px;
  line-height:2.1;
  color:var(--cream-dim);
}

/* event */
.event-card{
  margin-top:24px;
  border:1px solid rgba(205,168,94,.28);
  padding:24px 22px;
  text-align:center;
}
.event-day{
  font-family:'Cormorant Garamond',serif;
  font-size:26px;
  color:var(--gold-bright);
}
.event-time{
  margin-top:6px;
  font-size:15px;
  color:var(--cream);
  letter-spacing:.04em;
}
.event-place{
  margin-top:14px;
  font-family:'Cormorant Garamond',serif;
  font-size:17px;
  color:var(--cream);
  line-height:1.6;
}
.event-addr{
  margin-top:4px;
  font-size:13px;
  color:var(--cream-dim);
  line-height:1.7;
}
.btn-secondary{
  display:inline-block;
  margin-top:18px;
  padding:11px 26px;
  border:1px solid var(--gold);
  color:var(--gold-bright);
  text-decoration:none;
  font-size:12.5px;
  letter-spacing:.16em;
  text-transform:uppercase;
  font-family:'Cormorant Garamond',serif;
  transition:background .2s ease;
}
.btn-secondary:hover{background:rgba(205,168,94,.12);}

.event-divider-sm{
  width:40px;height:1px;background:var(--gold-dim);
  margin:22px auto;
}

/* countdown */
.countdown{
  display:flex;
  justify-content:center;
  gap:12px;
  margin-top:26px;
  flex-wrap:wrap;
}
.cd-box{
  width:72px;
  text-align:center;
  border:1px solid rgba(205,168,94,.3);
  padding:14px 0 10px;
  background:rgba(205,168,94,.04);
}
.cd-num{
  font-family:'Cormorant Garamond',serif;
  font-size:30px;
  color:var(--gold-bright);
  font-variant-numeric:tabular-nums;
}
.cd-label{
  margin-top:4px;
  font-size:9.5px;
  letter-spacing:.16em;
  text-transform:uppercase;
  color:var(--cream-dim);
}

/* doa */
.doa-text{
  margin-top:20px;
  font-size:14.5px;
  line-height:2.05;
  color:var(--cream-dim);
  text-align:center;
  max-width:420px;
  margin-left:auto;margin-right:auto;
}
.doa-amin{
  margin-top:18px;
  text-align:center;
  font-family:'Cormorant Garamond',serif;
  font-style:italic;
  font-size:20px;
  color:var(--gold-bright);
}

/* gallery */
.gallery{
  margin-top:24px;
  display:flex;
  flex-direction:column;
  gap:22px;
  align-items:center;
}
.gallery figure{
  margin:0;
  width:76%;
}
.gallery img{
  width:100%;display:block;object-fit:cover;
  border:1px solid rgba(205,168,94,.3);
}
.gallery figcaption{
  text-align:center;
  font-size:11px;
  letter-spacing:.1em;
  text-transform:uppercase;
  color:var(--cream-dim);
  margin-top:8px;
}
.gallery .photo-family img{aspect-ratio:320/509; object-position:top center;}
.gallery .photo-child img{aspect-ratio:456/539; object-position:top center;}

/* ucapan / form */
.form-wrap{margin-top:24px;}
.field{margin-bottom:14px;}
.field label{
  display:block;
  font-size:11px;
  letter-spacing:.18em;
  text-transform:uppercase;
  color:var(--gold);
  margin-bottom:7px;
}
.field input[type=text],
.field input[type=number],
.field textarea{
  width:100%;
  background:rgba(255,255,255,.03);
  border:1px solid rgba(205,168,94,.3);
  color:var(--cream);
  padding:11px 12px;
  font-family:'Jost',sans-serif;
  font-size:14px;
  outline:none;
  transition:border-color .2s ease;
}
.field input:focus,.field textarea:focus{border-color:var(--gold);}
.field textarea{resize:vertical;min-height:80px;}
.radio-group{display:flex;gap:10px;flex-wrap:wrap;}
.radio-pill{
  flex:1;
  min-width:96px;
  text-align:center;
  padding:10px 8px;
  border:1px solid rgba(205,168,94,.3);
  font-size:12.5px;
  letter-spacing:.04em;
  cursor:pointer;
  color:var(--cream-dim);
  transition:all .2s ease;
  user-select:none;
}
.radio-pill.active{
  border-color:var(--gold);
  background:rgba(205,168,94,.14);
  color:var(--gold-bright);
}
.btn-submit{
  width:100%;
  margin-top:6px;
  padding:14px 0;
  border:1px solid var(--gold);
  background:linear-gradient(180deg, rgba(205,168,94,.18), rgba(205,168,94,.05));
  color:var(--gold-bright);
  font-family:'Cormorant Garamond',serif;
  letter-spacing:.18em;
  text-transform:uppercase;
  font-size:14px;
  cursor:pointer;
}
.btn-submit:disabled{opacity:.5;cursor:default;}
.form-msg{
  margin-top:10px;
  font-size:12.5px;
  text-align:center;
  color:var(--cream-dim);
  min-height:16px;
}

.wishes-wrap{margin-top:36px;}
.wishes-count{
  text-align:center;
  font-size:12px;
  letter-spacing:.18em;
  text-transform:uppercase;
  color:var(--gold);
  margin-bottom:18px;
}
.wish{
  border-bottom:1px solid rgba(205,168,94,.16);
  padding:16px 2px;
}
.wish-top{
  display:flex;
  justify-content:space-between;
  align-items:baseline;
  gap:10px;
}
.wish-name{
  font-family:'Cormorant Garamond',serif;
  font-size:18px;
  color:var(--cream);
}
.wish-status{
  font-size:10px;
  letter-spacing:.08em;
  text-transform:uppercase;
  padding:3px 9px;
  border:1px solid var(--gold-dim);
  color:var(--gold);
  white-space:nowrap;
}
.wish-msg{
  margin-top:6px;
  font-size:13.5px;
  line-height:1.7;
  color:var(--cream-dim);
}
.wish-empty{
  text-align:center;
  font-size:13px;
  color:var(--cream-dim);
  padding:20px 0;
  opacity:.7;
}

/* footer */
footer{
  padding:46px 30px 50px;
  text-align:center;
}
.footer-quote{
  font-family:'Cormorant Garamond',serif;
  font-style:italic;
  font-size:16px;
  line-height:1.8;
  color:var(--cream-dim);
  max-width:380px;
  margin:0 auto;
}
.footer-from{
  margin-top:22px;
  font-family:'Mrs Saint Delafield',cursive;
  font-size:30px;
  color:var(--gold-bright);
}
.footer-credit{
  margin-top:34px;
  font-size:10.5px;
  letter-spacing:.12em;
  text-transform:uppercase;
  color:var(--cream-dim);
  opacity:.55;
}
.footer-credit b{color:var(--gold-dim);font-weight:400;}

a{color:inherit;}
</style>
</head>
<body>

<div class="gold-rail left"></div>
<div class="gold-rail right"></div>

<div class="frame">

  <!-- ============ COVER ============ -->
  <div id="cover">
    <svg class="frame-corner fc-tl" viewBox="0 0 46 46" fill="none"><path d="M2 2 V18 M2 2 H18" stroke="#cda85e" stroke-width="1"/><circle cx="2" cy="2" r="3" fill="#cda85e"/></svg>
    <svg class="frame-corner fc-tr" viewBox="0 0 46 46" fill="none"><path d="M2 2 V18 M2 2 H18" stroke="#cda85e" stroke-width="1"/><circle cx="2" cy="2" r="3" fill="#cda85e"/></svg>
    <svg class="frame-corner fc-bl" viewBox="0 0 46 46" fill="none"><path d="M2 2 V18 M2 2 H18" stroke="#cda85e" stroke-width="1"/><circle cx="2" cy="2" r="3" fill="#cda85e"/></svg>
    <svg class="frame-corner fc-br" viewBox="0 0 46 46" fill="none"><path d="M2 2 V18 M2 2 H18" stroke="#cda85e" stroke-width="1"/><circle cx="2" cy="2" r="3" fill="#cda85e"/></svg>

    <svg class="mandala" width="92" height="92" viewBox="0 0 100 100">
      <g fill="none" stroke="#cda85e" stroke-width="1">
        <circle cx="50" cy="50" r="46"/>
        <circle cx="50" cy="50" r="38"/>
        <g id="petals"></g>
      </g>
    </svg>

    <div class="cover-eyebrow">Undangan</div>
    <div class="cover-title script">Walimatul</div>
    <div class="cover-sub">Khitan</div>
    <div class="cover-date">Minggu, 12 Juli 2026</div>

    <img class="cover-photo" src="assets/image/ft1.png" alt="Foto Muhammad Arosy Raffasyah">
    <div class="cover-name">Muhammad Arosy Raffasyah, A</div>

    <div class="cover-guest">
      Kepada Yth. Bapak / Ibu / Saudara/i
      <b id="guestName">Tamu Undangan</b>
    </div>

    <button class="btn-open" id="openBtn">Buka Undangan</button>
  </div>

  <!-- ============ CONTENT ============ -->
  <div id="content">

    <section id="pembuka">
      <div class="bismillah">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</div>
      <p class="lede">
        Assalamu'alaikum Warahmatullahi Wabarakatuh.<br><br>
        Dengan memohon ridho dan rahmat Allah Subhanahu Wa Ta'ala, kami bermaksud menyelenggarakan khitanan putra kami yang Insya Allah akan dilaksanakan pada:
      </p>
    </section>

    <section id="ayat">
      <div class="eyebrow">Firman Allah</div>
      <div class="section-title">QS. An-Nahl : 123</div>
      <div class="ayat-card">
        <div class="ayat-arab">ثُمَّ اَوْحَيْنَآ اِلَيْكَ اَنِ اتَّبِعْ مِلَّةَ اِبْرٰهِيْمَ حَنِيْفًا ۗ وَمَا كَانَ مِنَ الْمُشْرِكِيْنَ</div>
        <div class="ayat-terjemah">"Kemudian Kami wahyukan kepadamu (Muhammad), ikutilah agama Ibrahim yang lurus, dan dia bukanlah termasuk orang-orang musyrik."</div>
        <div class="ayat-ref">QS. An-Nahl Ayat 123</div>
      </div>
      <p class="ayat-note">Khitan merupakan salah satu syariat Nabi Ibrahim 'Alaihissalam yang tetap berlaku hingga saat ini. Pada hari yang penuh berkah ini, kami mengkhitankan putra kami sebagai bagian dari menjalankan sunnah tersebut.</p>
    </section>

    <section id="profil">
      <div class="eyebrow">Peristiwa Penting</div>
      <div class="section-title">Putra Kami</div>
      <p class="lede" style="margin-top:-4px;">Peristiwa penting dalam perjalanan hidup seorang muslim adalah menjelang ia akil baligh — saat manis yang hanya terjadi satu kali, ketika ia dikhitan.</p>

      <div class="profile-photo-wrap">
        <img src="data:image/jpeg;base64,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" alt="Muhammad Arosy Raffasyah, A">
      </div>
      <div class="profile-name">Muhammad Arosy Raffasyah, A</div>
      <div class="profile-nick">"Rosy"</div>

      <div class="profile-parents">
        <span class="label">Putra dari</span>
        Bapak Alim &amp; Ibu Hetin Nurhaetin
      </div>

      <div class="invite-list">
        <span class="label">Turut Mengundang</span>
        <ol>
          <li>Ibu Kuwu Hj. Sumini (Kuwu Kapetakan)</li>
          <li>Ustadz Royyan Ma'mun, S.H</li>
          <li>Keluarga Besar Bapak Surya</li>
          <li>Keluarga Besar Bapak Kasna</li>
          <li>Keluarga Besar Bapak Juwair</li>
          <li>Segenap Family</li>
        </ol>
      </div>
    </section>

    <section id="acara">
      <div class="eyebrow">Waktu &amp; Tempat</div>
      <div class="section-title">Khitanan</div>

      <div class="event-card">
        <div class="event-day">Hari Minggu</div>
        <div class="event-day" style="margin-top:-4px;">12 Juli 2026</div>
        <div class="event-time">Pukul 10.00 WIB s.d Selesai</div>
        <div class="event-place">Kediaman Keluarga Bpk. Alim</div>
        <div class="event-addr">
          Desa Kapetakan, Dusun Kedaton<br>
          RT. 16 / RW. 04<br>
          Kec. Kapetakan, Kab. Cirebon
        </div>
        <a class="btn-secondary" id="mapsBtn" href="#" target="_blank" rel="noopener">Lihat Lokasi</a>

        <div class="event-divider-sm"></div>

        <div class="eyebrow" style="font-size:11px;">Pengajian</div>
        <div class="event-place" style="margin-top:8px;font-size:15px;">K.H. Dartam Damiri</div>
        <div class="event-addr">dari Cirebon</div>
        <div class="event-time">Pukul 13.00 WIB s.d Selesai</div>
      </div>
    </section>

    <section id="countdown-section">
      <div class="eyebrow">Menghitung Hari</div>
      <div class="section-title">Menuju Hari Bahagia</div>
      <div class="countdown" id="countdown">
        <div class="cd-box"><div class="cd-num" id="cd-d">00</div><div class="cd-label">Hari</div></div>
        <div class="cd-box"><div class="cd-num" id="cd-h">00</div><div class="cd-label">Jam</div></div>
        <div class="cd-box"><div class="cd-num" id="cd-m">00</div><div class="cd-label">Menit</div></div>
        <div class="cd-box"><div class="cd-num" id="cd-s">00</div><div class="cd-label">Detik</div></div>
      </div>
    </section>

    <section id="doa">
      <div class="eyebrow">Doa Kami</div>
      <div class="section-title">Untuk Ananda</div>
      <p class="doa-text">
        Ya Allah, muliakanlah anak kami, panjangkanlah umurnya, terangilah hatinya, teguhkanlah imannya, perbaikilah amal perbuatannya, lapangkanlah rejekinya, dekatkanlah pada kebaikan, dan jauhkanlah dari keburukan.
        <br><br>
        Ya Allah, kabulkanlah permohonan kami, ridhoilah keinginan kami, dan terimalah amal kebaikan kami. Semoga Engkau melimpahkan sholawat dan salam atas junjungan Nabi Muhammad SAW, keluarga, dan para sahabatnya.
      </p>
      <div class="doa-amin">Aamiin Ya Rabbal 'Alamin</div>
    </section>

    <section id="galeri">
      <div class="eyebrow">Galeri</div>
      <div class="section-title">Kenangan Kami</div>
      <div class="gallery">
        <figure class="photo-family">
          <img src="assets/image/ft2.png" alt="Keluarga Bpk. Alim & Ibu Hetin">
          <figcaption>Keluarga Bpk. Alim &amp; Ibu Hetin</figcaption>
        </figure>
        <figure class="photo-child">
          <img src="assets/image/ft1.png" alt="Muhammad Arosy Raffasyah">
          <figcaption>Muhammad Arosy Raffasyah, A</figcaption>
        </figure>
      </div>
    </section>

    <section id="ucapan">
      <div class="eyebrow">Doa &amp; Konfirmasi</div>
      <div class="section-title">Ucapan</div>
      <p class="lede" style="margin-top:-2px;">Kehadiran serta doa restu Bapak/Ibu/Saudara/i merupakan kehormatan bagi kami. Silakan tinggalkan ucapan dan konfirmasi kehadiran melalui formulir di bawah ini.</p>

      <div class="form-wrap">
        <div class="field">
          <label for="f-nama">Nama</label>
          <input type="text" id="f-nama" placeholder="Nama Anda" maxlength="60">
        </div>
        <div class="field">
          <label>Konfirmasi Kehadiran</label>
          <div class="radio-group" id="f-status">
            <div class="radio-pill" data-value="Hadir">Hadir</div>
            <div class="radio-pill" data-value="Tidak Hadir">Tidak Hadir</div>
            <div class="radio-pill" data-value="Masih Ragu">Masih Ragu</div>
          </div>
        </div>
        <div class="field">
          <label for="f-jumlah">Jumlah Tamu</label>
          <input type="number" id="f-jumlah" min="1" max="10" value="1">
        </div>
        <div class="field">
          <label for="f-pesan">Ucapan &amp; Doa</label>
          <textarea id="f-pesan" placeholder="Tuliskan doa dan ucapan untuk Rosy..." maxlength="300"></textarea>
        </div>
        <button class="btn-submit" id="f-submit">Kirim Ucapan</button>
        <div class="form-msg" id="f-msg"></div>
      </div>

      <div class="wishes-wrap">
        <div class="wishes-count" id="wishes-count">Memuat ucapan...</div>
        <div id="wishes-list"></div>
      </div>
    </section>

    <footer>
      <div class="divider"><div class="line"></div></div>
      <p class="footer-quote">
        Tiada yang dapat kami ucapkan selain terima kasih dari hati yang tulus, apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada putra kami.
      </p>
      <p class="footer-quote" style="margin-top:18px;">Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>
      <div class="footer-from">Kel. Bpk. Alim &amp; Hetin Nurhaetin</div>
      <div class="footer-credit">Didukung oleh <b>Cantika Griya Pengantin</b> &amp; <b>Ikan Bakar Karomel</b></div>
    </footer>
<?php include 'footer.php'; 
?>
  </div>
</div>

<!-- audio -->
<audio id="bgMusic" loop preload="auto">
  <source src="assets/audio/kasih-putih.mp3" type="audio/mpeg">
</audio>

<script>
/* ---------- guest name from ?to= ---------- */
(function(){
  const params = new URLSearchParams(window.location.search);
  const to = params.get('to');
  if(to){
    document.getElementById('guestName').textContent = decodeURIComponent(to.replace(/\+/g,' '));
  }
})();

/* ---------- mandala petals ---------- */
(function(){
  const g = document.getElementById('petals');
  const n = 12;
  let html = '';
  for(let i=0;i<n;i++){
    const angle = (360/n)*i;
    html += `<path d="M50 12 Q58 28 50 42 Q42 28 50 12 Z" transform="rotate(${angle} 50 50)"/>`;
  }
  g.innerHTML = html;
})();

/* ---------- maps link ---------- */
(function(){
  document.getElementById('mapsBtn').href = "https://maps.app.goo.gl/HnTFzUSAhjr7sSgSA";
})();

/* ---------- open invitation ---------- */
document.getElementById('openBtn').addEventListener('click', function(){
  document.getElementById('cover').style.display = 'none';
  const content = document.getElementById('content');
  content.classList.add('show');
  window.scrollTo({top:0, behavior:'instant'});
});

/* ---------- countdown ---------- */
(function(){
  const target = new Date("2026-07-12T10:00:00+07:00").getTime();
  function tick(){
    const now = Date.now();
    let diff = Math.max(0, target - now);
    const d = Math.floor(diff/86400000); diff -= d*86400000;
    const h = Math.floor(diff/3600000); diff -= h*3600000;
    const m = Math.floor(diff/60000); diff -= m*60000;
    const s = Math.floor(diff/1000);
    document.getElementById('cd-d').textContent = String(d).padStart(2,'0');
    document.getElementById('cd-h').textContent = String(h).padStart(2,'0');
    document.getElementById('cd-m').textContent = String(m).padStart(2,'0');
    document.getElementById('cd-s').textContent = String(s).padStart(2,'0');
  }
  tick();
  setInterval(tick, 1000);
})();

/* ---------- ucapan / RSVP via MySQL backend ---------- */
const API_LIST   = 'api/list.php';
const API_SUBMIT = 'api/submit.php';

let selectedStatus = null;
document.querySelectorAll('#f-status .radio-pill').forEach(pill=>{
  pill.addEventListener('click', ()=>{
    document.querySelectorAll('#f-status .radio-pill').forEach(p=>p.classList.remove('active'));
    pill.classList.add('active');
    selectedStatus = pill.dataset.value;
  });
});

function escapeHtml(str){
  const d = document.createElement('div');
  d.textContent = str;
  return d.innerHTML;
}

function statusLabel(s){
  return s;
}

async function loadWishes(){
  const listEl = document.getElementById('wishes-list');
  const countEl = document.getElementById('wishes-count');
  let entries = [];
  try{
    const res = await fetch(API_LIST, { cache: 'no-store' });
    const json = await res.json();
    if(json && json.success){
      entries = json.data.map(e => ({
        nama: e.nama,
        kehadiran: e.kehadiran,
        jumlah: e.jumlah,
        pesan: e.pesan,
        waktu: e.dibuat_pada
      }));
    }
  }catch(e){
    entries = [];
  }

  if(entries.length === 0){
    countEl.textContent = 'Belum ada ucapan';
    listEl.innerHTML = '<div class="wish-empty">Jadilah yang pertama mengirimkan doa &amp; ucapan untuk Rosy.</div>';
    return;
  }
  countEl.textContent = entries.length + ' Ucapan';
  listEl.innerHTML = entries.map(e => `
    <div class="wish">
      <div class="wish-top">
        <div class="wish-name">${escapeHtml(e.nama||'Tamu')}</div>
        <div class="wish-status">${escapeHtml(statusLabel(e.kehadiran||''))}${e.jumlah ? ' &middot; ' + escapeHtml(String(e.jumlah)) + ' org' : ''}</div>
      </div>
      <div class="wish-msg">${escapeHtml(e.pesan||'')}</div>
    </div>
  `).join('');
}

document.getElementById('f-submit').addEventListener('click', async ()=>{
  const nama = document.getElementById('f-nama').value.trim();
  const jumlah = document.getElementById('f-jumlah').value;
  const pesan = document.getElementById('f-pesan').value.trim();
  const msgEl = document.getElementById('f-msg');
  const btn = document.getElementById('f-submit');

  if(!nama){ msgEl.textContent = 'Mohon isi nama Anda.'; return; }
  if(!selectedStatus){ msgEl.textContent = 'Mohon pilih konfirmasi kehadiran.'; return; }
  if(!pesan){ msgEl.textContent = 'Mohon tuliskan ucapan Anda.'; return; }

  btn.disabled = true;
  msgEl.textContent = 'Mengirim...';

  try{
    const res = await fetch(API_SUBMIT, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        nama: nama,
        kehadiran: selectedStatus,
        jumlah: jumlah,
        pesan: pesan
      })
    });
    const json = await res.json();

    if(!json.success){
      msgEl.textContent = json.message || 'Maaf, terjadi kesalahan. Silakan coba lagi.';
      return;
    }

    msgEl.textContent = 'Terima kasih, ucapan Anda telah terkirim.';
    document.getElementById('f-nama').value = '';
    document.getElementById('f-pesan').value = '';
    document.getElementById('f-jumlah').value = '1';
    document.querySelectorAll('#f-status .radio-pill').forEach(p=>p.classList.remove('active'));
    selectedStatus = null;
    await loadWishes();
  }catch(e){
    msgEl.textContent = 'Maaf, terjadi kesalahan. Silakan coba lagi.';
  }finally{
    btn.disabled = false;
  }
});

loadWishes();

/* ---------- autoplay musik saat halaman dibuka ---------- */
(function(){
  const music = document.getElementById('bgMusic');
  music.volume = 0.55;
  // Coba autoplay langsung
  music.play().catch(function(){
    // Browser blokir autoplay sebelum interaksi user —
    // fallback: play saat user pertama kali menyentuh/klik halaman
    function tryPlay(){
      music.play();
      document.removeEventListener('click', tryPlay);
      document.removeEventListener('touchstart', tryPlay);
    }
    document.addEventListener('click', tryPlay);
    document.addEventListener('touchstart', tryPlay);
  });
})();
</script>
</body>
</html>