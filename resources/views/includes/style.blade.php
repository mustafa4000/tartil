<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('/node_modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/node_modules/summernote/dist/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/components.css') }}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

{{-- w3css --}}
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    /* Float four columns side by side */
    .column {
      float: left;
      width: 25%;
      padding: 0 10px;
    }
    
    /* Remove extra left and right margins, due to padding */
    .row {margin: 0 -5px;}
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
      }
    }
    
    /* Style the counter cards */
    .card {
      /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
      padding: 16px;
      text-align: left;
      background-color: #f  ff;
    }


    /* Playing */
    #playing {
      background: #F6F6F6;
      height: 80px;
      position: fixed;
      bottom: 0px;
      right: 0;
      left: 0;
      z-index: 9999999999;
      width: 100%;
    }
  </style>
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}