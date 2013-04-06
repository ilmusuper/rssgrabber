<?php
function tampiljudul($feedURL) {
	$rss = simplexml_load_file($feedURL);
	echo "<ul>";
	$i = 0;
	foreach ($rss->channel->item as $feedItem) {
		$i++;
		echo "<li><a href='$feedItem->link' title='$feedItem->title'>" . $feedItem->title . "</a></li>";
		if($i >= 5) break;
	}
	echo "</ul>";
}

<?php tampiljudul("http://www.islamedia.web.id/feeds/posts/default"); ?>
