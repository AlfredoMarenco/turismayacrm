@extends('layouts.escritorio')
@section('content')
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div>

  <div>
    @livewire('menusidebar')
    @livewire('agregar')
  </div>
  



</div>


@endsection