<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script>
        //declare variables in JS
        var id;
        var title;
        var details;
        function ajax() {
            $.ajax({
                method: 'POST',
                datatype: 'JSON',
                data: {
                    id: id.val(),
                    title: title.val(),
                    details: details.val()
                },
                url: 'index_insert.php',
                success: function (result) {
                    console.log('AJAX CALLED WITH', result);
                    document.write(result);
                }
            });

        }

        $(document).ready(function () {
            title = $('.title');
            details = $('.details');
            id = $('.id');
            $('button').click(ajax);
        })

    </script>
</head>
<body>
<form>
    <input type="text" name="title" placeholder="Title" class="title">
    <br>
    <input type="text" name="details" placeholder="Details" class="details">
    <br>
    <input type="text" name="id" placeholder="ID" class="id">
    <br>
    <button type="submit">Submit</button>
    <!--    <input type="submit" value="SEND">-->
</form>
</body>
</html>