<?php
/**
 * Note: Template class action
 * Filename: mysql.class.php
 * Create by seaif@zealv.com
 */


class STemplate {
	private static $instance = null;
	public $force; //Force the compiler
	public $tplId; //Current template
	public $tplDir; //Template source path
	public $tplBak; //Alternate template path
	public $cplDir; //Template build path
	public $RelPath; //To be a relative path completion
	public $LangPack; //International language pack
	/**
	 * Single mode of entry
	 */
	public static function getInstance($args = array()) {
		if(self::$instance == null) {
			$className = __class__;
			self::$instance = new $className($args);
		}
		return self::$instance;
	}
	/**
	 * Constructor
	 */
	private function __construct($myCFG) {
		//Combination of external parameters
		$defCFG = array(
			'force' => false,
			'tplId' => 'zealv',
			'tplDir' => 'tpl/',
			'tplBak' => 'tpl/default/',
			'cplDir' => 'cpl/',
			'RelPath' => array('images/'),
			'LangPack' => array()
		);
		$CFG = array_merge($defCFG, array_intersect_key($myCFG, $defCFG));
		//See the number of starts within the first
		foreach($CFG as $key => $val) {
			$this->$key = $val;
		}
		$this->langName = $this->LangPack ? array_shift($this->LangPack) : 0;
		//Create build directory
		is_dir($this->cplDir) || mkdir($this->cplDir, 0777, true);
	}
	/**
	 * Loading compiled template or return to the path
	 * @param string $name Source Template Name
	 * @param string $cName Compile the template name
	 * @param array  $vars Variable table to be imported
	 */
	public function show($name, $cName = '', $vars = array()) {
		$cplFile = $this->getCFile($name, $cName, $vars);
		if($cplFile) {
			extract($GLOBALS, EXTR_SKIP);
			extract($vars, EXTR_OVERWRITE);
			include $cplFile;
			return true;
		}
		return false;
	}
	/**
	 * Returns a compiled template path
	 * @param string $name Source Template Name
	 * @param string $cName Compile the template name
	 * @param array  $vars Variable table to be imported
	 */
	public function getCFile($name, $cName = '', $vars = array()) {
		if($tplFile = $this->getTFile($name)) {
			$cName = $cName ? $cName : $name;
			$cplFile = $this->cplDir . $this->tplId . '_' . $this->langName . '_' . str_replace('/', '_', $cName) . '.php';
			if($this->force || !is_file($cplFile) || filemtime($cplFile) < filemtime($tplFile)) {
				$this->vars = $vars; //Variable table to be imported
				$content = file_get_contents($tplFile);
				$content = $this->compile($content);
				file_put_contents($cplFile, $content);
			}
			return $cplFile;
		}
		return '';
	}
	/**
	 * Return to the source template path
	 * @param string $name Source Template Name
	 */
	private function getTFile($name) {
		$tplFile = $this->tplDir . $this->tplId . '/' . $name . '.htm';
		if(!file_exists($tplFile)) {
			$tplFile = $this->tplBak . $name . '.htm';
			if(!file_exists($tplFile)) return '';
		}
		return $tplFile;
	}
	/**
	 * Compiled template content
	 * @param string $content Template Content
	 */
	private function compile($content) {
		//Import variable table
		extract($GLOBALS, EXTR_SKIP);
		extract($this->vars, EXTR_OVERWRITE);
		//Relative path completion
		$tplDir = $this->tplDir . $this->tplId . '/';
		foreach($this->RelPath as $rep) {
			if($rep = trim($rep)) {
				if(substr($rep, -1) != '/') $rep .= '/';
				$content = str_replace($rep, $tplDir . $rep, $content);
			}
		}
		//Replace Template Tags
		$content = preg_replace(
			array(
				'/<\?php.*\?>/iUs',
				'/(\{|<!--\{):(.+)(\}-->|\})/iU',
				'/(\{|<!--\{)(if|for|foreach)\s(.+)(\}-->|\})/iU',
				'/(\{|<!--\{)elseif(.+)(\}-->|\})/iU',
				'/(\{|<!--\{)else(\}-->|\})/iU',
				'/(\{|<!--\{)\/(if|for|foreach)(\}-->|\})/iU',
				'/(\{|<!--\{)php\s(.+)(\}-->|\})/iUs',
				'/(\{|<!--\{)tpl\s(.+)(\}-->|\})/iUe',
				'/(\{|<!--\{)lang\s(.+)(\}-->|\})/iUe'
			),
			array(
				'', //Ignore the original PHP code
				'<?php echo \\2; ?>', //输出
				'<?php \\2(\\3) { ?>', //Start Logic
				'<?php } elseif(\\2) { ?>', //Logic
				'<?php } else { ?>', //Logic
				'<?php } ?>', //Logical end
				'<?php \\2 ?>', //PHP code execution
				'$this->_cpl("\\2")', //Nested Templates
				'$this->_lang("\\2")' //Language Tags
			), 
			$content
		);
		//Delete blank lines and spaces of line
		$content = preg_replace('/^([\r\n])\s*/', '', $content);
		$content = preg_replace('/([\r\n])\s*/', '\\1', $content);
		return $content;
	}
	/**
	 * Handle nested templates
	 */
	private function _cpl($name) {
		if($tplFile = $this->getTFile($name)) {
			$content = file_get_contents($tplFile);
			$content = $this->compile($content);
			return "\n{$content}\n";
		}
		return $name;
	}
	/**
	 * Replace the language tag
	 */
	private function _lang($word) {
		if(array_key_exists($word, $this->LangPack)) {
			$word = $this->LangPack[$word];
		}
		return $word;
	}
}

?>