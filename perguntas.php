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
            `Quais pessoas você admira e quais competências ela tem?
                Pode ser alguém do seu território, 
                que você convive na escola, na vida privada, entre outros`,
            `Práticas que recarregam a energia e te fazem bem
                O que te inspira? 
                A leitura de um livro? 
                Conversar com um amigo? 
                Ouvir música?`,
            `Potências
                O que você gosta de fazer? 
                O que você faz bem? 
                O que dizem que você faz bem? `,
            `Habilidades e Competências 
                ... Que pode ser do mundo do trabalho e gerais de vida`,
            `"Caminhos de futuro"? 
                O que se vê fazendo, com quem gostaria de estar, quais projetos gostaria de executar, qual atividade gostaria de desenvolver, como gostaria que sua comunidade estivesse? 
                Como você se vê atuando para melhorar a sua comunidade?`,
            `Qual a sua causa? 
                (que se sente instigado e que teria vontade de levantar a bandeira, lembre os jovens das atividades relacionadas aos ODS).
                O que te move na sua comunidade, no seu município? Pense em desafios, inspirações e questões que fazem parte da sua vida e dos membros de sua comunidade`,
            `Qual é o seu território? (vale reconhecer a cidade, 
                o bairro e as pessoas da história pessoal). 
                De onde você vem? O que na sua história (e da sua família, amigos e comunidade) 
                conta sobre quem você é?`,
        ],
        "japones" : [
            `Anata wa dono hito o sonkei shite imasu ka, soshite karera wa dono 
                yōna sukiru o motte imasu ka? Sore wa, toriwake, anata ga gakkō de, shiseikatsu de issho ni 
                sunde iru anata no ryōdo kara no darekadearu kanōsei ga arimasu.`,
            `nerugī o sai jūden shi, kibun o yoku suru renshū nani ga anata o shigeki shimasu ka?
                Hon o yonde iru? 
                Tomodachi to chatto shimasu ka? 
                Ongaku o kiku?`,
            `Pawā nani o tanoshinde imasu ka? 
                Nani ga jōzudesu ka? 
                Karera wa anata ga umaku yatte iruto nani o iimasu ka?`,
            `Sukiru to nōryoku
                ... Kore wa shigoto to ippan seikatsu no sekai kara no monodearu kanōsei ga arimasu`,
            `Mirai no michi'? Jibun wa nani o shite iru to omoimasu ka, 
                dare to issho ni naritaidesu ka, dono purojekuto o jikkō shitaidesu ka,
                do no yōna katsudō o tenkai shitaidesu ka,
                komyuniti o dono yō ni shitai to omoimasu ka?
                Komyuniti o kaizen suru tame ni jibun ga dono yō ni kōdō shite iru to omoimasu ka? `,
            `Anata no gen'in wa nanidesu ka? 
                (Anata ga kōfun shite iru to kanji, 
                hata o kakagetai to omotte iru koto,
                SDGs ni kanren suru katsudō o wakamono ni omoidasa sete kudasai).
                Anata no komyuniti, anata no jichitai de anata o ugokasu mono wa nanidesu ka? 
                Anata no jinsei to anata no komyuniti no menbā no ichibudearu chōsen,
                insupirēshon, mondai ni tsuite kangaete kudasai.`,
            `Anata no ryōdo wa nanidesu ka?
                (Kojin no rekishi kara toshi, kinrin, hitobito o ninshiki suru kachi ga arimasu). 
                Anata no shusshin wa dokodesu ka? Anata no rekishi 
                (soshite anata no kazoku, yūjin, komyuniti no rekishi)
                wa anata ga daredearu ka ni tsuite anata ni nani o oshiete imasu ka?`,
        ],
        "irlandes": [
            "Cé na daoine a bhfuil meas agat orthu agus cad iad na scileanna atá acu? D’fhéadfadh sé a bheith mar dhuine as do chríoch, a bhfuil cónaí ort leis ar scoil, sa saol príobháideach, i measc daoine eile.",
            "Cleachtais a athlíon fuinneamh agus a bhraitheann tú go maith Cad a spreagann tú? Litir ó leabhar? Comhrá le cara? Éíst le ceoil?",
            "Cumhachtaí Cad a thaitníonn leat a dhéanamh? Cad a dhéanann tú go maith? Cad a deir siad a dhéanann tú go maith?",
            "Scileanna agus Inniúlachtaí ... is féidir a bheith ó shaol na hoibre agus an tsaoil i gcoitinne",
            "Conairí na todhchaí? Cad a fheiceann tú ag déanamh, cé ar mhaith leat a bheith leis, cad iad na tionscadail ar mhaith leat a dhéanamh, cén ghníomhaíocht ar mhaith leat a fhorbairt, conas ar mhaith leat do phobal áitiúil? Conas a fheiceann tú tú féin ag gníomhú chun do phobal a fheabhsú?",
            "Cad é do chúis? (a mhothaíonn ar bís agus ar mhaith leo bratach a ardú, cuir i gcuimhne don aos óg gníomhaíochtaí a bhaineann leis na SDGanna). Cad atá le hathrú i do phobal, i do bhardas? Smaoinigh ar dhúshláin, ar inspioráidí agus ar shaincheisteanna atá mar chuid de do shaol agus do bhaill do phobail;",
            `Cad é do chríoch? (Is fiú aitheantas a thabhairt don chathair, don chomharsanacht agus do na daoine ó stair phearsanta). Cad a thugann tú orm? Cad a insíonn duit i do stair (agus stair do theaghlaigh, do chairde agus do phobail) faoi cé tú féin?`
        ]

    }
</script>
<body>  

    <form action="post.php" method="POST" enctype='multipart/form-data'>
        <div>
            Quais pessoas você admira e quais competências ela tem? <br>
            <input type="text" name="r1">
        </div>
        <div>
            Práticas que recarregam a energia e te fazem bem <br>
            <input type="text" name="r2">
        </div>
        <div>
            Potências <br>
            <input type="text" name="r3">
        </div>
        <div>
            Habilidades e Competências <br>
            <input type="text" name="r4">
        </div>
        <div>
            Caminhos de futuro? <br>
            <input type="text" name="r5">
        </div>
        <div>
            Qual a sua causa? <br>
            <input type="text" name="r6">
        </div>
        <div>
            Qual é o seu território? <br>
            <input type="text" name="r7">
        </div>
        <input type="submit" value="Enviar">
    </form>


</body>
</html>