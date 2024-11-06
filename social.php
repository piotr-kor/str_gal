<?php
$socials = [
    ['link'=>'https://www.youtube.com/', 'name'=>'Youtube.com'],
    ['link'=>'https://www.tiktok.com/pl-PL/', 'name'=>'TikTok.ble'],
    ['link'=>'https://x.com/?lang=pl', 'name'=>'X.com']
];

function social_links()
	{
		global $socials;
		foreach ($socials as $soc) {
			echo '<a href="'. $soc['link'].'">'. $soc['name'].'</a><br>';
		}
	}
?>