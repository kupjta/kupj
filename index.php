<?php
include 'func.php';
include 'list.php';
?>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>IPTV Online</title> 
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="style.css" rel="stylesheet">
</head>
<body onkeydown="return false">
<main>
<div id="channels">
<div class="tab">
  <button class="tablinks active" onclick="openGroup(event, 'VTV')">VTV</button>
  <button class="tablinks" onclick="openGroup(event, 'HTV')">HTV</button>
  <button class="tablinks" onclick="openGroup(event, 'VTC')">VTC</button>
  <button class="tablinks" onclick="openGroup(event, 'SCTV')">SCTV</button>
  <button class="tablinks" onclick="openGroup(event, 'VTVcab')">VTVcab</button>
  <button class="tablinks" onclick="openGroup(event, 'WORLD')">Quốc tế</button>
  <button class="tablinks" onclick="openGroup(event, 'DIAPHUONG')">Địa phương</button>
</div>

<div id="VTV" class="tabcontent" style="display:block;">
    <img src='https://i.ibb.co/NsTDYmD/vtv1.jpg' onclick="play('<?php echo redirected($vtv1);?>')">
    <img src='https://i.ibb.co/j5076gc/vtv2.jpg' onclick="play('<?php echo redirected($vtv2);?>')">
    <img src='https://i.ibb.co/xLqK8wr/vtv3.jpg' onclick="play('<?php echo redirected($vtv3);?>')">
    <img src='https://i.ibb.co/fQfbt7d/vtv4.jpg' onclick="play('<?php echo redirected($vtv4);?>')">
    <img src='https://i.ibb.co/ckmbV3R/vtv5.jpg' onclick="play('<?php echo redirected($vtv5);?>')">
    <img src='https://i.ibb.co/z4h8S93/vtv5-tn.png' onclick="play('<?php echo redirected($vtv5tn);?>')">
    <img src='https://i.ibb.co/p1gz9Hk/vtv5-tnb.png' onclick="play('<?php echo redirected($vtv5tnb);?>')">
    <img src='https://i.ibb.co/5Y1LGMm/vtv6.jpg' onclick="play('<?php echo redirected($vtv6);?>')">
    <img src='https://i.ibb.co/C1qgD6V/vtv7.jpg' onclick="play('<?php echo redirected($vtv7);?>')">
    <img src='https://i.ibb.co/3TsHT9T/vtv8.jpg' onclick="play('<?php echo redirected($vtv8);?>')">
    <img src='https://i.ibb.co/2kS3QWn/vtv9.jpg' onclick="play('<?php echo redirected($vtv9);?>')">
</div>

<div id="HTV" class="tabcontent">
    <img src='https://i.imgur.com/BvjmYtr.png' onclick="play('https://mziyw7t0yhliv.vcdn.cloud/live/htv1/playlist.m3u8')">
    <img src='https://i.imgur.com/12qnM2B.png' onclick="play('https://mziyw7t0yhliv.vcdn.cloud/live/htv2/playlist.m3u8')">
    <img src='https://i.imgur.com/8GOohTX.png' onclick="play('https://mziyw7t0yhliv.vcdn.cloud/live/htv3/playlist.m3u8')">
    <img src='https://i.imgur.com/JBNgrHU.png' onclick="play('https://l9v8fomqgzliv.vcdn.cloud/live/htv4/playlist.m3u8')">
    <img src='https://i.imgur.com/EPZzYTx.png' onclick="play('https://l9v8fomqgzliv.vcdn.cloud/live/htv7/playlist.m3u8')">
    <img src='https://i.imgur.com/vMxj1BX.png' onclick="play('https://l9v8fomqgzliv.vcdn.cloud/live/htv9/playlist.m3u8')">
    <img src='https://i.imgur.com/qQSl5rD.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/HTVC-PHIM-HD-1080p/playlist.m3u8')">
    <img src='https://i.imgur.com/WltXVFn.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/HTVC-CANHAC-HD-1080p/playlist.m3u8')">
    <img src='https://i.imgur.com/EAv5N7c.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/HTVC-GIADINH-HD-1080p/playlist.m3u8')">
    <img src='https://i.imgur.com/pTuBwDS.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/HTVC-PHUNU-HD-1080p/playlist.m3u8')">
    <img src='https://i.imgur.com/GWGhPu7.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/HTVC-DULICH-HD-1080p/playlist.m3u8')">
    <img src='https://i.imgur.com/qSzadDW.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/HTVC-THUANVIET-HD-1080p/playlist.m3u8')">
    <img src='https://i.imgur.com/jOeEfm6.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/HTVC-THUANVIETHD-HD-1080p/playlist.m3u8')">
    <img src='https://i.imgur.com/gSnnXza.png' onclick="play('https://l9v8fomqgzliv.vcdn.cloud/live/htv-thethao/playlist.m3u8')">
    <img src='https://i.ibb.co/d6800qX/htvc-plus.png' onclick="play('https://mziyw7t0yhliv.vcdn.cloud/live/htvc-plus/playlist.m3u8')">
