<?php

class ProductsController extends Controller 
{
     public function actionListing()
	{
            $model = new Products();
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