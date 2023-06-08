## About The App

Tambang app to fullfil backend technical test

### Built With

* [![Laravel][Laravel.com]][Laravel-url]
* [![Postgres][Postgre.com]][Postgre-url]


<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

First thing first, install <a href="https://www.php.net/manual/en/install.php">PHP</a> also the <a href="https://www.postgresql.org/download/">PostgreSQL</a> and follow those instruction from that documentation

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/ingwerludwig/tambang-app.git
   ```
   
2. Install All Dependencies
    ```sh
   composer install
   ```

3. Create Database on your PostgreSQL local with name 'tambang-app'
   
4. Setup your database and application env in application.properties

5. Migrate the project database to match your local database 
    ```sh
   php artisan migrate
   ```
6. Run this command to refresh your app key
    ```sh
   php artisan key:generate 
   ```
7. Run the project
    ```sh
   php artisan serve
   ```
8. To generate Readme.txt
    ```sh
   php artisan generate:readme  
   ```
   
<!-- USAGE EXAMPLES -->
## Usage by DOCUMENTATION

For more examples, please look to the <a href="https://documenter.getpostman.com/view/26715144/2s93sabDZb">documentation</a>



<!-- SPRING SECURITY FLOW -->
## Flow
### Create User Flow
![Untitled Diagram drawio](https://github.com/ingwerludwig/tambang-app/assets/54592376/24e47612-b371-40dd-9351-9146004d492c)

### Create Kantor Flow
![Untitled Diagram drawio (1)](https://github.com/ingwerludwig/tambang-app/assets/54592376/8b081e5e-dc5c-4596-9c6d-5b437bafabda)

### Create Kendaraan Flow
![Untitled Diagram drawio (2)](https://github.com/ingwerludwig/tambang-app/assets/54592376/0f10af4f-c878-4ad2-b3e2-5d2a4f49da15)

### Create Order Flow
![Untitled Diagram drawio (3)](https://github.com/ingwerludwig/tambang-app/assets/54592376/c5ab44f6-97f2-4b09-80fc-665d527434d0)

### Create History Service Flow
![Untitled Diagram drawio (4)](https://github.com/ingwerludwig/tambang-app/assets/54592376/d5516b59-4d01-46bf-a278-d6e807bbf04f)

### Approving Order
![Untitled Diagram drawio (5)](https://github.com/ingwerludwig/tambang-app/assets/54592376/3eb98eb4-1ba2-44b6-88f3-914695d6955e)


## Database Design
![tambang-app-2023-06-08_22-04](https://github.com/ingwerludwig/tambang-app/assets/54592376/827053b0-00b1-4613-9652-f12faa507017)


<!-- LICENSE -->
## License

Distributed under the MIT License.



<!-- CONTACT -->
## Contact

Ingwer Ludwig - ingwerflash@gmail.com

Project Link: <a href="https://github.com/ingwerludwig/tambang-app">Click here</a>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
[Postgre.com]: https://img.shields.io/badge/postgres-%23316192.svg?style=for-the-badge&logo=postgresql&logoColor=white
[Postgre-url]: https://www.postgresql.org/
[Spring.com]: https://img.shields.io/badge/Spring-6DB33F?style=for-the-badge&logo=spring&logoColor=white
[Spring-url]: https://spring.io/
