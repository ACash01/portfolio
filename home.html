<?php
include_once "./includes/head.php";
?>

<body>
    <link rel="stylesheet" href="./css/indexStyles.css">
    <?php
    include_once "./includes/nav.php";
    ?>
    <section id="intro">
        <div class="container absolute flex justify-center align-center gap-3">
            <img src="./imgs/MePic.png" alt="Pic Of Me" class="w-1/2">
            <div class="flex flex-col justify-center h-full">
                <h3>Hello!</h3>
                <p>I am a full-stack developer, with experience in both the front and back end of websites.</p>
            </div>
        </div>
        <div id="tiles"></div>
    </section>

    <div class="sectDiv break1"></div>
    
    <section id="selfDesc" class="flex flex-col justify-evenly gap-4">
        <h2 class="text-center">My Qualities as a Web Developer</h2>
        <div class="grid grid-cols-2 gap-2 j-i-center">
            <p class="text-md">Team Player</p>
            <p class="text-md">Problem Solver</p>
            <p class="text-md">Logical Thinker</p>
            <p class="text-md">Creative Designer</p>
        </div>
    </section>
    
    <div class="sectDiv break2"></div>
    
    <section id="projects" class="grid gap-3">
        <h2 class="col-span-2">My Best Projects</h2>
        <div class="projectW col-span-2 row-span-2 w-full h-full relative">
            <div class="absolute proj-shadow flex justify-center align-center w-full h-full">
                <p class="text-center">City Of Good</p>
            </div>
            <img src="./imgs/aakashrajrai-665Q-portfolio-1-1.jpg" alt="Work 1" class="w-full h-full">
        </div>
        <div class="projectH row-span-4 w-full h-full relative">
            <div class="absolute proj-shadow flex justify-center align-center w-full h-full">
                <p class="text-center">Heartland Innovation Challenge</p>
            </div>
            <img src="./imgs/aakashrajrai-665Q-portfolio-2-1.jpg" alt="Work 2" class="w-full h-full">
        </div>
        <div class="projectH row-span-4 w-full relative">
            <div class="absolute proj-shadow flex justify-center align-center w-full h-full">
                <p class="text-center">Cake Of Fun</p>
            </div>
            <img src="./imgs/aakashrajrai-665Q-portfolio-3-3.png" alt="Work 3" class="w-full h-full">
        </div>
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
    let screenSize = window.innerWidth

    let toggled = false

    const handleOnClick = index => {
        toggled = !toggled

        let containers = document.querySelectorAll('.container')
        containers.forEach(container => {
            container.classList.toggle('toggled')
        });

        if (screenSize < 600) {
            anime({
                targets: ".tile",
                opacity: toggled ? 0 : 1,
                delay: anime.stagger(75, {
                    grid: [columns, rows],
                    from: index
                })
            })
        } else if (screenSize < 1024) {
            anime({
                targets: ".tile",
                opacity: toggled ? 0 : 1,
                delay: anime.stagger(75, {
                    grid: [columns, rows],
                    from: index
                })
            })
        } else if (screenSize < 1440) {
            anime({
                targets: ".tile",
                opacity: toggled ? 0 : 1,
                delay: anime.stagger(25, {
                    grid: [columns, rows],
                    from: index
                })
            })
        } else if (screenSize < 1920) {
            anime({
                targets: ".tile",
                opacity: toggled ? 0 : 1,
                delay: anime.stagger(15, {
                    grid: [columns, rows],
                    from: index
                })
            })
        } else {
            anime({
                targets: ".tile",
                opacity: toggled ? 0 : 1,
                delay: anime.stagger(25, {
                    grid: [columns, rows],
                    from: index
                })
            })
        }
            
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
        screenSize = window.innerWidth

        if (screenSize < 600) {
            columns = Math.floor(document.body.clientWidth / 40)
            rows = Math.floor(document.body.clientWidth / 55)
        } else if (screenSize < 1024) {
            columns = Math.floor(document.body.clientWidth / 50)
            rows = Math.floor(document.body.clientWidth / 100)
        } else if (screenSize < 1440) {
            columns = Math.floor(document.body.clientWidth / 100)
            rows = Math.floor(document.body.clientWidth / 145)
        } else if (screenSize < 1920) {
            columns = Math.floor(document.body.clientWidth / 40)
            rows = Math.floor(document.body.clientWidth / 55)
        } else {
            columns = Math.floor(document.body.clientWidth / 40)
            rows = Math.floor(document.body.clientWidth / 55)
        }


        wrapper.style.setProperty("--columns", columns)
        wrapper.style.setProperty("--rows", rows)
        
        createTiles(columns * rows)
    }

    createGrid()

    window.onresize = () => createGrid()
</script>
