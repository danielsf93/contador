<?php
import('lib.pkp.classes.plugins.BlockPlugin');


class contador extends BlockPlugin {
	
	public function register($category, $path, $mainContextId = NULL) {

    $success = parent::register($category, $path);

		if ($success && $this->getEnabled()) {

    }

		return $success;
	}

	public function getDisplayName() {
		return __('contador');
	}

	public function getDescription() {
		return __('contador de ...');
	}

  public function isSitePlugin() {
    return true;
  }






  public function getContents($templateMgr, $request = null) {
    
	$journalDao = DAORegistry::getDAO('JournalDAO');
    $metricsDao = DAORegistry::getDAO('MetricsDAO');
    $issueDao = DAORegistry::getDAO('IssueDAO');
    $submissionDao = DAORegistry::getDAO('SubmissionDAO');

   
	
	//Issues - Edições
	$issues = 0;
    $controlador = 1;
    for($controler = 1; ;){
      $controlador = $issueDao->getById($controler);
      if($controlador == NULL)
      {
        break;
      }
      else
      {
        $issues++;
      }
      $controler++;
    }
	
	//Articles 
	//$articles = 777777;

	$articles = 0;
    $controlador_A = 1;
    for($controler = 1; ;){
      $controlador_A = $submissionDao->getById($controler);
      if($controlador_A == NULL)
      {
        break;
      }
      else
      {
        $articles++; 
      }
      $controler++;
    }

	





	//Downloads
	$downloads = 999999;

	//Acess
	$acess = 88888888;
   
    $templateMgr->assign('issues', $issues);
    $templateMgr->assign('articles', $articles);
    $templateMgr->assign('downloads', $downloads);
    $templateMgr->assign('acess', $acess);
    return parent::getContents($templateMgr, $request);
  }




  
}
