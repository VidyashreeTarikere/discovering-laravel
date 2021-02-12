<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="home.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<title>HomePage</title>
<style>
    * {
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }

    body {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        background: #2c3e50;
    }

    nav {
        background: #0082e6;
        height: 80px;
        width: 100%;
    }

    label.logo {
        color: white;
        font-size: 35px;
        line-height: 80px;
        padding: 0 100px;
        font-weight: bold;
    }

    nav ul {
        float: right;
        margin-right: 20px;
    }

    nav ul li {
        display: inline-block;
        line-height: 80px;
        margin: 0 5px;
    }

    nav ul li a {
        color: white;
        font-size: 17px;
        text-transform: uppercase;
        padding: 7px 13px;
        border-radius: 3px;
    }

    footer {
        color: white;
        background: #0082e6;
        display: flex;
        justify-content: center;
        margin-top: 1100px;
        padding: 10px;
    }

    active,
    a:hover {
        background: #1b9bff;
        transition: 0.5s;
    }

    .checkbtn {
        font-size: 30px;
        color: white;
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }

    #check {
        display: none;
    }

    h1 {
        color: white;
        background: #0082e6;
        display: flex;
        justify-content: center;
        margin-top: 5px;


    }

    .txtb {
        color: white;

        display: block;
        justify-content: center;
        margin-top: 5px;



    }

    @media(max-width:952px) {
        label.logo {
            font-size: 30px;
            padding-left: 50px;
        }

        nav ul li a {
            font-size: 16px;
        }
    }

    @media(max-width:858px) {
        .checkbtn {
            display: block;
        }
    }
</style>