<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    linguagens = {
        "portugues" : [
            'Informe seu nome:',
            'Foto'
        ],
        "japones" : [
            'Anata no, namae wa nandesuka:',
            'Shashin'
        ],
        "irlandes": [
            "Cuir isteach d’ainm",
            "Grianghraf"
        ]

    }
</script>
<body class="d-flex align-items-center h-100">  
    <form action="usuario.php" method="POST" enctype='multipart/form-data'>
        <div class="d-flex">
        Idioma:
        <select name="idioma" id="idioma">
            <option value="0">Portugues</option>
            <option value="1">Japones</option>
            <option value="2">Irlandês</option>
        </select> 
        </div>
        <div>
            <img src="" alt="" id="exibicao" class="w-100 d-flex justify-content-center">
        </div>
        <div>
            <label for="txt_nome">Nome</label>
            <input type="text" id="txt_nome" name="nome" class="form-control">
        </div>
        <div>
            <label for="file">Foto</label>
            <input type="file" id="file" name="file" class="form-control">
        </div>
        <div>
            <input type="submit" value="Continuar">
        </div>
    </form>


</body>
<script>
    input_file = document.getElementById("file");
    
    input_file.addEventListener('change', ()=> {

        if(input_file.files <= 0){
            return;
        }
        
        var reader = new FileReader();

        reader.onload = () => {
            document.getElementById('exibicao').src = reader.result;
        }

        reader.readAsDataURL(input_file.files[0]);
    })

    sel = document.getElementById("idioma");

    sel.addEventListener('change', function(event){
        labels = document.getElementsByTagName("label");
        tipo = "";
        if(sel.value == 0){
            tipo="portugues";
        }
        else if(sel.value == 1){
            tipo="japones";
        }
        else{
            tipo="irlandes";
        }
        
        for(i=0; i< labels.length; i++){
            labels[i].innerHTML = linguagens[tipo][i];
        }
    })

</script>


</html>