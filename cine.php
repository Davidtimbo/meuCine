<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINEMA</title>

    <link rel="icon" href="https://www.joaoalberto.com/wp-content/uploads/2022/01/03/cinema-1.jpg" type="image/png">

    <style>
         body {
            margin: 0;
            padding: 0;
            background-image: url('https://upload.wikimedia.org/wikipedia/pt/3/36/Cinema_Especial.png');
            background-size: cover; /* ou "contain" dependendo do efeito desejado */
            background-repeat: no-repeat;
            background-attachment: fixed; /* Isso torna a imagem fixa enquanto você rola a página */

        }
        .centro {
            margin-left: 120px;
        }
        .descricao {
            margin-top: 5px; /* Adiciona uma pequena margem acima da descrição, ajuste conforme necessário */
            color: #050505; /* Escolha uma cor desejada para o texto da descrição */
        }
        .imagem-descricao {
            display: inline-block;
            margin: 0 10px; /* Adiciona margem entre cada imagem e descrição, ajuste conforme necessário */
            color: #0d180e; /* Escolha uma cor desejada para o texto do link */
        }
        .container {
            text-align: center; /* Centraliza o conteúdo dentro do contêiner */
            margin-top: 20px; /* Adiciona uma margem acima do contêiner, ajuste conforme necessário */
        }
        a {
            text-decoration: none; /* Tira linha do texto link */
        }
        hr {
            width:  50%; /* Ajusta a largura da linha horizontal */
            border: none;
            border-top:  2px solid #808080; /* Define a cor e a espessura da linha horizontal */
            margin-bottom:  30px; /* Adiciona uma margem abaixo da linha horizontal */
        }
        h1 {
            color: #333; /* Define a cor do texto do h1 */
            font-size:  36px; /* Define o tamanho da fonte do h1 */
            margin-bottom:  20px; /* Adiciona uma margem abaixo do h1 */
            text-shadow:  2px  2px  4px rgba(0,  0,  0,  0.7); /* Adiciona sombra ao texto */
            letter-spacing:  4px; /* Adiciona espaço entre as letras */
        }
        h3 {
            color: #333; /* Define a cor do texto do h3 */
            font-size:  24px; /* Define o tamanho da fonte do h3 */
            margin-bottom:  30px; /* Adiciona uma margem abaixo do h3 */
            text-transform: uppercase; /* Transforma o texto em maiúsculas */
            letter-spacing:  5px; /* Adiciona espaço entre as letras */
            text-shadow:  2px  2px  4px rgba(0,  0,  0,  0.5); /* Adiciona sombra ao texto */
        }
        h4 {
            color: #333; /* Define a cor do texto do h3 */
            font-size:  15px; /* Define o tamanho da fonte do h3 */
            margin-bottom:  10px; /* Adiciona uma margem abaixo do h3 */
            text-transform: uppercase; /* Transforma o texto em maiúsculas */
            letter-spacing:  5px; /* Adiciona espaço entre as letras */
            text-shadow:  2px  2px  4px rgba(0,  0,  0,  0.5); /* Adiciona sombra ao texto */
        }
    </style>
    
</head>
<body>
<center>
    <h1>Cinema Especial</h1>
    <h3>Catálogo</h3>
    <hr>
</center>
<center>
    <h4>Em cartaz</h4>
</center>
<br>

