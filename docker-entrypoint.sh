#!/bin/bash

# Aguardar banco de dados estar disponível
echo "Aguardando banco de dados..."
until php -r "try { new PDO('mysql:host=db;port=3306', 'connectbim_user', 'connectbim_pass'); echo 'Conectado\n'; exit(0); } catch(Exception \$e) { exit(1); }" 2>/dev/null; do
  echo "Aguardando MySQL..."
  sleep 2
done
echo "Banco de dados conectado!"

# Copiar .env se não existir
if [ ! -f .env ]; then
  echo "Copiando .env.example para .env..."
  cp .env.example .env
fi

# Gerar chave da aplicação se não existir
if ! grep -q "APP_KEY=base64:" .env; then
  echo "Gerando chave da aplicação..."
  php artisan key:generate
fi

# Executar migrações
echo "Executando migrações..."
php artisan migrate --force

# Compilar assets de produção na primeira execução
if [ ! -f "public/css/app.css" ]; then
  echo "Compilando assets Laravel Mix..."
  npm run production
fi

# Compilar assets customizados
echo "Compilando assets Gulp..."
npx gulp sass plugincss alljs

# Limpar cache
php artisan config:clear
php artisan cache:clear
php artisan view:clear

echo "Aplicação iniciada com sucesso!"

# Executar comando padrão
exec "$@"