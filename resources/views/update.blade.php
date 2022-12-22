<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <title>Create Blog</title>
</head>
<body>

    @foreach($blogs as $blog)
<div class="flex flex-box text-center border-3 bg-color-blue ">
    <form action="{{ url('/update',$blog->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="">Title</label><br>
        <input type="text" name="title" value="{{ $blog->title }}" id="title"><br>
        <label for="">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="2"> {{  $blog->description  }}</textarea><br>

        <br>
        <img src="/blog/{{ $blog->image }}" alt="">
        <label for="">Image: </label><br>
        <input type="file" name="image" id="image"><br>
        <button type="submit" onclick="return confirm('Are you sure you want to update this blog?')" class="btn btn-primary">Submit</button>

    </form>
</div>
@endforeach


</body>
</html>
