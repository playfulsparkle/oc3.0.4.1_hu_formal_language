<?php
// Heading
$_['heading_title']				= 'eWAY Fizetés';

// Text
$_['text_extension']			= 'Bővítmények';
$_['text_success']				= 'Siker: Az eWAY sikeresen módosítva lett!';
$_['text_edit']					= 'eWAY szerkesztése';
$_['text_eway']					= '<a href="http://www.eway.com.au/" target="_blank" rel="external noopener noreferrer"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Engedélyezés';
$_['text_sale']					= 'Eladás';
$_['text_transparent']			= 'Átlátszó Átirányítás (fizetési űrlap az oldalon)';
$_['text_iframe']				= 'IFrame (fizetési űrlap ablakban)';
$_['text_connect_eway']	        = 'Az eWAY segíti a vállalkozásokat abban, hogy biztonságosan feldolgozzák az összes főbb hitelkártyát, beépített csalásmegelőzéssel, 24/7 technikai támogatással és még sok mással. <a href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf" target="_blank" rel="external noopener noreferrer">Kattintson ide</a>';
$_['text_eway_image']	        = '<a href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf" target="_blank" rel="external noopener noreferrer"><img src="view/image/payment/eway_connect.png" alt="eWAY" title="eWAY" class="img-fluid" /></a>';

// Entry
$_['entry_paymode']				= 'Fizetési mód';
$_['entry_test']				= 'Teszt mód';
$_['entry_order_status']		= 'Rendelés állapot';
$_['entry_order_status_refund'] = 'Visszatérített rendelés állapota';
$_['entry_order_status_auth']	= 'Engedélyezett rendelés állapota';
$_['entry_order_status_fraud']	= 'Csalásgyanús rendelés állapota';
$_['entry_status']				= 'Állapot';
$_['entry_username']			= 'eWAY API Kulcs';
$_['entry_password']			= 'eWAY jelszó';
$_['entry_payment_type']		= 'Fizetési típus';
$_['entry_geo_zone']			= 'Adózóna';
$_['entry_sort_order']			= 'Sorrend';
$_['entry_transaction_method']	= 'Tranzakció módja';

// Error
$_['error_permission']			= 'Figyelem: Nincs jogosultsága az eWAY fizetési modul módosításához!';
$_['error_username']			= 'Az eWAY API kulcs megadása kötelező!';
$_['error_password']			= 'Az eWAY jelszó megadása kötelező!';
$_['error_payment_type']		= 'Legalább egy fizetési típus megadása szükséges!';

// Help hints
$_['help_testmode']				= 'Állítsa Igen-re, hogy az eWAY Sandbox-ot használja.';
$_['help_username']				= 'Az eWAY API kulcs a MYeWAY fiókjából.';
$_['help_password']				= 'Az eWAY API jelszava a MYeWAY fiókjából.';
$_['help_transaction_method']	= 'Engedélyezés csak az ausztrál bankok esetében elérhető.';

// Order page - payment tab
$_['text_payment_info']			= 'Fizetési információ';
$_['text_order_total']			= 'Teljes engedélyezett összeg';
$_['text_transactions']			= 'Tranzakciók';
$_['text_column_transactionid'] = 'eWAY tranzakció azonosító';
$_['text_column_amount']		= 'Összeg';
$_['text_column_type']			= 'Típus';
$_['text_column_created']		= 'Hozzáadás dátuma';
$_['text_total_captured']		= 'Teljes lefoglalt összeg';
$_['text_capture_status']		= 'Fizetés lefoglalva';
$_['text_void_status']			= 'Fizetés érvénytelenítve';
$_['text_refund_status']		= 'Fizetés visszatérítve';
$_['text_total_refunded']		= 'Teljes visszatérített összeg';
$_['text_refund_success']		= 'A visszatérítés sikeres volt!';
$_['text_capture_success']		= 'A lefoglalás sikeres volt!';
$_['text_refund_failed']		= 'A visszatérítés nem sikerült: ';
$_['text_capture_failed']		= 'A lefoglalás nem sikerült: ';
$_['text_unknown_failure']		= 'Érvénytelen rendelés vagy összeg';
$_['text_refund']               = 'Visszatérítés';

$_['text_confirm_capture']		= 'Biztosan le szeretné foglalni a fizetést?';
$_['text_confirm_release']		= 'Biztosan el szeretné engedni a fizetést?';
$_['text_confirm_refund']		= 'Biztosan vissza szeretné téríteni a fizetést?';

$_['text_empty_refund']			= 'Kérjük, adjon meg egy visszatérítési összeget!';
$_['text_empty_capture']		= 'Kérjük, adjon meg egy lefoglalási összeget!';

