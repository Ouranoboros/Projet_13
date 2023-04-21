<?php 
include 'config/database.php';
?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet13;charset=utf8','root');
if (isset($_GET["edit_post"])){
    $G_post_id = $_GET['edit_post'];
    $requete = $bdd->query("SELECT * FROM projets WHERE id = $G_post_id");
    $result = $requete->fetch(PDO::FETCH_ASSOC);
    $G_title = $result["Titre"];
    $G_subtitle = $result["Sous_titre"];
    $G_image = $result["Image"];
    $G_txtint = $result["Texte_intro"];
    $G_titlexpl = $result["Titre_expli"];
    $G_txtxpl = $result["Texte_expli"];
}
?>

<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
		<title>Admin Portfolio</title>
		<meta
			name="twitter:image"
			content="assets/img/PM.webp?h=3bbc13c1cbbb797556d3c3241f0a1116"
		/>
		<meta
			name="twitter:description"
			content="Portfolio professionnel réalisé lors du Projet 13 à Guardia Cybersecurity School avec Ludovic Fournier"
		/>
		<meta
			name="description"
			content="Portfolio professionnel réalisé lors du Projet 13 à Guardia Cybersecurity School avec Ludovic Fournier"
		/>
		<meta property="og:type" content="website" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="Pierre Moutiers" />
		<meta property="og:image" content="assets/img/PM.webp?h=3bbc13c1cbbb797556d3c3241f0a1116" />
		<link
			rel="icon"
			type="image/webp"
			sizes="500x500"
			href="assets/img/PM.webp?h=3bbc13c1cbbb797556d3c3241f0a1116"
		/>
		<link
			rel="icon"
			type="image/webp"
			sizes="500x500"
			href="assets/img/PM.webp?h=3bbc13c1cbbb797556d3c3241f0a1116"
		/>
		<link
			rel="icon"
			type="image/webp"
			sizes="500x500"
			href="assets/img/PM.webp?h=3bbc13c1cbbb797556d3c3241f0a1116"
		/>
		<link
			rel="icon"
			type="image/webp"
			sizes="500x500"
			href="assets/img/PM.webp?h=3bbc13c1cbbb797556d3c3241f0a1116"
		/>
		<link
			rel="icon"
			type="image/webp"
			sizes="500x500"
			href="assets/img/PM.webp?h=3bbc13c1cbbb797556d3c3241f0a1116"
		/>
		<link
			rel="stylesheet"
			href="assets/bootstrap/css/bootstrap.min.css?h=3f30c2c47d7d23c7a994db0c862d45a5"
		/>
		<link rel="stylesheet" href="assets/css/Roboto.css?h=a95a5d8e1f869e8587ccf5e420633bde" />
		<link
			rel="stylesheet"
			href="assets/css/Roboto%20Slab.css?h=a95a5d8e1f869e8587ccf5e420633bde"
		/>
		<link
			rel="stylesheet"
			href="assets/fonts/fontawesome-all.min.css?h=e7cfb9ec830984d637c4aed91cd725c5"
		/>
		<link
			rel="stylesheet"
			href="assets/css/animate.min.css?h=5512c3e92e3931978c9ddcc7dbeed22b"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Banner-Heading-Image-images.css?h=4f3cfa46e40e236365345fc77963f4b8"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Black-Navbar.css?h=5ba3564199f115ae77dd64b33b7a4328"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css?h=67b4d635e0d3aab77be0fbd20669ce1b"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Login-Form-blue-Gradient-Blue-gradient-login-form.css?h=1b47d915f3a52eda1fb6ddcff4ecadc1"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Login-Form-blue-Gradient.css?h=7b1f10305b1a5ef6164e956254d5e59b"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css?h=91a6735e58e9649a2c62ca9c4550fa69"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Modern-Contact-Form.css?h=e523dd2fb1cd4f1a95798f8d7f854c58"
		/>
		<link
			rel="stylesheet"
			href="assets/css/MUSA_panel-table-panel-table.css?h=c124d053647d04dc0fe778b4186be302"
		/>
		<link
			rel="stylesheet"
			href="assets/css/MUSA_panel-table.css?h=c124d053647d04dc0fe778b4186be302"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Navbar-Right-Links-icons.css?h=befd8a398792e305b7ffd4a176b5b585"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Pretty-Registration-Form-.css?h=74cbd162836abb1eda12ebcad200c88a"
		/>
		<link
			rel="stylesheet"
			href="assets/css/sticky-dark-top-nav-with-dropdown.css?h=ad455fd8268552188482a0b832fd9e9b"
		/>
		<link
			rel="stylesheet"
			href="assets/css/Team-with-rotating-cards.css?h=f53d22b660c53248ec6c03b0cf77b0f1"
		/>
	</head>
	<body style="background-color: #ebf5ee">
		<!-- Start: Navbar Centered Links -->
		<nav
			class="navbar navbar-light navbar-expand-md sticky-top py-3"
			style="background-color: #78a1bb; height: 80px"
		>
			<div class="container">
				<a
					class="navbar-brand d-flex align-items-center"
					href="https://fr.wikipedia.org/wiki/Rocher"
					target="_blank"
					><span
						class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"
						data-bss-hover-animate="rubberBand"
						style="
							background: url('assets/img/PM.webp?h=3bbc13c1cbbb797556d3c3241f0a1116');
							background-size: contain;
						"
					></span>
					<h6
						class="text-light d-flex"
						style="font-family: Roboto, sans-serif; text-align: center; font-size: 17px"
					>
						Pierre<br />Moutiers
					</h6> </a
				><button
					data-bs-toggle="collapse"
					class="navbar-toggler"
					data-bs-target="#navcol-3"
					style="background-color: #78a1bb"
				>
					<span class="visually-hidden">Toggle navigation</span
					><span class="navbar-toggler-icon"></span>
				</button>
				<div
					class="collapse navbar-collapse"
					id="navcol-3"
					style="background-color: #78a1bb; padding: 5px"
				>
					<ul class="navbar-nav mx-auto">
                        <li class="nav-item">
							<a
								class="nav-link active link-light"
								data-bss-hover-animate="pulse"
								href="http://localhost/Code/admin.php"
								style="font-size: 20px; font-family: Roboto, sans-serif"
								>Accueil</a
							>
						</li>
                        <li class="nav-item">
							<a
								class="nav-link active link-light"
								data-bss-hover-animate="pulse"
								href="#top"
								style="font-size: 20px; font-family: Roboto, sans-serif"
								>Top</a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link link-light"
								href="#bottom"
								style="font-size: 20px; font-family: Roboto, sans-serif"
								>Bottom</a
							>
						</li>
					</ul>
					<button class="btn btn-primary" type="button">
						<a
						href="http://localhost/Code/index.php"
						style="font-size: 20px; font-family: Roboto, sans-serif"
						>Déconnexion</a>
					</button>
				</div>
			</div>
		</nav>
		<!-- End: Navbar Centered Links -->

        <div class="grid_10">
    <div class="box round first grid">
        <h2>Ajouter un nouveau post</h2>
        <?php
        // Si la méthode de requête est POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Alors
        //     Récupérer la valeur de title
            $titre =($_POST['Titre']);
        
			$sous_titre =($_POST['Sous-titre']);

			$image =($_POST['image']);

			$texte_intro =($_POST['Texte_intro']);

			$titre_expli =($_POST['Titre_expli']);

			$texte_expli =($_POST['Texte_expli']);

        //     Si title est vide
                if ($titre == "" || $sous_titre == "" || $image == "" || $texte_intro == "" || $titre_expli == "" || $texte_expli == "" ) {
        //         Alors
        //             Afficher un message d'erreur
                    echo "<span class='error'> Un champ n'est pas renseigné.</span>";
        //         Sinon
                } else {
        //             Insérer le post dans la table post
                    $insert_post = $bdd->query("INSERT INTO projets(Titre, Sous_titre, Image, Texte_intro, Titre_expli, Texte_expli) VALUES ('$titre', '$sous_titre', '$image', '$texte_intro', '$titre_expli', '$texte_expli' )");
        //             Si le post est inséré
        //                 Alors
        //                     Afficher un message de succès
                    if ($insert_post) {
                        echo '<script language="Javascript">
                        document.location.replace("admin.php");
                        </script>';
                    } else {
                        echo "<span class='error'> Votre message n'a pas été envoyé.</span>";
                    }
                }
        }
        ?>

        <div class="block">
						<form class="custom-form" action="" method="post" id="add_post">
							<div class="row form-group" style="margin-bottom: 5px">
								<div class="col-sm-4 label-column">
									<label class="col-form-label" for="name-input-field"
										>Titre</label
									>
								</div>
								<div class="col-sm-6 input-column">
									<input class="form-control" type="text" id="Titre" name="Titre" value="<?php echo "$G_title"?>" />
								</div>
							</div>
							<div class="row form-group" style="margin-bottom: 5px">
								<div class="col-sm-4 label-column">
									<label class="col-form-label" for="email-input-field"
										>Sous-titre</label
									>
								</div>
								<div class="col-sm-6 input-column">
									<input class="form-control" type="text" id="Sous-titre" name="Sous-titre" value="<?php echo "$G_subtitle"?>"/>
								</div>
							</div>
							<div class="row form-group" style="margin-bottom: 5px">
								<div class="col-sm-4 label-column">
									<label class="col-form-label" for="pawssword-input-field"
										>Image</label
									>
								</div>
								<div class="col-sm-6 input-column">
								<input class="form-control" type="text" id="image" name="image" value="<?php echo "$G_image"?>"/>
								</div>
							</div>
							<div class="row form-group" style="margin-bottom: 5px">
								<div class="col-sm-4 label-column">
									<label class="col-form-label" for="repeat-pawssword-input-field"
										>Texte Intro</label
									>
								</div>
								<div class="col-sm-6 input-column">
									<textarea class="form-control"id="Texte_intro" name="Texte_intro"><?php echo "$G_txtint"?></textarea>
								</div>
							</div>
							<div class="row form-group" style="margin-bottom: 5px">
								<div class="col-sm-4 label-column">
									<label
										class="col-form-label"
										for="pawssword-input-field"
										style="text-align: left"
										>Titre explication</label
									>
								</div>
								<div class="col-sm-6 input-column">
									<input class="form-control" type="text" id="Titre_expli" name="Titre_expli" value="<?php echo "$G_titlexpl"?>"/>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-4 label-column">
									<label class="col-form-label" for="repeat-pawssword-input-field"
										>Texte explication</label
									>
								</div>
								<div class="col-sm-6 input-column">
									<textarea class="form-control" id="Texte_expli" name="Texte_expli"><?php echo "$G_txtxpl"?></textarea>
								</div>
								<div class="col-sm-6 input-column">
									<button class="btn btn-primary" type="submit" name="submit">Envoyer</button>
								</div>
							</div>
						</form>
        </div>
    </div>
