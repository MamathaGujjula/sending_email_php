<html>
    <head>
        <title> Sending Email</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" > 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script> 
    </head>
    <body>
        <div class="container" style="margin-left:400px;">
        <div class="col-md-6">
            <h3>Sending Email </h3>

            <?php if($error=$this->session->flashdata('msg')){?>
                <p style="color:green;"><strong>success</strong><?php echo $error;?></p>
           <?php } ?>

            <form method="post" action="<?=base_url()?>.send_mail_ctrl/send">
                <div class="mb-3">
                    <label class="form-label">To:</label>
                    <input type="email" class="form-control" id="to"  name="from">
                </div>
                <div class="mb-3">
                    <label  class="form-label">message:</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <div class="button">
                    <button  class="btn btn-primary" name="sendmail">Send</button>
                </div>
            </form>
        </div>
        </div>
    </body>
</html>
