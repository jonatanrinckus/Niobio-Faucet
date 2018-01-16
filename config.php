<?php

$faucetTitle = 'Nióbio Cash Faucet';
$faucetSubtitle = 'A cada 12 horas você pode obter Nióbio Cash grátis';
$logo = 'images/nbrcoin.png';

//Faucet address for donations
$faucetAddress = 'NDRL6EEH2XyMpJZi4R4tWsGHf7Qax4uZxZn9Hzp7jWYrWpFSQfRVsahZLwSA1DZGdsRe1EbAxQxVW6kSVvhVSUMV9Qa7kEM';

//Reward time in hours
$rewardEvery = '12';
//Max reward and min reward as decimals Ex: Min = 10.0 & Max = 20.0
$minReward = '0.01'; //Remember that the minimum for an eobot deposit is 5 BCN as reward.
$maxReward = '0.3';
//Transaction fee is set to 0.01 BCN for every request.


//Database connection

$userDB = '';
$database = '';
$passwordDB = '';
$hostDB = '127.0.0.1';

//Recaptcha Keys. You can get yours here: https://www.google.com/recaptcha/
$keys = array(
    'site_key' => '',
    'secret_key' => ''
);

//Addresses that can request more than one time but with a different payment ID.
$clearedAddresses = array(/*'Eobot' => '22694R3K1JvGf1m98pBsbaXCA3ULQz4xdQiYHgnNAdsVDqZDjiTH9CMj6QHhKD232wPeYtfypNzp5TX5L3NcGGSmJ8pWnPJ',
	'Poloniex' => '25cZNQYVAi3issDCoa6fWA2Aogd4FgPhYdpX3p8KLfhKC6sN8s6Q9WpcW4778TPwcUS5jEM25JrQvjD3XjsvXuNHSWhYUsu',
	'HitBTC' => '24zavX3Bi2PiKGWLKh4bPGTiMsn4iHf3Y6JnKCF6V1PeBpDpuwiAMZ8di7ok6B5SQT6UXUtQgusruCoXbqUZm8VJAfq2xKK'*/
);
