<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Report</title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<!-- Stylesheet
======================= -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Header -->
  <header>
  <div class="row text-center mb-2">
    <h5>{{ $title }}</h5>
  </div>
  </header>

  <!-- Main Content -->
  <main>

  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0">
		<thead class="card-header">
          <tr>
            <td class="col-2 text-center"><strong>SL</strong></td>
            <td class="col-4 text-center"><strong>Outlet</strong></td>
            <td class="col-4 text-center"><strong>Product Name</strong></td>
			<td class="col-2 text-center"><strong>QTY</strong></td>
            <td class="col-2 text-center"><strong>Price</strong></td>
          </tr>
        </thead>
          <tbody>
              @php
                    $sl = 1;
                @endphp
                @foreach ($products as $data)
                    <tr>
                        <td class="col-2 text-center">{{ $sl++ }}</td>
                        <td class="col-4 text-center">{{ $data->outlet_name }}</td>
                        <td class="col-4 text-center">{{ $data->name }}</td>
                        <td class="col-2 text-center">{{ $data->qty}}</td>
                        <td class="col-2 text-center">{{ $data->selling_price }}</td>
                    </tr>
                @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </main>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
