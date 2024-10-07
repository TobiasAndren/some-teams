<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Some Teams</title>
    <style>
        body {
            background-color: snow;
        }

        .padding {
            padding-right: 20px;
            padding-left: 20px;
        }


        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            text-decoration: none;
            font-size: 1.2rem;
        }

        h1 {
            font-size: 40px;
        }

        nav {
            display: flex;
            gap: 10px;
        }

        h2 {
            font-size: 1.2vw;
            margin-bottom: 5px;
        }

        p {
            font-size: 36px;
        }

        main {
            align-items: center;
            display: flex;
            height: 190vh;
            justify-content: center;
            width: 100vw;
            flex-wrap: wrap;
        }

        main article {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-left: 10px;
            margin-right: 10px;
            text-align: center;
            transition: all 200ms ease;
            width: 15vw;
        }

        main article:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.1);
        }

        main p {
            color: #444;
            font-size: 1vw;
            margin-top: 5px;
        }

        main a {
            text-decoration: none;
            color: black;
        }

        main a:visited {
            color: black;
        }

        .about {
            font-size: 1.1vw;
            max-width: 50%;
        }

        .teams {
            display: block;
        }

        img {
            width: 80%;
        }
    </style>
</head>

<body>
    <header class="padding">
        <h1>Some Teams</h1>
        <nav>
            <a href="index.php">Start</a>
            <a href="about.php">About</a>
        </nav>
    </header>