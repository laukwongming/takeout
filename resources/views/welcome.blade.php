<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <h1>hello world</h1>

        @can('edit_forum')
            <a href="#">Edit the Forum</a>
        @endcan

        @can('manage_money')
            <a href="#">Manage money</a>
        @endcan
    </body>
</html>
