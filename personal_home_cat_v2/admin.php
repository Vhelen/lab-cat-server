<?php

function get_admin_cipher_password(){
    // dont brute force me it's useless
    $authenticate = "9b549a15e48dc2161d801be7be7a022cb9290bdbb6e27a3cbf0e57e65296623e808a24f6203b8300d4d6f91427f30b8956220eb9959717fea935e3f12ca99566"; 

    return $authenticate;
}

function cipher_password($password){
    $password_cipher = encrypt($password);

    return $password_cipher;
}


function login($password)
{
    $authenticate = (hash('sha512', $password) === get_admin_cipher_password());

    return $authenticate;
}


if(isset($_POST['password'])){
    login($_POST['password']);

    if ($authenticate === true){
        include 'flag_super_secure.php';
        echo 'Well done !<br>';
        echo $flag;
    }
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
        <!--


                                                            .-----.
                                                          ,' __/|_ `.
                                                         ,    {~)    :
                                        /:\              :   //~_)  _:__
                            __,---.__ /::::\             : ~~~/' \~~====
                           `-.__     \:::::/              :   ~;;~  .'
                             ;;:\--.__`--.--._             `._____.'
                           ,;;'` `    `--.__  `-._
                           `,  ,\       /,  `--.__;
                           <   (o) ___ (o)   >
                          <        \:/        >
                           <     ._,"._,     >
                   _.---._  `-.    ~~~    .-'
                 .'._.--. `.   `~:~~~~~~:'
                 `-'     `. `.  :        :
                          :__: :________  :___
                      ;'xx:XXxxxxxxxxxx:xxxXXX:xx:
                    :::xx:XXXX:xxxxxxxxx:XXXXXX:xxx:.
                   ::xxx:XXX/X;xxxxxxxxxx:XXXXXX:xxx:.
           |||    ::xxx:XXX// xxxxxxxxxx// XXXXXX:xxx:.         []
         ||||||  ||xxxx:XX//   xxxxxxxx//   XXXXXX:xx||     .:||:|:||.
    ___    |||   ||xxx:XX//  0  xxxxxx// 0   XXXXX:xx||    .:||^:|:^||.
  ,'   `.. |||   `::xx:XXXXX:xxxx/ \xxxxx:XXXXXXXX:xx:'    ::|:::V:::|:
  |R.I.P|| |||    `::xx:XXXXX:xxx___Xxxx:XXXXXXXX:xx:'     `::|UUUUU:|'
  | the || |||     `::xx:XXXXXxxxxxxxxxxxXXXXXXX:x::'       `::|::::|'
  |brain||"""""      `:xx:XX \/  \/  \/ \/XXXXX:xx:'       """"""""""""
 """""""""             `.x:XXXXxxxxxxxxxxXXXXxx;''
""""""""""""""""""""""   ~~~~~~~~~~~~~~~~~~~~~~   """"""""""""""""""""""""

    Vous cherchez encore quelque chose ?
    Meme si c'est encore en dev, vous ne trouverez rien les chats ont appris de leur erreur !

        -->
    </body>
</html>
