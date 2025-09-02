# Argumentos para o ID do usuário e do grupo. O padrão é 1000.
# Isso será usado para espelhar o usuário do seu computador local.
ARG UID=1000
ARG GID=1000

# Imagem base do PHP
FROM php:8.3-fpm-alpine

# --- CORREÇÃO APLICADA AQUI ---
# A ordem dos flags no comando 'addgroup' foi ajustada.
# O erro "invalid number '-S'" indicava que a ordem anterior (-g ${GID} -S)
# estava incorreta. A ordem correta (-S -g ${GID}) é mais compatível.
RUN addgroup -S -g ${GID} appgroup && \
    adduser -u ${UID} -S appuser -G appgroup

# Instalar extensões PHP comuns que você possa precisar
RUN docker-php-ext-install pdo_mysql opcache

# Se precisar de outras extensões, adicione aqui. Por exemplo, para mysqli:
# RUN docker-php-ext-install mysqli

# Define o diretório de trabalho padrão
WORKDIR /var/www/html

# Troca para o usuário recém-criado.
# A partir daqui, todos os comandos (incluindo o processo do php-fpm)
# serão executados como 'appuser', que tem as mesmas permissões que você.
USER appuser

