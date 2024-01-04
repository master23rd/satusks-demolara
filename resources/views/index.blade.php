<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Document</title>
    <style>
        h2 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 50px;
        }

        body {
            background: #fff;
        }

        .section {
            background: #fff;
        }

        .pdf-btn {
            margin-bottom: 30px;
        }

    </style>
</head>
<body>
    @include("generated_pdf")
    <div class="text-center pdf-btn">
        <button class="btn btn-dark download-pdf">Submit Scorecard</button>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".download-pdf").click(() => {
            let data = 'testing';
            $.ajax({
                type: 'GET'
                , url: "{{route('generated_pdf')}}"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , data
                }
                , xhrFields: {
                    responseType: 'blob'
                }
                , success: function(response) {
                    let blob = new Blob([response]);
                    let link = document.createElemenet('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = "scorecard.pdf";
                    link.click();
                }
                , error: function(blob) {
                    console.log(blob);
                }

            })
        })

    </script>
</body>
</html>
