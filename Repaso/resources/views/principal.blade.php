@extends('plantilla')

@section('contenido')



<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    </head>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700);
@import url(https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css);

html {
  background: mediumseagreen;
  font-size: 14px;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  min-width: 300px;
  overflow-x: hidden;
  overflow-y: scroll;
  text-rendering: optimizeLegibility;
}

body {
  color: #666;
  font-family: "Source Sans Pro", "Helvetica", "Arial", sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.4;
}

a {
  text-decoration: none;
  transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
}

div, h2, p, figure {
  margin: 0;
  padding: 0;
}

.header {
  color: white;
  padding: 40px 0 20px;
  text-align: center;
}

.header h1 {
  font-size: 40px;
  font-weight: bold;
}

.header h2 a {
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  color: white;
  font-size: 20px;
  opacity: 0.5;
}

.header h2 a:hover {
  border-bottom-color: white;
  opacity: 1;
}

.main {
  margin: 0 auto;
  max-width: 1040px;
  padding: 10px;
}

.column {
  flex: 1;
  flex-direction: column;
}

.article {
  background: white;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  color: #666;
  display: flex;
  flex: 1;
  flex-direction: column;
  flex-basis: auto;
  margin: 10px;
}

.article:hover,
.article:focus {
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  color: #444;
}

.article-image {
  background: #eee;
  display: block;
  padding-top: 75%;
  position: relative;
  width: 100%;
}

.article-image img {
  display: block;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

.article-image.is-3by2 {
  padding-top: 66.6666%;
}

.article-image.is-16by9 {
  padding-top: 56.25%;
}

.article-body {
  display: flex;
  flex: 1;
  flex-direction: column;
  padding: 20px;
}

.article-title {
  color: #333;
  flex-shrink: 0;
  font-size: 1.4em;
  font-weight: 700;
  line-height: 1.2;
}

.article-content {
  flex: 1;
  margin-top: 5px;
}

.article-info {
  display: flex;
  font-size: 0.85em;
  justify-content: space-between;
  margin-top: 10px;
}

@media screen and (min-width: 800px) {
  .columns,
  .column {
    display: flex;
  }
}

@media screen and (min-width: 1000px) {
  .first-article {
    flex-direction: row;
  }

  .first-article .article-body {
    flex: 1;
  }

  .first-article .article-image {
    height: 300px;
    order: 2;
    padding-top: 0;
    width: 400px;
  }

  .main-column {
    flex: 3;
  }

  .nested-column {
    flex: 2;
  }
}
    </style>

    <body>
        <h1 align="center"> Bienvenido a la Biblioteca Fresca </h1> <br>

        <main class="main columns">
            <section class="column main-column">
              <a class="article first-article" href="https://www.unicef.org/es/end-violence/concurso-comics-superheroe-escuela">
                <figure class="article-image is-4by3">
                  <img src="https://www.unicef.org/sites/default/files/styles/hero_desktop/public/HERO%20IMAGE%20COMIC%20BOOK.jpg?itok=nMQDAv9z" alt="">
                </figure>
                <div class="article-body">
                  <h2 class="article-title">
                    Ganador del concurso de comics UNICEF
                  </h2>
                  <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.
                  </p>
                  <footer class="article-info">
                    <span>Por John Blaskowithz</span>
                    <span>1814 comments</span>
                  </footer>
                </div>
              </a>
          
              <div class="columns">
                <div class="column nested-column">
                  <a class="article" href="https://aweita.larepublica.pe/anime-manga-y-comics/2021/08/24/kaijuu-no8-oshi-ko-se-consagran-como-ganadores-next-manga-awards-2021-7052">
                    <figure class="article-image is-16by9">
                      <img src="https://imgmedia.aweita.pe/640x345/aweita/original/2021/08/24/61250d01fa3072673851a06d.webp" alt="">
                    </figure>
                    <div class="article-body">
                      <h2 class="article-title">
                        Especiales del mundo de anime
                      </h2>
                      <p class="article-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                      </p>
                      <footer class="article-info">
                        <span>By Aldo Rojas</span>
                        <span>785 comments</span>
                      </footer>
                    </div>
                  </a>
                </div>
          
                <div class="column">
                  <a class="article" href="https://www.emaze.com/@ACQITRIZ">
                    <figure class="article-image is-16by9">
                      <img src="https://userscontent2.emaze.com/images/34c08dde-cf17-4cf9-a162-b52cd99fee68/b7184a88c93e1bf2aeddfe37ca91ecf3.jpg" alt="">
                    </figure>
                    <div class="article-body">
                      <h2 class="article-title">
                        Como los libros han ayudado a la libertad de expresión 
                      </h2>
                      <p class="article-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </p>
                      <footer class="article-info">
                        <span>By Alejandro Vargas</span>
                        <span>379 comments</span>
                      </footer>
                    </div>
                  </a>
                  <a class="article" href="#">
                    <div class="article-body">
                      <h2 class="article-title">
                        Hello World
                      </h2>
                      <p class="article-content">
                        Lorem ipsum dolor sit amet.
                      </p>
                      <footer class="article-info">
                        <span>By Joe Smith</span>
                        <span>42 comments</span>
                      </footer>
                    </div>
                  </a>
                  <a class="article" href="#">
                    <div class="article-body">
                      <h2 class="article-title">
                        Hello World
                      </h2>
                      <p class="article-content">
                        Lorem ipsum dolor sit amet feugiat facilisis.
                      </p>
                      <footer class="article-info">
                        <span>By Joe Smith</span>
                        <span>42 comments</span>
                      </footer>
                    </div>
                  </a>
                </div>
              </div>
            </section>
          
            <section class="column">
              <a class="article" href="https://es.resonancescience.org/blog/masa-negativa-creada-en-la-universidad-estatal-de-washington">
                <figure class="article-image is-3by2">
                  <img src="https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/blogs/26406/images/Kluk7dBzQ1eMtXl5QvK2_9.jpeg" alt="">
                </figure>
                <div class="article-body">
                  <h2 class="article-title">
                    La masa negativa
                  </h2>
                  <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                  <footer class="article-info">
                    <span>By Unko Nami</span>
                    <span>42 comments</span>
                  </footer>
                </div>
              </a>
              <a class="article" href="#">
                <div class="article-body">
                  <h2 class="article-title">
                    Hello World
                  </h2>
                  <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                  <footer class="article-info">
                    <span>By Joe Smith</span>
                    <span>42 comments</span>
                  </footer>
                </div>
              </a>
              <a class="article" href="#">
                <div class="article-body">
                  <h2 class="article-title">
                    Hello World
                  </h2>
                  <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                  <footer class="article-info">
                    <span>By Joe Smith</span>
                    <span>42 comments</span>
                  </footer>
                </div>
              </a>
              <a class="article" href="#">
                <div class="article-body">
                  <h2 class="article-title">
                    Hello World
                  </h2>
                  <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                  <footer class="article-info">
                    <span>By Joe Smith</span>
                    <span>42 comments</span>
                  </footer>
                </div>
              </a>
            </section>
          </main>
    </body>
    
</html>




   

@stop