</div>

<div id="VTC" class="tabcontent">
    <img src='https://i.ibb.co/RSFtDPh/vtc1.jpg' onclick="play('<?echo redirected($vtc1)?>')">
    <img src='https://i.ibb.co/GWP8TXQ/vtc2.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/vtc2/playlist.m3u8')">
    <img src='https://i.ibb.co/SyBBGpy/vtc3.jpg' onclick="play('https://l9v8fomqgzliv.vcdn.cloud/live/vtc3/playlist.m3u8')"
    <img src='https://i.ibb.co/VHjg6mz/vtc4.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/vtc4/playlist.m3u8')">
    <img src='https://i.ibb.co/VL5FvJM/Vtc5.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/vtc5/playlist.m3u8')">
    <img src='https://i.ibb.co/NV5krSX/vtc6.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/vtc6/playlist.m3u8')">
    <img src='https://i.ibb.co/YWKyB2Z/Vtc7.jpg' onclick="play('https://mziyw7t0yhliv.vcdn.cloud/live/vtc7/playlist.m3u8')">
    <img src='https://i.ibb.co/3vjN1Rm/vtc8.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/vtc8/playlist.m3u8')">
    <img src='https://i.ibb.co/9vvSX6X/vtc9.jpg' onclick="play('https://l9v8fomqgzliv.vcdn.cloud/live/vtc9/playlist.m3u8')">
    <img src='https://i.ibb.co/HH0YCZX/vtc10.jpg' onclick="play('https://mziyw7t0yhliv.vcdn.cloud/live/vtc10/playlist.m3u8')">
    <img src='https://i.ibb.co/4pZpWz4/vtc11.jpg' onclick="play('https://mziyw7t0yhliv.vcdn.cloud/live/vtc11/playlist.m3u8')">
    <img src='https://i.ibb.co/Np03FCK/vtc12.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/vtc12/playlist.m3u8')">
    <img src='https://i.ibb.co/vkfB3nz/vtc13.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/vtc13/playlist.m3u8')">
    <img src='https://i.ibb.co/dW7MT3x/vtc14.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/vtc14/playlist.m3u8')">
    <img src='https://i.ibb.co/jw4mpg3/vtc16.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/vtc16/playlist.m3u8')">
</div>

<div id="SCTV" class="tabcontent">
    <img src='https://i.ibb.co/yBnxfhH/sctv1-hd.png' onclick="play('http://live1.kupjta.tk:21585/sctv1/index.m3u8')">
    <img src='https://i.ibb.co/VqNpntW/sctv2-hd.png' onclick="play('https://vtsstr6.tv24.vn/live/sctv2_HD_new.smil/playlist.m3u8')">
    <img src='https://i.ibb.co/HpgQgB5/logo26072108-sctv6-hd.png' onclick="play('<?php echo redirected($film360);?>')">
    <img src='https://i.ibb.co/1Z8k49W/logo26072108-sctv8.png' onclick="play('https://vtsstr4.tv24.vn/live/SCTV8_SD_new.smil/playlist.m3u8')">
    <img src='https://i.ibb.co/G2XQD3X/logo26072108-sctv-phim-THHD.png' onclick="play('http://live.kupjta.tk:21585/sctvpth/index.m3u8')">
