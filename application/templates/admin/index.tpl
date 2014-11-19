{include file="admin/inc/header.tpl"}
<div class="container">
    <div class="row">
        <div class="span4">
            <h3 class="label">Últimas entradas</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>Produto</th>
                       <th>Valor</th>
                       <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$entradas item=entrada}
                    <tr>
                        <td>{$produtoModel->getById($entrada->produto_id)->nome}</td>
                        <td>R$ {numberFormat($entrada->valor)}</td>
                        <td>{$entrada->quantidade}</td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
            <p>
                <a href="{base_url()}admin/entrada/cadastrar/" class="btn btn-primary">Cadastrar Entrada</a>
                <a href="{base_url()}admin/entrada/listar/" class="btn btn-success">Ver Todas</a>
            </p>
        </div>
        <div class="span4">
            <h3 class="label">Últimas Saídas</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>Produto</th>
                       <th>Cliente</th>
                       <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$saidas item=saida}
                    <tr>
                        <td>{$produtoModel->getById($saida->produto_id)->nome}</td>
                        <td>{$cadastroModel->getById($saida->cadastro_id)->nome}</td>
                        <td>R$ {numberFormat($saida->valor)}</td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
            <p>
                <a href="{base_url()}admin/saida/cadastrar/" class="btn btn-primary">Cadastrar Saída</a>
                <a href="{base_url()}admin/saida/listar/" class="btn btn-success">Ver Todas</a>
            </p>
        </div>
        <div class="span4">
            <h3 class="label">Últimos Produtos</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>Nome</th>
                       <th>Estoque</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$produtos item=produto}
                    <tr>
                        <td>{$produto->nome}</td>
                        <td>{$produto->estoque}</td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
            <p>
                <a href="{base_url()}admin/produto/cadastrar/" class="btn btn-primary">Cadastrar Produto</a>
                <a href="{base_url()}admin/produto/listar/" class="btn btn-success">Ver Todos</a>
            </p>
        </div>
        <div class="span4">
            <h3 class="label">Últimos Cadastros</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>Nome</th>
                       <th>Sobrenome</th>
                       <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$cadastros item=cadastro}
                    <tr>
                        <td>{$cadastro->nome}</td>
                        <td>{$cadastro->sobrenome}</td>
                        <td>{$cadastro->email}</td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
            <p>
                <a href="{base_url()}admin/cadastro/cadastrar/" class="btn btn-primary">Cadastrar Cliente</a>
                <a href="{base_url()}admin/cadastro/listar/" class="btn btn-success">Ver Todos</a>
            </p>
        </div>
    </div>
    
{include file="admin/inc/footer.tpl"}    