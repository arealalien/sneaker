<!DOCTYPE html>
<html lang="no">
<head>
    <?php $rootPath = "" ?>
    <!-- Meta Tags -->
    <?php require "structure/head/meta.php" ?>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Areal Alien">
    <!-- ======= -->
    <!-- General -->
    <title>Sneaker</title>
    <?php require "structure/head/icons.php" ?>
    <!-- ===== -->
    <!-- Fonts -->
    <?php require "structure/head/fonts.php" ?>
    <!-- ======= -->
    <!-- Scripts -->
    <?php require "structure/head/scripts.php" ?>
    <!-- =========== -->
    <!-- Stylesheets -->
    <?php require "structure/head/stylesheets.php" ?>
</head>
<body>
    <main>
        <!-- #Texts -->
        <section class="sect flexbox-col">
            <h1>Heading 1</h1>
            <h1 class="bebas">Heading 1 - Bebas</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
            <p>Paragraph</p>
        </section>
        <!-- #Links -->
        <section class="sect flexbox-col">
            <div>
                <a>Link</a>
            </div>
            <div>
                <a href="https://www.google.com" target="_blank">Visited Link</a>
            </div>
        </section>
        <!-- #Lists -->
        <section class="sect flexbox-col">
            <ul>
                <li>Un-ordered list Item 1</li>
                <li>Un-ordered list Item 2</li>
                <li>Un-ordered list Item 3</li>
            </ul>
            <ol>
                <li>Ordered list Item 1</li>
                <li>Ordered list Item 2</li>
                <li>Ordered list Item 3</li>
            </ol>
        </section>
        <!-- #Buttons -->
        <section class="sect flexbox-col">
            <button>Button</button>
        </section>
        <!-- #Forms -->
        <section class="sect flexbox-col">
            <form>
                <!-- Fieldset -->
                <fieldset>
                    <input type="text" aria-label="">
                </fieldset>
                <!-- Fieldset -->
                <fieldset>
                    <input id="inputWithName" type="text" aria-label="">
                    <label for="inputWithName">Label for input</label>
                </fieldset>
                <!-- Fieldset -->
                <fieldset>
                    <input type="text" aria-label="">
                </fieldset>
                <!-- Fieldset -->
                <fieldset>
                    <textarea aria-label=""></textarea>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>