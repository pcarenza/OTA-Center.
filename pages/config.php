<?
// Start je zelf ergens anders je sessies/cookies? Maak van de volgende twee regels dan commentaar (# of //)
session_start();
ob_start();

// Error reporting zetten we uit, het is niet echt netjes je bezoekers errors voor te schotelen
//ERROR_REPORTING(0);

// MySQL
$db_user = 'xenonhd_ota'; // Gebruiker voor MySQL
$db_pass = 'teamhorizon'; // Wachtwoord voor MySQL
$db_host = 'localhost'; // Host voor MySQL; standaard localhost
$db_db = 'xenonhd_otaupdatecenter'; // Database

// Als je al ergens anders een database connectie hebt gemaakt,
// maak dan van de volgende twee regels commentaar (# of // ervoor zetten)
$db = new mysqli($db_host, $db_user, $db_pass, $db_db);

// Instellingen
$loginpage = '?page=list-roms'; // Pagina waar de gebruiker heen wordt gestuurd wanneer deze is ingelogd
$sitenaam = 'OTA-Service'; // Naam van je site; deze word oa. gebruikt bij het verzenden van mail
$sitemail = 'teamhorizon14@gmail.com'; // Afzender van verzonden mail
$sitebaseurl = 'https://xenonhd.com/otaupdater/ota';
$sitesalt = 'supersecretlongsalt - replace on install';
$gcmapikey = 'AIzaSyADHyPc7UcUKjOTqRzyr-nozBlx5siiO2Y';
$recaptcha_pubkey = '6LfZeeMSAAAAAHMTBsgINPebE2_7iFYE82W_FTzG';
$recaptcha_privkey = '6LfZeeMSAAAAAE7USSqe6PMDxRQXllQdwg_8LjjJ';
?>
