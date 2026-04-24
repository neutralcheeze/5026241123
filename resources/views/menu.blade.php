<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h1>Menu Page</h1>
  <p>Button to wrap u into page.</p>
  <a href="{{ route('grid.index')}}" class="btn btn-primary">Grid</a>
  <a href="{{ route('intro.index')}}" class="btn btn-secondary">Intro</a>
  <a href="{{ route('news.index')}}" class="btn btn-success">News</a>
  <a href="{{ route('responsive.index')}}" class="btn btn-info">Responsive</a>
  <a href="{{ route('template.index')}}" class="btn btn-warning">Template</a>
  <a href="{{ route('tooltip.index')}}" class="btn btn-danger">Tooltip</a>
</div>

</body>
</html>
