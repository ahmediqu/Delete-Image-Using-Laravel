<?php
	$posts=Post::findOrFail($id);
         
         
        unlink($posts->images);
        $posts->delete();
        Session::flash('success','POST Deleted Successfully');
        return redirect('/dashboard/posts');
?>