<?php
// Heading
$_['heading_title']                  = 'First Data EMEA Connect (3D Secure engedélyezve)';

// Text
$_['text_extension']                 = 'Bővítmények';
$_['text_success']                   = 'Siker: A First Data fiók adatai módosítva!';
$_['text_edit']                      = 'First Data EMEA Connect (3D Secure engedélyezve) szerkesztése';
$_['text_notification_url']          = 'Értesítési URL';
$_['text_live']                      = 'Éles';
$_['text_demo']                      = 'Demó';
$_['text_enabled']                   = 'Engedélyezve';
$_['text_merchant_id']               = 'Áruház-azonosító';
$_['text_secret']                    = 'Megosztott titok';
$_['text_capture_ok']                = 'A terhelés (capture) sikeres volt';
$_['text_capture_ok_order']          = 'A terhelés sikeres volt, a rendelés állapota „Sikeres - rendezve”-re frissítve';
$_['text_void_ok']                   = 'A sztornó sikeres volt, a rendelés állapota „Sztornózva”-ra frissítve';
$_['text_settle_auto']               = 'Azonnali terhelés (Sale)';
$_['text_settle_delayed']            = 'Előengedélyezés (Pre-auth)';
$_['text_success_void']              = 'A tranzakció sztornózva lett';
$_['text_success_capture']           = 'A tranzakció terhelve lett';
$_['text_firstdata']                 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment_info']              = 'Fizetési információk';
$_['text_capture_status']            = 'Fizetés terhelve';
$_['text_void_status']               = 'Fizetés sztornózva';
$_['text_order_ref']                 = 'Rendelési hivatkozás';
$_['text_order_total']               = 'Jóváhagyott összeg';
$_['text_total_captured']            = 'Terhelt összeg';
$_['text_transactions']              = 'Tranzakciók';
$_['text_column_amount']             = 'Összeg';
$_['text_column_type']               = 'Típus';
$_['text_column_date_added']         = 'Létrehozva';
$_['text_confirm_void']              = 'Biztosan sztornózza a fizetést?';
$_['text_confirm_capture']           = 'Biztosan terheli a fizetést?';

// Entry
$_['entry_merchant_id']              = 'Áruház-azonosító';
$_['entry_secret']                   = 'Megosztott titok';
$_['entry_total']                    = 'Teljes összeg';
$_['entry_sort_order']               = 'Sorrend';
$_['entry_geo_zone']                 = 'Adózóna';
$_['entry_status']                   = 'Állapot';
$_['entry_debug']                    = 'Hibakeresés naplózása';
$_['entry_live_demo']                = 'Éles / Demó';
$_['entry_auto_settle']              = 'Elszámolás típusa';
$_['entry_card_select']              = 'Kártya kiválasztása';
$_['entry_tss_check']                = 'TSS-ellenőrzések';
$_['entry_live_url']                 = 'Éles kapcsolat URL-je';
$_['entry_demo_url']                 = 'Demó kapcsolat URL-je';
$_['entry_status_success_settled']   = 'Sikeres - rendezve';
$_['entry_status_success_unsettled'] = 'Sikeres - nincs rendezve';
$_['entry_status_decline']           = 'Elutasítva';
$_['entry_status_void']              = 'Sztornózva';
$_['entry_enable_card_store']        = 'Kártyatárolási tokenek engedélyezése';

// Help
$_['help_total']                     = 'Az a rendelési összeg, amelyet el kell érni, mielőtt ez a fizetési mód aktívvá válik.';
$_['help_notification']              = 'Ezt az URL-t meg kell adnia a First Data számára a fizetési értesítésekhez.';
$_['help_debug']                     = 'A hibakeresés engedélyezése érzékeny adatokat ír egy naplófájlba. Mindig tiltsa le, hacsak másképp nem utasítják.';
$_['help_settle']                    = 'Ha előengedélyezést használ, 3-5 napon belül végre kell hajtania az utóengedélyezést (post-auth), különben a tranzakció elutasításra kerül.';

// Tab
$_['tab_account']                    = 'API-információ';
$_['tab_order_status']               = 'Rendelés állapota';
$_['tab_payment']                    = 'Fizetési beállítások';
$_['tab_advanced']                   = 'Speciális';

// Button
$_['button_capture']                 = 'Terhelés';
$_['button_void']                    = 'Sztornó';

// Error
$_['error_merchant_id']              = 'Az Áruház-azonosító megadása kötelező.';
$_['error_secret']                   = 'A megosztott titok megadása kötelező.';
$_['error_live_url']                 = 'Az éles URL megadása kötelező.';
$_['error_demo_url']                 = 'A demó URL megadása kötelező.';
$_['error_data_missing']             = 'Hiányzó adatok.';
$_['error_void_error']               = 'A tranzakció sztornózása nem sikerült.';
$_['error_capture_error']            = 'A tranzakció terhelése nem sikerült.';
