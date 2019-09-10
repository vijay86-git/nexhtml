@extends('front.layout.blog')

@section('content')

<p><code>Firebase Cloud Messaging (FCM)</code> is a new <code>cloud messaging services</code> to send push notifications to Android, iOS and Web applications. It is the newer version of GCM (google cloud messaging) with more features.</p>
<p class="text-center"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><br />
<!-- Ad 4 --><br />
<ins class="adsbygoogle" style="display: inline-block; width: 300px; height: 250px;" data-ad-client="ca-pub-9716398444039739" data-ad-slot="4680411731"></ins><br />
<script>
   (adsbygoogle = window.adsbygoogle || []).push({});
</script></p>
<p>To send notifications, we basically required two things:</p>
<ul>
<li>Authorization key</li>
<li>Device Token</li>
</ul>
<p>We can get Authorization key (API_ACCESS_KEY) available in <code>Firebase Console -> Project Settings -> Cloud Messaging -> Server key</code>, and <code>device token</code> we can get at the time of registering or logging by the android or ios users through API.</p>
<p>Simple steps to register your app under FCM</p>
<ul>
<li>Go to the Firebase console <a href='https://console.firebase.google.com' target='_blank'><code>https://console.firebase.google.com</code></a> (Login using Google account)</li>
<li>Create a new project</li>
<li>Click on &#8220;Add Firebase to your iOS app&#8221; Or &#8220;Add Firebase to your Android app&#8221; button and Register Your App.</li>
</ul>
<p>To send push notifications, use below PHP script.</p>
<p>Create <code>PushNotifications.php</code> file</p>
<pre class="brush: php; title: ; notranslate" title="">

class PushNotifications {

private static $URL  = &quot;https://fcm.googleapis.com/fcm/send&quot;;  //API URL of FCM

private static $API_ACCESS_KEY = 'AAAApRMIM9I:APA91bHd7N...........Taq'; // YOUR_FIREBASE_API_KEY

public function __construct() {

}

public static function sendPushNotification($token = &quot;&quot;, $fields = array())
 {
            $registrationIds = array();
            
            array_push($registrationIds, $token);

            $msg     = array('body' =&gt; $fields['body'], 'title'	=&gt; $fields['title']);

            $fields  = array('registration_ids' =&gt; $registrationIds, 'notification' =&gt; $msg);

            $headers = array('Authorization: key=' . self::$API_ACCESS_KEY, 'Content-Type: application/json');

            #Send Reponse To FireBase Server	
            $ch = curl_init(); 
            curl_setopt($ch,CURLOPT_URL, self::$URL);
            curl_setopt($ch,CURLOPT_POST, true);
            curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
 }
 
//include PushNotifications.php file and call sendPushNotification method on your page

require_once 'PushNotifications.php';
$device_token    =  &quot;eIWdeiXnVW4:APA1FMWhLK60.......TdM6IyaYJzdo&quot;;
$fields          =  [&quot;title&quot; =&gt; &quot;message title&quot;, &quot;body&quot; =&gt; &quot;message text&quot;];
$response        =  PushNotifications::sendPushNotification($device_token, $fields);
print_r($response);	 
</pre>
<p>That’s it!. Please share your thoughts or suggestions in the comments below.</p>

@stop