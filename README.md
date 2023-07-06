<p align="center">
     <a href="https://pep.ifsp.edu.br/">
    <img src="lacif.png" alt="IFSP_LIFE">
</p>

# **LACIF** - *Sistema Sistema Web para Agendamento e Gerenciamento de Exames de Laboratório de Análises Clínicas*

<h2> Linguagens e Ferramentas Utilizados no Projeto: <img src = "https://raw.githubusercontent.com/rahulbanerjee26/githubProfileReadmeGenerator/main/gifs/code.gif" width = 32px height=32px> </h2>
<a href= https://github.com/?tab=repositories&q=&type=&language=java&sort= > <img width ='32px' height='32px' src ='https://raw.githubusercontent.com/rahulbanerjee26/githubAboutMeGenerator/main/icons/java.svg'> </a>
<a href= https://github.com/?tab=repositories&q=&type=&language=mysql&sort= > <img width ='32px' height='32px' src ='https://raw.githubusercontent.com/rahulbanerjee26/githubAboutMeGenerator/main/icons/mysql.svg'> </a>



# Capítulo 1 - INTRODUÇÃO
**Descrição do Sistema:**<br>


**Objetivos:**<br>
-> **Principais Objetivos**<br>
• Sistema de Gerenciamento Eficaz.

# Capítulo 2 - DOCUMENTAÇÃO
**Descrição das Documentações:**<br>
o Levantamento de Dados |  ✅<br>  
o Escopo |  ✅<br> 
o Modelo Lógico |  ✅<br>
o Modelo Fisico |  ✅<br>
o Diagrama de Classes |  ✅<br>
o Diagrama Caso de Uso |  ✅<br>
o Diagrama Caso de Atividade |  ✅<br>
o Doc. Semana Nacional de Ciência e Tecnologia |  ✅<br>

# Capítulo 3 - DEFINIÇÃO DE FUNÇÕES 
**Descrição das Funções**
Todos as funções que serão implementadas no sistema.
**Lista de Funções:**<p>

o Função Fundamental 1.0 - Efetuar Compra

    Descrição » Essa função permite ao administrador incluir um novo pedido para
     um determinado fornecedor. Quando é efetuado uma nova compra, é gerado informações sobre o pedido dos itens comprados, como também é realizado a atualização do estoque. Essa função também permite que a compra possa ser alterada.
     
    Itens de Informações » 
     - Identificação da Compra - Código numérico com no máximo 4 casas;
     - Identificação do Fornecedor - Código numérico com no máximo 4 casas;
     - Valor da compra - conjunto numérico;
     - Forma de Pagamento – texto com tamanho máximo de 45;
     - Data de Compra - dd/mm/aaaa;<p>
     
     -PARA CADA TEM COMPRADO » 
     - Identificação da Compra – Código numérico com no máximo 4 casas;
     - Identificação do Produto – Código numérico com no máximo 4 casas;
     - Quantidade – conjunto numérico;
     - Preço – Conjunto numérico;

o Função Fundamental 1.1 - Efetuar Pagamento Compra

    Descrição » Essa função tem como objetivo realizar o pagamento de uma compra, registrando as informações relevantes para esse processo. A função      requer os seguintes itens de informações:
     
    Itens de Informações » 
     - Identificação da Compra – Código numérico com no máximo 4 casas;
     - Identificação do Caixa – Código numérico com no máximo 4 casas;
     - Parcela da Compra – conjunto numérico;
     - Data de Vencimento da Parcela – dd/mm/aaaa;
     - Valor da Compra (Parcela) – conjunto numérico;

o Função Fundamental 1.2 - Efetuar Venda

    Descrição » Essa função permite ao funcionário incluir uma nova venda para um determinado cliente. Quando é efetuada uma nova venda, é gerada informação sobre o pagamento dos itens comprados, como também é realizada a atualização do estoque. Essa função também permite que a venda possa ser excluída ou alterada.

    Itens de Informações » 
     - Identificação da Venda – Código numérico com no máximo 4 casas;
     - Data da venda - dd/mm/aaaa;
     - Valor da venda - conjunto numérico;
     - Convênio – texto com tamanho máximo de 45;
     - Forma de Pagamento – texto com tamanho máximo de 45;

     PARA CADA ITEM VENDIDO »
     - Identificação da Venda – Código numérico com no máximo 4 casas;
     - Identificação do Produto – Código numérico com no máximo 9 casas;
     - Preço – Conjunto numérico;
     - Quantidade do Produto – Valor numérico inteiro;

o Função Fundamental 1.3 - Gerenciar Caixa

     Descrição » Essa função permite ao funcionário abrir e fechar o caixa.
     
    Itens de Informações » 
     - Código do Caixa – dd/mm/aaaa;
     - Status – texto com tamanho máximo 45;
     - Horário de abertura - hh;mm:ss;
     - Valor de abertura – conjunto numérico;
     - Total de entradas – conjunto numérico;
     - Horário de fechamento - hh;mm:ss;
     - Total de saídas – conjunto numérico;
     - Saldo – conjunto numérico; <p>

     PARA CADA SANGRIA/SUPLEMENTAÇÃO »
     - Código do Caixa – conjunto numérico;
     - Código Movimentação – conjunto numérico;
     - Motivo – texto com tamanho máximo de 250;
     - Valor – conjunto numérico;
     - Tipo de Movimentação – texto com tamanho máximo de 45;
    
