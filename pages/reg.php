<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <form class="registration-form" action="insert.php" method="post" enctype="multipart/form-data">
        <h2>Registration Form</h2>
        
        <label for="username">Name
        <input type="text" id="username" name="username" placeholder="Name" required>
        </label>
        
        <label for="email">Email
        <input type="email" id="email" name="email" placeholder="Email" required>
        </label>
        
        <label for="phone">Phone
        <input type="text" id="phone" name="phone" placeholder="Phone" required>
        </label>
        
        <label for="password">Password
        <input type="password" id="password" name="password" placeholder="Password" required>
        </label>
        
        <label for="designation">Designation
        <select id="designation" name="designation" required>
            <option value="">Select Designation</option>
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
            <option value="Staff">Staff</option>
        </select>
        </label>
        
        <label for="dept">Department
        <select id="dept" name="dept" required>
            <option value="">Select Department</option>
            <option value="CSE">Computer Science and Engineering</option>
            <option value="EEE">Electrical and Electronics Engineering</option>
            <option value="TE">Textile Engineering</option>
            <option value="CE">Civil Engineering</option>
            <option value="English">English</option>
            <option value="Bangla">Bangla</option>
            <option value="pharmacy">Pharmacy</option>
        </select>
        </label>
        
        <label for="photo">Photo
        <input type="file" id="photo" name="photo" required>
        </label>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>