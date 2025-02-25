<?php
include_once "./includes/head.php";
?>

<body>
    <link rel="stylesheet" href="./css/indexStyles.css">
    <?php
    include_once "./includes/nav.php";
    ?>
    <section id="about" class="flex align-center gap-3">
        <img src="./imgs/MePic.png" alt="Pic Of Me" class="w-1/2">
        <div class="flex flex-col justify-around h-full">
            <h3>Hello!</h3>
            <p>I am a full-stack developer, with experience in both the front and back end of websites.</p>
        </div>
    </section>
    <section id="projects"></section>
    <section id="skills"></section>
    <section id="thanks">
        <div id="tiles"></div>
    </section>
    <?php
    include_once "./includes/footer.php"
    ?>
</body>
</html>

<script src="./js/anime.min.js"></script>
<script>
    const wrapper = document.getElementById("tiles")
    let columns = 0
    let rows = 0

    let toggled = false

    const handleOnClick = index => {
        toggled = !toggled

        anime({
            targets: ".tile",
            opacity: toggled ? 0 : 1,
            delay: anime.stagger(100, {
                grid: [columns, rows],
                from: index
            })
        })
    }

    const createTile = index => {
        const tile = document.createElement("div")

        tile.classList.add('tile')

        tile.onclick = e => handleOnClick(index)

        return tile
    }

    const createTiles = quantity => {
        Array.from(Array(quantity)).map((tile,index) => {
            wrapper.appendChild(createTile(index))
        })
    }

    const createGrid = () => {
        wrapper.innerHTML = ""

        columns = Math.floor(document.body.clientWidth / 55)
        rows = Math.floor(document.body.clientHeight / 100)

        wrapper.style.setProperty("--columns", columns)
        wrapper.style.setProperty("--rows", rows)
        
        createTiles(columns * rows)
    }

    createGrid()

    window.onresize = () => createGrid()
</script>