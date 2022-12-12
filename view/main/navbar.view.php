<nav class="navbar navbar-expand-lg navbar-light bg-transparente borde-nav menu">
  <div class="container text-center">
    <a class="navbar-brand text-white" href="<?=SERVIDOR?>"><b>SAMSUNG</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav">
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?=SERVIDOR?>" class="btn btn-primary">
            <i class="fa-solid fa-house"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SERVIDOR?>especificaciones" class='btn btn-primary'>
            <i class="fa-solid fa-mobile-button"></i> Especificaciones
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="btn btn-primary dropdown-toggle" href="<?=SERVIDOR?>#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-mobile-screen-button"></i> Modelos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=SERVIDOR?>S22Ultra"><i class="fa-solid fa-mobile"></i> Galaxy S22 Ultra</a></li>
            <li><a class="dropdown-item" href="<?=SERVIDOR?>S22Plus"><i class="fa-solid fa-mobile"></i> Galaxy S22+</a></li>
            <li><a class="dropdown-item" href="<?=SERVIDOR?>S22"><i class="fa-solid fa-mobile"></i> Galaxy S22</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?=SERVIDOR?>accesorios" class="btn btn-primary">
            <i class="fa-solid fa-headset"></i> Accesorios
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SERVIDOR?>facilidades" class="btn btn-primary">
            <i class="fa-solid fa-credit-card"></i> Facilidades
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>