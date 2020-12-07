<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Example</title>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    <div id="app">
        <div id="nav">
          <router-link to="/">Home</router-link>
          <router-link to="/test">Test</router-link>
          <router-link to="/list">List</router-link>
        </div>
        <router-view/>
    </div>

<script src="{{ mix('js/app.js') }}"></script> 
</body>
</html>