To run project you need to clone or download the Zip folder onece the repisotory is ready 


Open the folder with the local repository and run the following comands in the root folder


composer install/ update depending on your globalsettings


npm install


copy the env.example file and rename the new file  

change the database settings to  your prefered settings
.env

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=here your database name(blog)

DB_USERNAME=here database username(root)

DB_PASSWORD=here database password(root


run php artisan migrate to run the migration

npm run dev/watch to compile the project

php artisan serve to test the project
