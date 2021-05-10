<?php 
if (isset($_POST['btn-ok'])) {
  header('refresh:4;url=../index.php');
  echo("Mesnsagem enviada com sucesso");
}
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Contato</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">	
    <link rel="stylesheet" href="css/estiloall.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/for-phone.css" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" media="screen" href="css/for-tablet.css" content="width=device-width, initial-scale=1, user-scalable=no">	
</head>
<body class="contbody">
    <div class="banner">
        <img class="imgbanner" src="image/banner.jpg" alt="banner topo ilustrativo códigos html">
        <div class="textinbox">
            <div class="text1">Entre em contato conosco!</div>
            <br/>
            <div class="text2">
Envie sua mensagem ou ligue para nós. Teremos imensa satisfação em atendê-lo!</div>
            </div>
    </div>
    <main class="contato">
    <a href="index.php">Voltar</a>
    <article class="articlec">
        <section>
            <div class="">
                <h1 class="contatotext">Contato&#9743;</h1>
            </div>
        </section>



        <section class="inlinecont">
            
            <div class="contatoinfo">
            <h2 class="titlecont">Contato via Internet</h2><br>
            Site: <strong>newsenac.tk</strong><br>
            Email: <strong>aexxzu@gmail.com</strong>
            </div>
           
            <div class="contatoinfo">
            <h2 class="titlecont">Telefone de contato</h2><br>
            Cel: <strong>+55 (18) 98800-0088</strong>
           <br> Tel: <strong>+55 (18) 3222-0088 </strong>   
        </div>
       <br>
        <div class="contatoinfo2">
            <h2 class="titlecont">Contato Presencial</h2><br>
             Os nossos escritórios encontram-se em Presidente Prudente
            Jardim Fulano de Tá,1000duzense12 ao lado do barracão do negócio lá.
            </div>
    </section>
        <br>
        <hr>
        <br>
        <section class="formcontato">
            <form class="formulc" action="sendmail.php" method="post" autocomplete="off">
                <input type="hidden" autocomplete="false">
               <label for="nome">Nome completo*</label><br>
               <input  type="text" name="nome" id="nome" tabindex="1" maxlength="60"  class="entrycont" placeholder=" Digite seu Nome"> <br>
               
               <label for="email">E-mail*</label> <br>
               <input type="email" name="email" id="email" class="entrycont" tabindex="2" maxlength="100" placeholder=" Digite um email válido" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                        required><br>
               
               <label for="tel">Telefone Comercial*</label><br>
               <input type="tel" name="telefone" id="telefone" class="entrycont"  maxlength="14" 
               tabindex="3" placeholder=" (xx)99999-2222" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}" autocomplete="false"><br>
               <label for="empresanome">Nome da Empresa*</label><br>
               <input type="text" id="empresanome" maxlength="100" name="empresanome" tabindex="4" class="entrycont" placeholder=" Digite o nome da Empresa">
             
             <br> 
             <label for="departamento">Departamento de destino*</label><br>
             <select tabindex="5" class="entrycont" name="departamento" id="depart">
                  <option value="administrativo">Administrativo</option>
                  <option value="vendas">Vendas</option>
                  <option value="marketing">Marketing</option>
                  <option value="suporte">Suporte</option>
                  <option value="ouvidoria">Ouvidoria</option>
              </select>
               <br> 
               <label for="mensagem">Escreva sua mensagem <br><br>
                Max. 2000 caracteres*
               </label><br>
               <textarea tabindex="5" maxlength="2000" class="txtarea" name="mensagem" id="msg" cols="91" rows="14" placeholder=" Digite sua mensagem"></textarea>
            </form>
            <br>
            <input type="submit" id="btn-ok" name="btn-ok" value="Enviar" tabindex="5">

        </section>
        <hr>
        <section>
            <br>
            <br>
            
        </section>
    </article>
    </main>
    <div class="peso"></div>
    <footer>
		<div class="rodape">Google News cloning by BR_dev</div>
	</footer>
</body>


</html>