<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Czich Tyron">
    <title>Envoyer une carte de voeux personnalisé à votre famille et vos amis</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/neige.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <div class="page-header">
        <div class="snow">
            <div class="snow__layer">
                <div class="snow__fall"></div>
            </div>
            <div class="snow__layer">
                <div class="snow__fall"></div>
            </div>
            <div class="snow__layer">
                <div class="snow__fall"></div>
                <div class="snow__fall"></div>
                <div class="snow__fall"></div>
            </div>
            <div class="snow__layer">
                <div class="snow__fall"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title"></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-section">
        <div class="container">
            <div class="card-block bg-white mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-title mb-0">
                            <div class="container">
                                <form method="post" action="send_email.php">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="">Votre nom</label>
                                                <input id="your_name" type="text" name="name" class="form-control" placeholder="Michel">
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="">Nom du destinataire</label>
                                                <input id="form_name" type="text" name="for" class="form-control" placeholder="Louis">
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="">Email du destinataire</label>
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="nom@exemple.fr">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Message</label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Pour 2021, je te souhaite d'être entouré de ceux que tu aimes, de vivre des moments intenses, de savourer le quotidien. Et pourquoi pas, de faire une rencontre déterminante !" rows="4"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <input type="submit" id="btn-send" class="btn btn-danger" value="Envoyer">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">

                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="js/script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

</body>

</html>