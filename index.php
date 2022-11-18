<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>Ferias</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    <header>
        <img src="https://media.discordapp.net/attachments/945129584934944839/1036776029093630022/unknown.png?width=1200&height=252">
        <ul>
            <li>SEJA BEM VINDO ALUNO DO SSECTOR7<?php ?><li>
        </ul>
    </header>
    <div class="form">
    <div class="form-name">
        <form method="post" action="form.php">
        <h2>QUAL SEU NOME???<h2>
        <input type="text" name="nome">
        <h2>QUAL A SUA TURMA???</h2>
        <select name="turma">
            <option value="a">Turma A</option>
            <option value="b">Turma B</option>
            <option value="c">Turma C</option>
            <option value="d">Turma D</option>
            <option value="e">Turma E</option>
        </select>
        </div>
        <div class="form-text">
        <h1>CONTE SUAS FÉRIAS!!!</h1>
        <br> 
        <textarea name="texto" id="convert_text" class="text-input"></textarea>
        <br>
        <br>
        <input type="submit" value="ENVIAR">
        </form>
        <br>
        <button type="submit" id="click_to_record" value="VOZ">
        <img src="https://static-00.iconduck.com/assets.00/mic-circle-icon-256x256-u7sa9hkh.png" width="90px" height="80px">
        </button>
    </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>