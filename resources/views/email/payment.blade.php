<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Invoice Email</title>
    </head>
    <body class="antialiased">
       <h2>Dear Customer,</h2>
       <p>Please find attached your Payment Receipt</p>
       <p>Kind regards,</p>
       <p>H&H Motors | MOT - Servicing - Repairs - Diagnostics</p>
       <p>281 Clare Street, Bethnal Green, London E2 9HD</p>
       <p>Tel: 020 7739 3342</p>
       <br>
       <p>Opening Hours: 9am to 6pm Mon - Fri and 9am to 4pm Sat    </p>
    </body>
</html>
