# Dog API - Consumo de API com PHP

Projeto simples desenvolvido para a atividade prática da disciplina **Programação para Internet I**.

A aplicação consome a **Dog API** usando PHP e exibe imagens de cachorros na página usando HTML, CSS e JavaScript.

---

Autoras: Karine Rodrigues Fialho e Luiza Batista Sirqueira

## Objetivo

Criar uma página web simples capaz de:

- Consumir uma API pública usando PHP;
- Retornar dados em formato JSON;
- Exibir imagens retornadas pela API;
- Permitir uma busca simples por raça;
- Mostrar informações básicas na tela;
- Tratar erros simples;
- Ter uma estilização básica com CSS.

---

## API utilizada

**Dog API**

URL oficial:

```txt
https://dog.ceo/dog-api/

## Exemplo de endpoint usado:

https://dog.ceo/api/breeds/image/random/3

## Exemplo de busca por raça:

https://dog.ceo/api/breed/husky/images/random/3

## Estrutura do projeto
projeto-api/
├── index.html
├── style.css
├── script.js
├── api.php
└── README.md
