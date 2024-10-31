<?php
// Text
$_['text_title']                = 'Klarna Számla - Fizessen 14 napon belül';
$_['text_terms_fee']            = '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']         = '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']           = 'A Klarna Számla további információkat igényel a rendelés feldolgozása előtt.';
$_['text_male']					= 'Férfi';
$_['text_female']				= 'Nő';
$_['text_year']					= 'Év';
$_['text_month']				= 'Hónap';
$_['text_day']					= 'Nap';
$_['text_comment']				= 'A Klarna számlaazonosítója: %s. ' . "\n" . '%s/%s: %.4f';
$_['text_trems_description']    = 'A Klarna részére a számlás vásárlás lebonyolításához és egy személyazonosítási és hitelképességi ellenőrzéshez szükséges adatok megadásával egyetértek. A <a href="https://online.klarna.com/consent_de.yaws" target="_blank" rel="external noopener noreferrer">hozzájárulásomat</a> bármikor, a jövőre nézve visszavonhatom.';

// Entry
$_['entry_gender']				= 'Nem';
$_['entry_pno']					= 'Személyi szám';
$_['entry_dob']					= 'Születési dátum';
$_['entry_phone_no']			= 'Telefonszám';
$_['entry_street']				= 'Utca';
$_['entry_house_no']			= 'Házszám';
$_['entry_house_ext']			= 'Ház kiegészítés';
$_['entry_company']				= 'Cégjegyzékszám';

// Help
$_['help_pno']					= 'Kérjük, adja meg itt a társadalombiztosítási számát.';
$_['help_phone_no']				= 'Kérjük, adja meg a telefonszámát.';
$_['help_street']				= 'Kérjük, vegye figyelembe, hogy a Klarna használatával csak a regisztrált címre lehet kiszállítani.';
$_['help_house_no']				= 'Kérjük, adja meg a házszámát.';
$_['help_house_ext']			= 'Kérjük, adja meg a ház kiegészítését itt. Pl. A, B, C, Piros, Kék stb.';
$_['help_company']				= 'Kérjük, adja meg a cégjegyzékszámát.';

// Error
$_['error_deu_terms']			= 'Elfogadnia kell a Klarna adatvédelmi irányelveit (Datenschutz)';
$_['error_address_match']		= 'A számlázási és szállítási címeknek meg kell egyezniük, ha a Klarna számlát szeretné használni';
$_['error_network']				= 'Hiba történt a Klarna-hoz való csatlakozás során. Kérjük, próbálja meg később.';