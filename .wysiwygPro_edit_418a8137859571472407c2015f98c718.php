<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "u5SLrW0kOQydMe04nWkoXL3x57sIJDjRCsN93tpSbM5KnHrzImH_Ib0X7h0eObnBVRkDfaTzlKkNaVqK2aeR0YSdKSB0HVbJ6E55iHbH0bVf1ZVLeykqfwcRrKhVaITHvexOFoaOcKznkDMQqRRvHwjPyFkAp4ev4fyJkdEY_8cZW9lJDiun4rMy9J68Vpj_oJdSSOMH0tCmQZeezDjTavnzkNlx3a6TKuCjSKLh4Vnn9urJ4FTj4y3kuCCgPXTJ") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing books.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="http://75.127.98.101:2082/frontend/x3/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://macbarnett.com/">
    <input type="hidden" name="basedir" value="/home/macknife/public_html/">
    <input type="hidden" name="udir" value="/home/macknife/public_html">
    <input type="hidden" name="ufile" value="books.html">
    <input type="hidden" name="dir" value="%2fhome%2fmacknife%2fpublic_html">
    <input type="hidden" name="file" value="books.html">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://75.127.98.101:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://macbarnett.com/">
    <input type="hidden" name="basedir" value="/home/macknife/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fmacknife%2fpublic_html">
        <input type="hidden" name="file" value="books.html">
    <input type="hidden" name="udir" value="/home/macknife/public_html">
    <input type="hidden" name="ufile" value="books.html">

        </form>
</div>
<script language="javascript">
<!--//

function setHtmlFilters(editor) {
// Design view filter
editor.addHTMLFilter('design', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});

// Source view filter
editor.addHTMLFilter('source', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});
}

// this function updates the code in the textarea and then closes this window
function do_save() {
    document.mform.page.value = WPro.editors[0].getValue();
	document.mform.submit();
}
function do_abort() {
	document.abortform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/wysiwygPro/wysiwygPro.class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

$editor->registerButton('save', 'Save',
        'do_save();', '##buttonURL##save.gif', 22, 22,
        'savehandler'); 
$editor->addRegisteredButton('save', 'before:print' );
$editor->addJSButtonStateHandler ('savehandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 


$editor->registerButton('cancel', 'Cancel',
        'do_abort();', '##buttonURL##close.gif', 22, 22,
        'cancelhandler'); 
$editor->addRegisteredButton('cancel', 'before:print' );
$editor->addJSButtonStateHandler ('cancelhandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 
$editor->theme = 'blue'; 
$editor->addJSEditorEvent('load', 'function(editor){editor.fullWindow();setHtmlFilters(editor);}');

$editor->baseURL = "http://macbarnett.com/";

$editor->loadValueFromFile('/home/macknife/public_html/books.html');

$editor->registerSeparator('savecan');

// add a spacer:
$editor->addRegisteredButton('savecan', 'after:cancel');

//$editor->set_charset('iso-8859-1');
$editor->mediaDir = '/home/macknife/public_html/';
$editor->mediaURL = 'http://macbarnett.com/';
$editor->imageDir = '/home/macknife/public_html/';
$editor->imageURL = 'http://macbarnett.com/';
$editor->documentDir = '/home/macknife/public_html/';
$editor->documentURL = 'http://macbarnett.com/';
$editor->emoticonDir = '/home/macknife/public_html/.smileys/';
$editor->emoticonURL = 'http://macbarnett.com/.smileys/';
$editor->loadPlugin('serverPreview'); 
$editor->plugins['serverPreview']->URL = 'http://macbarnett.com/.wysiwygPro_preview_418a8137859571472407c2015f98c718.php?randomId=u5SLrW0kOQydMe04nWkoXL3x57sIJDjRCsN93tpSbM5KnHrzImH_Ib0X7h0eObnBVRkDfaTzlKkNaVqK2aeR0YSdKSB0HVbJ6E55iHbH0bVf1ZVLeykqfwcRrKhVaITHvexOFoaOcKznkDMQqRRvHwjPyFkAp4ev4fyJkdEY_8cZW9lJDiun4rMy9J68Vpj_oJdSSOMH0tCmQZeezDjTavnzkNlx3a6TKuCjSKLh4Vnn9urJ4FTj4y3kuCCgPXTJ';
// print the editor to the browser:
$editor->htmlCharset = 'us-ascii';
$editor->urlFormat = 'relative';
$editor->display('100%','450');

?>
</div>
<script>

</script>

</body>
</html>
<?php ob_end_flush() ?>
