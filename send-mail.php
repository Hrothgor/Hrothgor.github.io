<?php
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                add();
                break;
        }
    }


    function add() {
        echo "The select function is called.";
        return 10;
    }

    // function sendMail($to, $subject, $message, $from)
    //     $message = wordwrap($message, 70, "\r\n");
    //     $headers = array(
    //         'From' => $from,
    //     );
    //     mail($to, $subject, $message, $headers);
    // }

?>