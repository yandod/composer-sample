Composerを使ったプログラムのサンプルです。
index.phpの内容は極めてシンプルですがGitHubのAPIを叩いて結果を表示します。

<code>composer install</code>を実行するとcomposer.jsonとcomposer.lockの内容を読み込んでオートローダーとライブラリをvendor以下にダウンロードします。コードでは<code>vendor/autoload.php</code>をインクルードしているだけですが、全てのライブラリが自動で読み込まれるのでコードはすぐに実行されます。これがComposerです。

<pre>
&lt;?php
require '../vendor/autoload.php';

$client = new Github\Client();
$repositories = $client->api('user')->repositories('yandod');
?&gt;
&lt;ul&gt;
&lt;?php foreach ($repositories as $row): ?&gt;
&lt;li&gt;&lt;?php echo $row['name']; ?&gt; (&lt;?php echo $row['watchers'];?&gt;) &lt;/li&gt;
&lt;?php endforeach; ?&gt;
&lt;/ul&gt;
</pre>
