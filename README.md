# Sistema de Gestão de Funcionários

Sistema web para cadastro, listagem, edição, visualização e exclusão de funcionários.  
Desenvolvido em Laravel com interface responsiva usando Bootstrap e interatividade da lista com DataTables.

---

## 🔧 Funcionalidades

- Cadastro de funcionários com nome, e-mail, CPF, cargo, data de admissão e salário
- Edição de informações
- Exclusão com confirmação em modal
- Visualização detalhada de dados em modal
- Filtro em tempo real com DataTables
- Validação de dados com mensagens de erro

---

## 🧰 Tecnologias Utilizadas

- PHP 8+
- Laravel 10+
- MySQL ou SQL Server
- Bootstrap 5
- DataTables
- Composer

---

## 🚀 Como instalar

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repo.git
   cd nome-do-repo
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Copie o `.env` e configure com seu banco:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure o banco no `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Rode as migrations:
   ```bash
   php artisan migrate
   ```

6. (Opcional) Popule com dados fake para testes:
   ```bash
   php artisan db:seed
   ```

7. Inicie o servidor:
   ```bash
   php artisan serve
   ```

---

## 📸 Capturas de Tela

> (Adicione abaixo as imagens ou GIFs da aplicação funcionando)

- **📋 Listagem de Funcionários**
- **➕ Modal de Criação**
- **🔍 Modal de Visualização**
- **✏️ Modal de Edição**
- **🗑️ Modal de Exclusão**

---

## 📄 Licença

Este projeto está sob a licença MIT.  
Sinta-se à vontade para usar, melhorar e compartilhar.