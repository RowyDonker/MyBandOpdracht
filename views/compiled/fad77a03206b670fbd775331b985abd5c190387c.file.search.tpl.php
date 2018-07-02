<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 14:18:48
         compiled from "views/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18483326595819f13429ee64-39343988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad77a03206b670fbd775331b985abd5c190387c' => 
    array (
      0 => 'views/search.tpl',
      1 => 1478870290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18483326595819f13429ee64-39343988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5819f1342e9970_19703470',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819f1342e9970_19703470')) {function content_5819f1342e9970_19703470($_smarty_tpl) {?><html>

<head>
    <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "views/search.php?q=" + str,true);
        xmlhttp.send();
    }
}
    </script>
</head>

<body>
    <form action="views/search.php">
        Code:
        <br>
        <input type="text" name="Code" value="Code" onKeyup="showUser(this.value)">
        
    </form>
    <br>
    <div id="txtHint"><b>Verhalen worden hier getoond</b></div>

</body>

</html><?php }} ?>
