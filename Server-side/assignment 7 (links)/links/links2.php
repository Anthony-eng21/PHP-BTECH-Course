<?php require_once("./functions.php"); ?>
<?php $id = get_id(); ?>
<?php include("./header.php"); ?>
page id: <?php echo $id; ?>
<?php include("./footer.php"); ?>


<?php if ($id === 1) {
        echo '<h1 style="color:blue;">Welcome</h1>';
}; ?>

<?php if ($id === 2) {
        echo '<h1 style="color:blue;">My Hobbies</h1>';
} ?>

<?php if ($id === 2) {
        echo '<p style="font-size: 30px;">skateboarding and, coding</p>';
} ?>

<?php if ($id === 3) {
        echo '<h1 style="color: blue;">Che guevara</h1>';
} ?>
<?php if ($id === 3) {
        echo '<img src="./img/che.jpg" height="200px" width="200px"></img>';
} ?>

<?php if ($id === 3) {
        echo '<p>Che Guevara was a prominent communist figure in the Cuban Revolution who went on to become a guerrilla leader in South America. 
        Executed by the Bolivian army in 1967, he has since been regarded as a martyred hero by generations of leftists worldwide. Guevaras image remains a
         prevalent icon of leftist radicalism and anti-imperialism.</p>';
} ?>

<?php if ($id === 4) {
        echo '<h1 style="color: blue;">Favorite Vacation Spot</h1>';
}
if ($id === 4) {
        echo '<img src="./img/venice beach.jpg" height="500px" width="400px"></img>';
}
if ($id === 4) {
        echo '<footer>Venice Beach</footer>';
}
?>
<?php if ($id === 5) {
        echo '<h1 style="color:blue;">My Favorite Movie</h1>';
}
if ($id === 5) {
        echo '<img style="justify-content: center;" src="./img/uma looking bhad.jpg" height="300px" width="430px"></img><br/>';
}

if ($id === 5) {
        echo '<a href="https://www.imdb.com/title/tt0110912/?ref_=fn_al_tt_1"> <button>Pulp Fiction IMdb pageIMdb</button> </a>';
}
?>