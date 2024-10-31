<?php
// Text
$_['text_new_card']                                    = '+ Új kártya hozzáadása';
$_['text_loading']                                     = 'Betöltés... Kérem, várjon...';
$_['text_card_details']                                = 'Kártya részletei';
$_['text_saved_card']                                  = 'Mentett kártya használata:';
$_['text_card_ends_in']                                = 'Fizessen a meglévő %s kártyával, amely a XXXX XXXX XXXX %s végződik';
$_['text_card_number']                                 = 'Kártyaszám:';
$_['text_card_expiry']                                 = 'Kártya lejárati dátuma (HH/YY):';
$_['text_card_cvc']                                    = 'Kártya biztonsági kód (CVC):';
$_['text_card_zip']                                    = 'Kártya irányítószám:';
$_['text_card_save']                                   = 'Kártya mentése a jövőbeli használatra?';
$_['text_trial']                                       = '%s minden %s %s időszakonként %s fizetésig, majd ';
$_['text_recurring']                                   = '%s minden %s %s időszakonként';
$_['text_length']                                      = ' összesen %s kifizetésért';
$_['text_cron_subject']                                = 'Square CRON feladat összefoglaló';
$_['text_cron_message']                                = 'Itt található a Square bővítmény által végrehajtott összes CRON feladat listája:';
$_['text_squareup_profile_suspended']                  = 'A rendszeres kifizetései felfüggesztésre kerültek. Kérjük, lépjen velünk kapcsolatba a további részletekért.';
$_['text_squareup_trial_expired']                      = 'A próbaidőszaka lejárt.';
$_['text_squareup_recurring_expired']                  = 'A rendszeres kifizetései lejártak. Ez volt az utolsó kifizetése.';
$_['text_cron_summary_token_heading']                  = 'Hozzáférési token frissítése:';
$_['text_cron_summary_token_updated']                  = 'A hozzáférési token sikeresen frissítve!';
$_['text_cron_summary_error_heading']                  = 'Tranzakciós hibák:';
$_['text_cron_summary_fail_heading']                   = 'Sikertelen tranzakciók (profilok felfüggesztve):';
$_['text_cron_summary_success_heading']                = 'Sikeres tranzakciók:';
$_['text_cron_fail_charge']                            = 'A <strong>#%s</strong> profil nem tudott terhelést kapni <strong>%s</strong> összeggel';
$_['text_cron_success_charge']                         = 'A <strong>#%s</strong> profil terhelve lett <strong>%s</strong> összeggel';
$_['text_card_placeholder']                            = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                                         = 'CVV';
$_['text_expiry']                                      = 'HH/YY';
$_['text_default_squareup_name']                       = 'Hitelkártya / Bankkártya';
$_['text_token_issue_customer_error']                  = 'Technikai hiba lépett fel a fizetési rendszerünkben. Kérjük, próbálja meg később.';
$_['text_token_revoked_subject']                       = 'A Square hozzáférési tokenje visszavonásra került!';
$_['text_token_revoked_message']                       = "A Square fizetési bővítmény hozzáférése az Ön Square fiókjához a Square irányítópulton keresztül visszavonásra került. Kérjük, ellenőrizze az alkalmazás hitelesítő adatait a bővítmény beállításaiban, és csatlakozzon újra.";
$_['text_token_expired_subject']                       = 'A Square hozzáférési tokenje lejárt!';
$_['text_token_expired_message']                       = "A Square fizetési bővítmény hozzáférési tokenje, amely összeköti a Square fiókjával, lejárt. Kérjük, ellenőrizze az alkalmazás hitelesítő adatait és a CRON feladatot a bővítmény beállításaiban, és csatlakozzon újra.";

// Error
$_['error_browser_not_supported']                      = 'Figyelmeztetés: A fizetési rendszer már nem támogatja a böngészőjét. Kérjük, frissítse, vagy használjon egy másikat.';
$_['error_card_invalid']                               = 'Figyelmeztetés: A kártya érvénytelen!';
$_['error_squareup_cron_token']                        = 'Figyelmeztetés: A hozzáférési token nem tudott frissülni. Kérjük, csatlakoztassa a Square Payment bővítményt az OpenCart admin panelen keresztül.';

// Warning
$_['warning_test_mode']                                = 'Figyelmeztetés: A Sandbox mód engedélyezve van! A tranzakciók látszólag sikeresek lesznek, de nem lesznek terhelések végrehajtva.';

// Statuses
$_['squareup_status_comment_authorized']               = 'A kártyatranzakciót engedélyezték, de még nem rögzítették.';
$_['squareup_status_comment_captured']                 = 'A kártyatranzakciót engedélyezték, és ezt követően rögzítették (azaz, teljesítették).';
$_['squareup_status_comment_voided']                   = 'A kártyatranzakciót engedélyezték, és ezt követően érvénytelenítették (azaz, törölték).';
$_['squareup_status_comment_failed']                   = 'A kártyatranzakció meghiúsult.';

// Override errors
$_['squareup_override_error_billing_address.country']  = 'A fizetési cím országa érvénytelen. Kérjük, módosítsa, és próbálja újra.';
$_['squareup_override_error_shipping_address.country'] = 'A szállítási cím országa érvénytelen. Kérjük, módosítsa, és próbálja újra.';
$_['squareup_override_error_email_address']            = 'Az ügyfél e-mail címe érvénytelen. Kérjük, módosítsa, és próbálja újra.';
$_['squareup_override_error_phone_number']             = 'Az ügyfél telefonszáma érvénytelen. Kérjük, módosítsa, és próbálja újra.';
$_['squareup_error_field']                             = ' Mező: %s';