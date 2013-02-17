<!DOCTYPE html>
  <html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post</title>
</head>
 <body>
	 <h2><?php echo $query[0]->entry_name; ?></h2>
	 <p><?php echo $query[0]->entry_body; ?></p>
 </body>
 <body>
	 <h3>Comments</h3>
	  <?php if($comments):foreach($comments as $comment):?>	 	  
	 <p><?php echo $comment->comment_body;?></p>  
	  <span>Submitted by:<?php  echo $comment->comment_name; ?> <?php echo date('d-F-Y H:i:s',strtotime($comment->comment_date));?></span>
	   <hr/>  
	  <?php endforeach; else:?>
	  <h4>No Comments yet!</h4>
	  <?php endif;?>
 </body>
 <body>
	  <h2>Post Comment</h2>
	  <?php echo validation_errors(); ?>
	  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
	  <?php /*$this->load->view('blog/menu');*/ echo form_open('index.php/post/'.$query[0]->entry_id);?>
	  <p>Title:<br />
	  <input type="text" name="commentor" />
	  </p>
	  <p>Email:<br />
	  <input name="email"  style="resize:none;"></input>
	   </p>
	  <p>Comment:<br />
	  <textarea name="comment" rows="5" cols="50" style="resize:none;"></textarea>  
	  </p>
	  <input type="submit" value="Submit" />
	  <?php echo form_close();?>
 </body>
  </html>
