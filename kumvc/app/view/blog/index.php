<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3>Kompetensi Keahlian</h3>
                <?php foreach ($data['blog'] as $blog) : ?>
                    <ul>
                        <li><?= $blog['kkl']; ?></li>
                        <p><?= $blog['des']; ?></p>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

<style>
    li {
        font-weight: 700;
    }

    *   {
        box-sizing: border-box;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        float: left;
        width: 33.33%;
        padding: 10px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    h5 {
        font-weight: 700;
    }

    table {
        width: 100%;
        border: 1px solid;
    }
</style>