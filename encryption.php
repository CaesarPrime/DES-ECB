<!doctype html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>ECB Encryption | DES</h2><br />
    <hr />
    <form method="post" action="">
        Plain Text : <input type="text" name="plainText" id="plainText" placeholder="Plain text Here" /><br />
        <input type="submit" id="submit" name="submit" value="Encrypt" />
    </form>

    <?php
        include('./phpseclib/Crypt/DES.php');
    
        $des = new DES(DES::MODE_ECB);
    
        $des->setKey(sha1('11111111'));

        //echo $des->decrypt($des->encrypt($plaintext));
        if(isset($_POST['plainText'])){
            //echo bin2hex($_POST['plainText']);
            echo bin2hex(base64_encode($des->encrypt($_POST['plainText'])));
        }
    ?>

</body>
</html>