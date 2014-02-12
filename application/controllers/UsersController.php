<?php

class UsersController extends Controller 
{
     public function actionListing()
	{
            $model = new Users();
            $data = array(
                    'listing' => $model->listing()
            );
            $this->render('listing',$data);
	}
        
     public function actionEdit()
	{
            $this->render('Edit');
	}
     public function actionView()
	{
            $this->render('View');
	}
     public function actionDelete()
	{
            $this->render('Delete');
	}
}

