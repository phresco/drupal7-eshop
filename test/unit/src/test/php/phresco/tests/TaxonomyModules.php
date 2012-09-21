<?php
/*	

Author by {phresco} QA Automation Team	

*/

require 'tests/Taxonomy.php';


class TaxonomyModules extends PHPUnit_Framework_TestSuite {
	protected $backupGlobals = FALSE;

	protected function setUp() {
	}

	public static function suite()
	{
		$testSuite = new TaxonomyModules('TaxonomyModules');
		$testSuite->addTest(new Taxonomy("testCountTaxonomy"));
		$testSuite->addTest(new Taxonomy("testSampleDrupal"));
		
		return $testSuite;
	}
	protected function tearDown() {
	}

} 
?>