o Função Básica 1.0 - Manter itens

    Descrição » Essa função permite a consulta dos itens do estabelecimento como, também, alteração e exclusão

    Itens de Informações » 
     - Código do Item - conjunto numérico;
     - Nome - texto com tamanho máximo de 255;
     - Categoria - texto com tamanho máximo de 255;
     - Dosagem – texto com tamanho máximo de 255;
     - Descrição – texto com tamanho máximo de 255;
     - Lote – conjunto numérico;
     - Data de Fabricação – dd/mm/aaaa;
     - Data de Validade – dd/mm/aaaa;
     - Quantidade – conjunto numérico;
     - Valor Unitário – conjunto numérico;

o Função Básica 1.1 - Manter Fornecedores

    Descrição » Essa função permite a consulta dos dados dos fornecedores como, também, a inclusão, alteração e exclusão

    Itens de Informações » 
     - Código Fornecedor – conjunto numérico;
     - Nome – texto com tamanho máximo de 45;
     - CNPJ – texto com tamanho máximo de 20;
     - Telefone – texto com tamanho máximo de 20;
     - E-mail – texto com tamanho máximo de 45;
     - Responsável – texto com tamanho máximo de 45;
     - Endereço – texto com tamanho máximo de 45;
     - Cidade – texto com tamanho máximo de 45;
     - CEP – texto com tamanho máximo de 12;
     - UF – texto com tamanho máximo de 20;

o Função Básica 1.2 - Manter Funcionários

    Descrição » Essa função permite a consulta dos dados de um funcionario, como também, a inclusão, alteração e exclusão.

    Itens de Informações » 
     - Código Funcionário – conjunto numérico;
     - Nome – texto com tamanho máximo de 255;
     - CPF – conjunto numérico;
     - Nível (Funcionário ou Administrador) – texto com tamanho máximo de 45;
     - Telefone – texto com tamanho máximo de 20;
     - Endereço – texto com tamanho máximo de 45;
     - Cidade – texto com tamanho máximo de 45;
     - CEP – texto com tamanho máximo de 12;
     - UF – texto com tamanho máximo de 20;
     - Salário – conjunto numérico;
     - Login – texto com tamanho máximo de 45;
     - Senha – texto com tamanho máximo de 45;

o Função Básica 1.3 - Manter Convênios

    Descrição » Essa função permite a consulta dos dados de um dos convênios, como, também, a inclusão, alteração e exclusão

    Itens de Informações » 
     - Código do Convênio - conjunto numérico;
     - Nome - texto com tamanho máximo de 255;
     - Email – texto com tamanho máximo de 255;
     - CNPJ – texto com tamanho máximo de 20;
     - Endereço – texto com tamanho máximo de 255;
     - Telefone – texto com tamanho máximo de 255;
     - Desconto (%) - conjunto numérico;

o Função Básica 1.4 - Manter Movimentação

    Descrição » Essa função permite a consulta dos dados da despesa, como, também, a inclusão e exclusão

    Itens de Informações » 
     - Código da Movimentação – conjunto numérico;
     - Motivo da Movimentação – texto com tamanho máximo de 200;
     - Tipo da Movimentação – texto com tamanho máximo de 255;
     - Valor da Movimentação – conjunto numérico;
     - Código do Caixa – conjunto numérico
    
o Função Saída 1.0 - Gerar Relatório de itens

        Descrição » Essa função emite um relatório que permite a visualização de todos os itens com o estoque abaixo do mínimo.

    Itens de Informações » 
    - Código do Produto - conjunto numérico;
    - Nome do Produto - texto com tamanho máximo de 45;
    - Dosagem do Produto (se tiver) - conjunto numérico;
    - Quantidade do Produto - conjunto numérico;
    - Valor unitário do Produto - conjunto numérico;

o Função Saída 1.1 - Gerar Relatório de Compra

    Descrição » Essa função emite um relatório de todas as compras feitas dentro de um determinado período de tempo.
        
    Itens de Informações » 
     - Identificação da Compra - Código numérico com no máximo 4 casas
     - Identificação do Fornecedor - Código numérico com no máximo 4 casas
     - Valor da compra - conjunto numérico;
     - Forma de Pagamento – texto com tamanho máximo de 45;
     - Data de Compra - dd/mm/aaaa;<p>
     
     PARA CADA TEM COMPRADO » 
     - Identificação da Compra – Código numérico com no máximo 4 casas;
     - Identificação do Produto – Código numérico com no máximo 4 casas;
     - Quantidade – conjunto numérico;
     - Preço – Conjunto numérico;
     - Subtotal – Conjunto numérico;

o Função Saída 1.2 - Gerar Relatório de Venda

    Descrição » Essa função emite um relatório de todas as vendas feitas dentro de um determinado período de tempo.

    Itens de Informações » 
     - Identificação da Venda – Código numérico com no máximo 4 casas;
     - Data da venda - dd/mm/aaaa;
     - Valor da venda - conjunto numérico;
     - Convênio – texto com tamanho máximo de 45;
     - Forma de Pagamento – texto com tamanho máximo de 45;<p>
     
     PARA CADA ITEM VENDIDO » 
     - Identificação da Venda – Código numérico com no máximo 4 casas;
     - Identificação do Produto – Código numérico com no máximo 9 casas
     - Preço – Conjunto numérico
     - Quantidade do Produto – Valor numérico inteiro
     - Subtotal – Conjunto numérico

# Capítulo 5 - CONCLUSÕES
 Este projeto foi projetado com uma alta usabilidade, de forma que os usuários não terão dificuldades em utilizar nenhuma das funcionalidades. O sistema, em geral otimiza as atividades da rede. O ganho de produtividade e a redução do tempo de entrega dos resultados são muito expressivos. Reduzindo erros procedimentais. Espera-se que o projeto venha a ser concluído com todas as funções até dezembro de 2023.

## Stack utilizada

**Front-end:** Java

**Back-end:** MySQL
