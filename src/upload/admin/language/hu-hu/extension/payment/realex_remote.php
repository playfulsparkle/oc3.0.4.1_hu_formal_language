<?php
// Heading
$_['heading_title']					 = 'Realex Remote';

// Text
$_['text_extension']				 = 'Bővítmények';
$_['text_success']					 = 'Siker: A Realex sikeresen módosítva lett!';
$_['text_edit']                      = 'Realex Remote szerkesztése';
$_['text_card_type']				 = 'Kártyatípus';
$_['text_enabled']					 = 'Engedélyezve';
$_['text_use_default']				 = 'Alapértelmezett használata';
$_['text_merchant_id']				 = 'Kereskedő azonosító';
$_['text_subaccount']				 = 'Alfiók';
$_['text_secret']					 = 'Megosztott titok';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'Mastercard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch/Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'Rendelés sikeresen rögzítve';
$_['text_capture_ok_order']			 = 'Rendelés sikeresen rögzítve, a rendelés állapota frissítve: sikeres - rendezett';
$_['text_rebate_ok']				 = 'Kedvezmény sikeresen alkalmazva';
$_['text_rebate_ok_order']			 = 'Kedvezmény sikeresen alkalmazva, a rendelés állapota frissítve: kedvezményes';
$_['text_void_ok']					 = 'Mégse sikeresen végrehajtva, a rendelés állapota frissítve: érvénytelenítve';
$_['text_settle_auto']				 = 'Automatikus';
$_['text_settle_delayed']			 = 'Késleltetett';
$_['text_settle_multi']				 = 'Több';
$_['text_ip_message']				 = 'A Realex fiók kezelőjének meg kell adnia a kiszolgáló IP-címét, mielőtt élesbe állna';
$_['text_payment_info']				 = 'Fizetési információ';
$_['text_capture_status']			 = 'Fizetés rögzítve';
$_['text_void_status']				 = 'Fizetés érvénytelenítve';
$_['text_rebate_status']			 = 'Fizetés kedvezményesítve';
$_['text_order_ref']				 = 'Rendelés hivatkozás';
$_['text_order_total']				 = 'Összes engedélyezett';
$_['text_total_captured']			 = 'Összes rögzített';
$_['text_transactions']				 = 'Tranzakciók';
$_['text_confirm_void']				 = 'Biztos, hogy érvényteleníti a fizetést?';
$_['text_confirm_capture']			 = 'Biztos, hogy rögzíti a fizetést?';
$_['text_confirm_rebate']			 = 'Biztos, hogy kedvezményesíti a fizetést?';
$_['text_realex_remote']			 = '<a href="http://www.realexpayments.co.uk/partner-refer?id=opencart" target="_blank" rel="external noopener noreferrer"><img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_void']                      = 'Érvénytelenít';
$_['text_payment']                   = "Fizetés";
$_['text_rebate']                    = 'Kedvezmény';

// Column
$_['text_column_amount']			 = 'Összeg';
$_['text_column_type']				 = 'Típus';
$_['text_column_date_added']		 = 'Hozzáadás dátuma';

// Entry
$_['entry_merchant_id']				 = 'Kereskedő azonosító';
$_['entry_secret']					 = 'Megosztott titok';
$_['entry_rebate_password']			 = 'Kedvezmény jelszó';
$_['entry_total']					 = 'Teljes összeg';
$_['entry_sort_order']				 = 'Sorrend';
$_['entry_geo_zone']				 = 'Adózóna';
$_['entry_status']					 = 'Állapot';
$_['entry_debug']					 = 'Hibakeresés naplózása';
$_['entry_auto_settle']				 = 'Rendezési típus';
$_['entry_tss_check']				 = 'TSS ellenőrzések';
$_['entry_card_data_status']		 = 'Kártyainformáció naplózás';
$_['entry_3d']						 = '3D biztonság engedélyezése';
$_['entry_liability_shift']			 = 'Elfogadja a nem felelősségvállalási forgatókönyveket';
$_['entry_status_success_settled']	 = 'Siker - rendezett';
$_['entry_status_success_unsettled'] = 'Siker - nem rendezett';
$_['entry_status_decline']			 = 'Elutasítva';
$_['entry_status_decline_pending']	 = 'Elutasítva - offline hitelesítés';
$_['entry_status_decline_stolen']	 = 'Elutasítva - elveszett vagy ellopott kártya';
$_['entry_status_decline_bank']		 = 'Elutasítva - banki hiba';
$_['entry_status_void']				 = 'Sztornózva';
$_['entry_status_rebate']			 = 'Jóváírva';

// Help
$_['help_total']					 = 'Az a rendelési összeg, amelyet a rendelésnek el kell érnie, mielőtt ez a fizetési mód aktívvá válik.';
$_['help_card_select']				 = 'Kérjük, kérje meg a felhasználót, hogy válassza ki a kártyatípusát, mielőtt átirányítaná őket';
$_['help_notification']				 = 'Ezt az URL-t meg kell adni a Realex-nek a fizetési értesítésekhez';
$_['help_debug']					 = 'A hibakeresés engedélyezése érzékeny adatokat ír egy naplófájlba. Mindig tiltsa le, hacsak másképp nem utasítják.';
$_['help_liability']				 = 'A felelősség elfogadása azt jelenti, hogy még akkor is elfogadja a fizetéseket, ha a felhasználó nem teljesíti a 3D biztonságot.';
$_['help_card_data_status']			 = 'A kártya utolsó 4 számjegyét, lejárati dátumát, nevét, típusát és kibocsátó bank adatait naplózza';

// Tab
$_['tab_api']					     = 'API Részletek';
$_['tab_account']				     = 'Fiókok';
$_['tab_order_status']				 = 'Rendelés állapot';
$_['tab_payment']					 = 'Fizetési beállítások';

// Button
$_['button_capture']				 = 'Terhelés';
$_['button_rebate']					 = 'Jóváírás / visszatérítés';
$_['button_void']					 = 'Sztornó';

// Error
$_['error_merchant_id']				 = 'Kereskedő azonosító megadása kötelező';
$_['error_secret']					 = 'Megosztott titok megadása kötelező';
