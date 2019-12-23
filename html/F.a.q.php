<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Font Awesome icons CSS-->
  <link rel="stylesheet" href="../fonts/css webfont/all.min.css">

  <!-- Secciones CSS-->
  <link rel="stylesheet" href="../css/navmenu.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/faq.css">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Synergic || Tienda tecno</title>
</head>

<body>
  <!--Header-->
  <header>
    <div class="container">
      <div class="row header-row">
        <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 h-logo">
          <a href="index.php" class="logo-img">
            <img src="../img/logo.png" alt="">
          </a>
        </div>
        <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-xs-12">
          <form class="form-inline">
            <input class="form-control mr-sm-2 inpt" type="search" placeholder="Search" aria-label="Search">
            <button class="btn src-btn" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-xs-12 text-right text-sm-center">
          <div class="user-panel">
            <div class="up-item">

              <a data-toggle="modal" data-target="#exampleModalLong">
                <i class="fas fa-user"></i>
                Ingresar
              </a>
            </div>
            <div class="up-item">
              <a href="shop cart.php">
                <i class="fas fa-shopping-cart"></i>
                Carrito de compras
              </a>
            </div>
          </div>
        </div>
      </div>
  </header>
  <!--/Header-->

  <!--Modal Login-->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="page">
            <div class="contenido-login">
              <div class="envolver-login">
                <form class="formulario-login">
                  <a href="index.php" class="logo-img m-auto mb-5">
                    <img src="../img/logo.png" alt="">
                  </a>

                  <div class="formulario-campos">
                    <input class="campos" type="text" name="user" placeholder="Usuario">
                    <span class="focus-campo"></span>
                    <span class="simbolo-campo">
                      <span><i class="far fa-user"></i></span>
                    </span>
                  </div>

                  <div class="formulario-campos">
                    <input class="campos" type="password" name="pass" placeholder="Contraseña">
                    <span class="focus-campo"></span>
                    <span class="simbolo-campo">
                      <span><i class="fas fa-lock"></i></span>
                    </span>
                  </div>

                  <div class="formulario-campos">
                    <input class="campo-checkbox" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox" for="ckb1">
                      Recuérdame
                    </label>
                  </div>

                  <div class="contenidod-login-formulario-btn">
                    <button class="login-formulario-btn">
                      Iniciar Sesión
                    </button>
                  </div>

                  <div class="text-center w-full no-acount">
                    <a href="#">
                      ¿Olvidaste tu contraseña?
                    </a>
                  </div>

                  <a href="#" class="btn-face">
                    <i class="fab fa-facebook"></i>
                    Facebook
                  </a>

                  <a href="#" class="btn-google">
                    <img src="../img/icon-google.png" alt="Google">
                    Google
                  </a>

                  <div class="text-center w-full no-acount">
                    <span class="txt1">
                      ¿No tienes una cuenta?
                    </span>

                    <a class="register" href="Register form.php">
                      Regístrate
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Modal Login-->

  <!--Nav Menu-->
  <nav class="menu" id="menu">
    <div class="contenedor contenedor-botones-menu">
      <button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
      <button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
    </div>

    <div class="contenedor contenedor-enlaces-nav">
      <div class="btn-departamentos" id="btn-departamentos">
        <p id="cat-title">Todas las <span>Categorias</span></p>
        <i class="fas fa-caret-down"></i>
      </div>

      <div class="enlaces">
        <a href="index.php">Home</a>
        <a href="contact.php">Contacto</a>
        <a href="user-profile.php">Cuenta</a>
        <a href="F.a.q.php">F.A.Q</a>
      </div>
    </div>

    <div class="contenedor contenedor-grid">
      <div class="grid" id="grid">
        <div class="categorias">
          <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
          <h3 class="subtitulo">Categorias</h3>

          <a href="productos.php" data-categoria="componentes-de-pc">Productos<i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="pc-de-escritorio">PC de escritorio <i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="monitores">Monitores <i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="perifericos">Perifericos <i class="fas fa-angle-right"></i></a>
        </div>

        <div class="contenedor-subcategorias">
          <div class="subcategoria " data-categoria="componentes-de-pc">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">Productos</h3>
              <a href="#">Procesadores</a>
              <a href="#">Motherboards</a>
              <a href="#">Memoria RAM</a>
              <a href="#">Placas de video</a>
              <a href="#">Hard Disk</a>
            </div>

            <div class="banner-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>

            <div class="galeria-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>
          </div>


          <div class="subcategoria" data-categoria="pc-de-escritorio">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">PC de escritorio</h3>
              <a href="#">AMD</a>
              <a href="#">INTEL</a>
            </div>

            <div class="banner-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>

            <div class="galeria-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>
          </div>


          <div class="subcategoria" data-categoria="monitores">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">Monitores</h3>
              <a href="#">Acer</a>
              <a href="#">LG</a>
              <a href="#">Samsung</a>
              <a href="#">Philips</a>
            </div>

            <div class="banner-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>

            <div class="galeria-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>
          </div>

          <div class="subcategoria" data-categoria="perifericos">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">Perifericos</h3>
              <a href="#">Teclados</a>
              <a href="#">Mouses</a>
              <a href="#">Auriculares</a>
              <a href="#">Microfonos</a>
              <a href="#">Webcam</a>
            </div>

            <div class="banner-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>

            <div class="galeria-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!--/Nav Menu-->

  <!--F.a.q-->
  <section class="faq">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
            <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1"
              aria-selected="true">
              <span class="fa fa-question-circle"></span> Frequently Asked Questions
            </a>
            <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
              <span class="fa fa-user-circle"></span> Profile
            </a>
            <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
              <span class="fa fa-address-card"></span> Account
            </a>
            <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
              <span class="fa fa-heart"></span> Favorites
            </a>
            <a href="#tab5" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab5" aria-selected="false">
              <span class="fa fa-cogs"></span> Transactions
            </a>
            <a href="#tab6" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab6" aria-selected="false">
              <span class="fa fa-info-circle"></span> General help
            </a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="tab-content" id="faq-tab-content">
            <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
              <div class="accordion" id="accordion-tab-1">
                <div class="card">
                  <div class="card-header" id="accordion-tab-1-heading-1">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-1-content-1" aria-expanded="false"
                        aria-controls="accordion-tab-1-content-1">Just once I'd like to eat dinner with a
                        celebrity?</button>
                    </h5>
                  </div>
                  <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1"
                    data-parent="#accordion-tab-1">
                    <div class="card-body">
                      <p>Yes, if you make it look like an electrical fire. When you do things right, people won't be
                        sure you've done anything at all. I was having the most wonderful dream. Except you were there,
                        and you were there, and you were there! No argument here. Goodbye, cruel world. Goodbye, cruel
                        lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin
                        and the cute little pom-pom curtain pull cords. Cruel though they may be.</p>
                      <p><strong>Example: </strong>Shut up and get to the point!</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-1-heading-2">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-1-content-2" aria-expanded="false"
                        aria-controls="accordion-tab-1-content-2">Bender, I didn't know you liked cooking?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2"
                    data-parent="#accordion-tab-1">
                    <div class="card-body">
                      <p>That's so cute. Can we have Bender Burgers again? Is the Space Pope reptilian!? I wish! It's a
                        nickel. Bender! Ship! Stop bickering or I'm going to come back there and change your opinions
                        manually!</p>
                      <p><strong>Example: </strong>Okay, I like a challenge. Is that a cooking show? No argument here.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-1-heading-3">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-1-content-3" aria-expanded="false"
                        aria-controls="accordion-tab-1-content-3">My fellow Earthicans?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3"
                    data-parent="#accordion-tab-1">
                    <div class="card-body">
                      <p>As I have explained in my book 'Earth in the Balance', and the much more popular 'Harry Potter
                        and the Balance of Earth', we need to defend our planet against pollution. Also dark wizards.
                        Fry, you can't just sit here in the dark listening to classical music.</p>
                      <p><strong>Example: </strong>Actually, that's still true. Well, let's just dump it in the sewer
                        and say we delivered it.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-1-heading-4">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-1-content-4" aria-expanded="false"
                        aria-controls="accordion-tab-1-content-4">Who am I making this out to?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4"
                    data-parent="#accordion-tab-1">
                    <div class="card-body">
                      <p>Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped
                        like a man wearing a hat. Also Zoidberg. Can we have Bender Burgers again? Goodbye, cruel world.
                        Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort
                        of cruel muslin and the cute little pom-pom curtain pull cords.</p>
                      <p><strong>Example: </strong>Cruel though they may be...</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
              <div class="accordion" id="accordion-tab-2">
                <div class="card">
                  <div class="card-header" id="accordion-tab-2-heading-1">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-2-content-1" aria-expanded="false"
                        aria-controls="accordion-tab-2-content-1">Does anybody else feel jealous and aroused and
                        worried?</button>
                    </h5>
                  </div>
                  <div class="collapse show" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1"
                    data-parent="#accordion-tab-2">
                    <div class="card-body">
                      <p>Kif, I have mated with a woman. Inform the men. This is the worst part. The calm before the
                        battle. Bender, being God isn't easy. If you do too much, people get dependent on you, and if
                        you do nothing, they lose hope. You have to use a light touch. Like a safecracker, or a
                        pickpocket.</p>
                      <p><strong>Example: </strong>There's no part of that sentence I didn't like! You, a bobsleder!?
                        That I'd like to see!</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-2-heading-2">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-2-content-2" aria-expanded="false"
                        aria-controls="accordion-tab-2-content-2">This opera's as lousy as it is brilliant?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-2-content-2" aria-labelledby="accordion-tab-2-heading-2"
                    data-parent="#accordion-tab-2">
                    <div class="card-body">
                      <p>Your lyrics lack subtlety. You can't just have your characters announce how they feel. That
                        makes me feel angry! It's okay, Bender. I like cooking too. Interesting. No, wait, the other
                        thing: tedious.</p>
                      <p><strong>Example: </strong>Of all the friends I've had… you're the first. But I know you in the
                        future. I cleaned your poop. Then we'll go with that data file!</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-2-heading-3">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-2-content-3" aria-expanded="false"
                        aria-controls="accordion-tab-2-content-3">Who are you, my warranty?!</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-2-content-3" aria-labelledby="accordion-tab-2-heading-3"
                    data-parent="#accordion-tab-2">
                    <div class="card-body">
                      <p>Oh, I think we should just stay friends. I'll tell them you went down prying the wedding ring
                        off his cold, dead finger. Aww, it's true. I've been hiding it for so long. Say it in Russian!
                        Then throw her in the laundry room, which will hereafter be referred to as "the brig".</p>
                      <p><strong>Example: </strong> We're rescuing ya. Robot 1-X, save my friends! And Zoidberg!
                        <em>Then we'll go with that data file!</em> Okay, I like a challenge.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-2-heading-4">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-2-content-4" aria-expanded="false"
                        aria-controls="accordion-tab-2-content-4">I haven't felt much of anything since my guinea pig
                        died?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-2-content-4" aria-labelledby="accordion-tab-2-heading-4"
                    data-parent="#accordion-tab-2">
                    <div class="card-body">
                      <p>And I'm his friend Jesus. Oh right. I forgot about the battle. OK, if everyone's finished being
                        stupid. We'll need to have a look inside you with this camera. I'm just glad my fat, ugly mama
                        isn't alive to see this day.</p>
                      <p><strong>Example: </strong> Isn't it true that you have been paid for your testimony? Quite
                        possible.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
              <div class="accordion" id="accordion-tab-3">
                <div class="card">
                  <div class="card-header" id="accordion-tab-3-heading-1">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-3-content-1" aria-expanded="false"
                        aria-controls="accordion-tab-3-content-1">Michelle, I don't regret this, but I both rue and
                        lament it?</button>
                    </h5>
                  </div>
                  <div class="collapse show" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1"
                    data-parent="#accordion-tab-3">
                    <div class="card-body">
                      <p>Look, last night was a mistake. We'll need to have a look inside you with this camera. Good
                        news, everyone! There's a report on TV with some very bad news! You know, I was God once. You
                        lived before you met me?!</p>
                      <p><strong>Example: </strong>I'm Santa Claus! Pansy. That's a popular name today. Little "e", big
                        "B"?</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-3-heading-2">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-3-content-2" aria-expanded="false"
                        aria-controls="accordion-tab-3-content-2">Why am I sticky and naked?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2"
                    data-parent="#accordion-tab-3">
                    <div class="card-body">
                      <p>Did I miss something fun? Humans dating robots is sick. You people wonder why I'm still single?
                        It's 'cause all the fine robot sisters are dating humans! Kids don't turn rotten just from
                        watching TV.</p>
                      <p><strong>Example: </strong>I usually try to keep my sadness pent up inside where it can fester
                        quietly as a mental illness.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-3-heading-3">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-3-content-3" aria-expanded="false"
                        aria-controls="accordion-tab-3-content-3">Is that a cooking show?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-3-content-3" aria-labelledby="accordion-tab-3-heading-3"
                    data-parent="#accordion-tab-3">
                    <div class="card-body">
                      <p>OK, this has gotta stop. I'm going to remind Fry of his humanity the way only a woman can. You
                        seem malnourished. Are you suffering from intestinal parasites? Check it out, y'all. Everyone
                        who was invited is here. I am Singing Wind, Chief of the Martians.</p>
                      <p><strong>Example: </strong>Man, I'm sore all over. I feel like I just went ten rounds with
                        mighty Thor.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-3-heading-4">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-3-content-4" aria-expanded="false"
                        aria-controls="accordion-tab-3-content-4">You are the last hope of the universe?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-3-content-4" aria-labelledby="accordion-tab-3-heading-4"
                    data-parent="#accordion-tab-3">
                    <div class="card-body">
                      <p>I don't want to be rescued. I videotape every customer that comes in here, so that I may
                        blackmail them later. Ah, computer dating. It's like pimping, but you rarely have to use the
                        phrase "upside your head."</p>
                      <p><strong>Example: </strong>Tell them I hate them.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
              <div class="accordion" id="accordion-tab-4">
                <div class="card">
                  <div class="card-header" id="accordion-tab-4-heading-1">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-4-content-1" aria-expanded="false"
                        aria-controls="accordion-tab-4-content-1">You, minion. Lift my arm?</button>
                    </h5>
                  </div>
                  <div class="collapse show" id="accordion-tab-4-content-1" aria-labelledby="accordion-tab-4-heading-1"
                    data-parent="#accordion-tab-4">
                    <div class="card-body">
                      <p>AFTER HIM! A true inspiration for the children. What are you hacking off? Is it my torso?! 'It
                        is!' My precious torso! I saw you with those two "ladies of the evening" at Elzars. Explain
                        that. She also liked to shut up! Why not indeed!</p>
                      <p><strong>Example: </strong>I feel like I was mauled by Jesus. Hello, little man. I will destroy
                        you!</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-4-heading-2">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-4-content-2" aria-expanded="false"
                        aria-controls="accordion-tab-4-content-2">No, I'm Santa Claus?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-4-content-2" aria-labelledby="accordion-tab-4-heading-2"
                    data-parent="#accordion-tab-4">
                    <div class="card-body">
                      <p>I meant 'physically'. Look, perhaps you could let me work for a little food? I could clean the
                        floors or paint a fence, or service you sexually? When the lights go out, it's nobody's business
                        what goes on between two consenting adults.</p>
                      <p><strong>Example: </strong>Nay, I respect and admire Harold Zoid too much to beat him to death
                        with his own Oscar.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-4-heading-3">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-4-content-3" aria-expanded="false"
                        aria-controls="accordion-tab-4-content-3">Belligerent and numerous?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-4-content-3" aria-labelledby="accordion-tab-4-heading-3"
                    data-parent="#accordion-tab-4">
                    <div class="card-body">
                      <p>Hey, what kinda party is this? There's no booze and only one hooker. I'm just glad my fat, ugly
                        mama isn't alive to see this day. Wow! A superpowers drug you can just rub onto your skin? You'd
                        think it would be something you'd have to freebase. Well, let's just dump it in the sewer and
                        say we delivered it. You guys realize you live in a sewer, right? </p>
                      <p><strong>Example: </strong>Oh Leela! You're the only person I could turn to; you're the only
                        person who ever loved me.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-4-heading-4">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-4-content-4" aria-expanded="false"
                        aria-controls="accordion-tab-4-content-4">Take me to your leader?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-4-content-4" aria-labelledby="accordion-tab-4-heading-4"
                    data-parent="#accordion-tab-4">
                    <div class="card-body">
                      <p>PUNY HUMAN NUMBER ONE, PUNY HUMAN NUMBER TWO, and Morbo's good friend, Richard Nixon.
                        Interesting. No, wait, the other thing: tedious. All I want is to be a monkey of moderate
                        intelligence who wears a suit… that's why I'm transferring to business school! Morbo can't
                        understand his teleprompter because he forgot how you say that letter that's shaped like a man
                        wearing a hat.</p>
                      <p><strong>Example: </strong>If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be
                        right.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">
              <div class="accordion" id="accordion-tab-5">
                <div class="card">
                  <div class="card-header" id="accordion-tab-5-heading-1">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-5-content-1" aria-expanded="false"
                        aria-controls="accordion-tab-5-content-1">Say what?</button>
                    </h5>
                  </div>
                  <div class="collapse show" id="accordion-tab-5-content-1" aria-labelledby="accordion-tab-5-heading-1"
                    data-parent="#accordion-tab-5">
                    <div class="card-body">
                      <p>That could be 'my' beautiful soul sitting naked on a couch. If I could just learn to play this
                        stupid thing. Oh, I don't have time for this. I have to go and buy a single piece of fruit with
                        a coupon and then return it, making people wait behind me while I complain. I'm just glad my
                        fat, ugly mama isn't alive to see this day. For one beautiful night I knew what it was like to
                        be a grandmother. Subjugated, yet honored. But existing is basically all I do! I never loved
                        you.</p>
                      <p><strong>Example: </strong>A sexy mistake. And I'd do it again!</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-5-heading-2">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-5-content-2" aria-expanded="false"
                        aria-controls="accordion-tab-5-content-2">Who's brave enough to fly into something we all keep
                        calling a death sphere?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-5-content-2" aria-labelledby="accordion-tab-5-heading-2"
                    data-parent="#accordion-tab-5">
                    <div class="card-body">
                      <p>Maybe I love you so much I love you no matter who you are pretending to be. Ah, the 'Breakfast
                        Club' soundtrack! I can't wait til I'm old enough to feel ways about stuff! Now Fry, it's been a
                        few years since medical school, so remind me.</p>
                      <p><strong>Example: </strong>Disemboweling in your species: fatal or non-fatal?</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-5-heading-3">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-5-content-3" aria-expanded="false"
                        aria-controls="accordion-tab-5-content-3">You mean while I'm sleeping in it?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-5-content-3" aria-labelledby="accordion-tab-5-heading-3"
                    data-parent="#accordion-tab-5">
                    <div class="card-body">
                      <p>We can't compete with Mom! Her company is big and evil! Ours is small and neutral! Look,
                        everyone wants to be like Germany, but do we really have the pure strength of 'will'? I just
                        told you! You've killed me!</p>
                      <p><strong>Example: </strong>But, like most politicians, he promised more than he could deliver.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-5-heading-4">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-5-content-4" aria-expanded="false"
                        aria-controls="accordion-tab-5-content-4">And until then, I can never die?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-5-content-4" aria-labelledby="accordion-tab-5-heading-4"
                    data-parent="#accordion-tab-5">
                    <div class="card-body">
                      <p>I don't know what you did, Fry, but once again, you screwed up! Now all the planets are gonna
                        start cracking wise about our mamas. Well, let's just dump it in the sewer and say we delivered
                        it.</p>
                      <p><strong>Example: </strong>Have you ever tried just turning off the TV, sitting down with your
                        children, and hitting them? Hey, tell me something. You've got all this money. How come you
                        always dress like you're doing your laundry?</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
              <div class="accordion" id="accordion-tab-6">
                <div class="card">
                  <div class="card-header" id="accordion-tab-6-heading-1">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-6-content-1" aria-expanded="false"
                        aria-controls="accordion-tab-6-content-1">Doomsday device?</button>
                    </h5>
                  </div>
                  <div class="collapse show" id="accordion-tab-6-content-1" aria-labelledby="accordion-tab-6-heading-1"
                    data-parent="#accordion-tab-6">
                    <div class="card-body">
                      <p>Ah, now the ball's in Farnsworth's court! We'll need to have a look inside you with this
                        camera. Stop it, stop it. It's fine. I will 'destroy' you! Bender! Ship! Stop bickering or I'm
                        going to come back there and change your opinions manually!</p>
                      <p><strong>Example: </strong>So I really am important? How I feel when I'm drunk is correct?</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-6-heading-2">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-6-content-2" aria-expanded="false"
                        aria-controls="accordion-tab-6-content-2">And so we say goodbye to our beloved pet,
                        Nibbler?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-6-content-2" aria-labelledby="accordion-tab-6-heading-2"
                    data-parent="#accordion-tab-6">
                    <div class="card-body">
                      <p>Nibbler, who's gone to a place where I, too, hope one day to go. The toilet. But existing is
                        basically all I do! I suppose I could part with 'one' and still be feared. I just told you!
                        You've killed me!</p>
                      <p><strong>Example: </strong>What's with you kids? Every other day it's food, food, food.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-6-heading-3">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-6-content-3" aria-expanded="false"
                        aria-controls="accordion-tab-6-content-3">Tell her you just want to talk?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-6-content-3" aria-labelledby="accordion-tab-6-heading-3"
                    data-parent="#accordion-tab-6">
                    <div class="card-body">
                      <p>It has nothing to do with mating. Soon enough. There, now he's trapped in a book I wrote: a
                        crummy world of plot holes and spelling errors! Daylight and everything. Hey! I'm a
                        porno-dealing monster, what do I care what you think?</p>
                      <p><strong>Example: </strong>Is that a cooking show? It doesn't look so shiny to me. And why did
                        'I' have to take a cab?</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-6-heading-4">
                    <h5>
                      <button class="btn btn-link" type="button" data-toggle="collapse"
                        data-target="#accordion-tab-6-content-4" aria-expanded="false"
                        aria-controls="accordion-tab-6-content-4">Good man. Nixon's pro-war and pro-family?</button>
                    </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-6-content-4" aria-labelledby="accordion-tab-6-heading-4"
                    data-parent="#accordion-tab-6">
                    <div class="card-body">
                      <p>I don't 'need' to drink. I can quit anytime I want! THE BIG BRAIN AM WINNING AGAIN! I AM THE
                        GREETEST! NOW I AM LEAVING EARTH, FOR NO RAISEN! There's one way and only one way to determine
                        if an animal is intelligent. Dissect its brain!</p>
                      <p><strong>Example: </strong>Guess again. Yeah, I do that with my stupidness. And when we woke up,
                        we had these bodies.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/F.a.q-->


  <!--Footer-->
  <section class="footer-section shadow-lg">
    <div class="container">
      <div class="footer-logo text-center p-4">
        <a href="index.php">
          <a href="index.php" class="logo-img">
            <img src="../img/logo.png" alt="">
          </a>
        </a>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>About</h2>
            <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla
              faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
            <img src="../img/cards.png" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Lorem</h2>
            <ul class="ul1">
              <li><a href="">Nosotros</a></li>
              <li><a href="">Pedidos</a></li>
              <li><a href="">Devoluciones</a></li>
              <li><a href="">Trabajos</a></li>
            </ul>
            <ul>
              <li><a href="">Envios</a></li>
              <li><a href="">Terminos de uso</a></li>
              <li><a href="">Clientes</a></li>
              <li><a href="">Soporte</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Lorem</h2>
            <div class="fw-latest-post-widget">
              <div class="lp-item">
                <div class="lp-thumb set-bg"><img src="https://via.placeholder.com/68X68?text=68x68" alt=""></div>
                <div class="lp-content">
                  <h6>lorem ipsum sit dolor</h6>
                  <span>Dic 7, 2019</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
              <div class="lp-item">
                <div class="lp-thumb set-bg"><img src="https://via.placeholder.com/68X68?text=68x68" alt=""></div>
                <div class="lp-content">
                  <h6>lorem ipsun sit dolor</h6>
                  <span>Dic 7, 2019</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget contact-widget">
            <h2>Lorem</h2>
            <div class="con-info">
              <span>C.</span>
              <p>Nuestra empresa</p>
            </div>
            <div class="con-info">
              <span>B.</span>
              <p>1481 Lorem ipsum dolor amet, Argentina, Cordoba. </p>
            </div>
            <div class="con-info">
              <span>T.</span>
              <p>+54 351 921 0101</p>
            </div>
            <div class="con-info">
              <span>E.</span>
              <p>Empresa@Gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-links-warp">
      <div class="container">
        <div class="social-links">
          <a href="" class="instagram"><i class="fab fa-instagram"></i></i><span>instagram</span></a>
          <a href="" class="google-plus"><i class="fab fa-google-plus-g"></i><span>g+plus</span></a>
          <a href="" class="pinterest"><i class="fab fa-pinterest"></i><span>pinterest</span></a>
          <a href="" class="facebook"><i class="fab fa-facebook"></i><span>facebook</span></a>
          <a href="" class="twitter"><i class="fab fa-twitter"></i><span>twitter</span></a>
          <a href="" class="youtube"><i class="fab fa-youtube"></i><span>youtube</span></a>
          <a href="" class="tumblr"><i class="fab fa-tumblr-square"></i><span>tumblr</span></a>
          <p class="text-white text-center mt-5">Copyright &copy; Todos los derechos reservados | Synergic</p>
        </div>
      </div>
    </div>

  </section>
  <!--/Footer-->






















  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="../main.js"></script>
</body>

</html>