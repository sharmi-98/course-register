<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Course Enrollment Form</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg,#a8edea,#fed6e3);
    margin: 0;
    padding: 0;
}

.container {
    max-width: 500px;
    margin: 50px auto;
    background-color: #fff;
    padding: 35px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.input-group input:focus {
    outline: none;
    border-color: #6cb2eb;
}

.btn {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #4caf50;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover {
    background-color: #45a049;
}
</style>
</head>
<body>

<div class="container">
    <h2>Course Enrollment Form</h2>
    <form action="welcome.html" method="post">
        <div class="input-group">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
        </div>
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required>
        </div>
        <div class="input-group">
            <label for="course">Select Course:</label>
            <select id="course" name="course" required>
                <option value="">--Select Course--</option>
                <option value="web">Web Development</option>
                <option value="data">Data Science</option>
                <option value="design">Graphic Design</option>
            </select>
        </div>
        <button type="submit" class="btn">Enroll Now</button>
    </form>
</div>

</body>
</html>
