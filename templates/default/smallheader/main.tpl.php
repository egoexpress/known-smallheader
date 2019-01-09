<?php
if (\Idno\Core\Idno::site()->session()->isLoggedIn()) {
?>

<a href="#maincontent" style="display:none">Skip to main content</a>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
	            data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" tabindex="1"
               href="<?= \Idno\Core\Idno::site()->config()->getDisplayURL() ?>"><?=
                 $this->draw('shell/toolbar/title')?>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">

            <?php
                echo $this->draw('shell/toolbar/search');
                echo $this->draw('shell/toolbar/content');
            ?>

            <ul class="nav navbar-nav navbar-right">
                <?php
                    echo $this->draw('shell/toolbar/links');
                    echo $this->draw('shell/toolbar/logged-in');
                ?>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php
} else {
?>

<style>
    .navbar-fixed-top {
        display: flex;
        justify-content: space-between;
    }
    .navbar-fixed-top a {
        display: inline-block;
        padding: 1em;
    }
</style>

<!-- alternate header when not logged in -->
<nav class="navbar-fixed-top">

    <a href="/" style="color: #000000" title="Go to main page">
        <i class="fas fa-desktop"></i>
    </a>
    <a href="/session/login" style="color: #000000" title="Login to site">
        <i class="fas fa-sign-in-alt"></i>
    </a>
</nav>

<?php
}
?>
