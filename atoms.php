<?php include 'public/_inc/_header.inc.php'; ?>
<?php include 'public/_inc/_nav.inc.php'; ?>

    <main class="main col-xs-12 col-sm-10 offset-sm-2 col-md-11 offset-md-1">
        <section class="intro">
            <h1 class="leading">COMPONENTS</h1>
            <p>These are all the individual components a website usually uses.</p>
        </section>

        <section id="grid">
            <h2 class="leading">Grid</h2>
            <p>Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.</p>

            <h3>12 Column Grid</h3>
            <?php include 'public/_inc/atoms/_grid.inc.php'; ?>

            <div class="source-code">
                <a class="btn btn-secondary" href="#">View Source</a>
                <pre class="prettyprint lang-html linenums"><?php echo htmlspecialchars(file_get_contents('public/_inc/atoms/_grid.inc.php')); ?></pre>
            </div>
        </section>

        <section id="buttons">
            <h2 class="leading">Buttons</h2>
            <?php include 'public/_inc/atoms/_buttons.inc.php'; ?>
            <div class="source-code">
                <a class="btn btn-secondary" href="#">View Source</a>
                <pre class="prettyprint lang-html linenums"><?php echo htmlspecialchars(file_get_contents('public/_inc/atoms/_buttons.inc.php')); ?></pre>
            </div>
        </section>

        <section id="forms">
            <h2 class="leading">Forms</h2>
            <?php include 'public/_inc/atoms/_forms.inc.php'; ?>
            <div class="source-code">
                <a class="btn btn-secondary" href="#">View Source</a>
                <pre class="prettyprint lang-html linenums"><?php echo htmlspecialchars(file_get_contents('public/_inc/atoms/_forms.inc.php')); ?></pre>
            </div>
        </section>

    </main>

<?php include 'public/_inc/_footer.inc.php'; ?>
