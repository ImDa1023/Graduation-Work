<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Example</title>
    
<script src="{{ mix('js/app.js') }}" defer></script>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app"></div>
        <!-- <router-view/> -->
        <!-- <manu v-if="$route.name !== 'title'"></manu> -->
        <!-- <manu></manu> -->

    <!-- <div id="manu">
        <manu v-if="$route.name !== 'title'"></manu>
    </div> -->
</body>
<style>
    a{
        font-size:3rem
    }
</style>
</html>

