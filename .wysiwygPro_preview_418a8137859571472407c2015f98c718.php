<?php
if ($_GET['randomId'] != "u5SLrW0kOQydMe04nWkoXL3x57sIJDjRCsN93tpSbM5KnHrzImH_Ib0X7h0eObnBVRkDfaTzlKkNaVqK2aeR0YSdKSB0HVbJ6E55iHbH0bVf1ZVLeykqfwcRrKhVaITHvexOFoaOcKznkDMQqRRvHwjPyFkAp4ev4fyJkdEY_8cZW9lJDiun4rMy9J68Vpj_oJdSSOMH0tCmQZeezDjTavnzkNlx3a6TKuCjSKLh4Vnn9urJ4FTj4y3kuCCgPXTJ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
