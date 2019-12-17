<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <title>PDF</title>
        <!-- lien(s) -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container at-5">
            <form action="monPDF.php" method="post" class="offset-md-4 col" target="_blank">
                <h1>pdf</h1>
                <div class="row">
                    <div class="col-nb-50%">
                        <input type="text" name="prenom" placeholder="Prénon" class="form-control" require>
                    <div>
                    <div class="col-nb-50%">
                        <input type="text" name="nom" placeholder="Nom" class="form-control" require>
                    <div>
                <div>
                <div class="mb-2">
                    <input type="email" name="email" placeholder="E-mail" class="form-control" require>
                <div>
                <div class="mb-2">
                <input type="tel" name="tel" placeholder="Téléphone" class="form-control" require>
                <div>
                <textarea name="message" placeholder="Votre message" class="form-control"></textarea>
                <button type="submit" class="btn btn-success btn-l btn-block">Votre PDF</button>     
            </form>
        </diV>
    </body>
</html>
