<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
    <title>Algorithms</title>
</head>
<body>
    <div class="center header"><h1>Alogrithms</h1></div>
    <div class="center toolbox">
        <div>
            <button class="selector" onclick="setAlgo('sorting')">Sorting</button>
            <button class="selector" onclick="setAlgo('searching')">Searching</button>
        </div>
        <div>
            <p>Select a method from the list (input params if neccessary) and hit 'Run'</p>
        </div>
        <div class="center">
            <select style="margin-right: 5px;" name="methods" id="methods">
                <option value="quick">Quick</option>
                <option value="merge">Merge</option>
                <option value="insertion">Insertion</option>
                <option value="bubble">Bubble</option>
                <option value="selection">Selection</option>
            </select>
            <button style="margin-right: 5px;" onclick="run()">Run</button>
            <button style="margin-right: 5px;" onclick="refresh()">Refresh</button>
            <input style="width: 70px; display: none;" id="origin" name="origin" type="number" placeholder="Origin"></input>
            <input style="width: 70px; display: none;" id="target" name="target" type="number" placeholder="Target"></input>
        </div>
        <div>
            <label for="number">Number of items</label>
            <input oninput="refresh()" type="range" min="25" max="200" value="25" class="slider" id="number">
        </div>
        <div>
            <label for="speed">Speed</label>
            <input onchange="updateSpeed()" type="range" min="1" max="100" value="95" class="slider" id="speed">
        </div>
    </div>
    <div class="main">
        <div id="data" class="data"></div>
        <svg id="svg">
        </svg>
    </div>
</body>
</html>