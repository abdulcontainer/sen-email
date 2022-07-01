<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.sendgrid.com/api/mail.send.json");
$token = "Bearer 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";
curl_setopt( $ch, CURLOPT_HTTPHEADER, 
    array(
        'Content-Type: application/x-www-form-urlencoded', 
        'Authorization: '.$token, 
    )
);
$fields = array('to' => $_POST['email'], 'toname' => $_POST['name'],
'subject' => 'Thank you'.$_POST['mobile'], 'from' => 'mailtoa.wahid@gmail.com', 'text' => 'Thank you for contacting us we will soon reach to you.');
curl_setopt($ch, CURLOPT_POST, 5);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close ($ch);
try { 
    if (json_decode($server_output)->message=="success") { 
        header("location: /?success=202");
    } else { 
        header("location: /?success=404");
    }
} catch (Exception $e) {
    header("location: /?success=0");
}
?>