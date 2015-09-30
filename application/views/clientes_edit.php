<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
    <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() . 'assets/css/styles.css' ?>" rel="stylesheet" type="text/css"/>
</head>
<body class="col-lg-12">
	<?php echo form_open('clientes/atualizar', 'id="form-clientes"'); ?>
 <h2>Editar cliente</h2>
	<input type="hidden" name="id" value="<?php echo $dados_cliente[0]->id; ?>"/>
 
	<label for="nome">Nome:</label><br/>
	<input type="text" name="nome" value="<?php echo $dados_cliente[0]->nome; ?>"/>
	<div class="error"><?php echo form_error('nome'); ?></div>
        
        <label for="cpf">CPF:</label><br/>
	<input type="text" name="cpf" value="<?php echo $dados_cliente[0]->cpf; ?>"/>
	<div class="error"><?php echo form_error('cpf'); ?></div>
 
	<label for="email">Email:</label><br/>
	<input type="text" name="email" value="<?php echo $dados_cliente[0]->email; ?>"/>
	<div class="error"><?php echo form_error('email'); ?></div>
        
        <label for="telefone">Telefone:</label><br/>
	<input type="text" name="telefone" value="<?php echo $dados_cliente[0]->telefone; ?>"/>
	<div class="error"><?php echo form_error('telefone'); ?></div>
 
	<input type="submit" name="atualizar" value="Atualizar" />
 
	<?php echo form_close(); ?>
</body>
</html>