<!DOCTYPE HTML>
<html lang="en">
    <head>
      <meta charset= "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This is EzeWorks.LLC content page.">
        <meta name="author" content="Ezekiel O Faulknor aka EF aka EzeWorks">

     <link rel="icon" href="favicon.ico">

      <title>Using RSS Feeds</title>

    </head>
    <body>
        <?php
            //Note: RSS specification: https://validator.w3.org/feed/docs/rss2.html

                $html = "";
                $publisher ="Fox";
                $url = "http://feeds.foxnews.com/foxnews/latest";

                $html .= '<h2>' . $publisher . '</h2>';
                $html .= $url;

                $rss = simplexml_load_file($url);
                $count = 0;
                $html .= '<ul>';
                foreach($rss->channel->item as $item)
                    {
                        $count++;
                        if($count > 10)
                            {
                                break;
                            }

                        $html .= '<li><a href="' . htmlspecialchars($item->link).'">'. htmlspecialchars($item->title) . '</a><br />';
                        $html .= htmlspecialchars($item->description). '<br />';
                        $html .= htmlspecialchars($item->pubDate). '</il><br />';
                    }
                    $html .= '</ul>';

                    print $html;
        ?>
    </body>
</html>