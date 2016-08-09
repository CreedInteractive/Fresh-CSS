<?php include 'public/_inc/_header.inc.php'; ?>
<?php include 'public/_inc/_nav.inc.php'; ?>

    <main class="main col-xs-12 col-sm-10 offset-sm-2 col-md-11 offset-md-1">
        <div class="branding">
            <h1>Brand Guidelines</h1>
            <p>Client brand guidelines for colors, fonts, etc.</p>

            <section id="colors">
                <h2>Primary Colors</h2>
                <?php include 'public/_inc/brand/_color-scheme.inc.php'; ?>
            </section>

            <section id="typography">
                <h2>Typography</h2>
                <?php include 'public/_inc/brand/_font-stacks.inc.php'; ?>
                <div class="source-code">
                    <a class="btn btn-secondary" href="#">View Source</a>
                    <pre class="prettyprint lang-html linenums"><?php echo htmlspecialchars(file_get_contents('public/_inc/brand/_font-stacks.inc.php')); ?></pre>
                </div>
            </section>

            <section id="headings">
                <h2>Headings</h2>
                <?php include 'public/_inc/brand/_headings.inc.php'; ?>
                <div class="source-code">
                    <a class="btn btn-secondary" href="#">View Source</a>
                    <pre class="prettyprint lang-html linenums"><?php echo htmlspecialchars(file_get_contents('public/_inc/brand/_headings.inc.php')); ?></pre>
                </div>
            </section>

            <section id="paragraphs">
                <h2>Paragraphs</h2>
                <?php include 'public/_inc/brand/_paragraphs.inc.php'; ?>
                <div class="source-code">
                    <a class="btn btn-secondary" href="#">View Source</a>
                    <pre class="prettyprint lang-html linenums"><?php echo htmlspecialchars(file_get_contents('public/_inc/brand/_paragraphs.inc.php')); ?></pre>
                </div>
            </section>

            <section id="lists">
                <h2>Lists</h2>
                <?php include 'public/_inc/brand/_lists.inc.php'; ?>
                <div class="source-code">
                    <a class="btn btn-secondary" href="#">View Source</a>
                    <pre class="prettyprint lang-html linenums"><?php echo htmlspecialchars(file_get_contents('public/_inc/brand/_lists.inc.php')); ?></pre>
                </div>
            </section>

        </div>
    </main>

<?php include 'public/_inc/_footer.inc.php'; ?>
