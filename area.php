<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Textarea</title>
    <style>
        .styled-textarea {
            width: 100%; /* Adjust the width as needed */
            height: 150px; /* Adjust the height as needed */
            background-color: #f0f8ff; /* Light blue background */
            border: 2px solid #4682b4; /* Steel blue border */
            border-radius: 5px; /* Rounded corners */
            padding: 10px; /* Inner space */
            font-family: Arial, sans-serif; /* Font style */
            font-size: 16px; /* Font size */
            color: #333; /* Text color */
            resize: none; /* Disable resizing */
        }
    </style>
</head>
<body>
    <form>
        <label for="comment">Comment:</label>
        <textarea id="comment" class="styled-textarea" name="comment" placeholder="Enter your comment here..."></textarea>
    </form>
</body>
</html>