</div>

<div id="WORLD" class="tabcontent">
<img src='https://i.ibb.co/fSv164Q/box1.jpg'onclick="play('https://pprex49o5aliv.vcdn.cloud/live/box-movie/playlist.m3u8')">
<img src='https://i.ibb.co/zPSHdRt/hollywood.jpg' onclick="play('https://pprex49o5aliv.vcdn.cloud/live/hollywood/playlist.m3u8')">
<img src='https://i.ibb.co/BBN7g4y/boxhits.png' onclick="play('https://pprex49o5aliv.vcdn.cloud/live/box-hits/playlist.m3u8')">
<img src='https://i.ibb.co/Qdv98Db/inthebox.png' onclick="play('https://pprex49o5aliv.vcdn.cloud/live/box-channel/playlist.m3u8')">
<img src='https://i.ibb.co/vXSWhQJ/hapyykids.jpg' onclick="play('https://pprex49o5aliv.vcdn.cloud/live/happy-kids/playlist.m3u8')">
<img src='https://i.ibb.co/d7qWHVD/251.jpg' onclick="play('https://pprex49o5aliv.vcdn.cloud/live/dr-fit/playlist.m3u8')">
<img src='https://i.ibb.co/ZGBcMK2/panetearth.jpg'onclick="play('https://pprex49o5aliv.vcdn.cloud/live/planet-earth/playlist.m3u8')">
<img src='https://i.ibb.co/wcT2VqP/man.png' onclick="play('https://pprex49o5aliv.vcdn.cloud/live/man-tv/playlist.m3u8')">
<img src='https://i.ibb.co/GTrnKhc/woman.jpg' onclick="play('https://pprex49o5aliv.vcdn.cloud/live/woman/playlist.m3u8')">
<img src='https://i.ibb.co/ts1LrXn/musicbox.png' onclick="play('https://pprex49o5aliv.vcdn.cloud/live/box-music/playlist.m3u8')">
<img src='https://i.imgur.com/fXuxFbz.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/DISCOVERY-HD-1080p/playlist.m3u8')">
<img src='https://i.ibb.co/m8WRJn4/natwild.jpg' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/NATGEOWILD-HD-1080p/playlist.m3u8')">
<img src='https://i.imgur.com/rQ3Sgrn.png' onclick="play('https://htv-drm-live-cdn.fptplay.net/CDN-FPT02/AFC-HD-1080p/playlist.m3u8')">
<img src='https://i.ibb.co/yVh5RB1/Dmax.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/FOXSPORT2-SD-720p/playlist.m3u8')">
<img src='https://i.imgur.com/amlBPub.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/FOXLIFE-SD-720p/playlist.m3u8')">
<img src='https://i.ibb.co/ZVr23Rb/HGTV.png' onclick="play('<?php echo redirected($hgtv);?>')">
<img src='https://i.imgur.com/KcEAjUh.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/CINEWORLD-SD-720p/playlist.m3u8')">
<img src='https://i.ibb.co/ZMRsG9y/hits.png' onclick="play('<?echo redirected($hits)?>')">
<img src='https://i.imgur.com/nzvNMfP.png' onclick="play('https://htv-drm-live-cdn.fptplay.net/CDN-FPT02/CARTOON-SD-720p/playlist.m3u8')">
<img src='https://i.imgur.com/ZkEEeM9.png' onclick="play('https://htv-drm-live-cdn.fptplay.net/CDN-FPT02/DAVINCY-HD-1080p/playlist.m3u8')">
<img src='https://i.imgur.com/krupazx.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/CNN-SD-480p/playlist.m3u8')">
<img src='https://i.imgur.com/9ZqIRg1.png' onclick="play('http://htv-drm-live-cdn.fptplay.net/CDN-FPT02/BBCNEWS-SD-720p/playlist.m3u8')">
<img src='https://i.ibb.co/Qmq2pMm/blooberg.png' onclick="play('https://htv-drm-live-cdn.fptplay.net/CDN-FPT02/BLOOMBERG-SD-720p/playlist.m3u8')">
<img src='https://i.ibb.co/QPQLHyN/dw.jpg' onclick="play('https://s8erzszluwliv.vcdn.cloud/live/dw/playlist.m3u8')">
<img src='https://i.ibb.co/dpnMMwS/euronews.png' onclick="play('https://euronews-euronews-world-1-au.samsung.wurl.com/manifest/playlist.m3u8')">
<img src='https://i.imgur.com/YTlPk6Q.png' onclick="play('<?echo redirected($fr24)?>')">
<img src='https://i.imgur.com/iIrAEGx.png' onclick="play('<?echo redirected($arirang)?>')">
<img src='https://i.ibb.co/Yyptz9N/skynews.png' onclick="play('https://siloh.pluto.tv/lilo/production/SkyNews/master.m3u8')">
<img src='https://i.ibb.co/h87cWNm/abc-news.png' onclick="play('https://abc-iview-mediapackagestreams-2.akamaized.net/out/v1/6e1cc6d25ec0480ea099a5399d73bc4b/index.m3u8')">
<img src='https://i.ibb.co/m6zB6Tn/kbs-world.png' onclick="play('https://htv-drm-live-cdn.fptplay.net/CDN-FPT02/KBS-HD-720p/playlist.m3u8')">
<img src='https://i.ibb.co/ch8M4DF/rmc1t.png' onclick="play('http://178.128.58.234:8080/rmc1t/index.m3u8')">
<img src='https://i.ibb.co/10B8764/bein3.png' onclick="play('http://178.128.58.234:8080/bein3/index.m3u8')">
<img src='https://i.ibb.co/tmGkBbM/fox-sports-news.png' onclick="play('https://austchannel-live.akamaized.net/hls/live/2002736/austchannel-sport/master.m3u8')">
</div>

