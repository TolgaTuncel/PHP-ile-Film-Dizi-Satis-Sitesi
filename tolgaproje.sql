# Host: localhost  (Version 5.5.5-10.1.25-MariaDB)
# Date: 2018-01-13 20:18:45
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "ayarlar"
#

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `aciklama` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `smtpserver` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `smtpport` int(11) DEFAULT NULL,
  `smtpemail` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `smtpsifre` varchar(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `adres` varchar(200) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `sehir` varchar(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `hakkimizda` text COLLATE utf8mb4_turkish_ci,
  `iletisim` text COLLATE utf8mb4_turkish_ci,
  `facebook` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `instegram` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `pinterest` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "ayarlar"
#

INSERT INTO `ayarlar` VALUES (1,'Tolga','inceptionn','iyi filmm','WB','smtp.gmail.com',587,'okulodeviphp@gmail.com','123QWEasd','WBB','Londonn','03122245455','455478744','tt@hotmail.com','<p>Biz işi gücü televizyon olan genç bir ekibiz.</p>\r\n\r\n<p>Televizyonu elimizde telefonumuz, kucağımızda bilgisayarımız olmadan seyredemiyoruz.</p>\r\n\r\n<p>Fark ettik ki bizim gibi bir çok televizyon-sever var.</p>\r\n\r\n<p>İstedik ki bizim gibi, televizyonu sadece tevizyondan seyretmeyen televizyon çocukları birarada olsun.</p>\r\n\r\n<p>Dizi dedikodularımızı, maç muhabbetlerimizi bir kanepedeymiş gibi yapabilelim.</p>\r\n\r\n<p>Bir olalım</p>\r\n','','ttttttt','tt','ttttt','tt');

#
# Structure for table "kategoriler"
#

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `aciklama` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `resim` varchar(75) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `durum` varchar(5) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ust_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "kategoriler"
#

INSERT INTO `kategoriler` VALUES (7,'Aksiyon Filmleri',NULL,NULL,NULL,'2018-01-13 13:25:36',NULL,NULL),(8,'Dram Filmleri',NULL,NULL,NULL,'2018-01-13 13:25:48',NULL,NULL),(9,'Komedi Filmleri',NULL,NULL,NULL,'2018-01-13 13:26:03',NULL,NULL),(10,'Savaş Filmleri',NULL,NULL,NULL,'2018-01-13 13:26:11',NULL,NULL),(11,'Animasyon Filmleri',NULL,NULL,NULL,'2018-01-13 13:26:46',NULL,NULL),(12,'Fantastik Filmler',NULL,NULL,NULL,'2018-01-13 13:26:53',NULL,NULL),(13,'Korku Filmleri',NULL,NULL,NULL,'2018-01-13 13:27:01',NULL,NULL),(14,'Romantik Filmler',NULL,NULL,NULL,'2018-01-13 13:27:12',NULL,NULL),(15,'Macera Filmleri',NULL,NULL,NULL,'2018-01-13 13:27:21',NULL,NULL),(16,'Bilim Kurgu Filmleri',NULL,NULL,NULL,'2018-01-13 13:27:32',NULL,NULL);

#
# Structure for table "kullanicilar"
#

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(15) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yetki` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `durum` varchar(5) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `resim` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "kullanicilar"
#

INSERT INTO `kullanicilar` VALUES (13,'Tolga Tuncel','tolga-tuncel@hotmail.com','tt','admin','aktif','2017-10-14 22:07:13',NULL),(14,'çağatay eroglu','cagatay@hot','cc','satıscı','aktif','2017-10-14 21:58:46',NULL),(15,'Cagatay Eroglu','caga@hot','cc','admin','aktif','2017-10-14 22:06:07',NULL),(16,'sdasd','dasdasd@asdasd','asd','satıscı','aktif','2017-11-18 00:22:30',NULL),(18,'ttd','qwe@hotmail.com','ddd','satıscı','pasif','2017-11-18 00:44:48',NULL),(19,'engin kurt','kurtengin@hotmail.com','kurt','admin','pasif','2017-11-19 20:34:37',NULL);

#
# Structure for table "mesajlar"
#

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `mesaj` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `durum` varchar(10) COLLATE utf8mb4_turkish_ci DEFAULT 'Yeni',
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `adminnotu` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "mesajlar"
#

INSERT INTO `mesajlar` VALUES (2,'ttd','tt@hot','445454','1222','Okundu','2017-12-11 18:29:29','::1',NULL),(3,'tolga tuncel','tt@hot','555555555','Film çok güzel','Okundu','2017-12-11 20:47:09','::1','Ayarlama tamamlandı\r\n                                    '),(4,'enes','enes@hot','55555','site harika','Okundu','2018-01-11 19:31:28','::1',NULL),(5,'qwe','tolga-tuncel@hotmail.com','123123','wdwsadsadsdsadsdsad','Yeni','2018-01-12 21:38:07','::1',NULL),(6,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:39:55','::1',NULL),(7,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:40:54','::1',NULL),(8,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:45:54','::1',NULL),(9,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:46:41','::1',NULL),(10,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:45','::1',NULL),(11,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:46','::1',NULL),(12,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:46','::1',NULL),(13,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:46','::1',NULL),(14,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:47','::1',NULL),(15,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:56','::1',NULL),(16,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:57','::1',NULL),(17,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:57','::1',NULL),(18,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:57','::1',NULL),(19,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:57','::1',NULL),(20,'sdasdsd','tolga-tuncel@hotmail.com','0312224555','sadsdsdasdsadad','Yeni','2018-01-12 21:47:57','::1',NULL);

#
# Structure for table "musteriler"
#

DROP TABLE IF EXISTS `musteriler`;
CREATE TABLE `musteriler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `sifre` varchar(15) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `yetki` varchar(10) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `durum` varchar(5) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `resim` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(15) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `cinsiyet` varchar(5) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `adres` varchar(150) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `sehir` varchar(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `acıklama` text COLLATE utf8mb4_turkish_ci,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "musteriler"
#

INSERT INTO `musteriler` VALUES (19,'TURGUT','turguty@hot','asd',NULL,'aktif',NULL,'2018-01-09 23:51:24',NULL,'123','123','123','123',NULL),(20,'tolga tuncel','tolga@hot','asd',NULL,'aktif',NULL,'2018-01-12 14:40:39',NULL,'05066950828','Erkek','Şahin tepesi','Karabük',NULL);

#
# Structure for table "sepet"
#

DROP TABLE IF EXISTS `sepet`;
CREATE TABLE `sepet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_id` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `miktar` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "sepet"
#

INSERT INTO `sepet` VALUES (32,'21','17','2018-01-12 21:03:36',2878),(33,'21','18','2018-01-12 21:08:55',2341);

#
# Structure for table "siparis_urunler"
#

DROP TABLE IF EXISTS `siparis_urunler`;
CREATE TABLE `siparis_urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `siparis_id` int(11) DEFAULT NULL,
  `musteri_id` int(11) DEFAULT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `adi` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `birim` varchar(10) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tutar` float DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `miktar` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "siparis_urunler"
#

INSERT INTO `siparis_urunler` VALUES (1,1,20,35,'Expandables',45,NULL,90,'2018-01-13 19:39:39',2),(4,1,19,38,'Arabalar 3',50,NULL,50,'2018-01-13 19:58:41',1),(5,1,19,39,'Arif ve 216',85,NULL,85,'2018-01-13 19:58:41',1);

#
# Structure for table "siparisler"
#

DROP TABLE IF EXISTS `siparisler`;
CREATE TABLE `siparisler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tutar` float DEFAULT NULL,
  `sehir` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `durum` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(15) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kargofirma` varchar(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kargono` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `mus_aciklama` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `admin_aciklama` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `adsoy` varchar(30) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "siparisler"
#

INSERT INTO `siparisler` VALUES (10,'20','Şahin tepesi','05066950828',545,'Karabük','onaylandı','2018-01-13 15:18:45','::1','yurtiçi','1222',NULL,'Sipariş onay','tolga tuncel'),(11,'20','Şahin tepesi','05066950828',155,'Karabük',NULL,'2018-01-13 19:37:09','::1',NULL,NULL,NULL,NULL,'tolga tuncel'),(12,'20','Şahin tepesi','05066950828',95,'Karabük',NULL,'2018-01-13 19:39:39','::1',NULL,NULL,NULL,NULL,'tolga tuncel'),(13,'19','123','123',110,'123',NULL,'2018-01-13 19:50:45','::1',NULL,NULL,NULL,NULL,'TURGUT'),(14,'19','123','123',140,'123',NULL,'2018-01-13 19:58:41','::1',NULL,NULL,NULL,NULL,'TURGUT');

#
# Structure for table "sorucevaplar"
#

DROP TABLE IF EXISTS `sorucevaplar`;
CREATE TABLE `sorucevaplar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `soru` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `cevap` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "sorucevaplar"
#

INSERT INTO `sorucevaplar` VALUES (1,'NASIL SIPARIŞ VERIRIM??','Web sayfamızdaki Kampanya ve Fiyat bilgilerine, üye olmadan da ulaşabilirsiniz fakat alış veriş yapmak için üye olmalısınız...'),(2,'Nasıl Üye Olurum ?','Sipariş verebilmek için ana sayfada yer alan Yeni Üyelik Oluştur butonunu tıklayınız. Üyelik bilgilerinizi eksiksiz doldurunuz ve KAYDET butonuna basınız.'),(3,'Ürün iade sürecinden sonra ödediğim ücreti nasıl geri alırım ?','İade koşullarında belirtilen şartlara uygun taleplerinizde; ilgili ürün Vatan Bilgisayar\'a ulaştığı andan itibaren on (10) gün içerisinde ürün bedeli alışveriş yaptığınız hesaba iade edilecektir. Kredi kartınıza yatırılan geri ödemenin kredi kartı ekstren');

#
# Structure for table "urun_resimler"
#

DROP TABLE IF EXISTS `urun_resimler`;
CREATE TABLE `urun_resimler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(11) DEFAULT NULL,
  `resim` varchar(75) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "urun_resimler"
#

INSERT INTO `urun_resimler` VALUES (5,14,'header.png'),(6,14,'L293D_LRG.jpg'),(7,14,'Approved_Circle_Green.png'),(8,13,'7dc6ef5164b2721d2c85ccdd314e21b9d3c7571d4049b1e6323dedb4274ab08c.jpg'),(9,16,'starwars_551c43f4.jpeg'),(10,18,'050415_gwenstarwarsphotofeat.jpg'),(11,18,'indir.jpg'),(12,21,'Small_636334653340032141.jpg'),(13,21,'Small_636334905896023649.jpg'),(14,26,'a43683d33b40f41-322-250x250.jpg'),(15,23,'the-expendables-2-comic-con-poster.jpg'),(16,28,'11946069-2224-457c-890d-9d5450ca7b00.jpg'),(20,29,'titanic1.jpg');

#
# Structure for table "urunler"
#

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE `urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kodu` varchar(25) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `adi` varchar(40) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `miktar` int(11) DEFAULT NULL,
  `afiyat` float DEFAULT NULL,
  `sfiyat` float DEFAULT NULL,
  `resim` varchar(75) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `aciklama` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '',
  `detay` text COLLATE utf8mb4_turkish_ci,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `durum` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `birimi` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "urunler"
#

INSERT INTO `urunler` VALUES (21,'1','Arabalar 3',11,20,40,50,'arabalar-3-cikartmali-eglence_med1.jpg','Çocuk, genç, yaşlı her kesime hitap ediyor','arabalar','<p>Arabalar 3 filmi, yapımcısı Pixar Animation Studios ve yayımcısı Walt Disney Pictures olan Amerikan yapımı bir 3D bilgisayar animasyon spor filmidir. Yayınlandıktan kısa bir süre sonra burada full hd izleyeme imkânına sahip olacağınız Cars 3 filmi aslında 2006 yılında yayınlanan ve yönetmenliğini Brain Fee’nin üstlendiği Cars ve sonrasında da 2011 yılında yayınlanan Cars 2 filmlerinin devam filmidir.</p>\r\n','2018-01-13 13:28:47','aktif','tl'),(23,'3','Expandables',7,20,40,45,'The-Expendables-2-Blu-Ray-And-Dvd-Arrive.jpg','Film sektörünün şampiyonlar ligi kadrosu bu filmde.','expandables','<p>Cehennem Melekleri, 2010&#39;da gösterime giren Sylvester Stallone&#39;nin hem yönetip hem oynadığı ABD yapımı film. Filmde birkaç paralı askerin Güney Amerika&#39;da, bir diktatörü devirme macerası konu edilmiştir.</p>\r\n','2018-01-13 13:35:42','aktif','tl'),(24,'4','Babam ve Oğlum',8,20,30,55,'babam_ve_oglum.jpg','Türk yapımı filmler arasında imdb top 20 ye giren tek film.','babam ve oğlum','<p>Annesini 1980 darbesinde kaybetmiş olan deniz henuz 7 yaşındadır.Babası sadık onu yıllardır küs olduğu büyükbabası Hüseyin<br>\r\nefendinin yanına götürmek için yola çıkar.Hüseyin efendi istanbula gönderdiği oğlunun politika olaylarına katılıp hapse gimesiyle onu evlatlıktan redetmiştir.Ama sadık oğlunu emanet edeceği başka hiç biyer olmadığı için babasının yanına gider.Zamanla Denizin sayesinde baba ve oğul arasındaki buzlar erimeye başlayacaktır.</p>\r\n','2018-01-13 13:43:08','aktif','tl'),(26,'6','Arif ve 216',9,20,55,85,'a43683d33b40f41-304-250x250.jpg','Cem yılmaz filmi. Ne kadar kötü olabilir ki..','arif ve 216','<p>Arif&#39;in yakın dostu 216, insan olmaya karar vererek dünyaya gelir ve burada başına olmadık işler gelir. Her ne kadar insan olabilmek için kıyasıya bir çaba harcasa da 216&#39;nın (Ozan Güven) farklılıkları çok barizdir. Üstelik bir de gözleri görmeyen Pembe Şeker&#39;e (Seda Bakan) aşık olmuştur. Kötü niyetli bir iş adamının onu kopyalamaya kalkışmasıyla Arif (Cem Yılmaz) devreye girecek, 216&#39;yı ve tüm dünyayı kurtarmaya çalışacaktır.<br>\r\nArif&#39;in GORA&#39;dan sonra bir kez daha 216&#39;yla yaşadığı maceraları anlatacağı Arif v 216 filmi, 2018&#39;in Ocak ayında gösterime girdi.</p>\r\n','2018-01-13 13:50:52','aktif','tl'),(28,'8','Karayip Korsanları 1',15,30,35,55,'3d17e3ed-6396-4be7-8239-e0e3e44c507a.jpg','Johnny Depp ve Orlando Bloom... Bu film olmuş..','karayip korsanları','<p>Birazcık üçkağıtçı ancak bir o kadar da sevimli olan Kaptan Jack Sparrow’un (Johnny Depp) korsanlık yaşantısı, düşmanı kurnaz Kaptan Barbossa’nın (Geoffrey Rush), gemisi Siyah İnci’yi çalmasıyla altüst olacaktır. Bu da yetmezmiş gibi Kaptan Barbossa, Port Royal kasabasına saldıracak ve belediye başkanının güzeller güzeli olan kızı Elizabeth’i (Keira Knightley) kaçıracaktır. Kızı kurtarmak ve Siyah İnci’yi yeniden ele geçirmek için Elizabeth’in çocukluk arkadaşı olan Will (Orlando Bloom) ve Jack güçlerini birleştireceklerdir. Will’in bilmediği ise lanetli bir hazinenin Barbossa’nın kaderini nasıl değiştirdiği ve onu ve mürettebatını ne şekilde sonsuza kadar ölümsüz olarak yaşamaya mahkum etmekte olduğudur.</p>\r\n','2018-01-13 14:00:11','aktif','tl'),(29,'9','Titanik',14,10,35,50,'indir_(2).jpg','Bu gemiyi Tanrı bile batıramaz denildi.','titanik','<p>Tamamı insan elinden yapılmış olan bu en büyük ve en gösterişli yüzen araç Titanic gemisi yola koyulmuştur. Batmaz, sarsılmaz olarak bilinen bu büyük lüks yolcu gemisinde yolculuk yapmak, 20’inci Yüzyılın muhteşem bir hayalidir. Fakat bu büyük hayal sadece 4.5 gün sürmekte ve anısını bir sonraki yüzyıla bile taşıyacak büyüklükte bir kabusa dönüşecektir. </p>\r\n','2018-01-13 14:03:59','aktif','tl');

#
# Structure for table "yorumlar"
#

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE `yorumlar` (
  `Id` int(1) NOT NULL AUTO_INCREMENT,
  `ders_id` int(1) DEFAULT NULL,
  `musteri_id` int(1) DEFAULT NULL,
  `yorum` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `durum` varchar(5) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ip` varchar(5) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

#
# Data for table "yorumlar"
#

