# yearbook
# Create a .env file with content same as .env.example with your database name and username and password
# Run following comands first:
1. composer install
2. composer dump-autoload
3. php artisan key:generate
4. php artisan migrate  
5. php artisan serve

Also change the function username() inside AuthenticatesUsers.php by changing 'email' to 'rollno' for login functionality to work

# To allow large file upload edit /etc/php/7.0/cli/php.ini file
upload_max_filesize = 100M
post_max_size = 125M
#Restart apache
systemctl restart apache2.service   
