<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create note</title>
</head>
<body>
    <h1>Create note</h1>
    <form action="/note/store" method="note">
        <label for="title">Title:</label>
        <input type="text" name="title" id="">

        <label for="content">Content:</label>
        <textarea name="content" id="content"></textarea>

        <input type="submit" value="create">
    </form>
</body>
</html>