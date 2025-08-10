# aula_php:

# Atividade Prática: Analisando um Protótipo de E-commerce

**Objetivo:** Identificar os blocos de construção fundamentais de uma aplicação web (Backend e Front-end) analisando o código de um projeto de e-commerce funcional.

**Para o Aluno:** Olá, desenvolvedor(a)! Nesta atividade, você vai atuar como um detetive de
código. Sua missão é explorar os arquivos do protótipo de e-commerce para encontrar e
entender as peças que fazem tudo funcionar. Vamos mergulhar no código!

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
O Back-end é responsável pela lógica, pelo processamento de dados e por tudo que
acontece "nos bastidores". Vamos encontrá-lo no arquivo /app/catalogo.php.

# 1. Leitura de Dados Externos (.CSV):**

**Pergunta:** Para ler o arquivo promocoes.csv, o PHP usa uma estrutura de
repetição que processa o arquivo linha por linha. Em /app/catalogo.php,
qual é o comando que inicia essa repetição e qual função é usada para ler
cada linha do CSV?

# 2. Estruturas de Condição (if/else):

**Pergunta:** Ainda em /app/catalogo.php, encontre o bloco de código que
verifica **SE** um produto deve receber o desconto de 10%. Qual é a
condição exata (o que está dentro dos parênteses do if) que o código usa
para tomar essa decisão?


**Parte 2: A Estrutura da Página (HTML no Front-end)**
O Front-end é a parte visual com a qual o usuário interage. A estrutura dessa parte é
definida pelo HTML, que muitas vezes é gerado pelo PHP. Vamos investigar o
arquivo /public/index.php.

# 1. Estruturas de Repetição (Gerando HTML):

**Pergunta:** Para que o site não precise ter o código HTML de cada um dos 6
produtos escrito manualmente, o PHP usa uma estrutura de repetição para "desenhar"
cada produto na tela. Qual é o comando em /public/index.php que inicia essa repetição para exibir os produtos?

**2. Exibindo Imagens:**

**Pergunta:** Qual é a tag HTML usada para mostrar a imagem de cada produto? 
E como o PHP insere o caminho da imagem dinamicamente dentro dessa tag? 
(Dica: procure por echo dentro da tag).

# 3. Adicionando Ícones:

**Pergunta:** No cabeçalho, temos ícones de busca, usuário e carrinho que
não são arquivos de imagem (.jpg, .png). Como eles foram adicionados à
página? Dê uma olhada na seção <head> e também na estrutura do <header> para 
encontrar as duas partes da resposta.

# Parte 3: O Estilo da Página (CSS no Front-end)
O CSS dá vida e cor ao HTML. Vamos investigar as conexões no
arquivo /public/css/style.css.

## 1. Conectando HTML e CSS:

**Pergunta:** O preço original riscado (quando há promoção) aparece em
vermelho. Qual é o seletor CSS em style.css que aplica este estilo? Qual
propriedade CSS é usada para criar o efeito "riscado"?

## 2. Interatividade com o Usuário:

**Pergunta:** Quando você passa o mouse sobre um card de produto, ele se
move um pouco para cima. Qual seletor especial (chamado de pseudoclasse) é usado em style.css para aplicar um estilo apenas quando o
mouse está sobre o elemento?

## Parte 4: A Magia da Responsividade
Responsividade é a capacidade de um site se adaptar a diferentes tamanhos de tela.

# 1. Layout Fluido:

**Pergunta:** O catálogo de produtos se ajusta sozinho, mostrando vários
produtos por linha em telas grandes e apenas um em telas pequenas. No
arquivo style.css, encontre o seletor .catalogo e identifique qual
propriedade grid é a principal responsável por essa "mágica".

# Parte 5: A Grande Questão (Back-end vs. Front-end)
Agora, vamos juntar tudo o que aprendemos.

# 1. Identificando os Papéis:

**Pergunta:** Com base em tudo que você analisou neste projeto, explique
com suas próprias palavras qual é o papel do Back-end e qual é o papel
do Front-end. Dê um exemplo claro de uma tarefa que é exclusiva do
Back-end e uma que é exclusiva do Front-end neste protótipo.
