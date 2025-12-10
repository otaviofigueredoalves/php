Abandonando o LAMPP/XAMPP para usar um ambiente de dev mais profissional

1. Tenha o mariadb/mysql instalado
2. rode o banco uma vez (caso não tenha feito)
    - sudo mariadb-install-db --user=mysql --basedir=/usr --datadir=/var/lib/mysql

3. inicie o serviço
    - sudo systemctl start mariadb

3.1 (opcional): iniciar sempre com o PC
    - sudo systemctl enable mariadb

4. verifique o status
    - sudo systemctl status mariadb


Agora vamo configurar o root

1. sudo mariadb
2. ALTER USER 'root'@'localhost' IDENTIFIED BY 'senhatop';
   FLUSH PRIVILEGES;
   EXIT;

3. Habilite as extensões essenciais no php.ini
    - sudo nano /etc/php/php.ini
    - extension=pdo_mysql
    - extension=mysqli
    - ctrl + o + enter e ctrl + x | tudo isso após descomentar as extensões


4. No DBEAVER
    - criar nova conexão;
    - host: localhost;
    - user: root;
    - senha: senhatop;

5. Vá para pasta do projeto e rode o servidor nativo
    - php -S localhost:8000