</div>

		<div>
			<!-- Start: Footer Clean -->
			<footer
				class="text-center py-4"
				style="
					background-color: #78a1bb;
					position: fixed;
					right: 0;
					bottom: 0;
					left: 0;
					z-index: 1030;
				"
			>
				<div class="container">
					<div class="row row-cols-1 row-cols-lg-3">
						<div class="col">
							<p
								class="text-light my-2"
								style="
									font-family: Roboto, sans-serif;
									font-size: 20px;
									color: var(--bs-black);
								"
							>
								<a
									class="link-light"
									target="_blank"
									style="font-size: 20px; font-family: Roboto, sans-serif"
									>Copyright © 2023 PM</a
								>
							</p>
						</div>
						<div class="col"></div>
						<div class="col">
							<ul class="list-inline my-2">
								<li class="list-inline-item">
									<a
										class="link-light"
										href="https://fr.wikipedia.org/wiki/Politique_de_confidentialit%C3%A9"
										target="_blank"
										style="font-size: 20px; font-family: Roboto, sans-serif"
										>Privacy Policy</a
									>
								</li>
								<li class="list-inline-item">
									<a
										class="link-light"
										href="https://youtu.be/xvFZjo5PgG0"
										target="_blank"
										style="font-size: 20px; font-family: Roboto, sans-serif"
										>Terms of Use</a
									>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- End: Footer Clean -->
		</div>

		<script src="assets/bootstrap/js/bootstrap.min.js?h=79ff9637b74326c362fb6f7f5801a7ba"></script>
		<script src="assets/js/bs-init.js?h=ec5d4df3c798a2943b2ecbac76ebfde0"></script>
		<script src="assets/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter-tablesortermain.js?h=0b5112c06ff3094624f33df374e70be1"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js?h=06c93bc70611575b0c0ad4e1a835f53c"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>