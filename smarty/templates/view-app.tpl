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
            <form action="remove-app.php" method="post">
                <h3>Info about {$app.name}</h3>
                {if !$admin}
                    <input type="hidden" name="appid" value="{$app.id}">
                    <input type="submit" value="Exclude from statistics" />
                {/if}
            </form>
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
            <h3>Reviews</h3>
            {if !empty($bugs_lst)}
                {foreach from = $bugs_lst item = $data}
                    <form action="remove-review.php" method="post">
                        <input type="hidden" name="review" value="{$data.user_id}+{$data.app_id}">
                        <p>
                            <strong>
                                <em>User: {$data.login}</em>
                            </strong>
                            {if !$admin}
                            <input type="submit" value="Remove" />
                            {/if}
                        </p>
                        <p class="view-review" readonly>{$data.value}</p>
                    </form>
                {/foreach}
            {else}<p>No reviews found</p>
            {/if}
        </div>
    </main>
</body>
</html>