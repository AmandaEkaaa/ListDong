 <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            if($page == 'home') {include "Page/home.php";}
            else if($page == 'view') { include "Page/view.php"; }
            else if ($page == 'boomark') { include "Page/boomark.php"; }
            else if ($page == 'detail') { include "Page/detail.php"; }
    
            else if ($page == 'testing') { include "Page/testing.php"; }
    
            
        
 ?>