<!DOCTYPE html>
<html>
<head>
    <title>Exemplo ~ Bootstrap</title>
    <!-- \/ Alinha o tamanho do conteúdo do documento ao tamanho da tela (device-width)-->
    <meta name="viewport" content="width=device-width" charset=utf-8>
    <!-- \/CSS                                                                              -->
    <link href="{base_url()}/assets/css/bootstrap.css" rel="stylesheet">
    <!-- \/ JS                                                                              -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
    <script src="{base_url()}assets/js/bootstrap.js"></script>

 
</head>
 
<body>
    <nav class="navbar navbar-inverse" role="navigation">
 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Site</a>
      </div>
 
      <div class="collapse navbar-collapse" id="bar1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 1<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Sub item 1</a></li>
              <li><a href="#">Sub item 2</a></li>
              <li><a href="#">Sub item 3</a></li>
              <li class="divider"></li>
              <li><a href="#">Item separado 1</a></li>
              <li class="divider"></li>
              <li><a href="#">Item separado 2</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Insira um texto aqui">
          </div>
          <button type="submit" class="btn btn-default">Buscar</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link 3</a></li>
          
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
</body>
 
</html>