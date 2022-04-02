<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
    }

    header{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        background-color:darkblue; 
        color: white;
        padding: 20px 0;
    }

    header nav a{
        color: white;
        margin-right: 30px;
        margin-left:30px;
        font-weight: 500;
    }

    header .sign-in-up{
        margin-right:50px;
    }
    header div.sign-in-up a button{
        background-color: DarkGray;
        font-size: 16px;
        font-weight: 550;
        padding: 4px 12px;
        border: 2px solid #000;
        border-radius: 5px;
        outline: none;
        margin-left: 20px;
    }

    .register{
        background-color: #fa9579;
    }
    header nav a:hover{
        background-color:black;
        color:white;
    }
    nav .sign-in-up a button{
        transition:transform 0.3s ease;
    } 

</style>
<header>
    <nav>
      <a href="index.php">Home</a>
      <a href="index.php">About</a>
      <a href="index.php">Contact</a>
      <a href="logout.php">Logout</a>
    </nav>
    
    <div class="sign-in-up">
        <a href="login.php"><button class="login" type='button'>LOGIN</button></a>
        <a href="signup.php"><button class="register" type='button'>SIGN UP</button></a>
    </div>
</header>