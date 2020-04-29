
<?php


function getFeatureImageUrl($var = null){

      if ($var != null) {
          
           return asset('admin/image/'.$var. '');
      }else{
          return asset('admin/image');
      }

}

function getFeatureImagePath($var = null){
  
      if ($var != null) {
          return public_path('admin/image/'. $var. ''); 

      }else{
          return public_path('admin/image');
      }

}




function getPostStatusList(){

    $list=[
             'Published'   => 'Published',
             'unPublished' => 'unPublished', 
             'Pending'     => 'Pending',
             'Draft'   => 'Draft'
             
          ];

          return $list;

}



function getCommentStatusList(){

       $list=[
            'Pending'   => 'Pending',
           'unApproved'=> 'unApproved',
           'Approved'  => 'Approved'
        
           

       ];

       return $list;

}




function getUserId(){
    return Auth::user()->id;
}






?>