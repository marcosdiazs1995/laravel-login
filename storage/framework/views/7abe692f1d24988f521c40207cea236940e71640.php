<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li <?php if($current=="home"): ?> class="nav-item active" <?php else: ?> class="nav-item" <?php endif; ?>>
        <a class="nav-link" href="/">Home </a>
      </li>
      <li <?php if($current=="produtos"): ?> class="nav-item active" <?php else: ?> class="nav-item" <?php endif; ?>>
        <a class="nav-link" href="/produtos">Produtos</a>
      </li>
      <li <?php if($current=="categorias"): ?> class="nav-item active" <?php else: ?> class="nav-item" <?php endif; ?>>
        <a class="nav-link" href="/categorias">Categorias </a>
      </li>
        
    </ul>

  </div>
</nav>