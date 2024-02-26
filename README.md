<a name="readme-top"></a>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![License][license-shield]][license-url]
[![Linkedin][linkedin-shield]][linkedin-url]

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/loriscassara">
    <img src="/public/images/logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Back-Office Deliveboo</h3>

  <p align="center">
    Back-office di una web app che permette di ordinare cibo a domicilio nella tua città!
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

[![product-screenshot][product-screenshot]](https://example.com)

Tipi di utenti:

-   Utente Visitatore (UI): un utente non registrato che visita il sito.
-   Utente Registrato (UR): un utente che ha effettuato la registrazione come ristoratore.

Lista delle pagine:

-   `Homepage`: offre la possibilità di cliccare sulle tipologie di ristorante e senza il refresh della pagina ottenere una lista ristoranti con le tipologie di appartenenza sotto ogni nome.
-   `Pagina Menù Ristorante Pubblica`: permette di visualizzare il menù di un particolare ristorante. È possibile scegliere i cibi desiderati e relativa quantità per inserirli nel carrello. Blocco con carrello che si popola con i cibi selezionati e quantità.
-   `Pagina carrello/checkout`: permette di modificare le quantità dei cibi e di procedere all’ordine. È possibile acquistare solo da un ristoratore alla volta. Tramite questo pannello è possibile pagare inserendo i dettagli della carta di credito.
-   `Dashboard Utente Registrato`: permette la gestione dei propri dati e l’inserimento dei piatti disponibili.

Client-side Validation: tutti gli input inseriti dall’utente sono controllati client-side (oltre che server-side) per un controllo di veridicità.

Sistema di Pagamento: https://www.braintreepayments.com/

Il sito è responsive.

La ricerca avviene senza il refresh.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

-   [![Vue][Vue.js]][Vue-url]
-   [![Laravel][Laravel.com]][Laravel-url]
-   [![Bootstrap][Bootstrap.com]][Bootstrap-url]
-   [![Node][Node.js]][Node-url]
-   [![Vite][Vite.com]][Vite-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

-   Clonare il repository appena creato sul proprio PC.
-   Creare un database.
-   Creare un file .env. Si può procedere copiandolo da .env.example e rinominandolo.
-   Per creare la APP_KEY nel .env, lanciare il comando dedicato, ma prima installare le dipendenze composer.
    ```sh
    composer install
    php artisan key:generate
    ```
-   Controllare che tutti i dati nel .env siano corretti (attenzione al database).
-   Lanciare migration e seeder iniziali (per la gestione degli utenti ecc..).
    ```sh
    php artisan migrate:fresh --seed
    ```
-   Lanciare il progetto tramite il server built-in.
    ```sh
    php artisan serve
    ```
-   Installare le dipendenze NPM e lanciare il progetto.
    ```sh
    npm i
    npm run dev
    ```
-   Puntare il browser all'indirizzo mostrato in terminale per controllare che tutto funzioni.

### Installation

_Riportati i comandi principali per l'installazione del progetto._

1. COMPOSER packages
    ```sh
    composer update
    composer install
    ```
2. APP_KEY
    ```sh
    php artisan key:generate
    ```
3. Clone the repo
    ```sh
    git clone https://github.com/loriscassara/deliveboo-back-office.git
    ```
4. NPM packages
    ```sh
    npm i
    npm run dev
    ```
5. Lanciare il progetto tramite il server built-in.
    ```sh
    php artisan serve
    ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->

## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Proj. Team GitHub profiles: [AnaC1997](https://github.com/AnaC1997), [AndreaBartoloni](https://github.com/AndreaBartoloni), [DarioGuastella](https://github.com/DarioGuastella), [dilettamantovani](https://github.com/dilettamantovani), [loriscassara](https://github.com/loriscassara).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ACKNOWLEDGMENTS -->

## Acknowledgments

-   [Sistema per gestire il pagamento](https://www.braintreepayments.com/)
-   [Sistema per la creazione del grafico](https://www.chartjs.org/)
-   [Sistema per invio mail](https://www.youtube.com/watch?v=lsna1S8y1vg)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[contributors-shield]: https://img.shields.io/github/contributors/loriscassara/deliveboo-back-office.svg?style=for-the-badge
[contributors-url]: https://github.com/loriscassara/deliveboo-back-office/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/loriscassara/deliveboo-back-office.svg?style=for-the-badge
[forks-url]: https://github.com/loriscassara/deliveboo-back-office/forks
[stars-shield]: https://img.shields.io/github/stars/loriscassara/deliveboo-back-office.svg?style=for-the-badge
[stars-url]: https://github.com/loriscassara/deliveboo-back-office/stargazers
[issues-shield]: https://img.shields.io/github/issues/loriscassara/deliveboo-back-office.svg?style=for-the-badge
[issues-url]: https://github.com/loriscassara/deliveboo-back-office/issues
[license-shield]: https://img.shields.io/github/license/loriscassara/deliveboo-back-office.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/Linkedin-2986cc?style=for-the-badge&logo=linkedin&logoColor=FFFFFF
[linkedin-url]: https://www.linkedin.com/in/loriscassara/
[product-screenshot]: /public/images/screenshot.png
[Node.js]: https://img.shields.io/badge/Node.js-065535?style=for-the-badge&logo=nodedotjs&logoColor=4FC08D
[Node-url]: https://nodejs.org/en
[Vite.com]: https://img.shields.io/badge/Vite-bf9000?style=for-the-badge&logo=vite&logoColor=f1c232
[Vite-url]: https://vitejs.dev/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
