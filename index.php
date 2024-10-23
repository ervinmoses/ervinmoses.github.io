<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HAUS</title>
</head>

<body>
    <div class="header">
        <div class="menu">
            <p><i class="fa-sharp fa-solid fa-bars"></i></p>
            <h1>HA<span>US</span></h1>
        </div>
        <div class="center">
            <a href=#>Home</a>
            <a href=#>Abous us</a>
        </div>
        <div class="register">
            <p>Didn't have an account? </p>
            <a href=#>Register</a>
            <div class="login"><a href=#>Login</a></div>
        </div>
    </div>
</body>
<style>
*{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    font-family: 'Open Sans' , sans-serif;
}
body{
    height: 100vh;
    width: 100%;
    background-color: lightgrey;
}
.header{
    height: 10vh;
    width: 100%;
    background-color: grey;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.menu{
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.menu i{
    height: 25px;
    width: 25px;
    font-size: 25px;
    color: white;
    margin-right: 10px;
}
.menu h1{
    color: white;
}
.menu span{
    color: red;
}
.center{
    width: 16vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.center a{
    color: white;
    font-size: 20px;
    text-decoration: none;
    transition: transform .2s;
}
.center a:hover{
    color: black;
}
.register{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.register p{
    color: white;
    font-size: 16px;
    margin-left: 5px;
}
.register a{
    color: skyblue;
    text-decoration: none;
    font-size: 16px;
    margin-left: 5px;
    transition: transform .2s;
}
.register a:hover{
    transform: scale(1.1);
    text-decoration: underline;
}
.login{
    height: 3rem;
    width: 7rem;
    background-color: red;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5rem;
    border: 4px solid white;
    margin-left: 20px;
    transition: transform .4s;
}
.login a{
    color: white;
    text-decoration: none;
    font-size: 20px;
}
.login:hover{
    transform: scale(0.9);
    text-decoration: none;
}
</style>

</html>