<div id="VTVcab" class="tabcontent">
<img src='https://i.ibb.co/YR8ntg2/cab1.jpg' onclick="play('http://live.kupjta.tk:21585/vtvcab1/index.m3u8')">
<img src='https://i.ibb.co/MGQLhzz/cab2.jpg' onclick="play('http://live.kupjta.tk:21585/vtvcab2/index.m3u8')">
<img src='https://i.ibb.co/XJwLZ9t/Onsports.jpg' onclick="play('<?echo redirected($cab6)?>')">
<img src='https://i.ibb.co/vdxbmPn/cab8.jpg' onclick="play('http://live.kupjta.tk:21585/vtvcab8/index.m3u8')">
<img src='https://i.ibb.co/4Fj6h9Z/cab9.jpg' onclick="play('https://vtsstr7.tv24.vn/live/VTVcab9.smil/playlist.m3u8')">
<img src='https://i.ibb.co/MDxj7xt/cab17.jpg' onclick="play('<?echo redirected($cab17)?>')">
<img src='https://i.ibb.co/GMPxBmS/phimviet.png' onclick="play('https://d1icgg07fblj2l.cloudfront.net/v1/master/ba90b90a0ee2a56a8918633d147a0d5ef56d5d56/1d1b5613-b5ee-4d7c-bf96-136e7b7babbe/1d1b5613-b5ee-4d7c-bf96-136e7b7babbe/amlst:1d1b5613-b5ee-4d7c-bf96-136e7b7babbe_PreRoll/playlist.m3u8')">
</div>

