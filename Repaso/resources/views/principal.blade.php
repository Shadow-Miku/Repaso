@extends('plantilla')

@section('contenido')

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/app.css">
    </head>

    <body>
        <h1 align="center"> Bienvenido a la Biblioteca Fresca </h1> <br>

        <main class="main columns">
            <section class="column main-column">
              <a class="article first-article" href="#">
                <figure class="article-image is-4by3">
                  <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/1366/posts/26611/attachment/image-01.png" alt="">
                </figure>
                <div class="article-body">
                  <h2 class="article-title">
                    Hello World
                  </h2>
                  <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.
                  </p>
                  <footer class="article-info">
                    <span>By Joe Smith</span>
                    <span>42 comments</span>
                  </footer>
                </div>
              </a>
          
              <div class="columns">
                <div class="column nested-column">
                  <a class="article" href="#">
                    <figure class="article-image is-16by9">
                      <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/1366/posts/26611/attachment/image-02.png" alt="">
                    </figure>
                    <div class="article-body">
                      <h2 class="article-title">
                        Hello World
                      </h2>
                      <p class="article-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                      </p>
                      <footer class="article-info">
                        <span>By Joe Smith</span>
                        <span>42 comments</span>
                      </footer>
                    </div>
                  </a>
                </div>
          
                <div class="column">
                  <a class="article" href="#">
                    <figure class="article-image is-16by9">
                      <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/1366/posts/26611/attachment/image-03.png" alt="">
                    </figure>
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
              <a class="article" href="#">
                <figure class="article-image is-3by2">
                  <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/1366/posts/26611/attachment/image-04.png" alt="">
                </figure>
                <div class="article-body">
                  <h2 class="article-title">
                    Hello World
                  </h2>
                  <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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