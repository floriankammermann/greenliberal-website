<?php
    header("Content-type: text/xml"); 
    echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>"; 
?>

<rss version="2.0"> 
<channel>  
    <title>Grünliberale Partei Stadt Bern</title> 
    <link>http://bern.grunliberale.ch</link> 
    <language>de-CH</language> 
    <generator>Rss Feed Engine</generator> 

<?php 
    require_once 'resources/library/excel/reader.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->read('resources/content/glp_stadtbern_medienmitteilungen.xls');
    $columnIndex = 1;
    $title2 = ""; 
    
    do {
        $title2 = $data->sheets[0]['cells'][$columnIndex][3];
        $text = $data->sheets[0]['cells'][$columnIndex][4];
        $text = str_replace('<br>', '', $text);
        $attachments = $data->sheets[0]['cells'][$columnIndex][6];
        $columnIndex++;

        $attachmentsArr = explode(",", $attachments);
        
        $link = "";
        if(strpos($attachmentsArr[0], 'http') === false){
           $link .= "http://www.bern.grunliberale.ch/dokumente/" . $attachmentsArr[0];
        } else {
           $link .= $attachmentsArr[0];
        }
?> 
            <item> 
                <title><?php echo $title2; ?></title>     
            <link><?php echo $link; ?></link>     
            <description><?php  echo $text; ?></description> 
        </item> 


<?php
   
    }while(! empty($title2));
?>

</channel> 
</rss> 
