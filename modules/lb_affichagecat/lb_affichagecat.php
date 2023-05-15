<?php


class lb_Affichagecat extends Module
{


	public function __construct()
	{
		$this->name = "lb_affichagecat";
		$this->displayName = 'Acceuil';
		$this->version = '1.0.0';
		$this->author = "Lucien";
		$this->description = "Afficher les catégories sur la page d\'accueil";
		$this->bootstrap = true;

		parent::__construct();
	}

	public function install()
	{

		//methode registerHook permet de greffer mon module sur un hook de presta

		if (!parent::install() || !$this->registerHook('displayHome')) {

			return false;
		}

		return true;
	}

	public function uninstall()

	{
		return parent::uninstall();
	}

	//function permettant dafficher le contenu sur le front. 
	//La function du hook s'appelle toujours hook.nomDuHook
	//autant de function hook que de registerhook
	public function hookDisplayHome()
	{

		//déclarer un objet de type Catégorie déjà hydraté
		$categorie1 = new Category(Configuration::get('LB_CATEGORY_1'), $this->context->language->id);
		$categorie2 = new Category(Configuration::get('LB_CATEGORY_2'), $this->context->language->id);
		$categorie3 = new Category(Configuration::get('LB_CATEGORY_3'), $this->context->language->id);



		//Récupère les infos de la table ps configuration  et envoie à smarty
		$this->context->smarty->assign(array(
			'lb_titre' => Configuration::get('LB_TITRE_CAT'), //clé :  nom de ma variable smarty / Sa valeur
			'categorie1' => $categorie1,
			'categorie2' => $categorie2,
			'categorie3' => $categorie3,
			'image1' => Configuration::get('LB_IMAGE_1'),
			'image2' => Configuration::get('LB_IMAGE_2'),
			'image3' => Configuration::get('LB_IMAGE_3'),
			'chemin' => _MODULE_DIR_ . $this->name . '/views/assets/img/'
		));

		//mon fichier tpl doit se trouver dans le dossier views/templates/hook
		return $this->display(__FILE__, 'home.tpl');
	}

	public function getContent()
	{

		//variable qui va contenir mes messages de confirmation ou erreur
		$output = "";





		//recupère les données
		$lb_titre = Tools::getValue('LB_TITRE_CAT');
		$category1 = Tools::getValue('LB_CATEGORY_1');
		$category2 = Tools::getValue('LB_CATEGORY_2');
		$category3 = Tools::getValue('LB_CATEGORY_3');


		$imgae1 = Tools::getValue('LB_IMAGE_1'); // recupère le name de l'image
		$imgae2 = Tools::getValue('LB_IMAGE_2');
		$imgae3 = Tools::getValue('LB_IMAGE_3');


		//enregistrement dans la table ps-configuration
		Configuration::updateValue('LB_TITRE_CAT', $lb_titre, true); //3ème paramétre me permet  d'enregistrer de l'html
		Configuration::updateValue('LB_CATEGORY_1', $category1);
		Configuration::updateValue('LB_CATEGORY_2', $category2);
		Configuration::updateValue('LB_CATEGORY_3', $category3);


		if ($imgae1 || !empty($imgae1)) {
			if (move_uploaded_file($_FILES['LB_IMAGE_1']['tmp_name'], dirname(__FILE__) . '/views/assets/img/' . $imgae1)) {
				Configuration::updateValue('LB_IMAGE_1', $imgae1);
			} else {
				$output = $this->displayError('Erreur lors du transfert');
			}
		} else {
			$output = $this->displayError('Image obligatoire');
		}

		if ($imgae2 || !empty($imgae2)) {
			if (move_uploaded_file($_FILES['LB_IMAGE_2']['tmp_name'], dirname(__FILE__) . '/views/assets/img/' . $imgae2)) {
				Configuration::updateValue('LB_IMAGE_2', $imgae2);
			} else {
				$output = $this->displayError('Erreur lors du transfert');
			}
		} else {
			$output = $this->displayError('Image obligatoire');
		}

		if ($imgae3 || !empty($imgae3)) {
			if (move_uploaded_file($_FILES['LB_IMAGE_3']['tmp_name'], dirname(__FILE__) . '/views/assets/img/' . $imgae3)) {
				Configuration::updateValue('LB_IMAGE_3', $imgae3);
			} else {
				$output = $this->displayError('Erreur lors du transfert');
			}
		} else {
			$output = $this->displayError('Image obligatoire');
		}


		//affiche un message de confirmation


		return $output . $this->displayForm();
	}

