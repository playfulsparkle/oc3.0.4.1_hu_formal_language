<?php
// Heading
$_['heading_title']					 = 'Globalpay Remote';

// Text
$_['text_extension']				 = 'Bővítmények';
$_['text_success']					 = 'Siker: A Globalpay Remote sikeresen módosítva lett!';
$_['text_edit']                      = 'Globalpay Remote szerkesztése';
$_['text_card_type']				 = 'Kártya típusa';
$_['text_enabled']					 = 'Engedélyezve';
$_['text_use_default']				 = 'Alapértelmezett használata';
$_['text_merchant_id']				 = 'Kereskedő azonosító';
$_['text_subaccount']				 = 'Alsó számla';
$_['text_secret']					 = 'Megosztott titok';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'Mastercard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch/Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'A rögzítés sikeres volt';
$_['text_capture_ok_order']			 = 'A rögzítés sikeres volt, a rendelés állapota frissítve sikeres - rendezett';
$_['text_rebate_ok']				 = 'A visszatérítés sikeres volt';
$_['text_rebate_ok_order']			 = 'A visszatérítés sikeres volt, a rendelés állapota visszatérített';
$_['text_void_ok']					 = 'A törlés sikeres volt, a rendelés állapota törölve';
$_['text_settle_auto']				 = 'Automatikus';
$_['text_settle_delayed']			 = 'Késleltetett';
$_['text_settle_multi']				 = 'Többszörös';
$_['text_ip_message']				 = 'Meg kell adnia a kiszolgáló IP címét a Globalpay fiókvezetőjének, mielőtt éles üzembe lépne';
$_['text_payment_info']				 = 'Fizetési információk';
$_['text_capture_status']			 = 'Fizetés rögzítve';
$_['text_void_status']				 = 'Fizetés törölve';
$_['text_rebate_status']			 = 'Fizetés visszatérítve';
$_['text_order_ref']				 = 'Rendelési hivatkozás';
$_['text_order_total']				 = 'Engedélyezett összeg';
$_['text_total_captured']			 = 'Rögzített összeg';
$_['text_transactions']				 = 'Tranzakciók';
$_['text_confirm_void']				 = 'Biztosan törölni szeretné a fizetést?';
$_['text_confirm_capture']			 = 'Biztosan rögzíteni szeretné a fizetést?';
$_['text_confirm_rebate']			 = 'Biztosan visszatéríteni szeretné a fizetést?';
$_['text_globalpay_remote']			 = '<a href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart" target="_blank" rel="external noopener noreferrer"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_void']                      = 'Törlés';
$_['text_payment']                   = 'Fizetés';
$_['text_rebate']                    = 'Visszatérítés';

// Column
$_['text_column_amount']			 = 'Összeg';
$_['text_column_type']				 = 'Típus';
$_['text_column_date_added']		 = 'Hozzáadás dátuma';

// Entry
$_['entry_merchant_id']				 = 'Kereskedő azonosító';
$_['entry_secret']					 = 'Megosztott titok';
$_['entry_rebate_password']			 = 'Visszatérítési jelszó';
$_['entry_total']					 = 'Teljes összeg';
$_['entry_sort_order']				 = 'Sorrend';
$_['entry_geo_zone']				 = 'Adózóna';
$_['entry_status']					 = 'Állapot';
$_['entry_debug']					 = 'Hibakeresés naplózása';
$_['entry_auto_settle']				 = 'Rendezési típus';
$_['entry_tss_check']				 = 'TSS ellenőrzések';
$_['entry_card_data_status']		 = 'Kártyaadatok naplózása';
$_['entry_3d']						 = '3D biztonság engedélyezése';
$_['entry_liability_shift']			 = 'Nem felelősségvállalási helyzetek elfogadása';
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
$_['help_card_select']				 = 'Kérje meg a felhasználót, hogy válassza ki a kártyája típusát, mielőtt átirányítják';
$_['help_notification']				 = 'Ezt az URL-t meg kell adnia a Globalpay részére a fizetési értesítések fogadásához';
$_['help_debug']					 = 'A hibakeresés engedélyezése érzékeny adatokat ír egy naplófájlba. Mindig tiltsa le, hacsak másképp nem utasítják.';
$_['help_liability']				 = 'A felelősség elfogadása azt jelenti, hogy akkor is elfogad fizetéseket, ha a felhasználó nem teljesíti a 3D biztonságot.';
$_['help_card_data_status']			 = 'Az utolsó 4 kártyaszámjegyet, lejáratot, nevet, típust és a kibocsátó bank adatait naplózza';

// Tab
$_['tab_api']					     = 'API részletek';
$_['tab_account']				     = 'Fiókok';
$_['tab_order_status']				 = 'Rendelés állapota';
$_['tab_payment']					 = 'Fizetési beállítások';

// Button
$_['button_capture']				 = 'Terhelés';
$_['button_rebate']					 = 'Jóváírás / visszatérítés';
$_['button_void']					 = 'Sztornó';

// Error
$_['error_merchant_id']				 = 'Kereskedő azonosító szükséges';
$_['error_secret']					 = 'Megosztott titok szükséges';
