# Atividade-3-Desafio-Verificador-de-Maioridade
# 🚀 Desafio 1 — Verificador de Maioridade

## 📌 Sobre o projeto

Este projeto foi desenvolvido em **PHP** com o objetivo de criar uma página simples para verificar se uma pessoa é maior de idade.

O sistema solicita o **nome** e o **ano de nascimento** do usuário. A partir dessas informações, calcula a idade e verifica se a pessoa possui **18 anos ou mais**.

Quando o acesso é permitido, o nome e a idade do usuário são registrados automaticamente no arquivo `log_acessos.txt`.

---

## 🎯 Objetivo

O objetivo principal do projeto é praticar conceitos básicos de programação em PHP, como:

* Utilização de formulários HTML;
* Recebimento de dados através do método `POST`;
* Utilização de variáveis;
* Cálculo de idade;
* Estruturas condicionais `if` e `else`;
* Exibição de mensagens;
* Criação e utilização de arquivos de texto;
* Registro de informações utilizando PHP.

---

## ⚙️ Funcionamento

O sistema funciona seguindo algumas etapas:

1. O usuário informa seu **nome**.

2. O usuário informa seu **ano de nascimento**.

3. O formulário é enviado através do método `POST`.

4. O PHP recebe os dados enviados.

5. O sistema calcula a idade com base no ano atual.

6. O sistema verifica se a idade é maior ou igual a 18 anos.

7. Se for maior de idade, o sistema exibe:

   **"Acesso permitido, [Nome]!"**

8. O nome e a idade são salvos no arquivo `log_acessos.txt`.

9. Caso a pessoa tenha menos de 18 anos, o sistema exibe:

   **"Acesso negado, [Nome]!"**

---

## 🧩 Estrutura do projeto

```text
5a_desafio1/
│
├── index.php
├── log_acessos.txt
└── README.md
```

### 📄 `index.php`

É o arquivo principal do projeto.

Nele estão presentes:

* O código PHP responsável pelo processamento;
* O formulário HTML;
* O cálculo da idade;
* A verificação da maioridade;
* A mensagem de acesso;
* O registro dos usuários autorizados.

### 📄 `log_acessos.txt`

Arquivo utilizado para armazenar os usuários que tiveram o acesso permitido.

Os registros são salvos no seguinte formato:

```text
Nome - idade anos
```

Exemplo:

```text
Samilly - 18 anos
Maria - 25 anos
João - 30 anos
```

### 📄 `README.md`

Este arquivo apresenta as informações, objetivos e funcionamento do projeto.

---

## 💻 Tecnologias utilizadas

### HTML

Utilizado para criar a estrutura da página e o formulário de entrada de dados.

### PHP

Utilizado para:

* Receber os dados do formulário;
* Calcular a idade;
* Verificar a maioridade;
* Exibir as mensagens;
* Registrar os acessos permitidos.

### Arquivo TXT

O arquivo `log_acessos.txt` é utilizado para armazenar os registros dos acessos permitidos.

---

## 📝 Principais partes do código

### Recebendo os dados

O sistema verifica se o formulário foi enviado através do método `POST`:

```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
```

Depois, recebe o nome e o ano de nascimento:

```php
$nome = $_POST['nome'];
$ano = $_POST['ano_nascimento'];
```

---

### 🧮 Cálculo da idade

A idade é calculada utilizando o ano atual:

```php
$idade = date('Y') - $ano;
```

O `date('Y')` retorna o ano atual e, a partir dele, é subtraído o ano de nascimento informado pelo usuário.

---

### ✅ Verificação da maioridade

O sistema verifica se a idade é igual ou superior a 18:

```php
if ($idade >= 18) {
```

Quando a condição é verdadeira, o sistema permite o acesso:

```php
$mensagem = "Acesso permitido, $nome!";
```

---

### 🚫 Acesso negado

Caso a idade seja menor que 18 anos, o sistema executa o `else`:

```php
else {
    $mensagem = "Acesso negado, $nome!";
}
```

---

### 📂 Registro no arquivo

Quando o acesso é permitido, o sistema cria uma linha contendo o nome e a idade:

```php
$linha = "$nome - $idade anos\n";
```

Depois, utiliza `file_put_contents()` para adicionar essa informação ao arquivo:

```php
file_put_contents('log_acessos.txt', $linha, FILE_APPEND);
```

O `FILE_APPEND` permite adicionar novos registros sem apagar os dados que já estavam no arquivo.

---

## 🖥️ Exemplo de utilização

### Exemplo 1 — Maior de idade

**Nome:**

```text
Samilly
```

**Ano de nascimento:**

```text
2008
```

**Resultado:**

```text
Acesso permitido, Samilly!
```

O registro também será adicionado ao arquivo:

```text
Samilly - 18 anos
```

---

### Exemplo 2 — Menor de idade

**Nome:**

```text
João
```

**Ano de nascimento:**

```text
2012
```

**Resultado:**

```text
Acesso negado, João!
```

Nesse caso, o usuário **não será registrado** no arquivo `log_acessos.txt`.

---

## ▶️ Como executar o projeto

Para executar o projeto, é necessário utilizar um ambiente que permita rodar PHP, como **XAMPP**, **WAMP**, **Laragon** ou outro servidor local compatível.

### Passo 1

Coloque a pasta do projeto dentro da pasta do servidor local.

### Passo 2

Certifique-se de que o arquivo esteja organizado desta forma:

```text
index.php
log_acessos.txt
README.md
```

### Passo 3

Inicie o servidor PHP pelo ambiente utilizado.

### Passo 4

Abra o projeto no navegador.

### Passo 5

Preencha:

* Nome;
* Ano de nascimento.

Depois clique em:

**Verificar**

---

## 📊 Regras do sistema

| Idade            | Resultado          | Registro |
| ---------------- | ------------------ | -------- |
| 18 anos ou mais  | ✅ Acesso permitido | Sim      |
| Menos de 18 anos | 🚫 Acesso negado   | Não      |

---

## 📁 Registro dos acessos

Somente os usuários que possuem **18 anos ou mais** são adicionados ao arquivo `log_acessos.txt`.

O sistema utiliza:

```php
FILE_APPEND
```

para manter os registros anteriores e adicionar os novos usuários ao final do arquivo.

---

## 🎓 Conteúdos praticados

Com este desafio, foram praticados conceitos importantes de desenvolvimento web com PHP:

* Variáveis;
* Formulários;
* HTML;
* PHP;
* Método `POST`;
* `$_POST`;
* `$_SERVER`;
* Estrutura `if/else`;
* Operadores de comparação;
* Funções de data;
* Manipulação de arquivos;
* `file_put_contents()`;
* `FILE_APPEND`;
* Exibição de mensagens com PHP.

---

## 👩‍💻 Autoria

**Desafio 1 — Verificador de Maioridade**

Projeto desenvolvido para fins acadêmicos, com o objetivo de praticar programação em PHP e manipulação de formulários e arquivos.

---

## 📌 Conclusão

O projeto apresenta uma aplicação simples de verificação de maioridade utilizando PHP. A aplicação recebe os dados do usuário, realiza o cálculo da idade e, de acordo com o resultado, permite ou nega o acesso.

Além disso, o projeto demonstra como informações podem ser armazenadas em um arquivo de texto utilizando PHP, permitindo manter um registro dos usuários que tiveram o acesso permitido.
