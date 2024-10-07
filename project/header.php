<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Some Teams</title>
    <style>
        body {
            background-color: snow;
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

        img {
            width: 80%;
        }

        h2 {
            font-size: 1.2vw;
            margin-bottom: 5px;
        }

        main p {
            color: #444;
            font-size: 1vw;
            margin-top: 5px;
        }

        nav {
            display: flex;
            gap: 10px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-right: 40px;
            padding-left: 40px;
        }

        header a {
            text-decoration: none;
            font-size: 1.2rem;
        }

        .about {
            font-size: 1.1vw;
            max-width: 50%;
        }

        .teams {
            display: block;
        }

        main a {
            text-decoration: none;
            color: black;
        }

        main a:visited {
            color: black;
        }
    </style>
</head>

<body>
    <header>
        <h1>Some Teams</h1>
        <nav>
            <a href="index.php">Start</a>
            <a href="about.php">About</a>
        </nav>
    </header>