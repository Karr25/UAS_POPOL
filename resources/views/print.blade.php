<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/assets/admin/login/purple_login/images/icon_logo.png">
    <link rel="stylesheet" href="style.css">
    <title>Klinik 1/2 Sehat</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <div class="rounded-3 text-center" style="border: thin solid; width: 400px; margin: 20px auto">
        <img src="/assets/admin/login/purple_login/images/klinik_logo.png" alt="" style="width: 200px;">
        <h1 class="fw-bold">Klinik 1/2 Sehat</h1>
        <h2>{{ $antrian->poli->nama_poli }}</h2>

        <div class="text-center d-flex justify-content-center rounded-3" style="border: thin solid; width : 300px; padding: 10px 5px; margin: 20px auto; flex-direction: column">
            <h2 class="display-1 text-primary fw-bold" style="margin: 0; font-family: 'Poppins', sans-serif">{{ $antrian->no_antrian }}</h3>
            <h5 style="margin: 0">{{ $antrian->pasien->nama }}</h5>
        </div>
        
        <div style=" width : 300px; padding: 5px; margin: 20px auto">
            <p>{{ $antrian->created_at }}</p>
        </div>  
    </div>

	<script>
		window.print();
	</script>
</body>
</html>