<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Home</title>
</head>

<body>
    <h1>This is admin Homepage and of {{$name }}</h1>
    <h2>Create a new job</h2>
    <form action="/">


        <label for="Job ID">Job Id </label>
        <input type="number">
        <label for="Job title">Job title </label>
        <input type="text">
        <label for="Job salary">Job Salary </label>
        <input type="number">
        <button type="submit" > Add a Job</button>
    </form>  

</body>

</html>