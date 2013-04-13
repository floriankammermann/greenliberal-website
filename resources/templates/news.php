<?php
function news($typToDisplay) {
    require_once 'resources/library/excel/reader.php';
    $data = new Spreadsheet_Excel_Reader();
    $data->read('resources/content/glp_stadtbern_medienmitteilungen.xls');
    $columnIndex = 1;
    $title1 = "";
    do {
        $typ = $data->sheets[0]['cells'][$columnIndex][1];
        $polit = $data->sheets[0]['cells'][$columnIndex][1];
        $title1 = $data->sheets[0]['cells'][$columnIndex][2];
        $title2 = $data->sheets[0]['cells'][$columnIndex][3];
        $text = $data->sheets[0]['cells'][$columnIndex][4];
        $attachmentnames = $data->sheets[0]['cells'][$columnIndex][5];
        $attachments = $data->sheets[0]['cells'][$columnIndex][6];
        $columnIndex++;
        
        $attachmentnamesArr = explode(",", $attachmentnames);
        $attachmentsArr = explode(",", $attachments);
        $typArr = explode(",", $typ);
        
        if( empty($title1)) {
            break;
        }
        
        if(!empty($typToDisplay) && !in_array($typToDisplay,$typArr)) { 
            continue;
        } 

        print("<h1>");
        print($title1);
        print("</h1>");
        print("<h2>");
        print($title2);
        print("</h2>");
        print("<p>");
        print($text);
        print("</p>");
        print("<p>");
        if( !empty($attachmentnames)) {
            for ($i = 0; $i < count($attachmentnamesArr); ++$i) {
                print("<a href=\"");
                if(strpos($attachmentsArr[$i], 'http') === false){
                    print("resources/documents/news/");
                }
                print(trim($attachmentsArr[$i]));
                print("\" class=\"newslink\" >");
                print($attachmentnamesArr[$i]);
                print("</a><span style=\"display:none;\">|</span>");
            }
        }
        print("</p>");
    }while(! empty($title1));
} 
?>