<div class="container">
    <?php
    // Array de filmes com seus respectivos IDs de sessao
    $filmes= array(
        1 => "Avatar", 2 => "Oppenheimer", 3 => "Beekeeper", 4 => "Som da Liberdade", 5 => "Carros 3", 6 => "Sonic O Filme", 7 => "Rio", 8 => "Elementos", 9 => "Demons Slayer", 10 => "Mario Bros"
    );

    // Itera sobre os filmes e cria links dinamicos 
    foreach ($filmes as $sessaoID => $filmeNome) {
        echo '<div class="imagem-descricao">';
        echo '<a href="/cinema/sessoes/id=' . $sessaoID . '" target="_blank">';
        echo '<img src="' . obterCaminhoImagem($sessaoID) . '" alt="' . $filmeNome . '" width="200" height="200">';
        echo '<p class="descricao">' . $filmeNome . '</p>';
        echo '</a>';
        echo '</div>';
    }
    function obterCaminhoImagem($sessaoID) {
        // Lógica para obter o caminho da imagem com base no ID da sessão
        // Substitua este exemplo pela lógica real de obtenção do caminho da imagem
        // por exemplo: switch ou if-else
        switch ($sessaoID) {
            case 1:
                return "https://conteudo.imguol.com.br/c/entretenimento/14/2024/02/21/poster-da-serie-avatar-da-netflix-1708532932439_v2_750x421.jpg.webp" ;
            case 2:
                return 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg41WeLMuJ68gWfok35LjK3oVKlfVD4kwYV8_ZTUOAbL9ZBPCfTL7vz-0IkmUOdPA45Z7xP63uDoAz8kRW9UPDaoZayfVU6JvDZbApsz0B9PODKgVd3ZFBO4rJdVPhcswDJEgtfSzKxLiEuVP27J2JJSAGT7-yMNDTjaynOhxqyIcxGZ_laROnzpyWQyg/s16000/oppnhmr02.jpg';
            case 3:
                return 'https://www.patosshopping.com.br/wp-content/uploads/2024/01/beekeeper-g.jpg';
            case 4:
                return 'https://www.ucicinemas.com.br/Content/Upload/Filmes/Posters/11620/filme_11620.jpg';
            case 5:
                return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjATXXtir8oodZNYKOzlm8BMS0l98m3q-gfg&usqp=CAU';
            case 6:
                return 'https://i0.wp.com/www.guiadecinema.com/wp-content/uploads/2022/03/morbius.jpg?fit=540%2C801&ssl=1';
            case 7:
                return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIZMDYyrgxhsnsVhK0nzdR_O0LhWfR7sW-Wg&usqp=CAU';
            case 8:
                return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDlePqCyJcYI2AjLfOYeHzYNNO9UpUAhYAtg&usqp=CAU';
            case 9:
                return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk78Oib0YdxlLPSvjiwBAqbW-AVO1ZsXxjYA&usqp=CAU';   
            case 10:
                return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdcANw05i1paZp9kBg2Dv_XQcYH_YASdJjUQ&usqp=CAU';           
            // Adicione mais casos conforme necessário
            default:
                return 'http://localhost:8000/'; // Caminho padrão se o ID da sessão não corresponder a nenhum caso
        }
    }
    ?>
    <hr>
    <div class="imagem-descricao">
        <a href="sessoes.html">
        <img src="https://conteudo.imguol.com.br/c/entretenimento/14/2024/02/21/poster-da-serie-avatar-da-netflix-1708532932439_v2_750x421.jpg.webp" alt="avatarfilme" width="200" height="200">
        <p class="descricao"> Avatar</p>
         </div>

    <div class="imagem-descricao">
        <a href="link-do-seu-destino">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg41WeLMuJ68gWfok35LjK3oVKlfVD4kwYV8_ZTUOAbL9ZBPCfTL7vz-0IkmUOdPA45Z7xP63uDoAz8kRW9UPDaoZayfVU6JvDZbApsz0B9PODKgVd3ZFBO4rJdVPhcswDJEgtfSzKxLiEuVP27J2JJSAGT7-yMNDTjaynOhxqyIcxGZ_laROnzpyWQyg/s16000/oppnhmr02.jpg" alt="oppenheimerfilme" width="200" height="200">
        <p class="descricao"> Oppenheimer</p>
         </div>

    <div class="imagem-descricao">
        <a href="link-do-seu-destino">
        <img src="https://www.patosshopping.com.br/wp-content/uploads/2024/01/beekeeper-g.jpg" alt="beekeeperfilme" width="200" height="200">
        <p class="descricao">Beekeeper</p>
    </div>

    <div class="imagem-descricao">
        <a href="link-do-seu-destino">
        <img src="https://www.ucicinemas.com.br/Content/Upload/Filmes/Posters/11620/filme_11620.jpg" alt="Somdaliberdadefilme" width="200" height="200">
        <p class="descricao">Som da Liberdade</p>
    </div>

    <div class="imagem-descricao">
        <a href="link-do-seu-destino">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjATXXtir8oodZNYKOzlm8BMS0l98m3q-gfg&usqp=CAU" alt="carros3filme" width="200" height="200">
        <p class="descricao">Carros 3</p>
    </div>
    
    <div class="imagem-descricao">
        <a href="link-do-seu-destino">
        <img src="https://i0.wp.com/www.guiadecinema.com/wp-content/uploads/2022/03/morbius.jpg?fit=540%2C801&ssl=1" alt="sonicfilme" width="200" height="200">
        <p class="descricao">Sonic O filme</p>
    </div>

    <div class="imagem-descricao">
        <a href="link-do-seu-destino">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIZMDYyrgxhsnsVhK0nzdR_O0LhWfR7sW-Wg&usqp=CAU" alt="riofilme" width="200" height="200">
        <p class="descricao">Rio</p>
    </div>

    <div class="imagem-descricao">
        <a href="link-do-seu-destino">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDlePqCyJcYI2AjLfOYeHzYNNO9UpUAhYAtg&usqp=CAU" alt="elementosfilme" width="200" height="200">
        <p class="descricao">Elementos</p>
    </div>

    <div class="imagem-descricao">
        <a href="link-do-seu-destino">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk78Oib0YdxlLPSvjiwBAqbW-AVO1ZsXxjYA&usqp=CAU" alt="demonfilme" width="200" height="200">
        <p class="descricao">Demons Slayer</p>
    </div>

    <div class="imagem-descricao">
        <a href="link-do-seu-destino">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdcANw05i1paZp9kBg2Dv_XQcYH_YASdJjUQ&usqp=CAU" alt="mariobrosfilme" width="200" height="200">
        <p class="descricao">Mario Bros</p>
    </div>


</body>
</html>