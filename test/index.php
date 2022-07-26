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

      <style type="text/css">

		h2
		 {
			font-family: serif;
			text-shadow: 2px 2px Red;
			font-weight: bold
            color: white;
            
		 }

		ol
		{
			font-family: serif;
			font-weight: bold
            
		}

        body{
            background-color: black;
            color: white;
            text-align: center;
        }
	
		</style>

    </head>
    <body>
        <?php
            //Note: RSS specification: https://validator.w3.org/feed/docs/rss2.html

                $html = "";
                $publisher ="Washington Post Local";
                $url = "https://feeds.washingtonpost.com/rss/local?itid=lk_inline_manual_20";
              

                $html .= '<h2 style="text-align:center" >' . $publisher . '</h2>';
                $html .= $url;

                $rss = simplexml_load_file($url);
                $count = 0;
                $html .= '<ol>';
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
                    $html .= '</ol>';

                    print $html;
        ?>
    </body>
</html>