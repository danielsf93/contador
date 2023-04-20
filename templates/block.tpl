<div class="pkp_block block_contador">


  
  
    <div class="contador">
    <p>Olá <span>{$loggedInUsername}</span>!</p>
    <p>Revista: <span>{$siteTitle}</span></p>    




    
        Quantidade de acessos: {$currentJournal->getViews()} <br>
        Quantidade de artigos: {$issue->getNumArticles()} <br><br>
        Quantidade de edições: {$issues} <br>
        
        Quantidade de artigos: {$articles} <br>
        Quantidade de downloads: {$downloads} <br>
        

      aqui:{$currentJournal->getRemoteUrl()}<br>
      ali:oi

        <br><p>Quantidade de artigos publicados: <span>{$publishedArticles|@count}</span></p>



        </div>    
        </div>
