<?php

class MenuComponent extends Component{

	public function getCatMenu(){
		$Category = ClassRegistry::init('Category');
		$cat_menu_tree = $Category->find('threaded');
		$cat_menu = $this->_catMenuHtml($cat_menu_tree);
		
		return $cat_menu;
	}

	protected function _catMenuHtml($cat_menu_tree = false){
		if(!$cat_menu_tree) return false;
		$html = '';
		foreach ($cat_menu_tree as $item) {
			$html .= $this->_catMenuTemplate($item);
		}
		return $html;
	}

	protected function _catMenuTemplate($category){
		ob_start();
		include APP . "View/Elements/sidebar.ctp";
		return ob_get_clean();
	}
}