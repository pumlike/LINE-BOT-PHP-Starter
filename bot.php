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
			if($text=="บัญชี")
			{
				$replytext="บช.ท้าวหมวย

รสสุคณธ์ ผนึกโชคลาภ
กสิกรไทย
0102206144

ไทยพานิช
1512359894
";
			}
			if($text=="บช")
			{
				$replytext="บช.ท้าวหมวย

รสสุคณธ์ ผนึกโชคลาภ
กสิกรไทย
0102206144

ไทยพานิช
1512359894";
			}
			if($text=="เรท")
			{
				$replytext="วงที่ 98/59
กล้อง Cannon
EOS KissX7(100D)+18-55STM
รับเป็นเงิน 14,000
เล่น 16 มือ
ราย 7-10 วัน
ค่าส่งคิดตามจิง
ดูแล 150 จ่ายงวดแรกครั่งเดว

1.ท้าว
2.1,300 กุ๊กไก่
3.1,300 พี่ดาว
4.1,250 พี่แทงค์
5.1,250
6.1,200
7.1,200
8.1,100
9.1,100
10.1,000
11.1,000
12.900
13.850 พี่แอ้
14.850 มู๋อ้อม
15.800 พี่แทงค์
16.750 พี่แทงค์

บช.ท้าวหมวย

รสสุคณธ์ ผนึกโชคลาภ
กสิกรไทย
0102206144

ไทยพานิช
1512359894
--------อัพเดท--------

มือต้นคัดคนลง
คนใหม่ คนเคย ปวส.ลง 12-16 เท่านั่น
ยกเลิกจองปรับ 1,000
ข้ามวันปรับวันละ 1,000
ค้างยอด 2 วัน "ยึด" อย่างเดว
อ่านกฏในโน้ตก่อนลง ถ้าไม่เข้าไปอ่านแล้วลง ถือว่ายอมรับกฏทุกข้อ อย่างไม่มีเงื่อนไข";
			}
			if($text=="อ่าน")
			{
				$replytext="มือต้นคัดคนลง
คนใหม่ คนเคย ปวส.ลง 12-16 เท่านั่น
ยกเลิกจองปรับ 1,000
ข้ามวันปรับวันละ 1,000
ค้างยอด 2 วัน "ยึด" อย่างเดว
อ่านกฏในโน้ตก่อนลง ถ้าไม่เข้าไปอ่านแล้วลง ถือว่ายอมรับกฏทุกข้อ อย่างไม่มีเงื่อนไข";
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
