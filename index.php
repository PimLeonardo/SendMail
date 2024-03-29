<html>

<head>
    <meta charset="utf-8" />
    <title>Send Mail</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="pt-3 text-center">
            <h2>Send Mail</h2>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="card-body font-weight-bold">
                    <form action="envio_email.php" method="post">
                        <div class="form-group">
                            <label for="para">Para</label>
                            <input name="para" type="text" class="form-control" id="para" placeholder="email@dominio.com.br">
                        </div>

                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do email">
                        </div>

                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" class="form-control" id="mensagem" placeholder="Mensagem do email"></textarea>
                        </div>

                        <button type="submit" class="btn btn-Secondary btn-block">Enviar Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>