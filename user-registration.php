<form action="users.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Enter Name" id="name" /> <br> <br>

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Enter Email" id="email" /> <br> <br>

    <label for="phone">Phone:</label>
    <input type="number" placeholder="Enter phone number" id="phone" name="phone"><br><br>

    <label for="password">Password:</label>
    <input type="password" placeholder="Enter password" id="password" name="password"><br><br>

    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" placeholder="Confirm Password" id="confirmPassword" name="confirmPassword"><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="male"><label for="">Male:</label>
    <input type="radio" name="gender" value="female"><label for="">Female:</label><br><br>

    <label for="">Country:</label>-
    <select name="country" id="">
        <option value="">Select a Country</option>
        <option value="Nepal" selected>Nepal</option>
        <option value="India">India</option>
        <option value="USA">USA-</option>
    </select><br><br>-

    <input type="submit" value="Submit" />
    <input type="reset" value="Clear" />

</form>