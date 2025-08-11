# aula_php:

# Para a execução precisa instalar o Xamp ligar o apache colocar o projeto dentro da pasta C:\xampp\htdocs clicar em start no apache e em seguida no admin e inserir o endereço no navegador http://localhost/nome_da_pasta


# Atividade Prática: Analisando um Protótipo de E-commerce

**Objetivo:** Identificar os blocos de construção fundamentais de uma aplicação web (Backend e Front-end) analisando o código de um projeto de e-commerce funcional.

**Para o Aluno:** Olá, desenvolvedor(a)! Nesta atividade, você vai atuar como um detetive de código. Sua missão é explorar os arquivos do protótipo de e-commerce para encontrar e entender as peças que fazem tudo funcionar. Vamos mergulhar no código!

**Instruções:**

1. Tenha a estrutura de pastas do projeto aberta em seu editor de código (como o VS
Code).

2. Abra os arquivos:
principais: /public/index.php, /app/catalogo.php, /public/css/style.css e /app/pro
mocoes.csv.

3. Leia cada pergunta abaixo e procure a resposta diretamente nos arquivos. Anote o
nome do arquivo, o número da linha (se aplicável) e a sua resposta.

**Roteiro da Atividade**

**Parte 1: O Coração do PHP (Lógica do Back-end)**
O Back-end é responsável pela lógica, pelo processamento de dados e por tudo que acontece "nos bastidores". Vamos encontrá-lo no arquivo /app/catalogo.php.

# 1. Leitura de Dados Externos (.CSV):**

**Pergunta:** Para ler o arquivo promocoes.csv, o PHP usa uma estrutura de repetição que processa o arquivo linha por linha. Em /app/catalogo.php, qual é o comando que inicia essa  repetição e qual função é usada para ler cada linha do CSV?

**Resposta:** O comando que inicia a repetição é: while e o que faz a leitura de cada linha é o foreach

# 2. Estruturas de Condição (if/else):

**Pergunta:** Ainda em /app/catalogo.php, encontre o bloco de código que verifica **SE** um produto deve receber o desconto de 10%. Qual é a condição exata (o que está dentro dos parênteses do if) que o código usa para tomar essa decisão?

**Resposta:** if (isset($promocoes[$produto['id']]) && strtolower(trim($promocoes[$produto['id']])) == 'sim') 
se o produto com determinado id conter sim aplica o desconto de 10% coloquei ná formula o ****strtolower** para deixar os arquivo com letra minuscula e o **trim** para tirar os espaçamentos


**Parte 2: A Estrutura da Página (HTML no Front-end)**
O Front-end é a parte visual com a qual o usuário interage. A estrutura dessa parte é definida pelo HTML, que muitas vezes é gerado pelo PHP. Vamos investigar o arquivo /public/index.php.

# 1. Estruturas de Repetição (Gerando HTML):

**Pergunta:** Para que o site não precise ter o código HTML de cada um dos 6 produtos escrito manualmente, o PHP usa uma estrutura de repetição para "desenhar" cada produto na tela. Qual é o comando em /public/index.php que inicia essa repetição para exibir os produtos?

**Resposta:** <?php foreach ($produtos as $produto): ?>

**2. Exibindo Imagens:**

**Pergunta:** Qual é a tag HTML usada para mostrar a imagem de cada produto? 
E como o PHP insere o caminho da imagem dinamicamente dentro dessa tag? 
(Dica: procure por echo dentro da tag).

**Resposta:** <img src="<?php echo htmlspecialchars($produto['imagem']); ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>">


# 3. Adicionando Ícones:

**Pergunta:** No cabeçalho, temos ícones de busca, usuário e carrinho que não são arquivos de imagem (.jpg, .png). Como eles foram adicionados à página? Dê uma olhada na seção <head> e também na estrutura do <header> para encontrar as duas partes da resposta.

**Resposta:** foram adicionada com uma cdn da cloudflare
<!-- Link para a biblioteca de ícones Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


# Parte 3: O Estilo da Página (CSS no Front-end)
O CSS dá vida e cor ao HTML. Vamos investigar as conexões no
arquivo /public/css/style.css.

## 1. Conectando HTML e CSS:

**Pergunta:** O preço original riscado (quando há promoção) aparece em vermelho. Qual é o seletor CSS em style.css que aplica este estilo? Qual propriedade CSS é usada para criar o efeito "riscado"?

**Resposta:** o seletor foi a classe **.preco-original** {
  e o que inseriu a linha vermelha foi o **text-decoration: line-through;**
}

## 2. Interatividade com o Usuário:

**Pergunta:** Quando você passa o mouse sobre um card de produto, ele se move um pouco para cima. Qual seletor especial (chamado de pseudoclasse) é usado em style.css para aplicar um estilo apenas quando o mouse está sobre o elemento?

**Resposta:** 
.produto:hover {
  transform: translateY(-5px);
}

## Parte 4: A Magia da Responsividade
Responsividade é a capacidade de um site se adaptar a diferentes tamanhos de tela.

# 1. Layout Fluido:

**Pergunta:** O catálogo de produtos se ajusta sozinho, mostrando vários produtos por linha em telas grandes e apenas um em telas pequenas. No arquivo style.css, encontre o seletor .catalogo e identifique qual propriedade grid é a principal responsável por essa "mágica".

**Resposta:**
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));


# Parte 5: A Grande Questão (Back-end vs. Front-end)
Agora, vamos juntar tudo o que aprendemos.

# 1. Identificando os Papéis:

**Pergunta:** Com base em tudo que você analisou neste projeto, explique com suas próprias palavras qual é o papel do Back-end e qual é o papel do Front-end. Dê um exemplo claro de uma tarefa que é exclusiva do Back-end e uma que é exclusiva do Front-end neste projeto.

**Resposta:** O **Back-end** é como a "sala de máquinas" de um site. Ele lida com tudo o que acontece nos bastidores e que o usuário final geralmente não vê diretamente no projeto inclui Gerenciamento de Dados, que definem como o sistema funciona por exemplo, como aplicar um desconto, garante que os dados estejam seguros e que as operações sejam realizadas de forma correta, neste projeto, o arquivo app/catalogo.php é o coração do Back-end. Ele define os produtos e aplica a lógica de desconto lendo o arquivo promocoes.csv.

Já o **Front-end** é tudo aquilo com que o usuário interage diretamente no navegador: o design, os botões, as imagens, os textos e como tudo se organiza na tela. É a "interface" do site, apresentação visual defini como o conteúdo é exibido (cores, fontes, layout), interação do usuário lida com cliques, digitação e outras ações do usuário, experiência do usuário (UX): Garantir que o site seja intuitivo e agradável de usar, nesse projeto, os arquivos public/index.php e public/css/style.css representam o Front-end.
