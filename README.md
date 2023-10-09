# OOP-and-MVC-website
The application is a tourist diary that can be accessed through authentication where the user can enter diary notes, objectives and tourist destinations, all this data being recorded in a database from where it can be read later in a dedicated web page.<br>

This project is a WEB application based on a single template, made using a hybrid and fluid layout.<br>
It is designed object oriented and respect MVC design and respect a structure of files and classes.<br>
The application has several tables created in the database.<br>

<pre>The application respects the following file structure:
apps:
  - Controllers
  - Cores
  - Models
  - views
public:
  -assets (css files, images and js files)
  -.htaccess file
  -index.php
</pre>

Each page contains a separate controller and a separate view and each table in the database has a separate model. The router will load the page depending on the URL typed. When the controller is loaded then the view is loaded. When the controller and the process needs to read or to write from the databasse it will communicate with the model and the model will connect with the database.

![Structura fisiere](https://github.com/TrifanLucian/OOP-and-MVC-website/assets/111199896/5a3d113a-e4c5-4718-8902-912a32fe5fe4)

![page1](https://github.com/TrifanLucian/OOP-and-MVC-website/assets/111199896/ae428f10-c3d0-49d2-a883-2f30da41eb15)

![page2](https://github.com/TrifanLucian/OOP-and-MVC-website/assets/111199896/4f27da13-ba84-46ee-a48e-86b1b42c038b)

![page3](https://github.com/TrifanLucian/OOP-and-MVC-website/assets/111199896/ff9ee3a6-294a-4eb4-9c62-7f912550b5d9)

