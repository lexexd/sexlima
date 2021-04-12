<?php 
if(isset($_POST['submit'])){
    if(isset($_POST['disclaimer'])) {
        $to = "enderduran65@gmail.com"; // Tu email
        $from = $_POST['email'];
        $name = $_POST['name'];
        $subject = "Mensaje enviado";
        $message = $name . " escribió lo siguiente:" . "\n\n" . $_POST['message'];
        $message2 = "Esto es una copia del mensaje " . $name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        echo "Mensaje enviado. Gracias " . $name . ", me pondré en contacto lo antes posible.";
    } else {
        echo 'Debe acertar las condiciones de uso y privacidad';
    }
}
?>