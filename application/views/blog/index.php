<!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Blog</title>
  </head>
 
<body>
  <h2>Blog's Preview</h2>
  <?php /*$this->load->view('blog/menu');*/if($query):foreach($query as $post):?>
  <h4><?php  echo anchor('index.php/post/'.$post->entry_id,$post->entry_name); ?> </h4>
  <?php echo $post->entry_body;?><br /><br />
  <span>Posted:<?php echo date('d-F-Y',strtotime($post->entry_date));?> Comments:<?php echo $this->blog_model->total_comments($post->entry_id);?></span>
  <!--<?php echo  anchor('index.php/post/'.$post->entry_id, 'view'); ?> --->
  <!-- <?php echo  anchor('index.php/post/'.$post->entry_id, 'view'); ?> --> 
  <?php endforeach; else:?>
  <h4>No entry yet!</h4>
  <?php endif;?>
  </body>
  </html>

