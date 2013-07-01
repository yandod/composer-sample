Composerを使ったプログラムのサンプルです。
index.phpの内容は極めてシンプルですがGitHubのAPIを叩いて結果を表示します。

<code>composer install</code>を実行するとcomposer.jsonとcomposer.lockの内容を読み込んでオートローダーとライブラリをvendor以下にダウンロードします。コードでは<code>vendor/autoload.php</code>をインクルードしているだけですが、全てのライブラリが自動で読み込まれるのでコードはすぐに実行されます。これがComposerです。

<pre>
<?php
require '../vendor/autoload.php';

$client = new Github\Client();
$repositories = $client->api('user')->repositories('yandod');
?>
<ul>
<?php foreach ($repositories as $row): ?>
<li><?php echo $row['name']; ?> (<?php echo $row['watchers'];?>) </li>
<?php endforeach; ?>
</ul>
</pre>
