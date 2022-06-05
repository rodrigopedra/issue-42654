<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<pre></pre>
<script>
$.ajax({
    type: 'GET',
    url: '/api/test',
    dataType: 'json',
    success: function (response) {
        $('pre').text(JSON.stringify(response, null, ' '));
    },
    error: function (a, e) {
        console.log(e);
    }
});
</script>
</body>
</html>
