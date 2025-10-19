<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Beállítások';
$_['tab_order_status']              = 'Rendelés állapot';

// Text
$_['text_extension']                = 'Bővítmények';
$_['text_success']                  = 'Siker: A CardConnect fizetési modul sikeresen módosítva lett!';
$_['text_edit']                     = 'CardConnect szerkesztése';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank" rel="external noopener noreferrer"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Fizetés';
$_['text_refund']                   = 'Visszatérítés';
$_['text_authorize']                = 'Engedélyezés';
$_['text_live']                     = 'Élő';
$_['text_test']                     = 'Teszt';
$_['text_no_cron_time']             = 'A cron még nem lett végrehajtva';
$_['text_payment_info']             = 'Fizetési információ';
$_['text_payment_method']           = 'Fizetési mód';
$_['text_card']                     = 'Kártya';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Hivatkozás';
$_['text_update']                   = 'Frissítés';
$_['text_order_total']              = 'Rendelés összesen';
$_['text_total_captured']           = 'Összesen rögzített';
$_['text_capture_payment']          = 'Fizetés rögzítése';
$_['text_refund_payment']           = 'Fizetés visszatérítése';
$_['text_void']                     = 'Sztornózás';
$_['text_transactions']             = 'Tranzakciók';
$_['text_column_type']              = 'Típus';
$_['text_column_reference']         = 'Hivatkozás';
$_['text_column_amount']            = 'Összeg';
$_['text_column_status']            = 'Állapot';
$_['text_column_date_modified']     = 'Módosítás dátuma';
$_['text_column_date_added']        = 'Hozzáadás dátuma';
$_['text_column_update']            = 'Frissítés';
$_['text_column_void']              = 'Sztornózás';
$_['text_confirm_capture']          = 'Biztosan rögzíteni szeretné a fizetést?';
$_['text_confirm_refund']           = 'Biztosan vissza szeretné téríteni a fizetést?';
$_['text_inquire_success']          = 'Lekérdezés sikeres volt';
$_['text_capture_success']          = 'A rögzítési kérés sikeres volt';
$_['text_refund_success']           = 'A visszatérítési kérés sikeres volt';
$_['text_void_success']             = 'Az sztornózási kérés sikeres volt';

// Entry
$_['entry_merchant_id']             = 'Kereskedői azonosító';
$_['entry_api_username']            = 'API Felhasználónév';
$_['entry_api_password']            = 'API Jelszó';
$_['entry_token']                   = 'Titkos token';
$_['entry_transaction']             = 'Tranzakció';
$_['entry_environment']             = 'Környezet';
$_['entry_site']                    = 'Webhely';
$_['entry_store_cards']             = 'Kártyák tárolása';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Teljes összeg';
$_['entry_geo_zone']                = 'Adózóna';
$_['entry_status']                  = 'Állapot';
$_['entry_logging']                 = 'Hibaüzenetek naplózása';
$_['entry_sort_order']              = 'Sorrend';
$_['entry_cron_url']                = 'Cron feladat URL-je';
$_['entry_cron_time']               = 'Cron feladat utolsó futása';
$_['entry_order_status_pending']    = 'Függőben';
$_['entry_order_status_processing'] = 'Feldolgozás alatt';

// Help
$_['help_merchant_id']              = 'Az Ön személyes CardConnect fiókjának kereskedői azonosítója.';
$_['help_api_username']             = 'Az API-hoz való hozzáféréshez szükséges felhasználónév.';
$_['help_api_password']             = 'Az API-hoz való hozzáféréshez szükséges jelszó.';
$_['help_token']                    = 'Adjon meg egy véletlenszerű tokent a biztonság érdekében, vagy használja a generált tokent.';
$_['help_transaction']              = 'Válassza a "Fizetés" lehetőséget a fizetés azonnali rögzítéséhez, vagy az "Engedélyezés" lehetőséget az engedélyezéshez.';
$_['help_site']                     = 'Ez határozza meg az API URL első részét. Csak akkor változtassa meg, ha utasítást kap.';
$_['help_store_cards']              = 'Ha szeretné tárolni a kártyákat tokenizálás segítségével.';
$_['help_echeck']                   = 'Ha szeretné lehetővé tenni az eCheck használatával történő fizetést.';
$_['help_total']                    = 'Az a rendelési összeg, amelyet a rendelésnek el kell érnie, mielőtt ez a fizetési mód aktívvá válik.';
$_['help_logging']                  = 'A hibakeresés engedélyezése érzékeny adatokat ír a naplófájlba. Mindig tiltsa le, hacsak másképp nem utasítják.';
$_['help_cron_url']                 = 'Állítson be egy cron feladatot ennek az URL-nek a meghívására, hogy a rendelések automatikusan frissüljenek. Olyan időpontra van tervezve, amikor a legutolsó rögzítés után néhány órával fut le.';
$_['help_cron_time']                = 'Ez az utolsó időpont, amikor a cron feladat URL-jét végrehajtották.';
$_['help_order_status_pending']     = 'A rendelés állapota, amikor a rendelést a kereskedőnek engedélyeznie kell.';
$_['help_order_status_processing']  = 'A rendelés állapota, amikor a rendelést automatikusan rögzítik.';

// Button
$_['button_inquire_all']            = 'Összes lekérdezése';
$_['button_capture']                = 'Terhelés';
$_['button_refund']                 = 'Visszatérítés';
$_['button_void_all']               = 'Összes sztornó';
$_['button_inquire']                = 'Lekérdezés';
$_['button_void']                   = 'Sztornó';

// Error
$_['error_permission']              = 'Figyelmeztetés: Nincs jogosultsága a CardConnect fizetés módosításához!';
$_['error_merchant_id']             = 'Kereskedői azonosító szükséges!';
$_['error_api_username']            = 'API Felhasználónév szükséges!';
$_['error_api_password']            = 'API Jelszó szükséges!';
$_['error_token']                   = 'Titkos token szükséges!';
$_['error_site']                    = 'Webhely szükséges!';
$_['error_amount_zero']             = 'Az összegnek nagyobbnak kell lennie, mint nulla!';
$_['error_no_order']                = 'Nincs megfelelő rendelési információ!';
$_['error_invalid_response']        = 'Érvénytelen válasz érkezett!';
$_['error_data_missing']            = 'Hiányzó adatok!';
$_['error_not_enabled']             = 'A modul nincs engedélyezve!';
