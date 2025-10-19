<?php
// Heading
$_['heading_title']					 = 'First Data EMEA Webszolgáltatás API';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']				 = 'Bővítmények';
$_['text_success']					 = 'Siker: A First Data EMEA Web Service API sikeresen módosítva lett!';
$_['text_edit']                      = 'First Data EMEA Webszolgáltatás API szerkesztése';
$_['text_card_type']				 = 'Kártyatípus';
$_['text_enabled']					 = 'Engedélyezett';
$_['text_merchant_id']				 = 'Üzlet azonosító';
$_['text_subaccount']				 = 'Alsó számla';
$_['text_user_id']					 = 'Felhasználói azonosító';
$_['text_capture_ok']				 = 'A zárolás sikeres volt';
$_['text_capture_ok_order']			 = 'A zárolás sikeres volt, a rendelés állapota sikerre frissítve - kiegyenlítve';
$_['text_refund_ok']				 = 'A visszatérítés sikeres volt';
$_['text_refund_ok_order']			 = 'A visszatérítés sikeres volt, a rendelés állapota visszatérítettre frissítve';
$_['text_void_ok']					 = 'A törlés sikeres volt, a rendelés állapota töröltként frissítve';
$_['text_settle_auto']				 = 'Eladás';
$_['text_settle_delayed']			 = 'Előzetes jóváhagyás';
$_['text_mastercard']				 = 'Mastercard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Fizetési információ';
$_['text_capture_status']			 = 'Fizetés zárolva';
$_['text_void_status']				 = 'Fizetés törölve';
$_['text_refund_status']			 = 'Fizetés visszatérítve';
$_['text_order_ref']				 = 'Rendelés hivatkozás';
$_['text_order_total']				 = 'Teljes jóváhagyott összeg';
$_['text_total_captured']			 = 'Teljes zárolt összeg';
$_['text_transactions']				 = 'Tranzakciók';
$_['text_column_amount']			 = 'Összeg';
$_['text_column_type']				 = 'Típus';
$_['text_column_date_added']		 = 'Hozzáadás dátuma';
$_['text_confirm_void']				 = 'Biztosan törölni szeretné a fizetést?';
$_['text_confirm_capture']			 = 'Biztosan zárolni szeretné a fizetést?';
$_['text_confirm_refund']			 = 'Biztosan visszatéríti a fizetést?';
$_['text_void']                      = 'Törlés';
$_['text_payment']                   = 'Fizetés';
$_['text_refund']                    = "Visszatérítés";

// Entry
$_['entry_certificate_path']		 = 'Tanúsítvány elérési út';
$_['entry_certificate_key_path']	 = 'Privát kulcs elérési út';
$_['entry_certificate_key_pw']		 = 'Privát kulcs jelszó';
$_['entry_certificate_ca_path']		 = 'CA elérési út';
$_['entry_merchant_id']				 = 'Üzlet azonosító';
$_['entry_user_id']					 = 'Felhasználói azonosító';
$_['entry_password']				 = 'Jelszó';
$_['entry_total']					 = 'Teljes összeg';
$_['entry_sort_order']				 = 'Sorrend';
$_['entry_geo_zone']				 = 'Adózóna';
$_['entry_status']					 = 'Állapot';
$_['entry_debug']					 = 'Hibakeresés naplózása';
$_['entry_auto_settle']				 = 'Elszámolás típusa';
$_['entry_status_success_settled']	 = 'Siker - kiegyenlítve';
$_['entry_status_success_unsettled'] = 'Siker - nem kiegyenlítve';
$_['entry_status_decline']			 = 'Elutasítva';
$_['entry_status_void']				 = 'Sztornózva';
$_['entry_status_refund']			 = 'Visszatérítve';
$_['entry_enable_card_store']		 = 'Kártyaadatok tárolásának engedélyezése';
$_['entry_cards_accepted']			 = 'Elfogadott kártyatípusok';

// Help
$_['help_total']					 = 'Az a rendelési összeg, amelyet el kell érnie a rendelésnek ahhoz, hogy ez a fizetési mód aktív legyen.';
$_['help_certificate']				 = 'A tanúsítványokat és privát kulcsokat a nyilvános webmappákon kívül kell tárolni';
$_['help_card_select']				 = 'Kérje meg a felhasználót, hogy válassza ki a kártyatípusát, mielőtt átirányítják';
$_['help_notification']				 = 'Ezt az URL-t kell megadnia a First Data számára, hogy fizetési értesítéseket kapjon';
$_['help_debug']					 = 'A hibakeresés engedélyezése érzékeny adatokat írhat egy naplófájlba. Csak utasításra engedélyezze.';
$_['help_settle']					 = 'Előzetes jóváhagyás esetén 3-5 napon belül végre kell hajtania egy utólagos jóváhagyást, különben a tranzakciója elutasításra kerül';

// Tab
$_['tab_account']					 = 'API információk';
$_['tab_order_status']				 = 'Rendelés állapot';
$_['tab_payment']					 = 'Fizetési beállítások';

// Button
$_['button_capture']				 = 'Terhelés';
$_['button_refund']					 = 'Visszatérítés';
$_['button_void']					 = 'Sztornó';

// Error
$_['error_merchant_id']				 = 'Üzlet azonosító szükséges';
$_['error_user_id']					 = 'Felhasználói azonosító szükséges';
$_['error_password']				 = 'Jelszó szükséges';
$_['error_certificate']				 = 'Tanúsítvány elérési út szükséges';
$_['error_key']						 = 'Tanúsítvány kulcs szükséges';
$_['error_key_pw']					 = 'Tanúsítvány kulcs jelszó szükséges';
$_['error_ca']						 = 'Tanúsítvány Hatóság (CA) szükséges';
