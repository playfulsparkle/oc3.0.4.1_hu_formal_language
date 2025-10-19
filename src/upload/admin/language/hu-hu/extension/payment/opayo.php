<?php
// Heading
$_['heading_title']		 				= 'Opayo';

// Text
$_['text_opayo']	  					= '<img src="view/image/payment/opayo.png" alt="Opayo" title="Opayo" />';
$_['text_extensions']     				= 'Bővítmények';
$_['text_edit']          				= 'Opayo Módosítása';
$_['text_tab_general']				 	= 'Általános';
$_['text_tab_cron']						= 'Cron';
$_['text_test']				  			= 'Teszt';
$_['text_live']				  			= 'Élő';
$_['text_defered']			  			= 'Halasztott';
$_['text_authenticate']		  			= 'Hitelesítés';
$_['text_payment']		  				= 'Fizetés';
$_['text_payment_info']		  			= 'Fizetési információ';
$_['text_release_status']	  			= 'Fizetés jóváhagyva';
$_['text_void_status']		 			= 'Fizetés érvénytelenítve';
$_['text_rebate_status']	  			= 'Fizetés visszatérítve';
$_['text_order_ref']		  			= 'Rendelés hivatkozás';
$_['text_order_total']		  			= 'Összesített engedélyezett összeg';
$_['text_total_released']	  			= 'Összesített jóváhagyott összeg';
$_['text_transactions']		  			= 'Tranzakciók';
$_['text_column_amount']	  			= 'Összeg';
$_['text_column_type']		  			= 'Típus';
$_['text_column_date_added']  			= 'Hozzáadás dátuma';
$_['text_confirm_void']		  			= 'Biztos benne, hogy érvényteleníteni szeretné a fizetést?';
$_['text_confirm_release']	  			= 'Biztos benne, hogy jóvá szeretné hagyni a fizetést?';
$_['text_confirm_rebate']	  			= 'Biztos benne, hogy visszatérítést szeretne kérni a fizetéssel kapcsolatban?';

// Entry
$_['entry_vendor']			  			= 'Kereskedő';
$_['entry_environment']			  		= 'Környezet';
$_['entry_transaction_method']		  	= 'Tranzakciós Módszer';
$_['entry_total']             			= 'Teljes összeg';
$_['entry_order_status']	  			= 'Rendelés állapot';
$_['entry_geo_zone']		  			= 'Adózóna';
$_['entry_status']			  			= 'Állapot';
$_['entry_sort_order']		  			= 'Sorrend';
$_['entry_debug']			  			= 'Hibaellenőrzés';
$_['entry_card_save']			  		= 'Kártyák Mentése';
$_['entry_cron_token']	  				= 'Titkos Token';
$_['entry_cron_url']	  				= 'Cron feladat URL-je';
$_['entry_cron_last_run']	 			= 'Legutolsó futtatás ideje:';

// Help
$_['help_total']			  			= 'A végösszeg, amelyet a rendelésnek el kell érnie, mielőtt ez a fizetési mód aktívvá válik.';
$_['help_debug']			  			= 'A hibaellenőrzés engedélyezése érzékeny adatok naplófájlba történő írását eredményezi. Mindig tiltsa le, hacsak másképp nem utasítják.';
$_['help_transaction_method']  			= 'A tranzakciós módszert kötelezően „Fizetés”-re kell állítani a rendszeres kifizetések engedélyezéséhez.';
$_['help_card_save']			  		= 'Ahhoz, hogy a vásárló menteni tudja a kártya adatait a későbbi kifizetésekhez, a MID TOKEN-nek aktiválva kell lennie. Lépjen kapcsolatba az Opayo ügyfélszolgálatával a token rendszer aktiválásának megvitatásához.';
$_['help_cron_token']	  				= 'Ez legyen hosszú és nehezen kitalálható.';
$_['help_cron_url']		  				= 'Állítson be egy cront, hogy ezt az URL-t hívja meg.';

// Button
$_['button_release']		  			= 'Jóváhagyás';
$_['button_rebate']			  			= 'Jóváírás / visszatérítés';
$_['button_void']			  			= 'Sztornó';
$_['button_enable_recurring']			= 'Ismétlődő Kifizetések Engedélyezése';
$_['button_disable_recurring']			= 'Ismétlődő Kifizetések Letiltása';

// Success
$_['success_save']		 				= 'Siker: Az Opayo sikeresen módosítva lett!';
$_['success_release_ok']		  		= 'Siker: A jóváhagyás sikeres volt!';
$_['success_release_ok_order']	  		= 'Siker: A jóváhagyás sikeres volt, a rendelés állapota sikeres - rendezett!';
$_['success_rebate_ok']		  			= 'Siker: A visszatérítés sikeres volt!';
$_['success_rebate_ok_order']	  		= 'Siker: A visszatérítés sikeres volt, a rendelés állapota visszatérített!';
$_['success_void_ok']			  		= 'Siker: Az sztornózás sikeres volt, a rendelés állapota érvénytelenítve!';
$_['success_enable_recurring']			= 'Siker: Az ismétlődő kifizetés engedélyezve lett!';
$_['success_disable_recurring']			= 'Siker: Az ismétlődő kifizetés letiltva lett!';

// Error
$_['error_warning']                     = 'Figyelmeztetés: Kérjük, ellenőrizze, és javítsa a hibákat az űrlapon!';
$_['error_permission']		  			= 'Figyelmeztetés: Nincs jogosultsága az Opayo módosításához!';
$_['error_vendor']			  			= 'Kereskedő Azonosító kötelező!';