	public function displayForm()
	{

		//recupère les catégories présentes sur le site
		$categories = Category::getAllCategoriesName();
		//Tools::dieObject($categories);

		if (Configuration::get('LB_IMAGE_1')) {
			$lienimage1 = _MODULE_DIR_ . $this->name . '/views/assets/img/' . Configuration::get('LB_IMAGE_1');
		}

		if (Configuration::get('LB_IMAGE_2')) {
			$lienimage2 = _MODULE_DIR_ . $this->name . '/views/assets/img/' . Configuration::get('LB_IMAGE_2');
		}

		if (Configuration::get('LB_IMAGE_3')) {
			$lienimage3 = _MODULE_DIR_ . $this->name . '/views/assets/img/' . Configuration::get('LB_IMAGE_3');
		}




		$form_configuration['0']['form'] = [
			'legend' => [
				'title' => $this->l('Configuration')
			],
			'input' => [
				[
					'type' => 'textarea',
					'label' => $this->l('Titre de la section'),
					'name' => 'LB_TITRE_CAT',
					'autoload_rte' => true, //permet d'insérer un éditeur wysiwig
				],
				[
					'type' => 'select',
					'label' => 'Categorie 1',
					'name' => 'LB_CATEGORY_1',
					'required' => true,
					'options' => array(
						'query' => $categories,
						'id' => 'id_category',
						'name' => 'name'
					)
				],
				[
					'type' => 'file',
					'label' => 'Image pour catégorie 1',
					'name' => 'LB_IMAGE_1',
					'required' => true,
					'image' => (isset($lienimage1) && $lienimage1 ? '<img src="' . $lienimage1 . '" width="200px" height="auto">' : false)
				],
				[
					'type' => 'select',
					'label' => 'Categorie 2',
					'name' => 'LB_CATEGORY_2',
					'required' => true,
					'options' => array(
						'query' => $categories,
						'id' => 'id_category',
						'name' => 'name'
					)
				],
				[
					'type' => 'file',
					'label' => 'Image pour catégorie 2',
					'name' => 'LB_IMAGE_2',
					'required' => true,
					'image' => (isset($lienimage2) && $lienimage2 ? '<img src="' . $lienimage2 . '" width="200px" height="auto">' : false)
				],
				[
					'type' => 'select',
					'label' => 'Categorie 3',
					'name' => 'LB_CATEGORY_3',
					'required' => true,
					'options' => array(
						'query' => $categories,
						'id' => 'id_category',
						'name' => 'name'
					)
				],
				[
					'type' => 'file',
					'label' => 'Image pour catégorie 3',
					'name' => 'LB_IMAGE_3',
					'required' => true,
					'image' => (isset($lienimage3) && $lienimage3 ? '<img src="' . $lienimage3 . '" width="200px" height="auto">' : false)
				]


			],

			'submit' => [
				'title' => $this->l('Save'),
				'class' => 'btn btn-defult pull-right'
			]
		];

		$helper = new HelperForm();

		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
		$helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
		$helper->title = $this->displayName;
		$helper->submit_action = "submit_" . $this->name;

		$helper->fields_value['LB_CATEGORY_1'] = Tools::getValue('LB_CATEGORY_1', Configuration::get('LB_CATEGORY_1'));

		$helper->fields_value['LB_CATEGORY_2'] = Tools::getValue('LB_CATEGORY_2', Configuration::get('LB_CATEGORY_2'));

		$helper->fields_value['LB_CATEGORY_3'] = Tools::getValue('LB_CATEGORY_3', Configuration::get('LB_CATEGORY_3'));


		$helper->fields_value['LB_IMAGE_1'] = Tools::getValue('LB_IMAGE_1', Configuration::get('LB_IMAGE_1'));

		$helper->fields_value['LB_IMAGE_2'] = Tools::getValue('LB_IMAGE_2', Configuration::get('LB_IMAGE_2'));

		$helper->fields_value['LB_IMAGE_3'] = Tools::getValue('LB_IMAGE_3', Configuration::get('LB_IMAGE_3'));

		$helper->fields_value['LB_TITRE_CAT'] = Tools::getValue('LB_TITRE_CAT', Configuration::get('LB_TITRE_CAT'));




		return $helper->generateForm($form_configuration);
	}
}
