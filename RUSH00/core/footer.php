<footer>
	<center>
		<div class="tab-foot">
			<h4>La bière</h4>
			<div class="text">
				<p>La bière est une boisson alcoolisée obtenue par fermentation d'un moût préparé à partir de matières premières amylacées (orge, maïs, riz, banane, manioc) et d'eau potable. Le moût est un jus sucré obtenu à l'issue d'une étape importante de la fabrication de la bière, le brassage, terme à l'origine des vocables brasseur et brasserie.

				Plus spécifiquement de nos jours, elle est généralement produite à partir d’eau, de malt (céréale germée, principalement de l'orge, parfois additionné d'autres céréales) et depuis le Moyen Âge, de houblon qui apporte le parfum et l'amertume nécessaires à chaque bière, et agit comme conservateur naturel.</p>
			</div>
		</div>

		<div class="tab-foot">
			<h4>Boisson spiritueuse</h4>
			<div class="text">
				<p>Une boisson spiritueuse est une boisson alcoolisée obtenue par distillation, suivie éventuellement d'une macération ou d'une infusion de matières premières agricoles. Ces procédés de fabrication distinguent les spiritueux des boissons alcoolisées produites par fermentation (bière, vin, cidre).

				Les boissons spiritueuses se divisent en deux grandes familles :

				les boissons spiritueuses « simples », plus couramment appelées eaux-de-vie, dont le goût provient directement du processus de distillation (cognac, vodka, rhum, whisky, tequila, etc.) ;
				les boissons spiritueuses « composées », dont le goût est issu de substances végétales, sucre ou arômes, ajoutées à un alcool neutre ou à une eau-de-vie (liqueurs, anisés, etc.).
				Certaines sont vieillies en fût. Elles se consomment seules ou en mélange (cocktails).</p>
			</div>
		</div>

		<div class="tab-foot">
			<h4>Nous contacter</h4>
			<div class="text">
				<ul>
					<li>42 42 42 42 42</li>
					<li>qwerty@gmail.com</li>
				</ul>
			</div>
		</div>

		<div class="tab-foot">
			<h4>Compte</h4>
			<div class="text">
				<?php
				if(isset($_SESSION['loggued_on_user']) && $_SESSION['loggued_on_user'] != "")
				{
					echo "<a href=\"user.php\">Parametres du compte</a>";
				}
				?>
			</div>
		</div>
	</center>
</footer>