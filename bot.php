<?php
$access_token = 'CD8J9hyzGd96dJizoCZemLrIQidvUe2i+QUPhAWYDgfQOlbpKjT6XKIHbNzX2pzxVdWpJ14QZApzZ59YGxpyU/ef0hr7IKSkoQRgya5z9/Gv3cnloZUXz4tB+4d6re7ZZlu/1kT5fMnEQ4nr09blpgdB04t89/1O/w1cDnyilFU=';

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
			
			// Build message to reply back
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
