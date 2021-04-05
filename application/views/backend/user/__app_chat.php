<div class="chat-panel messagerie_chat" style="display: none;">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>  
            <span class="user-name">Discution instantanée</span> 
            <button type="button" class="btn btn-icon close_chat_message" aria-label="Close"><span aria-hidden="true" data-target="title" title="Fermer chat">×</span></button>
        </div>
        <div class="card-body">
            <div class="widget-chat-activity flex-1">
                <div class="messages afficher_messages_chat">
                    
                    
                </div>
            </div>
        </div>
        <form class="card-footer my_chat_form" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-end">
                <textarea class="border-0 flex-1 Message_text" rows="1" name="Message_text" placeholder="Quoi de news?"></textarea>

                <div class="affichier">
                  <a href="javascript:void(0);" class="btn btn-link affichier">
                    <i class="fa fa-video-camera"></i>
                  </a>
                </div>
                <div class="form-group reponse" style="display: none;">
                     <input type="file" name="user_image" class="form-control user_image" />
                </div>

                <input type="hiden" name="id_recever" id="id_recever" class="id_recever" style="display: none;">
                <input type="hiden" name="id_user" id="id_user" class="id_user" value="<?= $this->session->userdata('id') ?>" style="display: none;">
                
                <button type="submit" class="btn btn-icon"><i class="ik ik-arrow-right text-success"></i></button>
            </div>
        </form>
    </div>
</div>