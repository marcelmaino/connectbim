# 🚀 Guia de Deploy ConnectBIM na Umbler

## 📋 **Pré-requisitos**
- Conta na Umbler
- Repositório GitHub configurado: `marcelmaino/connectbim`
- Acesso ao painel administrativo da Umbler

## 🔧 **1. Configuração Git no Painel Umbler**

### **Conectar GitHub:**
1. **Painel Umbler** → Seu projeto → **"Deploy"** → **"Git"**
2. **Clique**: "Conectar com GitHub"
3. **Autorize** a Umbler no GitHub
4. **Selecione**: `marcelmaino/connectbim`
5. **Branch**: `master`
6. **✅ Ative**: "Deploy automático"

### **Configurações importantes:**
- **Document Root**: `/public` ⚠️ **OBRIGATÓRIO**
- **Build Command**: Vazio (por enquanto)
- **Deploy Branch**: `master`

## 🔐 **2. Configurar Variáveis de Ambiente (Secrets)**

### **Acessar:**
**Painel Umbler** → Seu projeto → **"Configurações"** → **"Variáveis de Ambiente"**

### **Adicionar variáveis:**

| Nome | Valor | Descrição |
|------|-------|-----------|
| `APP_NAME` | `ConnectBIM` | Nome da aplicação |
| `APP_ENV` | `production` | Ambiente de produção |
| `APP_KEY` | **Gerar nova** | Chave da aplicação |
| `APP_DEBUG` | `false` | Debug desabilitado |
| `APP_URL` | `https://seudominio.umbler.com` | ⚠️ Altere para seu domínio |
| `DB_CONNECTION` | `mysql` | Tipo de banco |
| `DB_HOST` | **Host MySQL da Umbler** | Fornecido pela Umbler |
| `DB_PORT` | `3306` | Porta padrão MySQL |
| `DB_DATABASE` | **Nome do seu banco** | Criado na Umbler |
| `DB_USERNAME` | **Usuário MySQL** | Fornecido pela Umbler |
| `DB_PASSWORD` | **Senha MySQL** | Fornecido pela Umbler |

## 🗄️ **3. Configurar Banco MySQL**

### **Criar banco:**
1. **Painel Umbler** → **"Banco de Dados"** → **"MySQL"**
2. **Criar novo banco** ou usar existente
3. **Anotar dados**:
   - Host/Servidor
   - Nome do banco
   - Usuário
   - Senha

### **Atualizar variáveis:**
- Insira os dados do MySQL nas variáveis `DB_*`

## ⚡ **4. Comandos Pós-Deploy**

### **SSH na Umbler:**
```bash
# Gerar chave da aplicação
php artisan key:generate

# Executar migrações
php artisan migrate

# Popular banco (opcional)
php artisan db:seed

# Limpar cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## 🔍 **5. Verificações**

### **Testar aplicação:**
- ✅ Site carrega sem erros
- ✅ Banco de dados conectado
- ✅ Assets carregando (CSS/JS)
- ✅ Formulários funcionando

### **Logs de erro:**
- **Painel Umbler** → **"Logs"** → **"Error Logs"**

## 🚨 **Problemas Comuns**

### **500 Error:**
- Verificar `APP_KEY` gerada
- Conferir permissões de pastas
- Checar logs de erro

### **Banco não conecta:**
- Verificar dados MySQL
- Testar conexão no painel
- Confirmar variáveis `DB_*`

### **Assets não carregam:**
- Confirmar `Document Root` = `/public`
- Verificar `APP_URL` correto

## 📝 **Após Deploy Bem-Sucedido**

1. ✅ **Testar todas as páginas**
2. ✅ **Verificar formulários de contato**
3. ✅ **Testar painel administrativo Voyager**
4. ✅ **Configurar domínio personalizado** (se necessário)

---

## 🆘 **Suporte**
Em caso de problemas:
- Verificar logs da Umbler
- Consultar documentação Laravel
- Suporte Umbler: suporte@umbler.com