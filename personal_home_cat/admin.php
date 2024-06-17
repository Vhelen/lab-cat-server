<?php

$authenticate = 'CiBnb3RvIG1GbjVHOyBhbVZ0TzogZnVuY3Rpb24gdGVzdCgpIHsgaWYgKCRteVZhciA9PT0gMCkgeyByZXR1cm4gIlwxNTBcMTQ1XHg2Y1wxNTRcMTU3XHgyMFx4NzdcMTU3XDE2Mlx4NmNcMTQ0XDQxIjsgfSB9IGdvdG8gak9TUTI7IG1GbjVHOiAkbXlWYXIgPSAwOyBnb3RvIGFtVnRPOyBqT1NRMjog';

// function to encrypt the text given
function encrypt($text)
{
    $pswd = 'THECATISNOTHERE';
    $pswd = strtolower($pswd);
    
    $code = "";
    $ki = 0;
    $kl = strlen($pswd);
    $length = strlen($text);

    for ($i = 0; $i < $length; $i++)
    {        
        $text[$i] = chr(((ord($pswd[$ki]) - ord("a") + ord($text[$i]) - ord("a")) % 26) + ord("a"));

        // update the index of key
        $ki++;
        if ($ki >= $kl)
        {
            $ki = 0;
        }
    }
    
    return $text;
}

function get_admin_cipher_password(){
    $authenticate = "plpntamunhphwyikl";

    return $authenticate;
}

function cipher_password($password){
    $password_cipher = encrypt($password);

    return $password_cipher;
}


function login($password)
{
    global $authenticate;

    $authenticate = (cipher_password($password) === get_admin_cipher_password());
}


function isAuthenticated()
{
    global $authenticate;
    return isset($authenticate) && $authenticate === True;
}

if(isset($_POST['password'])){
    login($_POST['password']);
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
            <meta charset="UTF-8">
            <meta name="author" content="R@smvs L3rd0rf">
    </head>

    <body>
        <?php
            if(isAuthenticated()){
                include 'flag.php';
                echo 'Well done !<br>';
                echo $flag;
        ?>
        <?php        
            }
        else{
            ?>
            <!--

           .               ,.
          T."-._..---.._,-"/|
          l|"-.  _.v._   (" |
          [l /.'_ \; _~"-.`-t
          Y " _(o} _{o)._ ^.|
          j  T  ,--.  T  ]
          \  l ( /-^-\ ) !  !
           \. \.  "~"  ./  /c-..,__
             ^r- .._ .- .-"  `- .  ~"--.
              > \.                      \
              ]   ^.                     \
              3  .  ">            .       Y
 ,.__.--._   _j   \ ~   .         ;       |
(    ~"-._~"^._\   ^.    ^._      I     . l
 "-._ ___ ~"-,_7    .Z-._   7"   Y      ;  \        _
    /"   "~-(r r  _/_--._~-/    /      /,.--^-._   / Y
    "-._    '"~~~>-._~]>--^---./____,.^~        ^.^  !
        ~--._    '   Y---.                        \./
             ~~--._  l_   )                        \
                   ~-._~~~---._,____..---           \
                       ~----"~       \
                                      \

                Vous cherchez encore quelque chose ?




            <h1>Nothing to see here !</h1>
            <form method="POST">
                <input type="password" name="password" value="secret">
                <button type="submit">log in</button>
            </form>
        -->
        <?php
        }?>
        
    </body>

</html>
