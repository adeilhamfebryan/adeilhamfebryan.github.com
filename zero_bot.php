<?php 

$idbot='bot1617570926:AAFjC62F5g76wB4WjYvSqxDonrFlQFDIEd0';
$user='997271409';

	function kirim($pesan, $bot, $chat){
		$url='https://api.telegram.org/'.$bot.'/sendMessage?chat_id='.$chat.'&text='.$pesan.'parse_mode=html';
		$result=file_get_contents($url,true);
		return $result;
	}

kirim('<p>Halo anak anjeng</p>',$idbot,$user);

?>
