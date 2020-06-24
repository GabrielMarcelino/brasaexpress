<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Brasa Express</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                   <?php
                         if (isset($_POST['BTEnvia'])){
 
	                     //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 	                     //====================================================
	                     $email_remetente = "contato@brasaexpress.com.br"; // deve ser um email do dominio
	                     //====================================================
 
 
	                     //Configurações do email, ajustar conforme necessidade
	                     //====================================================
	                     $email_destinatario = "contato@brasaexpress.com.br"; // qualquer email pode receber os dados
	                     $email_reply = "$email";
	                     $email_assunto = "Cadastro Churrasqueiro - Brasa Express";
	                     //====================================================
 
 
	                     //Variaveis de POST, Alterar somente se necessário
	                     //====================================================
	                     $nome = $_POST['nome'];
	                     $sobrenome = $_POST['sobrenome'];
	                     $tel_fixo = $_POST['tel_fixo'];
                         $tel_cel = $_POST['tel_cel'];
 	                     $email = $_POST['email'];
                         $end = $_POST['end'];
                         $bairro = $_POST['bairro'];
	                     $cidade = $_POST['cidade'];
                         $estado = $_POST['estado'];
                             
                         $data_nasc = $_POST['data_nasc'];
	                     $rg = $_POST['rg'];
                         $cpf = $_POST['cpf'];
                         $ref01 = $_POST['ref01'];
                         $ref02 = $_POST['ref02'];
                         $ref03 = $_POST['ref03'];
                         $ref04 = $_POST['ref04'];
 	                     
	                     //====================================================
 
	                     //Monta o Corpo da Mensagem
	                     //====================================================
	                     $email_conteudo = "Nome = $nome \n"; 
	                     $email_conteudo .= "Sobrenome = $sobrenome \n"; 
	                     $email_conteudo .= "Telefone Fixo = $tel_fixo \n";
                         $email_conteudo .= "Telefone Celular = $tel_cel \n";
	                     $email_conteudo .= "Email = $email \n";
                         $email_conteudo .= "Endereço = $end \n";
                         $email_conteudo .= "Bairro = $bairro \n"; 
	                     $email_conteudo .= "Cidade = $cidade \n";
                         $email_conteudo .= "Estado = $estado \n";
                             
                         $email_conteudo .= "Data de Nascimento = $data_nasc \n"; 
	                     $email_conteudo .= "RG = $rg \n";
                         $email_conteudo .= "CPF = $cpf \n";
                         $email_conteudo .= "referência 01 = $ref01 \n";
                         $email_conteudo .= "referência 02 = $ref02 \n"; 
	                     $email_conteudo .= "referência 03 = $ref03 \n";
                         $email_conteudo .= "referência 04 = $ref04 \n";     
                             
 	                     //====================================================
 
	                     //Seta os Headers (Alerar somente caso necessario)
	                     //====================================================
	                     $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	                     //====================================================
 
 
	                     //Enviando o email
	                     //====================================================
	                     if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
		                     
                             echo "<script>alert('Foi enviado com sucesso $nome, em breve lhe responderemos ... Obrigado !');</script>";

	                    }
  	                    else{
		                     echo "</b>Falha no envio do E-Mail!</b>";
	                    }
	                     //====================================================
                        }	
                    ?>
                    <form action="<? $PHP_SELF; ?>" method="post">
                        <h1 class="col-md-12 text-center">Cadastro Aluguel Mesas e Cadeiras</h1>
                        <div class="form-group col-md-6">
                            <input name="nome" placeholder="Nome:" type="text" class="form-control" id="nome" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="sobrenome" placeholder="Sobrenome:" type="text" class="form-control" id="sobrenome" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="tel_fixo" placeholder="Telefone Fixo:" type="text" class="form-control" id="tel_fixo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="tel_cel" placeholder="Telefone Celular:" type="text" class="form-control" id="tel_cel" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="email" placeholder="Email:" type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="end" placeholder="Endereço:" type="text" class="form-control" id="end" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="bairro" placeholder="Bairro:" type="text" class="form-control" id="bairro" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="cidade" placeholder="Cidade:" type="text" class="form-control" id="cidade" required>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="estado" class="form-control" id="estado" required>
                                <option value="volvo">Selecione o Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="data_nasc" placeholder="Data de Nascimento:" type="text" class="form-control" id="data_nasc" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="rg" placeholder="Número da Identidade:" type="number" class="form-control" id="rg" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="cpf" placeholder="Número do CPF:" type="number" class="form-control" id="cpf" required>
                        </div>
                        <hr>
                        <p>Informe aqui suas 04 últimas referências desse serviço (Telefone).</p>
                        <div class="form-group col-md-6">
                            <input name="ref01" placeholder="Referência 01:" type="text" class="form-control" id="ref01" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="ref02" placeholder="Referência 02:" type="text" class="form-control" id="ref02" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="ref03" placeholder="Referência 03:" type="text" class="form-control" id="ref03" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="ref04" placeholder="Referência 04:" type="text" class="form-control" id="ref04" required>
                        </div>
                        <hr>
                        <p>Favor, enviar cópia do RG e do CPF escaneadas para o email contato@brasaexpress.com.br. <br>
                           Colocar seu nome e serviço de interesse no assunto.</p>
                        <hr>
                        <input class="submit-btn btn btn-primary" name="BTEnvia" type="submit" value="Enviar">
                        <div class="col-md-12">
                            <img class="img-responsive img-fluid" src="img/BrasaExpress-Logo-Menor.png" alt="">
                        </div>
                        <p class="p-a">.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>