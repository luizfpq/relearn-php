# Teste PHP

## 1 - Gere um banco de dados com mysql com seguintes entidades
    Produto 
    Produto descrição 1-n 
    Produto imagens 1-n
    Produto preço especial 1-n
    Categoria
    Categoria-Produto 1-n

### Tabela Produto 
- Todos campos pertinentes a venda de produtos a uma loja virtual

### Tabela Produto descrição
- Comportar a cardinalidade de 1 produto para n descrições e deve conter as referencia ao mesmo , com os campos pertinentes a descrição do produto

### Tabela Produto imagens
- Cardinalidade de 1 produto para n imagens e deve conter as referencia ao mesmo com os campos pertinentes a referencia da imagem

### Tabela Produto imagens
- Cardinalidade de 1 produto para n imagens e deve conter as referencia ao mesmo com os campos pertinentes a referencia da imagem

### Tabela Produto preço especial
- Cardinalidade de 1 produto para n preços e deve conter as referencia ao mesmo com os campos pertinentes a associação de preços especiais essa tabela deve ter particularidade de receber uma data de entrada da do preço especial 

### Tabela Categoria
- Campos pertinentes a categoria e deve permitir que cadastre categorias que são filhas de outra categoria 

### Tabela Categoria Produto
- Associação de categoria e produtos sendo que 1 produto pode estar e n categorias.

### Obs: toda criação do banco deve ser criado com as migrations do laravel




## 2 - Usando o frameworker laravel crie seeders para o preenchimentos das tabelas criadas anteriormente.


## 3 - Usando o laravel crie duas views que emitem uma loja virtual, todos CSS deve ser criados usando os pré compiladores less ou sass

        1 º - home:
            categorias e subcategorias
                carrinho não funcional
            uma listagem de produtos com alguma lógica empregada a sua escolha 
        2º - Ao clicar em qualquer produto deve ser transferido para uma pagina que ira mostrar o produto em detalhes com todas as features desenhadas no banco. 

## Bonus 

- Configure o docker para seu ambiente e faça com que tudo seja configurado automaticamente.

- Ao final das funcionalidade gere um projeto no git e uma release versão 1.0.0