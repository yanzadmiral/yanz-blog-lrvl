<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog - Free Bulma template</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bulma.css">
  <link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body>
  <div class="columns is-fullheight">
    <div class="column left-side is-one-third is-hidden-touch bg-covel-left">
      <section class="hero is-fullheight is-default is-bold">
        <div class="hero-body">
          <div class="container has-text-centered">
          <div class="title is-1">Yayan Blog</div>
            <div class="title is-5">Simple blog by laravel framework</div>
          </div>
        </div>
      </section>
    </div>
    <div class="column right-side is-two-third is-full-mobile">
      <nav class="nav">
        <div class="nav-left">
          <a class="nav-item is-brand" href="#">
            <p class="title is-5"><strong>Blog</strong></p>
          </a>
        </div>
        <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>

        <div class="nav-right nav-menu">
          <a class="nav-item" href="#">Home</a>
            <div class="dropdown is-hidden-mobile">
              <a onclick="myFunction()" class="dropbtn nav-item">Category</a>
                <div id="myDropdown" class="dropdown-content">
                  <a href="#home">1</a>
                  <a href="#about">2</a>
                  <a href="#contact">3</a>
                </div>
              </div>

          <span class="nav-item">
            <a class="button" >
              <span class="icon">
                <i class="fa fa-github"></i>
              </span>
              <span>Fork</span>
            </a>
          </span>
        </div>
      </nav>
      <section class="hero is-fullheight is-default is-bold">
        <div class="hero-body">
          <div class="container">
            @foreach ($artikel as $v)
              <div class="column is-full-desktop">
              <h1 class="blog-timestamp">{{$v->created_at->diffForHumans()}}</h1>
              <h1 class="blog-title">
                <a href="artikel/{{$v->id_artikel}}">{{$v->title}}</a>
              </h1>
              <h2 class="blog-summary">{{$v->content}}</h2>
              Author :<a href="user/{{$v->user->id_user}}">{{$v->user->name}}</a> Tag :
              @foreach ($v->tag as $k)
                <a href="tag/{{$k->id_tag}}">{{$k->nama_tag}}</a>,  
              @endforeach
            </div>
            <hr>
            @endforeach 
        </div>
      </div>

      <div class="hero-foot">
        <div class="container">
          <div class="tabs is-centered">
            <ul>
              <li><a href="#">View more posts</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        simple blog by yayan
      </p>
      <p>
        <a class="icon" href="https://github.com/yanzadmiral">
          <i class="fa fa-github"></i>
        </a>
      </p>
    </div>
  </div>
</footer>
<script async type="text/javascript" src="js/bulma.js"></script>
<script>
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
