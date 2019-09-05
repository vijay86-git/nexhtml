@extends('front.layout.blog')

@section('content')

<p>In this article, We’ll see how to encrypt a string and decrypt a encrypted string in php?</p>
<p class="text-center"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><br />
<!-- Ad 4 --><br />
<ins class="adsbygoogle" style="display: inline-block; width: 300px; height: 250px;" data-ad-client="ca-pub-9716398444039739" data-ad-slot="4680411731"></ins><br />
<script>
   (adsbygoogle = window.adsbygoogle || []).push({});
</script></p>
<pre class="brush: php; title: ; notranslate" title="">
  function encrypt_decrypt($string, $action = 'encrypt') 
      {
          // you may change these values to your own
          $secret_key = 'my_secret_key'; 
          $secret_iv  = 'my_secret_iv';

          $output         = FALSE;
          $encrypt_method = &quot;AES-256-CBC&quot;;
          $key            = hash('sha256', $secret_key);
          $iv             = substr(hash('sha256', $secret_iv), 0, 16);

          switch ($action)
            {
               case 'encrypt':
                                  $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
                                  break;
               case 'decrypt':
                                  $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
                                  break;

            }
              return $output;
      }
</pre>
<p>In above, we&#8217;ve created a <code>encrypt_decrypt</code> function, it will take two parameters i.e $string and $action</p>
<h3>And, how to encrypt?</h3>
<p>To generate a encrypted string, simply we need to call <code>encrypt_decrypt</code> function</p>
<p>$encrypt_string = encrypt_decrypt(&#8216;nexladder web tutorials&#8217;);</p>
<p>// Output: aVV5ZTc5b0dtUyszbkFEbmNJbzRFcjRZaW1VTm5mc2tRSnJoRlNuZ0lQST0=</p>
<h3>And, how to decrypt?</h3>
<p>Pass your encrypted string to the function and set second parameter to &#8216;decrypt&#8217;.</p>
<p>$decrypt_string = encrypt_decrypt($encrypt_string, &#8216;decrypt); // Output: nexladder web tutorials</p>
<p>That’s it!. Please share your thoughts or suggestions in the comments below.</p>

@stop