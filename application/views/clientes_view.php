<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $titulo; ?></title>
        <meta charset="UTF-8" />
        <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() . 'assets/css/styles.css' ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body class="col-lg-12">
        <?php echo form_open('clientes/inserir', 'id="form-clientes"'); ?>
        <h2>Cadastrar novo cliente</h2>
        <label for="nome">Nome:</label><br/>
        <input placeholder="Digite seu nome" type="text" name="nome" value="<?php echo set_value('nome'); ?>"/>
        <div class="error"><?php echo form_error('nome'); ?></div>
        <label for="cpf">CPF:</label><br/>
        <input placeholder="Digite seu CPF XXX.XXX.XXX-XX" type="text" name="cpf" value="<?php echo set_value('cpf'); ?>"/>
        <div class="error"><?php echo form_error('nome'); ?></div>
        <label for="email">Email:</label><br/>
        <input placeholder="Digite seu e-mail" type="text" name="email" value="<?php echo set_value('email'); ?>"/>
        <div class="error"><?php echo form_error('email'); ?></div>
        <label for="telefone">Telefone:</label><br/>
        <input placeholder="Digite seu telefone (XX)XXXX-XXXX" type="text" name="telefone" value="<?php echo set_value('telefone'); ?>"/>
        <div class="error"><?php echo form_error('nome'); ?></div>
        <input type="submit" name="cadastrar" value="Cadastrar" />

        <?php echo form_close(); ?>
        
        <div id="grid-clientes">
            <h2>Editar cliente</h2>
            <ul>

                <?php foreach ($clientes as $cliente): ?>
                    <li>
                        <a title="Deletar" href="<?php echo base_url() . 'clientes/deletar/' . $cliente->id; ?>" onclick="return confirm('Confirma a exclusão deste registro?')"><button type="warning">Remover</button>></a>
                        <span> - </span>
                        <a title="Editar" href="<?php echo base_url() . 'clientes/editar/' . $cliente->id; ?>"><?php echo $cliente->nome; ?></a>
                        <span> - </span>
                        <span><?php echo $cliente->cpf; ?></span>
                        <span><?php echo $cliente->email; ?></span>
                        <span><?php echo $cliente->telefone; ?></span>
                    </li>
                <?php endforeach ?>

            </ul>
        </div>
    </body>
            <h3><a href="/crudci">SAIR</a></h3>
            <br>
                Desenvolvido por Guilherme P. Müller

</html>