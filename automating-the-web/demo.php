<?php

require __DIR__ . '/vendor/autoload.php';

$_SERVER['PANTHER_NO_HEADLESS'] = 'true';

$client = Symfony\Component\Panther\Client::createChromeClient(
    null,
    [
        '--window-size=1792,1120',
    ],
);

$client->request('GET', 'https://www.google.com/');

$searchInputLocator = 'input[title="Search"]';
$crawler = $client->waitFor($searchInputLocator);
$crawler->filter($searchInputLocator)->sendKeys("Longhorn PHP\n");

$searchLinksLocator = '#search a';
$crawler = $client->waitFor($searchLinksLocator);
$crawler->filter($searchLinksLocator)->eq(0)->click();

$client->executeScript('document.body.innerHTML = "<img src=\"https://staticsmartlife.mondo.rs/Thumbnail/60141/gif/Rik-Estli\">";');

sleep(600);
