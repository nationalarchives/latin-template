
    <!-- Tutorials -->
    <div class="row">
        <?php
        include './includes/sidebar.php';
        ?>
        <div class="col-md-9">
            <div id="lesson-content-buttons" class="btn-group">
                <button class="btn-lg" data-target="content-1">Intro to Nouns</button>
                <button class="btn-lg" data-target="content-2">Word Order in Latin</button>
                <button class="btn-lg" data-target="content-3">Six cases of Nouns</button>
                <button class="btn-lg" data-target="content-4">First Declension Nouns</button>
                <button class="btn-lg" data-target="content-5">ACTIVITY</button>
            </div>
            <div class="lesson-content">
                <div id="content-1">
                    <?php
                    include './lesson-content/content-1-intro-to-nouns.php';
                    ?>
                </div>
                <div id="content-2">
                    <?php
                    include './lesson-content/content-2-word-order-in-latin.php';
                    ?>
                </div>
                <div id="content-3">
                    <?php
                    include './lesson-content/content-3-six-cases-of-nouns.php';
                    ?>
                </div>
                <div id="content-4">
                    <?php
                    include './lesson-content/content-4-first-declension-nouns.php';
                    ?>
                </div>
            </div>
        </div>
    </div>