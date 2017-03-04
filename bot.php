<?php
$access_token = 'H3jDgEfk4taWsGJy9HWNdTEUAasU0mdDs3gIOkicm+MYSV5rmvo0VJ5t2bCgGCCFBQj8e1udXaHcxVJkX65GLHw63CxttUHznZZYES7nbo10YJmtvGW44f3jZX1Odx/gnX6GL82FFbxO9ScFydwUQwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) 
{
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') 
		{
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			if($text=="Hello")
			{
				$replytext="สวัสดี";
			}
			if($text=="ดีจร๊")
			{
				$replytext="สวัสดี";
			}
			if($text=="พี่แทงค์")
			{
				$replytext="เรียกพี่แทงค์สุดหล่อหรอ";
			}
			if($text=="ท้าว")
			{
				$replytext="เรียกท้าวทามไมจร๊ ท้าวกำลังกินอยู่";
			}
			if($text=="หิว")
			{
				$replytext="ก็ไปหาอะไรแดกสิ บ่นทำไม";
			}
			if($text=="ดีครับ")
			{
				$replytext="วางไว้ตรงนั้นแหละ";
			}
			if($text=="แชร์")
			{
				$replytext="มาลงแชร์กันเร็ว ท้าวรออยู่จร๊";
			}
			if($text=="ทำงาน")
			{
				$replytext="มีงานให้ทำให้หรา";
			}
			if($text=="บอท")
			{
				$replytext="เรียกหาพ่อง มึงหรา";
			}
			if($text=="เล่นแชร์")
			{
				$replytext="เชิญจร้า";
			}
			if($text=="ดีจร้า")
			{
				$replytext="กองไว้ตรงนั้นแหละ 555";
			}
			if($text=="รออยู่")
			{
				$replytext="ชาติหน้านะ";
			}
			if($text=="ตีน")
			{
				$replytext="ส้นตีนหรา";
			}
			if($text=="บ้า")
			{
				$replytext="ถึงบ้านก็รัก";
			}
			if($text=="ผี")
			{
				$replytext="ผีพ่องมึงดิ";
			}
			if($text=="กำ")
			{
				$replytext="กำไปไหน จร๊";
			}
			if($text=="หมวย")
			{
				$replytext="เรียกท้าวหมวยทำไมจร๊";
			}
			if($text=="ไม่มี")
			{
				$replytext="จร๊ ไม่มีจริงหรอ";
			}
			if($text=="นอน")
			{
				$replytext="นอนตายไปเลย";
			}
			if($text=="นอนล่ะ")
			{
				$replytext="ก็ไปนอนสิ ใครห้ามล่ะ";
			}
			if($text=="พูดมาก")
			{
				$replytext="ก็มีปาก อ่า ก็ต้องพุด";
			}
			if($text=="บอทเหี้ย")
			{
				$replytext="คนด่าเหี้ยกว่า";
			}
			if($text=="บอทน่ารัก")
			{
				$replytext="จริงหรา อิอิ เขิลแปป";
			}
			if($text=="คุยกะบอท")
			{
				$replytext="จร๊  พิมมาเลย";
			}
			if($text=="เซ่ง")
			{
				$replytext="ก็ไปเที่ยวดิ มาบ่นไรในนี้";
			}
			if($text=="ปวดขี้")
			{
				$replytext="ไปขี้ดิ รอไร";
			}
			if($text=="พูดมาก")
			{
				$replytext="ใครพูดมาก จร๊ บอกหน่อย 555";
			}
			if($text=="5")
			{
				$replytext="555";
			}
			if($text=="55")
			{
				$replytext="555";
			}
			if($text=="555")
			{
				$replytext="555 หัวเราะไรจะ บอกหน่อย อ่านไม่ทัน";
			}
			if($text=="ยุ้ง")
			{
				$replytext="จร๊ บอทยุ้ง";
			}
			if($text=="ตาย")
			{
				$replytext="เชิญเลย 555";
			}
			if($text=="พ่อตาย")
			{
				$replytext="เออ พ่องกูตาย พอใจป๊ะ";
			}
			if($text=="ตายห่า")
			{
				$replytext="ห่าหาพ่อมึงหรอ";
			}
			if($text=="ควย")
			{
				$replytext="ไหนควย  มีเยอะหรอ";
			}
			if($text=="นรก")
			{
				$replytext="เคยไปมาหรอ";
			}
			if($text=="จะบ้าตาย")
			{
				$replytext="อยากตายหรา เดะสงเคราะห์ให้";
			}
			if($text=="บอทเหี้ย")
			{
				$replytext="มึงเหี้ยกว่า";
			}
			if($text=="บชกสิกร")
			{
				$replytext="รสสุคณธ์ ผนึกโชคลาภ
กสิกรไทย
0102206144";
			}
			if($text=="บชไทยพานิช")
			{
				$replytext="รสสุคณธ์ ผนึกโชคลาภ
ไทยพานิช
1512359894";
			}
			if($text=="เช็คอิน")
			{
				$replytext="SetLastPoint";
			}
			if($text=="ใครอ่าน")
			{
				$replytext="Viewlastseen";
			}
			if($text=="สถานะ")
			{
				$replytext="set:status";
			}
			if($text=="สัส")
			{
				$replytext="มึงดิสัส";
			}
			if($text=="ส้นติีน")
			{
				$replytext="แม่มึงหรอ";
			}
			if($text=="บอท")
			{
				$replytext="กูจะนอน";
			}
			if($text=="5555")
			{
				$replytext="หัวเราะหาพ่องมึงหรา";
			}
			if($text=="55555")
			{
				$replytext="ไม่เคยหัวเราะหรอ";
			}
			if($text=="เบื่อ")
			{
				$replytext="เออดี";
			}
			if($text=="นอนล่ะ")
			{
				$replytext="ไปตายที่ไหนก็เชิญ";
			}
			if($text=="หมวย")
			{
				$replytext="เรียกแม่หนูทามไม";
			}
			if($text=="อ้าว")
			{
				$replytext="อ้าวเห้อไม่เหมือนที่คุยกันไว้นี้หว่า";
			}
			if($text=="บาย")
			{
				$replytext="ไปตายที่ไหนก็ไป";
			}
			if($text=="มา")
			{
				$replytext="หื ไม่อ่า";
			}
			if($text=="พักผ่อน")
			{
				$replytext="เชิญ";
			}
			if($text=="เหนื่อย")
			{
				$replytext="กูก็เหนื่อย เพราะมึงแหละ";
			}
			if($text=="ดี")
			{
				$replytext="ดีไรเมิงว่ะ";
			}
			if($text=="ผัว")
			{
				$replytext="ผัวพ่องมึงดิ";
			}
			if($text=="เมีย")
			{
				$replytext="เมียแม่มึงหรอ";
			}
			if($text=="เออ")
			{
				$replytext="พูดจาให้เพราะๆหน่อยได้มะ สัส";
			}
			if($text=="ส้นตีน")
			{
				$replytext="แล้วไง";
			}
			if($text=="หนานอาร์ม")
			{
				$replytext="เรียกกระเทยทามไม";
			}
			if($text=="อ้อม")
			{
				$replytext="เรียกพท้าวอ้อมไมค่ะ";
			}
			if($text=="แล้วไง")
			{
				$replytext="ล่ะไงอ่า";
			}
			if($text=="หนิง")
			{
				$replytext="เลขา กำลังเลียขาอยู่ค่ะ คิคิ เรียกไม";
			}
			if($text=="กำ")
			{
				$replytext="กำไร ปล่อยว่างมั้งนะ บอทว่า";
			}
			if($text=="จัด")
			{
				$replytext="จัดหัว พ่อมึงดิ";
			}
			if($text=="ลำคาญ")
			{
				$replytext="แล้วไง";
			}
			if($text=="ปาบ")
			{
				$replytext="แม่พระ...";
			}
			if($text=="เหี้ยว่ะ")
			{
				$replytext="มึงอะเหี้ย";
			}
			if($text=="อ้าย")
			{
				$replytext="เรียกใครจร๊";
			}
			if($text=="เอ็ม")
			{
				$replytext="เรียกเสี่ยเอ็มไมจร๊....";
			}
			if($text=="กวนคีน")
			{
				$replytext="แล้วไงจร๊.....";
			}
			if($text=="เยอะ")
			{
				$replytext="เมิงดิเยอะ สัส";
			}
			if($text=="ควยใหญ่มาก")
			{
				$replytext="รู้ได้ไง ว่าบอทควยใหญ่";
			}
			if($text=="หำ")
			{
				$replytext="หำพ่องมึงดิ สัส";
			}
			if($text=="หัวดอ")
			{
				$replytext="หัวดอ นี้หัวไรอ่ะ";
			}
			if($text=="หมา")
			{
				$replytext="ใครหมา  สาดดด  พูดดีดี.";
			}
			
			if($text=="แอดมิน")
			{
				$replytext="Siriv9:グル作成者";
			}			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $replytext
			];
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
		}
	}
}
echo "OK";
