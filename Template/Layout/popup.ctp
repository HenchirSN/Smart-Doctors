
<body>
<div class="custombox-modal custombox-modal-flash" style="transition-duration: 500ms; z-index: 10003;"><div id="custom-modal" class="modal-demo" style="display: block; width: auto;">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>×</span><span class="sr-only">Close</span>
            </button>
              <?= $this->fetch('content'); ?>
             
            </div>
        </div></div>

 <?= $this->element('admin/js'); ?></body>        