<div id="DIAPHUONG" class="tabcontent">
    <img src="https://i.imgur.com/yLQfmkW.png" onclick="play('<?echo redirected($qpvn)?>')">
    <img src="https://i.imgur.com/5qQzerW.png" onclick="play('<?echo redirected($antv)?>')">
    <img src="https://i.imgur.com/rswzxzG.png" onclick="play('<?echo redirected($nhandan)?>')">
    <img src="https://i.ibb.co/2SPcj1W/vnews.png" onclick="play('<?echo redirected($vnews)?>')">
    <img src="https://i.ibb.co/z6vB5Mt/vovtv.jpg" onclick="play('https://live.truyenhinhdulich.vn/vovlive/tv1live.m3u8')">
    <img src="https://i.imgur.com/IqErj7W.png" onclick="play('<?echo redirected($quochoi)?>')">
    <img src='https://i.ibb.co/446cGMQ/hitv.jpg' onclick="play('<?echo redirected($hitv)?>')">
    <img src='https://i.ibb.co/xFsmVGT/youtv.png' onclick="play('<?echo redirected($youtv)?>')">
    <img src='https://i.ibb.co/j5wWR7x/antg.png' onclick="play('<?echo redirected($antg)?>')">
    <img src='https://i.ibb.co/161pmks/Mov.png' onclick="play('<?echo redirected($mov)?>')">
    <img src='https://i.ibb.co/CJV5pRn/thvl1.jpg' onclick="play('<?echo redirected($thvl1)?>')">
    <img src='https://i.ibb.co/YDGHSw6/thvl2.jpg' onclick="play('<?echo redirected($thvl2)?>')">
    <img src='https://i.ibb.co/7pFJX5X/thvl3.jpg' onclick="play('<?echo redirected($thvl3)?>')">
    <img src='https://i.ibb.co/HHnfjpR/thvl4.jpg' onclick="play('<?echo redirected($thvl4)?>')">
    <img src='https://i.ibb.co/fkkbJK1/atv.jpg' onclick="play('<?echo redirected($atv)?>')">
    <img src='https://i.ibb.co/F4f9ycT/bgtv.jpg' onclick="play('<?echo redirected($bgtv)?>')">
    <img src='https://i.ibb.co/XXLj0Hz/tbk.png' onclick="play('<?echo redirected($tbk)?>')">
    <img src='https://i.ibb.co/60RjHWs/bltv.png' onclick="play('<?echo redirected($bltv)?>')">
    <img src="https://i.ibb.co/v3fvcXm/btv1.jpg" onclick="play('<?echo redirected($btv1)?>')">
    <img src="https://i.ibb.co/SBpy6TR/btv2.jpg" onclick="play('<?echo redirected($btv2)?>')">
    <img src="https://i.ibb.co/cgssdJM/btv4.png" onclick="play('<?echo redirected($btv4)?>')">
    <img src="https://i.ibb.co/myG3xCT/bacninh.jpg" onclick="play('<?echo redirected($bacninh)?>')">
    <img src="https://i.ibb.co/KLwxYDx/bentre.jpg" onclick="play('<?echo redirected($bentre)?>')">
    <img src="https://i.ibb.co/nC57PBj/binhdinh.png" onclick="play('<?echo redirected($binhdinh)?>')">
    <img src="https://i.ibb.co/fQfx3Ht/binhthuan.jpg" onclick="play('<?echo redirected($binhthuan)?>')">
    <img src="https://i.ibb.co/W5n8TvT/bptv1.png" onclick="play('<?echo redirected($binhphuoc1)?>')">
    <img src="https://i.ibb.co/v4NMHf5/Ant.png" onclick="play('https://mziyw7t0yhliv.vcdn.cloud/live/binhphuoc3/playlist.m3u8')">
    <img src="https://i.ibb.co/z6mtNPQ/ctv.jpg" onclick="play('<?echo redirected($camau)?>')">
    <img src="https://i.ibb.co/ckhhFbK/cantho.jpg" onclick="play('<?echo redirected($cantho)?>')">
    <img src="https://i.ibb.co/LrfpzGq/caobang.jpg" onclick="play('<?echo redirected($caobang)?>')">
    <img src="https://i.ibb.co/kMX670L/drt1.jpg" onclick="play('<?echo redirected($danang)?>')">
    <img src="https://i.ibb.co/k1L81pV/ptd.png" onclick="play('<?echo redirected($daknong)?>')">
    <img src="https://i.ibb.co/tx0ymtj/drt.png" onclick="play('<?echo redirected($daklak)?>')">
    <img src="https://i.ibb.co/qrsL0yf/dbtv.jpg" onclick="play('<?echo redirected($dienbien)?>')">
    <img src="https://i.ibb.co/MngJvgL/dn1.jpg" onclick="play('<?echo redirected($dongnai1)?>')">
    <img src="https://i.ibb.co/VWnhwB1/dn2.jpg" onclick="play('<?echo redirected($dongnai2)?>')">
    <img src="https://i.ibb.co/zrMj8mP/dongthap1.jpg" onclick="play('<?echo redirected($dongthap)?>')">
    <img src="https://i.ibb.co/9p8ZQwp/gialai.jpg" onclick="play('<?echo redirected($gialai)?>')">
    <img src="https://i.imgur.com/GhJ0JTH.png" onclick="play('<?echo redirected($hanoi1)?>')">
    <img src="https://i.imgur.com/OogZeGW.png" onclick="play('<?echo redirected($hanoi2)?>')">
    <img src="https://i.ibb.co/D9jNpXd/hagiang.jpg" onclick="play('<?echo redirected($hagiang)?>')">
    <img src="https://i.ibb.co/pL5vBg1/hanam.jpg" onclick="play('<?echo redirected($hanam)?>')">
    <img src="https://i.ibb.co/FXgd3qw/httv.jpg" onclick="play('<?echo redirected($hatinh)?>')">
    <img src="https://i.ibb.co/smRmtQQ/hdtv.jpg" onclick="play('<?echo redirected($haiduong)?>')">
    <img src="https://i.ibb.co/JyDwD0K/thp.png" onclick="play('<?echo redirected($haiphong)?>')">
    <img src="https://i.ibb.co/jZCT5bv/HGTV.png" onclick="play('<?echo redirected($haugiang)?>')">
    <img src="https://i.ibb.co/X2nQ3Vp/HBTV.png" onclick="play('<?echo redirected($hoabinh)?>')">
    <img src="https://i.ibb.co/19dYpKC/trt1.jpg" onclick="play('<?echo redirected($hue)?>')">
    <img src="https://i.ibb.co/JB0KYSR/hungyen.jpg" onclick="play('<?echo redirected($hungyen)?>')">
    <img src="https://i.ibb.co/0cYZHz8/ktv.png" onclick="play('<?echo redirected($khanhhoa)?>')">
    <img src="https://i.ibb.co/mNnRv3Y/kiengiang.png" onclick="play('<?echo redirected($kiengiang)?>')">
    <img src="https://i.ibb.co/KXMFtzQ/krt.jpg" onclick="play('<?echo redirected($kontum)?>')">
    <img src="https://i.ibb.co/rxxf6Vy/LTV.png" onclick="play('<?echo redirected($laichau)?>')">
    <img src="https://i.ibb.co/6m46D73/lamdong.jpg" onclick="play('<?echo redirected($lamdong)?>')">
    <img src="https://i.ibb.co/TWcGT3h/lstv.jpg" onclick="play('<?echo redirected($langson)?>')">
    <img src="https://i.ibb.co/C9gTBP5/laocai.jpg" onclick="play('<?echo redirected($laocai)?>')">
    <img src="https://i.ibb.co/FsPNgBF/la34.jpg" onclick="play('<?echo redirected($longan)?>')">
    <img src="https://i.ibb.co/tJKPzxX/namdinh.jpg" onclick="play('<?echo redirected($namdinh)?>')">
    <img src="https://i.ibb.co/jfM8wZ5/nghean.jpg" onclick="play('<?echo redirected($nghean)?>')">
    <img src="https://i.ibb.co/9pPGy9H/nihbinh.jpg" onclick="play('<?echo redirected($ninhbinh)?>')">
    <img src="https://i.ibb.co/fvT4DHX/ninhthuan.jpg" onclick="play('<?echo redirected($ninhthuan)?>')">
    <img src="https://i.ibb.co/PGXthQF/phutho.jpg" onclick="play('<?echo redirected($phutho)?>')">
    <img src="https://i.ibb.co/z4Kc7cS/phuyen.jpg" onclick="play('<?echo redirected($phuyen)?>')">
    <img src="https://i.ibb.co/wNDdcDT/qbtv.jpg" onclick="play('<?echo redirected($quangbinh)?>')">
    <img src="https://i.ibb.co/Ltjhght/quangnam.jpg" onclick="play('<?echo redirected($quangnam)?>')">
    <img src="https://i.ibb.co/rk5WwQR/quangngai.jpg" onclick="play('<?echo redirected($quangngai)?>')">
    <img src="https://i.ibb.co/mNxr3WR/qtv1.jpg" onclick="play('<?echo redirected($quangninh)?>')">
    <img src="https://i.ibb.co/9rp03Gh/qrtv.jpg" onclick="play('<?echo redirected($quangtri)?>')">
    <img src="https://i.ibb.co/PhzCVfR/soctrang.jpg" onclick="play('<?echo redirected($soctrang)?>')">
    <img src="https://i.ibb.co/8srcnnH/sonla.jpg" onclick="play('<?echo redirected($sonla)?>')">
    <img src="https://i.ibb.co/k58XPWt/ttv11.jpg" onclick="play('<?echo redirected($tayninh)?>')">
    <img src="https://i.ibb.co/KVNnpJ3/tbtv.jpg" onclick="play('<?echo redirected($thaibinh)?>')">
    <img src="https://i.ibb.co/5BjLdtD/tn1.png" onclick="play('<?echo redirected($thainguyen)?>')">
    <img src="https://i.ibb.co/HX7RLfC/tn2.png" onclick="play('https://mziyw7t0yhliv.vcdn.cloud/live/thainguyen2/playlist.m3u8')">
    <img src="https://i.ibb.co/C2n6Gmg/thanhhoa.jpg" onclick="play('<?echo redirected($thanhhoa)?>')">
    <img src="https://i.ibb.co/09bt7wC/tiengiang.png" onclick="play('<?echo redirected($tiengiang)?>')">
    <img src="https://i.ibb.co/Rzs01s6/travinh.png" onclick="play('<?echo redirected($travinh)?>')">
    <img src="https://i.ibb.co/vLRsCRX/tuyenquang.jpg" onclick="play('<?echo redirected($tuyenquang)?>')">
    <img src="https://i.ibb.co/YBwRvz8/vinhphu.png" onclick="play('<?echo redirected($vinhphuc)?>')">
    <img src="https://i.ibb.co/QvhRKf1/brt.jpg" onclick="play('<?echo redirected($vungtau)?>')">
    <img src="https://i.ibb.co/Yh2ZZjD/yenbai.jpg" onclick="play('<?echo redirected($yenbai)?>')">
</div>

</div>
<div id="player"></div>
</main>

<script src="tab.js" type="text/javascript"></script>
<script>var player = new Playerjs({id:"player", file:"https://github.com/kupjta/iptv/raw/main/failure.mp4", poster:"http://kupjta.tk/tv/banner.png", autoplay:1});</script>
<script type='text/javascript'>
    //<![CDATA[
    // JavaScript Document
    var message = "Đừng Phá Em - OK";
    function defeatIE() {
        if (document.all) {
            (message);
            return false;
        }
    }
    function defeatNS(e) {
        if (document.layers || (document.getElementById && !document.all)) {
            if (e.which == 2 || e.which == 3) {
                (message);
                return false;
            }
        }
    }
    if (document.layers) {
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = defeatNS;
    } else {
        document.onmouseup = defeatNS;
        document.oncontextmenu = defeatIE;
    }
    document.oncontextmenu = new Function("return false")
        //]]>
</script>
</body>
</html>

