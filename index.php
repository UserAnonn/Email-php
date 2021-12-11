<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="enviar.php"method="post">
        <div style="margin-top: 5%;margin-left:10%;margin-right: 10%;">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Dirección de e-mail:</label>
                <input id='email'name='email' type="email" class="form-control" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Asunto:</label>
                <input id='asunto'name='asunto' type="text" class="form-control" placeholder="Asunto">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje:</label>
                <textarea id='msg' name='msg' class="form-control" rows="3"></textarea>
            <div>
        <br>
        <button class="btn btn-primary"style="width:30%" type="submit">Enviar</button>
        </div>
        
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>