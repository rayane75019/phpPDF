<?php
    require_once __DIR__ . '/vendor/autoload.php';
    //
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    //creation d'une  instance PDF
    $mpdf = new \Mpdf\Mpdf();
    //creation d'un pdf
    $data = '';
    $data .= '<h1>Vos données</h1>';
    //
    $data .= '<strong>Prénom :</strong> '.$prenom.'<br/>';
    $data .= '<strong>Nom :</strong> '.$nom.'<br/>';
    $data .= '<strong>e-mail :</strong> '.$email.'<br/>';
    $data .= '<strong>Téléphone :</strong> '.$tel.'<br/>';
    //
    if($message){
        $data .= '<strong>Message :</strong><br/>'.$message;
    }
    //écriture du pdf
    $mpdf->WriteHTML($data);
    //affichage du PDF
    $mpdf->Output('monPDF.pdf', 'I');
?>