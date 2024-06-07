<?php 
    if( have_rows('page_builder') ):
        while ( have_rows('page_builder') ) : the_row();
            if( get_row_layout() == 'columns' ):
                echo partial("_content/_columns");

            elseif( get_row_layout() == 'image_text_cta' ):
                    echo partial("_content/_image_text_cta");    

            elseif( get_row_layout() == 'featured_row' ):
                    echo partial("_content/_featured_row");  

                elseif( get_row_layout() == 'icon_row' ):
                        echo partial("_content/_icon_row");  

            elseif( get_row_layout() == 'featured_carousel' ):
                    echo partial("_content/_featured_carousel");  
                        
            elseif( get_row_layout() == 'featured_tabs' ):
                    echo partial("_content/_featured_tabs");  
                            
            elseif( get_row_layout() == 'testimonials_block' ):
                    echo partial("_content/_testimonials_block");   
                    
            elseif( get_row_layout() == 'section_faqs' ):
                    echo partial("_content/_section_faqs");  
                    
            elseif( get_row_layout() == 'section_text' ):
                    echo partial("_content/_section_text");  
                    
            elseif( get_row_layout() == 'call_out_banner' ):
                    echo partial("_content/_callout_global"); 
                        
            elseif( get_row_layout() == 'image_gallery_block' ):
                    echo partial("_content/_image_gallery_block");  
               
            elseif( get_row_layout() == 'logos_block' ):
                    echo partial("_content/_logos_block");                      
                    
            elseif( get_row_layout() == 'newsletter_block' ):
                    echo partial("_content/_newsletter_block");   
                    
            elseif( get_row_layout() == 'form_block' ):
                    echo partial("_content/_form_block");           
                        
            elseif( get_row_layout() == 'latest_posts_block' ):
                    echo partial("_content/_latest_posts_block"); 
                    
            elseif( get_row_layout() == 'timeline' ):
                echo partial("_content/_timeline"); 
                
                elseif( get_row_layout() == 'transport_row' ):
                        echo partial("_content/_transport_row");   

            endif;
        endwhile;
    endif;
?>