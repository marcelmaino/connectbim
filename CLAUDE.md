# CLAUDE.md

Este arquivo fornece orientações para o Claude Code (claude.ai/code) ao trabalhar com código neste repositório.

## Instruções Gerais

**IMPORTANTE: Comunicações, comentários e instruções devem sempre utilizar o português do Brasil como linguagem oficial.**

## Visão Geral do Projeto

Esta é uma aplicação web Laravel 7.x para ConnectBIM, um site de empresa de construção que exibe projetos ("obras"), permite formulários de contato e funcionalidade de candidaturas a vagas. O projeto usa Voyager como painel administrativo para gerenciamento de conteúdo.

## Comandos de Desenvolvimento

### Configuração Docker (Recomendado)

**Iniciar ambiente completo:**
```bash
docker-compose up -d
```

**Serviços disponíveis:**
- Aplicação Laravel: http://localhost:8000
- phpMyAdmin: http://localhost:8080
- MySQL: localhost:3306

**Comandos úteis:**
- `docker-compose down` - Parar todos os serviços
- `docker-compose logs app` - Ver logs da aplicação
- `docker-compose exec app bash` - Acessar container da aplicação
- `docker-compose exec app php artisan migrate` - Executar migrações
- `docker-compose exec app php artisan db:seed` - Popular banco de dados

### Sistema de Build Frontend
O projeto usa tanto Laravel Mix quanto Gulp para compilação de assets:

**Laravel Mix (para assets do Laravel):**
- `npm run dev` - Build de desenvolvimento
- `npm run watch` - Observar arquivos por mudanças
- `npm run production` - Build de produção

**Gulp (para assets do site):**
- `gulp` - Executar tarefas padrão (sass, plugincss, alljs, watch)
- `gulp sass` - Compilar SCSS para CSS
- `gulp watch` - Observar mudanças nos assets

### Desenvolvimento Local (Alternativo)
- `php artisan serve` - Iniciar servidor de desenvolvimento
- `php artisan migrate` - Executar migrações do banco de dados
- `php artisan db:seed` - Popular banco de dados com dados iniciais
- `composer install` - Instalar dependências PHP

### Testes
- `./vendor/bin/phpunit` - Executar testes PHPUnit

## Arquitetura

### Modelos Principais
- `Obra` - Projetos de construção com fotos, status e detalhes
- `Banner` - Banners da página inicial
- `SiteMessage` - Submissões de formulário de contato
- `TrabalheConosco` - Submissões de candidaturas a vagas

### Estrutura Frontend
- Assets principais do site em `public/assets-site/`
- Arquivos fonte SCSS em `public/assets-site/scss/`
- Templates Blade em `resources/views/site/`
- Site usa CSS/JS customizado com bibliotecas como AOS, Swiper e GSAP

### Painel Administrativo
- Usa o pacote TCG Voyager para gerenciamento de conteúdo
- Rotas administrativas gerenciadas pelo Voyager
- Seeders do banco incluem configuração do Voyager

### Banco de Dados
- Migrações padrão do Laravel em `database/migrations/`
- Migrações customizadas para obras, banners, mensagens do site e candidaturas
- Usa factories e seeders para dados de desenvolvimento

## Observações de Desenvolvimento

- O projeto mistura Laravel Mix (para assets do framework) com Gulp (para assets customizados do site)
- Assets frontend estão em `public/assets-site/` ao invés da estrutura padrão de assets do Laravel
- Usa painel administrativo Voyager para gerenciamento de conteúdo
- Classes de form request customizadas para validação (StoreFormContato, StoreFormTrabalheConosco)