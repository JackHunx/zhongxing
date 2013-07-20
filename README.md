zhongxing
=========

zhongxing project

/**
  *rerquire yii framework 1.0.1 or above
  */
  

you must do first 
*create directory named:{assets} under project dir.
*craate directory named:{upload} under project dir
**and must create upload/card  upload/avatar upload/attestation and chmod *777 for dir 
*create directory you/project./project/runtime if not create Yii will throw some error

about upload
*when use extension upload you must config the php.ini file like 
**make sure post_max_size >= upload_max_size if not something wrong the file will not upload and
  throw error "upload file max size is ..M"