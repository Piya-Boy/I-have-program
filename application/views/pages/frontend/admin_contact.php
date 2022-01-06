<div class="container-fluid p-5">
    <div class="row card-rounded shadow">
		<div class="col-md-12">
        	 <div class="row ">
                <div class="col-md-12">
                    <div class="p-3">
                        <p><b>Date:</b>  <?php echo date('d-M-Y', strtotime($contact['date'])); ?></p>
                       <p><b>Name:</b>  <?php echo $contact['name']; ?></p>
                       <p><b>Email:</b>  <?php echo $contact['e-mails']; ?></p>
                       <p><b>Time:</b>  <?php echo date('H:i ', strtotime($contact['date'])); ?></p>
                       <p><b>Message:</b>  <?php echo $contact['messages']; ?></p>
                       <p><b>Link:</b>  <?php echo $contact['link']; ?></p>
                    </div>
        	    </div>
             </div>
        </div>
    </div>
</div>