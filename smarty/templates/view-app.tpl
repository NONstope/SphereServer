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
          <li class="active"><a href="main.php?first=a">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="logic-exit.php">Exit</a></li>
        </ul>
      </div>
    </nav>

    <main>
        <div id="view-app-desc" class="container">
          <h3>Info about {$app.name}</h3>
          <p>Average mark:
              {if $mark_avg.value == NULL}
                  0
              {else}
                  {$mark_avg.value}
              {/if}
          </p>
          <p>Bugs found: {$bugs_amt.value}</p>
        </div>
        <div id="view-app-reviews" class="container">
            <p>Reviews</p>
            {foreach from = $bugs_lst item = $data}
                <form>
                    <p>User: {$data.login}</p>
                    <textarea class="view-review" readonly>{$data.value}</textarea>
                </form>
            {/foreach}
        </div>
    </main>
</body>
</html>