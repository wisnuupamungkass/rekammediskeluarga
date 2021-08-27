            	<?php

            	$id_firebase="eMMI-UGlXpQ:APA91bEbQorS-GbXXK3gijb8lxbjHEYQjUXaahYPWQ1PJSBgGkXEo5PKGUCncSpz3XTA7gF2te6NMwkZbVWfiFNijYVAzt3mlImCFqJ0xkitIsXtfWPyGBDuk25wn5KhuU7L7oBMbJwv";
            	$ch = curl_init("https://fcm.googleapis.com/fcm/send");
            	$id_firebase="dhLeS2V6Ios:APA91bHqEUzchPUuo9gGCgfJhEZ2hy2L5iTujjPte9bFX03AOuchMRvK2w8sgPNgfYaPOSOIWRBy39N0smTNv-I7NvZM8X9e80ODItSg-_nYY9zP7249i15oIInVv0kql5BkwcTH-NnH";
				$header=array('Content-Type: application/json',
				"Authorization: key=AAAAlotgyCk:APA91bHRQk9RdO7GJFwdJhoeSfcnljzcxco1xJ2R91NZHRtlXJrBggfmtgANT6Fxi6P9qzhSs7BIoT9STrscocCvcxP92x4dcZjCfvSGzKdr07--YLtyiaWKByG4HKghwFKSdyYvmO8b");
				curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
				curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );

				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"notification\": { \"title\": \"Pemberitahuan Imunisasi\",    \"text\": \"Pemberitahuan Status Imunisasi\"  },  \"to\" : \"".$id_firebase."\",    \"click_action\": \"berita\"}");

				curl_exec($ch);
				curl_close($ch);
				?>