<!doctype html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>ECB Decryption | DES</h2><br />
    <hr />
    <form method="post" action="">
        Cypher Text : <input type="text" name="cypherText" id="cypherText" placeholder="Cyphertext Here" /><br />
        <input type="submit" id="submit" name="submit" value="Decrypt" />
    </form>

    <?php
        include('./phpseclib/Crypt/DES.php');
    
        $des = new DES(DES::MODE_ECB);
    
        $des->setKey(sha1('11111111'));
    
        //echo $des->decrypt($des->encrypt($plaintext));
        if(isset($_POST['cypherText'])){
            //echo hex2bin($_POST['cypherText']);
            //echo $des->decrypt(base64_decode($_POST['cypherText']));
            echo $des->decrypt(base64_decode(hex2bin($_POST['cypherText'])));
        }
    ?>

</body>
</html>