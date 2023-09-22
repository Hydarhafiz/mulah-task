

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="styles.css"> <!-- We'll create this file in the next step -->
</head>
<body>
    <div class="title">
        <h1>Welcome to <br> LeaveSmart</h1>
    </div>
    
    <div class="log-in">
    <h2>Login Form</h2>
        <form>
            <label for="staff-id">Staff ID:</label>
            <input type="text" id="staff-id" name="staff-id" placeholder="Enter staff ID" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>


<?php


    //GET =   Data is appended to the url
    //        NOT SECURE
    //        char limit
    //        bookmark is posssible w/ values
    //        GET req can be cached
    //        Better for search page

    // POST =   Data is package insile the body of HTML
    //          MORE SECURE
    //          No data limit
    //          Cannot bookmark
    //          request are not cached
    //          Better to submit credential

?>
