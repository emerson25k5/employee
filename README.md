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

- **📋 Listagem de Funcionários**
  ![image](https://github.com/user-attachments/assets/9c747625-d603-4506-a634-db5d4fd497a3)

  
- **➕ Modal de Criação**
  ![image](https://github.com/user-attachments/assets/00771231-3474-4f54-a3c2-2f6a98fdf655)

  
- **🔍 Modal de Visualização**
  ![image](https://github.com/user-attachments/assets/1ae011f0-a544-43bf-b723-05783586c25b)
  

- **✏️ Modal de Edição**
![image](https://github.com/user-attachments/assets/471b9e30-cad3-46aa-99aa-56e63d61a000)


- **🗑️ Modal de Exclusão**
  ![image](https://github.com/user-attachments/assets/62280997-cb41-4f87-b01f-c1c7d24a633b)


## 📄 Licença

Emerson Santos (emerson25k5)

Este projeto está sob a licença MIT.  
Sinta-se à vontade para usar, melhorar e compartilhar.