// Gombok
$_['btn_refund']				= 'Visszatérítés';
$_['btn_capture']				= 'Lefoglalás';

// Validation Error codes
$_['text_card_message_V6000']   = 'Nem meghatározott érvényesítési hiba';
$_['text_card_message_V6001']   = 'Érvénytelen vásárlói IP-cím';
$_['text_card_message_V6002']   = 'Érvénytelen eszközazonosító';
$_['text_card_message_V6011']   = 'Érvénytelen összeg';
$_['text_card_message_V6012']   = 'Érvénytelen számla leírás';
$_['text_card_message_V6013']   = 'Érvénytelen számlaszám';
$_['text_card_message_V6014']   = 'Érvénytelen számla hivatkozás';
$_['text_card_message_V6015']   = 'Érvénytelen pénznemkód';
$_['text_card_message_V6016']   = 'Fizetés szükséges';
$_['text_card_message_V6017']   = 'Fizetési pénznemkód szükséges';
$_['text_card_message_V6018']   = 'Ismeretlen fizetési pénznemkód';
$_['text_card_message_V6021']   = 'Kártyatulajdonos neve szükséges';
$_['text_card_message_V6022']   = 'Kártyaszám szükséges';
$_['text_card_message_V6023']   = 'CVN szükséges';
$_['text_card_message_V6031']   = 'Érvénytelen kártyaszám';
$_['text_card_message_V6032']   = 'Érvénytelen CVN';
$_['text_card_message_V6033']   = 'Érvénytelen lejárati dátum';
$_['text_card_message_V6034']   = 'Érvénytelen kibocsátási szám';
$_['text_card_message_V6035']   = 'Érvénytelen kezdési dátum';
$_['text_card_message_V6036']   = 'Érvénytelen hónap';
$_['text_card_message_V6037']   = 'Érvénytelen év';
$_['text_card_message_V6040']   = 'Érvénytelen token vásárlói azonosító';
$_['text_card_message_V6041']   = 'Vásárló szükséges';
$_['text_card_message_V6042']   = 'Vásárló keresztneve szükséges';
$_['text_card_message_V6043']   = 'Vásárló vezetékneve szükséges';
$_['text_card_message_V6044']   = 'Vásárló országkódja szükséges';
$_['text_card_message_V6045']   = 'Vásárlói titulus szükséges';
$_['text_card_message_V6046']   = 'Vásárlói azonosító token szükséges';
$_['text_card_message_V6047']   = 'Átirányítási URL szükséges';
$_['text_card_message_V6051']   = 'Érvénytelen keresztnév';
$_['text_card_message_V6052']   = 'Érvénytelen vezetéknév';
$_['text_card_message_V6053']   = 'Érvénytelen országkód';
$_['text_card_message_V6054']   = 'Érvénytelen email cím';
$_['text_card_message_V6055']   = 'Érvénytelen telefonszám';
$_['text_card_message_V6056']   = 'Érvénytelen mobiltelefon';
$_['text_card_message_V6057']   = 'Érvénytelen faxszám';
$_['text_card_message_V6058']   = 'Érvénytelen titulus';
$_['text_card_message_V6059']   = 'Érvénytelen átirányítási URL';
$_['text_card_message_V6060']   = 'Érvénytelen átirányítási URL';
$_['text_card_message_V6061']   = 'Érvénytelen hivatkozás';
$_['text_card_message_V6062']   = 'Érvénytelen cégnév';
$_['text_card_message_V6063']   = 'Érvénytelen munkakör leírás';
$_['text_card_message_V6064']   = 'Érvénytelen első utca cím';
$_['text_card_message_V6065']   = 'Érvénytelen második utca cím';
$_['text_card_message_V6066']   = 'Érvénytelen város';
$_['text_card_message_V6067']   = 'Érvénytelen megye';
$_['text_card_message_V6068']   = 'Érvénytelen irányítószám';
$_['text_card_message_V6069']   = 'Érvénytelen email cím';
$_['text_card_message_V6070']   = 'Érvénytelen telefonszám';
$_['text_card_message_V6071']   = 'Érvénytelen mobiltelefon';
$_['text_card_message_V6072']   = 'Érvénytelen megjegyzések';
$_['text_card_message_V6073']   = 'Érvénytelen faxszám';
$_['text_card_message_V6074']   = 'Érvénytelen URL';
$_['text_card_message_V6075']   = 'Érvénytelen szállítási cím, keresztneve';
$_['text_card_message_V6076']   = 'Érvénytelen szállítási cím, vezetékneve';
$_['text_card_message_V6077']   = 'Érvénytelen szállítási cím, 1. utca';
$_['text_card_message_V6078']   = 'Érvénytelen szállítási cím, 2. utca';
$_['text_card_message_V6079']   = 'Érvénytelen szállítási cím, városa';
$_['text_card_message_V6080']   = 'Érvénytelen szállítási cím, megyéje';
$_['text_card_message_V6081']   = 'Érvénytelen szállítási cím, irányítószáma';
$_['text_card_message_V6082']   = 'Érvénytelen szállítási cím, email címe';
$_['text_card_message_V6083']   = 'Érvénytelen szállítási cím, telefonszáma';
$_['text_card_message_V6084']   = 'Érvénytelen szállítási cím, országkódja';
$_['text_card_message_V6091'] 	= 'Ismeretlen országkód';
$_['text_card_message_V6100'] 	= 'Érvénytelen kártyanév';
$_['text_card_message_V6101'] 	= 'Érvénytelen kártya lejárati hónap';
$_['text_card_message_V6102'] 	= 'Érvénytelen kártya lejárati év';
$_['text_card_message_V6103'] 	= 'Érvénytelen kártya kezdő hónap';
$_['text_card_message_V6104'] 	= 'Érvénytelen kártya kezdő év';
$_['text_card_message_V6105'] 	= 'Érvénytelen kártya kibocsátási szám';
$_['text_card_message_V6106'] 	= 'Érvénytelen kártya CVN';
$_['text_card_message_V6107'] 	= 'Érvénytelen hozzáférési kód';
$_['text_card_message_V6108'] 	= 'Érvénytelen ügyfél IP-cím';
$_['text_card_message_V6109'] 	= 'Érvénytelen böngészőazonosító';
$_['text_card_message_V6110'] 	= 'Érvénytelen kártyaszám';
$_['text_card_message_V6111'] 	= 'Engedély nélküli API hozzáférés, a fiók nem PCI-tanúsított';
$_['text_card_message_V6112'] 	= 'Felesleges kártyaadatok a lejárati év és hónap kivételével';
$_['text_card_message_V6113'] 	= 'Érvénytelen tranzakció a visszatérítéshez';
$_['text_card_message_V6114'] 	= 'Átjáró érvényesítési hiba';
$_['text_card_message_V6115'] 	= 'Érvénytelen közvetlen visszatérítési kérés, tranzakciós ID';
$_['text_card_message_V6116'] 	= 'Érvénytelen kártyaadatok az eredeti tranzakciós azonosítón';
$_['text_card_message_V6124'] 	= 'Érvénytelen tételsorok. A tételsorok meg lettek adva, de az összesített érték nem egyezik a teljes összeg mezővel';
$_['text_card_message_V6125'] 	= 'A kiválasztott fizetési típus nincs engedélyezve';
$_['text_card_message_V6126'] 	= 'Érvénytelen titkosított kártyaszám, a visszafejtés nem sikerült';
$_['text_card_message_V6127'] 	= 'Érvénytelen titkosított CVN, a visszafejtés nem sikerült';
$_['text_card_message_V6128'] 	= 'Érvénytelen módszer a fizetési típushoz';
$_['text_card_message_V6129'] 	= 'A tranzakció nincs engedélyezve a zárolás/törlés művelethez';
$_['text_card_message_V6130'] 	= 'Általános ügyféladat hiba';
$_['text_card_message_V6131'] 	= 'Általános szállítási információs hiba';
$_['text_card_message_V6132'] 	= 'A tranzakció már befejeződött vagy törölve lett, a művelet nem engedélyezett';
$_['text_card_message_V6133'] 	= 'Pénztár nem érhető el ehhez a fizetési típushoz';
$_['text_card_message_V6134'] 	= 'Érvénytelen hitelesítési tranzakciós azonosító a zároláshoz/törléshez';
$_['text_card_message_V6135'] 	= 'PayPal hiba a visszatérítés feldolgozásakor';
$_['text_card_message_V6140'] 	= 'A kereskedői fiók felfüggesztésre került';
$_['text_card_message_V6141'] 	= 'Érvénytelen PayPal fiókadatok vagy API aláírás';
$_['text_card_message_V6142'] 	= 'A hitelesítés nem elérhető a bank/ág számára';
$_['text_card_message_V6150'] 	= 'Érvénytelen visszatérítési összeg';
$_['text_card_message_V6151'] 	= 'A visszatérítési összeg nagyobb, mint az eredeti tranzakció';
$_['text_card_message_D4406'] 	= 'Ismeretlen hiba';
$_['text_card_message_S5010'] 	= 'Ismeretlen hiba';
