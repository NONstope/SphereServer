<!DOCTYPE html>
<html>
<head>
    <title>Sphere</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles-css/bootstrap.min.css">
    <link rel="stylesheet" href="styles-css/main.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">Sphere</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Exit</a></li>
        </ul>
      </div>
    </nav>

    <main>
        <div class="container">
          <h3>All apps list</h3>
          <p>You can navigate by the first letter of the programm you need</p>
        </div>
        <div class="container">
            <button onclick="location.href='main.php?first=a'">A</button>
            <button onclick="location.href='main.php?first=b'">B</button>
            <button onclick="location.href='main.php?first=c'">C</button>
            <button onclick="location.href='main.php?first=d'">D</button>
            <button onclick="location.href='main.php?first=e'">E</button>
            <button onclick="location.href='main.php?first=f'">F</button>
            <button onclick="location.href='main.php?first=g'">G</button>
            <button onclick="location.href='main.php?first=h'">H</button>
            <button onclick="location.href='main.php?first=i'">I</button>
            <button onclick="location.href='main.php?first=j'">J</button>
            <button onclick="location.href='main.php?first=k'">K</button>
            <button onclick="location.href='main.php?first=l'">L</button>
            <button onclick="location.href='main.php?first=m'">M</button>
            <button onclick="location.href='main.php?first=n'">N</button>
            <button onclick="location.href='main.php?first=o'">O</button>
            <button onclick="location.href='main.php?first=p'">P</button>
            <button onclick="location.href='main.php?first=q'">Q</button>
            <button onclick="location.href='main.php?first=r'">R</button>
            <button onclick="location.href='main.php?first=s'">S</button>
            <button onclick="location.href='main.php?first=t'">T</button>
            <button onclick="location.href='main.php?first=u'">U</button>
            <button onclick="location.href='main.php?first=v'">V</button>
            <button onclick="location.href='main.php?first=w'">W</button>
            <button onclick="location.href='main.php?first=x'">X</button>
            <button onclick="location.href='main.php?first=y'">Y</button>
            <button onclick="location.href='main.php?first=z'">Z</button>
            <button onclick="location.href='main.php?first=*'">Other</button>
        </div>
        <div id="app-list" class="container">
            <p id="app-first-char">{$first}</p>
            {if !empty($apps)}
                {foreach from = $apps item = app}
                    <form>
                        <a href="#">{$app.name}</a>
                    </form>
                {/foreach}
            {else}
                <p>No apps found. Choose another letter.</p>
            {/if}
        </div>
    </main>
</body>
</html>