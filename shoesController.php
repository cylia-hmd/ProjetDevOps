<?php
namespace Devops;
use Devops\Shoes;
require_once('config.php');

class ShoesController extends Config
{
   // get all the shoes from the database
   public function index(){
    $shoe=new Shoes();
    $shoes = $shoe->all();
    $output = '';
    $no=1;
    if ($shoes) {
      foreach ($shoes as $shoe) {

        $output .= '
                
                      <div class="col-lg-3 col-sm-6 mb--40 mb-md--30">
                      <div class="airi-product">
                          <div class="product-inner">
                              <figure class="product-image">
                                  <div class="product-image--holder">
                                      <a href="#">
                                          <img src="assets/img/products/' . $shoe['img_p'] .'"
                                              alt="Product Image" class="primary-image">
                                          <img src="assets/img/products/' . $shoe['img_s'] .'"
                                              alt="Product Image" class="secondary-image">
                                      </a>
                                  </div>
                                  <div class="airi-product-action">
                                      <div class="product-action">
                                          <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                              data-bs-placement="left" title="Quick Shop">
                                              <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                  <i class="fa fa-eye"></i>
                                              </span>
                                          </a>
                                        
                                          <a class="add_wishlist action-btn" href="#"
                                              data-bs-toggle="tooltip" data-bs-placement="left"
                                              title="Add to Wishlist">
                                              <i class="fa fa-heart"></i>
                                          </a>
                                         
                                      </div>
                                  </div>
                                  <span class="product-badge new">New</span>
                              </figure>
                              <div class="product-info text-center">
                                  <h3 class="product-title">
                                      <a href="#">' . $shoe['title'] .'</a>
                                  </h3>
                              </div>
                          </div>
                      </div>
                  </div>
                    
                    ';
      }
      return $output;
    } else {
      return '<span>
               No shoes found in the database
            </span>';
    }
   }


} 

?>