<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        function load_files() {
            $.ajax({
                dataType: 'json',
                url: 'get_images.php',
                success: function (response) {
                    console.log("The response is", response);
                    for (var i = 0; i < 7; i++) {
                        var image_container = $('<img>').css('width', '25%');
                        var image = $(image_container).attr({
                            src: response.files[i]
                        });
                        $('.container').append(image);
                    }
                    $('img').click(function () {
                        $('.modal-body').empty();
                        $("#myModal").modal();
                        var imgSource = $(this).attr('src');
                        var fullSizeImg = $('<img>').attr('src', imgSource).css('width', '100%');
                        $('.modal-body').append(fullSizeImg);
                    });
                }

            });

        }


    </script>
</head>
<body>
<div class="container">
    <h2>Feature Set 2</h2>
    <!-- Trigger the modal with a button -->
    <button onclick="load_files()" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
        Open Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>

</body>
</html>

