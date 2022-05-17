<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="./librarie/node_modules/jquery-bar-rating/themes/fontawesome-stars.less"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="./librarie/node_modules/jquery-bar-rating/"></script>
    <script type="text/javascript">
      $(function () {
        $("#example").barrating({
          theme: "fontawesome-stars",
        });
      });
    </script>
  </head>

  <body>
    <div class="br-wrapper br-theme-fontawesome-stars">
      <select id="example">
        <!-- now hidden -->
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      ...rating widget...
    </div>
  </body>
</html>
