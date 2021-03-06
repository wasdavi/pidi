<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cadastro de Produtos</title>
    </head>
    <body>
        <header>
            <nav class="menu">
                <ul class="menuFornecedor">
                    <li><a href="cadastroFornecedor.php">Fornecedor</a>
                    </li>
                    <li><a href="cadastroProduto.php">Produtos</a></li>
                    <li><a href="registroPedidoCozinha.php">Pedidos</a></li>
                    <li><a href="registroAquisicoes.php">Aquisições</a></li>
                    <li><a href="#">Relatórios</a>
                        <ul>
                            <!-- <li><a href="projecaoAquisicaoProdutos.php">Projeção para Aquisição de Produtos</a></li> -->
                            <li><a href="relatorioMonitoramentoAlteracoes.php">Monitoramento de Alterações</a></li>
                            <li><a href="relatorioProdutosEstoque.php">Produtos em Estoque</a></li>
                            <li><a href="relatorioProdutosEntregues1.php">Produtos Entregues</a></li>
                            <li><a href="relatorioPedidosCozinha.php">Pedidos da Cozinha</a></li>
                            <li><a href="relatorioSaidaProdutos1.php">Saída de Produtos</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="box">
            <form action="">
                <fieldset>
                    <legend><b>Cadastro de Produtos</b> </legend>
                    <br><br>
                    <div class="inputbox">
                        <input type="text" name="produto" id="produto" placeholder="Produto" class="inputUser" required> 
                        <input type="text" name="codigo_barras" id="codigo_barras" class="inputUser" placeholder="Código de Barras" required>
                    </div>
                    <br><br>
                    <div class="inputbox">
                        <input type="text" name="nota_fiscal" id="nota_fiscal" class="inputUser" placeholder="Nota fiscal" required>
                        <input type="text" name="valor" id="valor" class="inputUser" placeholder="Valor" required>
                        <input type="text" name="quantidade" id="quantidade" class="inputUser" placeholder="Quantidade" required>
                    </div>
                    <br><br>
                    <label for="" >Fornecedor:</label>
                        <select name="selecao" id="selecao" required>
                            <option value="#"></option>
                                <option value="dois_irmaos">Dosi Irmãos</option>
                                <option value="guimaraes">Guimarães</option>
                        </select>
                        <label for="" id="tipo">Categoria:</label>
                        <select name="selecao" id="selecao" required>
                            <option value="#"></option>
                            <option value="bebida">Bebidas</option>
                            <option value="comida">Comidas</option>
                        </select>
                    <br><br><br>
                    <div class="inputbox">
                    <label for="data_entrega"><b>Data de Entrega</b></label>
                    <input type="date" name="data_entrega" id="data_entrega" required>
                    <label for="data_compra"><b>Data de Compra</b></label>
                    <input type="date" name="data_compra" id="data_compra" required>
                    <label for="data_validade"><b>Data de Validade</b></label>
                    <input type="date" name="data_validade" id="data_validade" required>
                    </div>
                    <br><br>
                    <div class="inputbotom">
                        <input type="submit" name="submit" id="submit" value="Salvar">
                        <input type="submit" name="submit" id="submit" value="Consultar">
                        <input type="reset" name="limpar" id="submit" value="Limpar">
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
    </html>