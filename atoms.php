<?php include 'public/_inc/_header.inc.php'; ?>
<?php include 'public/_inc/_nav.inc.php'; ?>

    <main class="main">
        <section class="intro">
            <h1>Overview</h1>
            <p>This is a style guide for visual representation only.</p>
        </section>

        <section id="grid">
            <h2>Grid</h2>
            <p>The methology we're trying to accomplish here is close to that of the `grid` display property. By setting your column sizes in the row, it eliminates you from writing it several times. Thus, it's easier to maintain and a lot more modular.</p>

            <h3>12 Column Grid</h3>
            <div class="row-xs-2">
                <div class="col">
                    <p>2</p>
                </div>
                <div class="col">
                    <p>2</p>
                </div>
                <div class="col">
                    <p>2</p>
                </div>
                <div class="col">
                    <p>2</p>
                </div>
                <div class="col">
                    <p>2</p>
                </div>
                <div class="col">
                    <p>2</p>
                </div>
            </div>
            <div class="row-xs-3">
                <div class="col">
                    <p>3</p>
                </div>
                <div class="col">
                    <p>3</p>
                </div>
                <div class="col">
                    <p>3</p>
                </div>
                <div class="col">
                    <p>3</p>
                </div>
            </div>
            <div class="row-xs-4">
                <div class="col">
                    <p>4</p>
                </div>
                <div class="col">
                    <p>4</p>
                </div>
                <div class="col">
                    <p>4</p>
                </div>
            </div>
            <div class="row-xs-6">
                <div class="col">
                    <p>6</p>
                </div>
                <div class="col">
                    <p>6</p>
                </div>
            </div>
            <div class="row-xs-4-2-6">
                <div class="col">
                    <p>4</p>
                </div>
                <div class="col">
                    <p>2</p>
                </div>
                <div class="col">
                    <p>6</p>
                </div>
            </div>
        </section>
    </main>

<?php include 'pulic/_inc/_footer.inc.php'; ?>
